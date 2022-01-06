<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoriesController extends CI_Controller {
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
    public function categories()
    {
    	$category_select = $this->_categoriesList();
        $this->load->view('admin-orrish/categories',compact('category_select')); 
    }
    //Add Category 
    public function add_categories()
    {
        $this->load->view('admin-orrish/add-categories');
    }
    //-------------------Insert Data -------------------//
     public function insertData()
    {
 		 $this->load->library('form_validation');
         $this->form_validation->set_rules('c_name', 'Categories name', 'required|max_length[70]');
        
        
          $c_name =$this->security->xss_clean($this->input->POST('c_name'));
          $description =$this->input->POST('description');
          $meta_title =$this->security->xss_clean($this->input->POST('meta_title'));
          $meta_description =$this->input->POST('meta_description');
          $meta_keywords =$this->input->POST('meta_keywords');
          $statusf =$this->input->POST('status');
          $sco_Keyword =$this->input->POST('sco_Keyword');
          if($this->form_validation->run() == false){

        			$this->session->set_flashdata(['status'=>'Please Fill Required Fields']);
					redirect(base_url('admin/add-categories'));
					exit();
		    }else{
		    	if($_FILES['file']['name']!==''){
		    			$config['upload_path'] = 'assets-orrish/storage/category-image/';
                    	$config['allowed_types']        = 'jpg|png|jpeg|svg';
						$config['max_size']             = 1024;
						$config['detect_mime']          = TRUE;
						$config['encrypt_name']         = TRUE;
						$config['remove_spaces']        = TRUE;
						$config['max_filename']         = 0;
						$this->load->library('upload', $config);
                    if(!$this->upload->do_upload('file')){
                        $this->upload->display_errors();
                        redirect(base_url('admin/add-categories'));
                    }
                     else{
                        $cat_insert =[
                        	'c_name' =>$c_name,
							'description' =>$description,
							'meta_title' =>$meta_title,
							'meta_description' =>$meta_description,
							'meta_keywords' =>$meta_keywords,
							'status' =>$statusf,
							'sco_Keyword' =>$sco_Keyword,
                             'file' => $this->upload->data()['file_name'],
                             'created_at' => date("Y-m-d H:i:s"),
                        ];
                        
                        $this->db->insert('tbl_category',$cat_insert);
                        $this->session->set_flashdata(['status'=>'Save Categories']);
                        redirect(base_url('admin/add-categories'));           
                    }
		    	}
		    	else
		    	{
		    		 $cat_insert =[
                        	'c_name' =>$c_name,
							'description' =>$description,
							'meta_title' =>$meta_title,
							'meta_description' =>$meta_description,
							'meta_keywords' =>$meta_keywords,
							'status' =>$statusf,
							'sco_Keyword' =>$sco_Keyword,
							'created_at' => date("Y-m-d H:i:s"),                           
                        ];
                        $this->db->insert('tbl_category',$cat_insert);
                        $this->session->set_flashdata(['status'=>'Save Categories']);
                        redirect(base_url('admin/add-categories'));
		    	}
		    }
    }
    //------------Update------------------------//
     public function edit_categories()
    {
    	$cat_id = $this->uri->segment(3);
        if($cat_id!==''){
        	$category_details = $this->_recordChecker($cat_id,'tbl_category');
        	if($category_details)
        	{
        		$this->load->view('admin-orrish/add-categories',compact('category_details'));
        	}
            else{
            	//redirect(base_url('admin/categories'));	
            }
        }
        else{           
            redirect(base_url('admin/categories'));
        }    	
    }

	 public function UpdateData()
	    {

	     $this->load->library('form_validation');
         $this->form_validation->set_rules('c_name', 'Categories name', 'required|max_length[70]');
         
          $c_name =$this->security->xss_clean($this->input->POST('c_name'));
          $description =$this->input->POST('description');
          $meta_title =$this->security->xss_clean($this->input->POST('meta_title'));
          $meta_description =$this->input->POST('meta_description');
          $meta_keywords =$this->input->POST('meta_keywords');
          $statusf =$this->input->POST('status');
          $sco_Keyword =$this->input->POST('sco_Keyword');
          $upId =$this->input->POST('id'); // Category Id
          $del_img =$this->input->POST('del_img');

          if($this->form_validation->run() == false){

        			$this->session->set_flashdata(['status'=>'Please Fill Required Fields']);
					redirect(base_url('admin/edit-categories/2'));
					exit();
		    }
		    else
		    {
		    	if($_FILES['file']['name']){
                    	$config['upload_path'] = 'assets-orrish/storage/category-image/';
                    	$config['allowed_types']        = 'jpg|png|jpeg|svg';
						$config['max_size']             = 1024;
						$config['detect_mime']          = TRUE;
						$config['encrypt_name']         = TRUE;
						$config['remove_spaces']        = TRUE;
						$config['max_filename']         = 0;
						$this->load->library('upload', $config);
						
						if(!$this->upload->do_upload('file')){
                        $this->upload->display_errors();
                        redirect(base_url('admin/edit-categories/'.$upId));
                    	}
                    	else{
                    		$cat_update =[
                        	'c_name' =>$c_name,
							'description' =>$description,
							'meta_title' =>$meta_title,
							'meta_description' =>$meta_description,
							'meta_keywords' =>$meta_keywords,
							'status' =>$statusf,
							'sco_Keyword' =>$sco_Keyword,
                            'file' => $this->upload->data()['file_name'],
                            'updated_at' => date("Y-m-d H:i:s"),
                        ];
                        
                        $img = $this->_recordChecker($upId,'tbl_category');
                        if($img->file && file_exists('assets-orrish/storage/category-image/'.$img->file)){
                            unlink("assets-orrish/storage/category-image/".$img->file);
                          }
            			$this->session->set_flashdata(['status'=>'Update Categories']);
                        $this->db->where('id',$upId)->set($cat_update)->update('tbl_category');
                        redirect(base_url('admin/edit-categories/'.$upId));           
                   		}
		   }
            else{
                $cat_update =[
                        	'c_name' =>$c_name,
							'description' =>$description,
							'meta_title' =>$meta_title,
							'meta_description' =>$meta_description,
							'meta_keywords' =>$meta_keywords,
							'status' =>$statusf,
							'sco_Keyword' =>$sco_Keyword,
							'updated_at' => date("Y-m-d H:i:s"),
                        ];
                         $this->session->set_flashdata(['status'=>'Update Categories']);
                $this->db->where('id',$upId)->set($cat_update)->update('tbl_category');
                        redirect(base_url('admin/edit-categories/'.$upId));
            }
        }
    }   
//----------End of Update--------------
   


    //Stats Updates
        public function update_Home()
        {
            $cat_id_Home = $this->uri->segment(3);
            if($cat_id_Home!=="")
            {
                $status = $this->_recordChecker($cat_id_Home,'tbl_category');
                if($status->status==1)
                {
                    $this->db->where('id',$cat_id_Home)->set('status','0')->update('tbl_category');
                    redirect(base_url('admin/categories'));
                }
                else
                {
                    $this->db->where('id',$cat_id_Home)->set('status','1')->update('tbl_category');
                    redirect(base_url('admin/categories'));
                }
            }
            else
            {
                redirect(base_url('admin/categories'));
            }
        }
    //End Of Stats Update

           //Delect Category 
			public function delect_categories()
			{
		        $cat_id_del = $this->uri->segment(3);
		        if($cat_id_del=="")
		        {
		           redirect(base_url('admin/categories'));
		        }
		        else
		        {
		            $img = $this->_recordChecker($cat_id_del,'tbl_category');
		            if($img->file && file_exists(base_url().'\assets-orrish/storage/category-image/'.$img->file)){
		                unlink(base_url()."\assets-orrish\storage\category-image".$img->file);
		            }
		            $this->_recordDelect($cat_id_del,'tbl_category');
		            redirect(base_url('admin/categories'));
		            
		        }
		    }


    //-------Categories--------------------------
    private function _categoriesList(){
        return $this->db->from('tbl_category')->order_by('id','desc')->get()->result_array();
    }
    protected function _recordChecker($id,$table){
        return $this->db->where('id',$id)->from($table)->get()->row();
    }

    protected function _recordDelect($id,$table){
        return $this->db->where('id',$id)->from($table)->delete();
    }
}