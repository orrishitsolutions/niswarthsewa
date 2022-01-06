<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ProductController extends CI_Controller {
	public $refer;
	public function __construct(){
		parent::__construct();
		$this->ci = & get_instance();
		$this->ci->load->model('Auth/AdminModel','auth');
		$this->load->library('form_validation');
		$this->load->helper('security');
		$this->load->library('user_agent');
		$this->_loggedOrNot();
		$this->_sessionUpdate();
		$this->refer =  $this->agent->referrer();
    }

    // end profile 
	private function _sessionUpdate(){
		$data =  $this->ci->auth->getUserDetails();
		$this->session->set_userdata($data);
	}
	private function _loggedOrNot(){
		$logged = $this->session->userdata();
		if(!empty($logged['isLogged'])){
			if($logged['isLogged'] != true){
				redirect(base_url());
			}
		}else{
			redirect(base_url());
		}
		
    }
    //Add Category 
    public function add_category()
    {
        $this->load->view('admin/add-category');
    }
    public function update_add_categories()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('c_name', 'Categories name', 'required|max_length[70]');
        $c_name =$this->security->xss_clean($this->input->POST('c_name'));
        if($this->form_validation->run() == FALSE)
		{			
			$errors =[
				'c_name' => form_error('c_name'),
			];
			$this->session->set_flashdata($errors);
			redirect(base_url('admin/add-category'));
			exit();			
        }
        else
        {
            if($_FILES['cat_images']['name']){
                    $config['upload_path'] = './uploads/category-image/';
                    $config['allowed_types']        = 'jpg|png|jpeg|svg';
						$config['max_size']             = 1024;
						$config['detect_mime']          = TRUE;
						$config['encrypt_name']         = TRUE;
						$config['remove_spaces']        = TRUE;
						$config['max_filename']         = 0;
						$this->load->library('upload', $config);
                    //$this->load->library('upload', $config);
                    
                    if(!$this->upload->do_upload('cat_images')){
                        $this->upload->display_errors();
                        redirect(base_url('admin/add-category'));
                    }
                    else{
                        $pro_upd_img =[
                            'c_name' => $c_name,
                            'c_image' => $this->upload->data()['file_name'],
                        ];
                        $this->db->insert('categories',$pro_upd_img);
                        $this->session->set_flashdata(['status'=>'Save Category']);
                        redirect(base_url('admin/add-category'));           
                    }
                }
                else{
                $pro_upd_img =[
                    'c_name' => $c_name,
                ];
                $this->db->insert('categories',$pro_upd_img);
                $this->session->set_flashdata(['status'=>'Save Category']);
                redirect(base_url('admin/add-category'));
                }
        }    
    }
    //End of Add Category 
    // Start Edit Category
    public function Cetegory_edit()
    {
        $id = $this->uri->segment(3);
        if($id!==''){
            $category_edit =$this->ci->auth->categoriesedit($id);
            $this->load->view('admin/category-edit',compact('category_edit'));
        }
        else{           
            redirect(base_url('admin/show-category'));
        }       
    }
    public function update_edit_categories()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('c_name', 'Categories name', 'required|max_length[70]');
        $this->form_validation->set_rules('id_cat','Categories Id','trim|required|xss_clean|max_length[10]|numeric');
       
        $id_cat=$this->security->xss_clean($this->input->POST('id_cat'));
        $c_name =$this->security->xss_clean($this->input->POST('c_name'));
        if($this->form_validation->run() == FALSE)
		{			
			$errors =[
				'c_name' => form_error('c_name'),
				'id_cat' => form_error('id_cat'),
            ];
			$this->session->set_flashdata($errors);
			redirect(base_url('admin/category-edit/'.$id_cat));
			exit();			
        }
        else
        {
            if($_FILES['cat_images']['name']){
                    $config['upload_path'] = './uploads/category-image/';
                    $config['allowed_types']        = 'jpg|png|jpeg|svg';
						$config['max_size']             = 1024;
						$config['detect_mime']          = TRUE;
						$config['encrypt_name']         = TRUE;
						$config['remove_spaces']        = TRUE;
						$config['max_filename']         = 0;
						$this->load->library('upload', $config);
                    //$this->load->library('upload', $config);
                    
                    if(!$this->upload->do_upload('cat_images')){
                        $this->upload->display_errors();
                        redirect(base_url('admin/category-edit/'.$id_cat));
                    }
                    else{
                        $pro_upd_img =[
                            'c_name' => $c_name,
                            'c_image' => $this->upload->data()['file_name'],
                        ];
                        $img = $this->_recordChecker($id_cat,'categories');
                        if($img->image && file_exists('uploads/category-image/'.$img->image)){
                            unlink("uploads/category-image/".$img->image);
                          }
            
                        $this->db->where('id',$id_cat)->set($pro_upd_img)->update('categories');
                        redirect(base_url('admin/category-edit/'.$id_cat));           
                    }
            }
            else{
                $pro_upd_img =[
                    'c_name' => $c_name,
                ];
                $this->db->where('id',$id_cat)->set($pro_upd_img)->update('categories');
                        redirect(base_url('admin/category-edit/'.$id_cat));
            }
        }
    }   
    // End Of Edit Category

    //Delect Category 
	public function update_delect_categories()
	{
        $cat_id_del = $this->uri->segment(4);
        if($cat_id_del=="")
        {
           redirect(base_url('admin/show-category'));
        }
        else
        {
            $img = $this->_recordChecker($cat_id_del,'categories');
            if($img->image && file_exists('uploads/category-image/'.$img->image)){
                unlink("uploads/category-image/".$img->image);
            }
            $this->_recordDelect($cat_id_del,'categories');
            redirect(base_url('admin/show-category'));
            
        }
    }
    // End of Delect Category 
    //Stats Updates
        public function update_Home_categories()
        {
            $cat_id_Home = $this->uri->segment(4);
            if($cat_id_Home!=="")
            {
                $status = $this->_recordChecker($cat_id_Home,'categories');
                if($status->status==1)
                {
                    $this->db->where('id',$cat_id_Home)->set('c_status','0')->update('categories');
                    redirect(base_url('admin/show-category'));
                }
                else
                {
                    $this->db->where('id',$cat_id_Home)->set('c_status','1')->update('categories');
                    redirect(base_url('admin/show-category'));
                }
            }
            else
            {
                redirect(base_url('admin/show-category'));
            }
        }
    //End Of Stats Update 
    //Select Category
    public function show_category()
    {
        $category_select = $this->_categoriesList();
        $this->load->view('admin/show-category',compact('category_select'));  
    }

    
    // Delect 
    public function product_delect()
    {
        if($_GET['q']){
        $ck_pro = $this->_recordChecker($_GET['q'],'tbl_product');
        if($ck_pro!=="")
        {
            $this->_recordDelect($_GET['q'],'tbl_product');
            delete_files("assets/img/categori/".$ck_pro->pro_image."");
            $this->session->set_flashdata(['status'=>'Delete Successful !!!!']);
            redirect(base_url('show-product'));
        }}else{
            
            redirect(base_url('show-product'));
            $this->session->set_flashdata(['status'=>'Internet Error']);
            
        }
    }
    // End of Detect Category
    //////////////////////////// ProductSection /////////////////////////////////////////////////
    public function add_product()
    {
        $category_select = $this->_categoriesList();
        $this->load->view('admin/add-product',compact('category_select'));
    }
    public function add_submit_Product()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('p_name', 'Product name', 'required|max_length[70]');
        $this->form_validation->set_rules('id_cat','Categories Id','trim|required|xss_clean|max_length[10]|numeric');
        $this->form_validation->set_rules('price','Product price','trim|required|xss_clean|max_length[10]|numeric');
        $this->form_validation->set_rules('off_price','Product Offer','trim|xss_clean|max_length[10]|numeric');

        if($this->form_validation->run() == FALSE)
		{			
			$errors =[
				'p_name' => form_error('p_name'),
                'id_cat' => form_error('id_cat'),
                'price' => form_error('price'),
                'off_price' => form_error('off_price'),
            ];
			$this->session->set_flashdata($errors);
			redirect(base_url('admin/add-product'));
			exit();			
        }
        else
        {
            $id_cat=$this->security->xss_clean($this->input->POST('id_cat'));
            $p_name =$this->security->xss_clean($this->input->POST('p_name'));
            $price =$this->security->xss_clean($this->input->POST('price'));
            $off_price =$this->security->xss_clean($this->input->POST('off_price'));
                if($_FILES['pro_images']['name']){
                    $config['upload_path'] = './uploads/product-image/';
                    $config['allowed_types']        = 'jpg|png|jpeg|svg';
                        $config['max_size']             = 1024;
                        $config['detect_mime']          = TRUE;
                        $config['encrypt_name']         = TRUE;
                        $config['remove_spaces']        = TRUE;
                        $config['max_filename']         = 0;
                        $this->load->library('upload', $config);
                    //$this->load->library('upload', $config);
                    
                    if(!$this->upload->do_upload('pro_images')){
                        $this->upload->display_errors();
                        redirect(base_url('admin/add-product'));
                    }
                    else{
                        $add_array =[
                            'cat_id'=>$id_cat,
                            'name' => $p_name,
                            'price' =>$price,
                            'off_price' =>$off_price,
                            'image' => $this->upload->data()['file_name'],
                        ];
                        $this->db->insert('product',$add_array);
                        $this->session->set_flashdata(['status'=>'Save product']);
                        redirect(base_url('admin/add-product'));           
                    }
                }
                else
                {
                    $add_array =[
                        'cat_id'=>$id_cat,
                        'name' => $p_name,
                        'price' =>$price,
                        'off_price' =>$off_price,
                    ];
                    $this->db->insert('product',$add_array);
                    $this->session->set_flashdata(['status'=>'Save Product']);
                    redirect(base_url('admin/add-product'));
                }
        }
    }
    //End Of Add Product
    // Edit of Product
    public function product_edit()
    {
       $id = $this->uri->segment(3);
       if($id!==''){
        $pro_data = $this->_recordChecker($id,'product');
        $category_select = $this->_categoriesList();
        $data = [
            'pro_data'=>$pro_data,
            'category_select'=>$category_select
        ];
        $this->load->view('admin/product-edit',compact('data'));    
        }
        else{           
            redirect(base_url('admin/show-product'));
        } 
    } 
    
    //End Edit Product 
    public function edit_submit_Product()
    {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('pro_id','Product Id','trim|required|xss_clean|max_length[10]|numeric');
            $this->form_validation->set_rules('p_name', 'Product name', 'required|max_length[70]');
            $this->form_validation->set_rules('id_cat','Categories Id','trim|required|xss_clean|max_length[10]|numeric');
            $this->form_validation->set_rules('price','Product price','trim|required|xss_clean|max_length[10]|numeric');
            $this->form_validation->set_rules('off_price','Product Offer','trim|xss_clean|max_length[10]|numeric');
            
            $pro_id=$this->security->xss_clean($this->input->POST('pro_id'));
            if($this->form_validation->run() == FALSE)
            {			
                $errors =[
                    'p_name' => form_error('p_name'),
                    'id_cat' => form_error('id_cat'),
                    'price' => form_error('price'),
                    'off_price' => form_error('off_price'),
                ];
                $this->session->set_flashdata($errors);
                redirect(base_url('admin/product-edit/'.$pro_id));
                exit();			
            }
            else
            {
                // echo "<pre>";
                // print_r($_FILES);
                // print_r($_POST);
                // die();                
                $id_cat=$this->security->xss_clean($this->input->POST('id_cat'));
                $p_name =$this->security->xss_clean($this->input->POST('p_name'));
                $price =$this->security->xss_clean($this->input->POST('price'));
                $off_price =$this->security->xss_clean($this->input->POST('off_price'));
                if($_FILES['pro_images']['name']){
                    $config['upload_path'] = './uploads/product-image/';
                    $config['allowed_types']        = 'jpg|png|jpeg|svg';
                        $config['max_size']             = 1024;
                        $config['detect_mime']          = TRUE;
                        $config['encrypt_name']         = TRUE;
                        $config['remove_spaces']        = TRUE;
                        $config['max_filename']         = 0;
                        $this->load->library('upload', $config);
                    //$this->load->library('upload', $config);
                    
                    if(!$this->upload->do_upload('pro_images')){
                        $this->upload->display_errors();
                        redirect(base_url('admin/add-product'));
                    }
                    else{
                        $add_array =[
                            'cat_id'=>$id_cat,
                            'name' => $p_name,
                            'price' =>$price,
                            'off_price' =>$off_price,
                            'image' => $this->upload->data()['file_name'],
                        ];
                        $img = $this->_recordChecker($pro_id,'product');
                        if($img->image && file_exists('uploads/product-image/'.$img->image)){
                            unlink("uploads/product-image/".$img->image);
                          }
            
                        $this->db->where('id',$pro_id)->set($add_array)->update('product');
                        $this->session->set_flashdata(['status'=>'Update  product']);
                        redirect(base_url('admin/product-edit/'.$pro_id));   
                    }
                }
                else
                {
                    $add_array =[
                        'cat_id'=>$id_cat,
                        'name' => $p_name,
                        'price' =>$price,
                        'off_price' =>$off_price,
                    ];
                    $this->db->where('id',$pro_id)->set($add_array)->update('product');
                    $this->session->set_flashdata(['status'=>'Update  product']);
                    redirect(base_url('admin/product-edit/'.$pro_id));
                }
            }    
    }
    //Delect Product 
    public function update_delect_product()
    {
        $pro_del = $this->uri->segment(4);
        if($pro_del=="")
        {
           redirect(base_url('admin/show-product'));
        }
        else
        {
            $img = $this->_recordChecker($pro_del,'product');
            if($img->image && file_exists('uploads/Product-image/'.$img->image)){
                unlink("uploads/product-image/".$img->image);
            }
            $this->_recordDelect($pro_del,'product');
            redirect(base_url('admin/show-product'));
            
        }
    }
    // End Of  Delect Product 
    // Home status
    public function update_Home_product()
    {
        $pro_id_Home = $this->uri->segment(4);
            if($pro_id_Home!=="")
            {
                $status = $this->_recordChecker($pro_id_Home,'product');
                if($status->status==1)
                {
                    $this->db->where('id',$pro_id_Home)->set('status','0')->update('product');
                    redirect(base_url('admin/show-product'));
                }
                else
                {
                    $this->db->where('id',$pro_id_Home)->set('status','1')->update('product');
                    redirect(base_url('admin/show-product'));
                }
            }
            else
            {
                redirect(base_url('admin/show-product'));
            }
    }
    // End Of Home status
   // Select Product
    public function show_product()
    {
        $data_product = $this->_ProductList();
        $this->load->view('admin/show-product',compact('data_product'));       
    }
    private function _ProductList(){
        return $this->db->from('product')
							->order_by('product.id','desc')
							->join('categories','product.cat_id=categories.id','left')
							->get()->result_array();

    }
   
    /////////////////////////////////////////////////////////////////////////////
    private function _categoriesList(){
        return $this->db->from('categories')->order_by('id','desc')->get()->result_array();
    }
    protected function _recordChecker($id,$table){
        return $this->db->where('id',$id)->from($table)->get()->row();
    }

    protected function _recordDelect($id,$table){
        return $this->db->where('id',$id)->from($table)->delete();
    }
}