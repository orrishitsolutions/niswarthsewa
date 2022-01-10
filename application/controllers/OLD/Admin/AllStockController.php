<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AllStockController extends CI_Controller {
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

 	public function all_stock()
    {
        $product_select = $this->_ProductList2();
        $this->load->view('admin-orrish/all-stock',compact('product_select'));      
    }
    private function _ProductList2(){
        return $this->db->from('tbl_product')
				->Select('tbl_category.c_name,tbl_car_style.s_name,tbl_product.*')
				->order_by('tbl_product.id','desc')
        		->join('tbl_category','tbl_product.cat_id=tbl_category.id','left')
				->join('tbl_car_style','tbl_product.style_id=tbl_car_style.id','left')
				->get()->result_array();
								}



    //Add Category 
    public function view_stock()
    {
    	
    	
    	$category_select = $this->_categoriesList();
    	$carstyle_select = $this->_carstyleList();    	
        $this->load->view('admin-orrish/add-stock',compact('category_select','carstyle_select'));
    }
    public function Edit()
    {
    	$pro_id = $this->uri->segment(4);
    	$product_list = $this->_recordChecker($pro_id,'tbl_product');
    	$category_select = $this->_categoriesList();
    	$carstyle_select = $this->_carstyleList(); 
    	$this->load->view('admin-orrish/add-stock',compact('category_select','carstyle_select','product_list'));
    }
    //View Edit pages

   	//---------------Add Stock--------------------------
   	public function Add_stock()
    {
    	  $brandname =$this->security->xss_clean($this->input->POST('brandname'));
          $stylename =$this->security->xss_clean($this->input->POST('stylename'));
          $name =$this->security->xss_clean($this->input->POST('name'));
          $Price =$this->security->xss_clean($this->input->POST('price'));
          $model =$this->security->xss_clean($this->input->POST('model'));          
          $location =$this->security->xss_clean($this->input->POST('location'));
          $view =$this->security->xss_clean($this->input->POST('view'));
          $driven =$this->security->xss_clean($this->input->POST('driven'));
          $fuel =$this->security->xss_clean($this->input->POST('fuel'));
          $seller =$this->security->xss_clean($this->input->POST('seller'));
          $transmission =$this->security->xss_clean($this->input->POST('transmission'));
          $owner =$this->security->xss_clean($this->input->POST('owner'));
          $status =$this->input->POST('status');
          $description =$this->input->POST('description');
          $features =$this->input->POST('features');
          $meta_title =$this->security->xss_clean($this->input->POST('meta_title'));
          $meta_description =$this->input->POST('meta_description');
          $meta_keywords =$this->input->POST('meta_keywords');
          $sco_Keyword =$this->input->POST('sco_Keyword');

         $this->load->library('form_validation');
         $this->form_validation->set_rules('brandname', 'Brand Name', 'required');
         $this->form_validation->set_rules('stylename', 'Style Name', 'required');
         $this->form_validation->set_rules('price', 'Price', 'required');
         $this->form_validation->set_rules('name', 'Car name', 'required'); 
          if($this->form_validation->run() == false)
          {
          	$msg = [
          		'error' => true,
          		'success' => false,
          		'brandname' => form_error('brandname'),
          		'stylename' => form_error('stylename'),          		
          		'name' => form_error('name'),
          		'price' => form_error('price'),
				'message' => 'Oops! please check form carefully.',
				'color' => 'warning',
				'type' => 'Warning! ',

          		
          	];
          	echo json_encode($msg);
  		    }else{
				    date_default_timezone_set("Asia/Kolkata");
					$config['upload_path'] = 'assets-orrish/storage/product';
				    $config['allowed_types']        = 'jpg|png|jpeg|svg';
					$config['max_size']             = 1024;
					$config['detect_mime']          = TRUE;
					$config['encrypt_name']         = TRUE;
					$config['remove_spaces']        = TRUE;
					$config['max_filename']         = 0;
					$this->load->library('upload', $config);
					$this->upload->do_upload('file');
					 	$data = array(
					    		 'file' => $this->upload->data(), 
					              );
					    $file=$data['file']['file_name']; 
					    $data = array(
					                'style_id' => $stylename,
					                'cat_id' => $brandname,
					                'name' => $name,
					                'status' =>$status,
					                'price'=>$Price,
					                'view'=>$view,
					                'model'=>$model,
					                'location'=>$location,
					                'fuel'=>$fuel,
					                'driven'=>$driven,
					                'seller'=>$seller,
					                'transmission'=>$transmission,
					                'owner'=>$owner,
									'p_file'=>$file,
									'description'=>$description,
									'features'=>$features,
									'meta_title' =>$meta_title,
									'meta_description' =>$meta_description,
									'meta_keywords' =>$meta_keywords,
									'sco_Keyword' =>$sco_Keyword,
									'created_at' => date("Y-m-d H:i:s")
					                );
					        $this->db->insert('tbl_product',$data);
				            echo json_encode([
				            	'error' => false,
				            	'success' => true,
				            	'message' => 'Hurray! stock has been added successfully!',
				            	'color' => 'success',
				            	'name' => 'Success! ',
				            ]);
	   }	
    }
    public function UpdateData()
    {		    
    	  
         
          $this->load->library('form_validation');
          $this->form_validation->set_rules('brandname', 'Brand Name', 'required');
          $this->form_validation->set_rules('stylename', 'Style Name', 'required');
          $this->form_validation->set_rules('price', 'Price', 'required');
          $this->form_validation->set_rules('name', 'Car name', 'required'); 

          $brandname =$this->security->xss_clean($this->input->POST('brandname'));
          $stylename =$this->security->xss_clean($this->input->POST('stylename'));
          $name =$this->security->xss_clean($this->input->POST('name'));
          $Price =$this->security->xss_clean($this->input->POST('price'));
          $model =$this->security->xss_clean($this->input->POST('model'));          
          $location =$this->security->xss_clean($this->input->POST('location'));
          $view =$this->security->xss_clean($this->input->POST('view'));
          $driven =$this->security->xss_clean($this->input->POST('driven'));
          $fuel =$this->security->xss_clean($this->input->POST('fuel'));
          $seller =$this->security->xss_clean($this->input->POST('seller'));
          $transmission =$this->security->xss_clean($this->input->POST('transmission'));
          $owner =$this->security->xss_clean($this->input->POST('owner'));
          $status =$this->input->POST('status');

          $description =$this->input->POST('description');
          $features =$this->input->POST('features');

          $meta_title =$this->security->xss_clean($this->input->POST('meta_title'));
          $meta_description =$this->input->POST('meta_description');
          $meta_keywords =$this->input->POST('meta_keywords');
          $sco_Keyword =$this->input->POST('sco_Keyword');
          $pro_id =$this->input->POST('pro_id');
          
          if($this->form_validation->run() == false)
          {
          	$msg = [
          		'error' => true,
          		'success' => false,
          		'brandname' => form_error('brandname'),
          		'stylename' => form_error('stylename'),          		
          		'name' => form_error('name'),
          		'price' => form_error('price'),
				'message' => 'Oops! please check form carefully.',
				'color' => 'warning',
				'type' => 'Warning! ',

          		
          	];
          	echo json_encode($msg);
  		    }else{
  		    	if($_FILES['file']['name']){
  		    		date_default_timezone_set("Asia/Kolkata");
					$config['upload_path'] = 'assets-orrish/storage/product';
				    $config['allowed_types']        = 'jpg|png|jpeg|svg';
					$config['max_size']             = 1024;
					$config['detect_mime']          = TRUE;
					$config['encrypt_name']         = TRUE;
					$config['remove_spaces']        = TRUE;
					$config['max_filename']         = 0;
					$this->load->library('upload', $config);
					$this->upload->do_upload('file');
					 	$data = array(
					    		 'file' => $this->upload->data(), 
					              );
					    $file=$data['file']['file_name']; 
					    $data = array(
					                'style_id' => $stylename,
					                'cat_id' => $brandname,
					                'name' => $name,
					                'status' =>$status,
					                'price'=>$Price,
					                'model'=>$model,
					                'location'=>$location,
					                'fuel'=>$fuel,
					                'view'=>$view,
					                'driven'=>$driven,
					                'seller'=>$seller,
					                'transmission'=>$transmission,
					                'owner'=>$owner,
									'p_file'=>$file,
									'description'=>$description,
									'features'=>$features,
									'meta_title' =>$meta_title,
									'meta_description' =>$meta_description,
									'meta_keywords' =>$meta_keywords,
									'sco_Keyword' =>$sco_Keyword,
									'created_at' => date("Y-m-d H:i:s")
					                );
					    $img = $this->_recordChecker($pro_id,'tbl_product');
                        if($img->p_file && file_exists('assets-orrish/storage/product/'.$img->p_file)){
                            unlink("assets-orrish/storage/product/".$img->p_file);
                          }
					    $this->db->where('id',$pro_id)->set($data)->update('tbl_product');
                            echo json_encode([
				            	'error' => false,
				            	'success' => true,
				            	'message' => 'Hurray! stock has been Update successfully!',
				            	'color' => 'success',
				            	'name' => 'Success! ',
				            ]);
				        }
				        else
				        {
				        	$data = array(
					                'style_id' => $stylename,
					                'cat_id' => $brandname,
					                'name' => $name,
					                'status' =>$status,
					                'price'=>$Price,
					                'model'=>$model,
					                'view'=>$view,
					                'location'=>$location,
					                'fuel'=>$fuel,
					                'driven'=>$driven,
					                'seller'=>$seller,
					                'transmission'=>$transmission,
					                'owner'=>$owner,
									'description'=>$description,
									'features'=>$features,
									'meta_title' =>$meta_title,
									'meta_description' =>$meta_description,
									'meta_keywords' =>$meta_keywords,
									'sco_Keyword' =>$sco_Keyword,
									'created_at' => date("Y-m-d H:i:s")
					                );
					    $this->db->where('id',$pro_id)->set($data)->update('tbl_product');
                            echo json_encode([
				            	'error' => false,
				            	'success' => true,
				            	'message' =>'Hurray! stock has been Update successfully!',
				            	'color' => 'success',
				            	'name' => 'Success! ',
				            ]);
				        }
	   }
    }
   	//--------------End -Add Stock--------------------------
    //Stats Updates
       	public function update_Home()
	    {
	    	$cat_id_Home = $this->uri->segment(3);
            if($cat_id_Home!=="")
            {
                $status = $this->_recordChecker($cat_id_Home,'tbl_product');
                if($status->status==1)
                {
                    $this->db->where('id',$cat_id_Home)->set('status','0')->update('tbl_product');
                    redirect(base_url('admin/all-stock'));
                }
                else
                {
                    $this->db->where('id',$cat_id_Home)->set('status','1')->update('tbl_product');
                    redirect(base_url('admin/all-stock'));
                }
            }
            else
            {
                redirect(base_url('admin/all-stock'));
            }
        }

       public function sell_Home()
	    {
	    	$cat_id_Home = $this->uri->segment(3);
            if($cat_id_Home!=="")
            {
                $status = $this->_recordChecker($cat_id_Home,'tbl_product');
                if($status->sell_status==1)
                {
                    $this->db->where('id',$cat_id_Home)->set('sell_status','0')->update('tbl_product');
                    redirect(base_url('admin/all-stock'));
                }
                else
                {
                    $this->db->where('id',$cat_id_Home)->set('sell_status','1')->update('tbl_product');
                    redirect(base_url('admin/all-stock'));
                }
            }
            else
            {
                redirect(base_url('admin/all-stock'));
            }
        }
    //End Of Stats Update

           //Delect Category 
			public function delect_stock()
			{

		        $del_id = $this->uri->segment(3);
		        if($del_id=="")
		        {
		           redirect(base_url('admin/all-stock'));
		        }
		        else
		        {
		        	$img = $this->_recordChecker($del_id,'tbl_product');
                        if($img->p_file && file_exists('assets-orrish/storage/product/'.$img->p_file)){
                        	unlink("assets-orrish/storage/product/".$img->p_file);
                          }		            
		            $this->_recordDelect($del_id,'tbl_product');
		            redirect(base_url('admin/all-stock'));		            
		        }
		    }
//-------------------------------Exterior
	public function view_exterior()
    {
    	 $prensent_id = $this->uri->segment(3);
         $Exterior_select = $this->_ExteriortList($prensent_id,'tbl_product_images','exterior');
         $this->load->view('admin-orrish/stock-exterior',compact('Exterior_select'));      
    }
    public function view_interior()
    {
    	 $prensent_id = $this->uri->segment(3);
         $Exterior_select = $this->_ExteriortList($prensent_id,'tbl_product_images','interior');
         $this->load->view('admin-orrish/stock-interior',compact('Exterior_select'));      
    }
	public function Add_exterior()
    {
        $this->load->view('admin-orrish/add-exterior');   
    }
	public function ExteriorEdit()
    {
    	$prensent_id = $this->uri->segment(4);
    	$exterior_id = $this->uri->segment(6);
    	$Exterior_select = $this->_recordChecker($exterior_id,'tbl_product_images');
        $this->load->view('admin-orrish/add-exterior',compact('Exterior_select')); 
    }
    public function insertExterior()
    {
    	$type = $this->security->xss_clean($this->input->POST('type'));
        $prensent_id = $this->security->xss_clean($this->input->POST('prensent_id'));
        $name = $this->security->xss_clean($this->input->POST('name'));
        if($_FILES['file']['name']){
        		date_default_timezone_set("Asia/Kolkata");
	    		$config['upload_path'] = 'assets-orrish/storage/product/exterior';
                $config['allowed_types']        = 'jpg|png|jpeg|svg';
				$config['max_size']             = 1024;
				$config['detect_mime']          = TRUE;
				$config['encrypt_name']         = TRUE;
				$config['remove_spaces']        = TRUE;
				$config['max_filename']         = 0;    	 		
    	 		$this->load->library('upload', $config);
				$this->upload->do_upload('file');
					$data = array(
						 'file' => $this->upload->data() 
				  	);
				  	$file=$data['file']['file_name'];
				  	$data = array(
				                'name' => $name,
				                'type' => $type,
				                'file' => $file,
				                'prensent_id'=>$prensent_id,
				                'created_at' => date("Y-m-d H:i:s")
				                );
	           $this->session->set_flashdata(['status'=>'Hurray!Add successfully!']);
	           $this->db->insert('tbl_product_images',$data);
	           	redirect(base_url('admin/add-exterior/'.$prensent_id.'/'.$type)); 
    	 		}
    	 		else
    	 		{
    	 			$this->session->set_flashdata(['error'=>'Choose Your Image!!!!']);
    	 			redirect(base_url('admin/add-exterior/'.$prensent_id.'/'.$type)); 
    	 		}
    	 		

	}

	public function UpdateExterior()
	{
		$type = $this->security->xss_clean($this->input->POST('type'));
        $prensent_id = $this->security->xss_clean($this->input->POST('prensent_id'));
        $name = $this->security->xss_clean($this->input->POST('name'));
        $Up_id = $this->security->xss_clean($this->input->POST('id'));
        if($_FILES['file']['name']){
        		date_default_timezone_set("Asia/Kolkata");
	    		$config['upload_path'] = 'assets-orrish/storage/product/exterior';
                $config['allowed_types']        = 'jpg|png|jpeg|svg';
				$config['max_size']             = 1024;
				$config['detect_mime']          = TRUE;
				$config['encrypt_name']         = TRUE;
				$config['remove_spaces']        = TRUE;
				$config['max_filename']         = 0;    	 		
    	 		$this->load->library('upload', $config);
				$this->upload->do_upload('file');
					$data = array(
						 'file' => $this->upload->data() 
				  	);
				  	$file=$data['file']['file_name'];
				  	$data = array(
				                'name' => $name,
				                'file' => $file,
				                'created_at' => date("Y-m-d H:i:s")
				                );
	           	 $more_d = $this->_recordChecker($Up_id,'tbl_product_images');
	           	 if($more_d->file && file_exists('assets-orrish/storage/product/exterior/'.$more_d->file))
	           	 	{
			          unlink("assets-orrish/storage/product/exterior/".$more_d->file);
			        }
               }
	           else
	           {
	           		  	$data = array(
				                'name' => $name,
				                'created_at' => date("Y-m-d H:i:s")
				                );
	           }
	           $this->session->set_flashdata(['status'=>'Hurray!Update successfully!']);
	           $this->db->where('id',$Up_id)->set($data)->update('tbl_product_images');
			   redirect(base_url('admin/exterior-stock/Edit/'.$prensent_id.'/'.$type.'/'.$Up_id)); 
    	 		
	}
	public function DelectExterior()
	{
		$del_id = $this->uri->segment(3);
		$img = $this->_recordChecker($del_id,'tbl_product_images');	           	 
		if($img->file && file_exists('assets-orrish/storage/product/exterior/'.$img->file)){
        	unlink("assets-orrish/storage/product/exterior/".$img->file);
        	}		            
		    $this->_recordDelect($del_id,'tbl_product_images');
		    redirect(base_url('admin/stock-exterior/'.$img->prensent_id.'/'.$img->type));
	}

//------------------End Exteror
    //-------Categories--------------------------
    private function _moreList($wc,$tname){
        return $this->db->from('tbl_product_images')->order_by('id','desc')->where($wc,$tname)->get()->result_array();
    }


	private function _categoriesList(){
        return $this->db->from('tbl_category')->order_by('id','desc')->get()->result_array();
    }
    private function _ExteriortList($prensent_id,$table,$type){
        return $this->db->where('prensent_id',$prensent_id)->where('type',$type)->from($table)->order_by('id','desc')->get()->result_array();
    }
    private function _carstyleList(){
        return $this->db->from('tbl_car_style')->order_by('id','desc')->get()->result_array();
    }
    private function _productList(){
        return $this->db->from('tbl_product')->order_by('id','desc')->get()->result_array();
    }
    protected function _recordChecker($id,$table){
        return $this->db->where('id',$id)->from($table)->get()->row();
    }

    protected function _recordDelect($id,$table){
        return $this->db->where('id',$id)->from($table)->delete();
    }
}