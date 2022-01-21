

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CarStyleController extends CI_Controller {
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
    public function car_style()
    {
    	$category_select = $this->_categoriesList();
        $this->load->view('admin-orrish/car-style',compact('category_select')); 
    }
    //Add Category 
    public function add_car_style()
    {
        $this->load->view('admin-orrish/add-car-style');
    }
    //-------------------Insert Data -------------------//
     public function insertData()
    {	
    	  $this->load->library('form_validation');
          $this->form_validation->set_rules('s_name', 'Categories s_name', 'required|max_length[70]');
          $s_name =$this->security->xss_clean($this->input->POST('s_name'));
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
    	 				date_default_timezone_set("Asia/Kolkata");
	    				$config['upload_path'] = 'assets-orrish/storage/car-style/';
                    	$config['allowed_types']        = 'jpg|png|jpeg|svg';
						$config['max_size']             = 1024;
						$config['detect_mime']          = TRUE;
						$config['encrypt_name']         = TRUE;
						$config['remove_spaces']        = TRUE;
						$config['max_filename']         = 0;
		
		 $this->load->library('upload', $config);
	     $this->upload->do_upload('file1');
	     $this->upload->do_upload('file2');
	     	$data = array(
	     		 'file1' => $this->upload->data(), 
	             'file2' => $this->upload->data()
	              );
		    $file1=$data['file1']['file_name']; 
		    $file2=$data['file2']['file_name'];
	        $data = array(
	                's_name' => $s_name,
	                'file1' => $file1,
	                'file2' => $file2,
	                'description' =>$description,
					'meta_title' =>$meta_title,
					'meta_description' =>$meta_description,
					'meta_keywords' =>$meta_keywords,
					'status' =>$statusf,
					'sco_Keyword' =>$sco_Keyword,
					'created_at' => date("Y-m-d H:i:s")
	                );
	        $this->db->insert('tbl_car_style',$data);
            $this->session->set_flashdata(['status'=>'Save Brand']);
            redirect(base_url('admin/add-car-style'));
	    }	   
    }
    //------------Update------------------------//
     public function edit_car_style()
    {
    	$cat_id = $this->uri->segment(3);
        if($cat_id!==''){
        	$category_details = $this->_recordChecker($cat_id,'tbl_car_style');
        	if($category_details)
        	{
        		$this->load->view('admin-orrish/add-car-style',compact('category_details'));
        	}
            else{
            	//redirect(base_url('admin/categories'));	
            }
        }
        else{           
            redirect(base_url('admin/car-style'));
        }    	
    }

	 public function UpdateData()
	    {
	      $this->load->library('form_validation');
          $this->form_validation->set_rules('s_name', 'Categories s_name', 'required|max_length[70]');
          $s_name =$this->security->xss_clean($this->input->POST('s_name'));
          $description =$this->input->POST('description');
          $meta_title =$this->security->xss_clean($this->input->POST('meta_title'));
          $meta_description =$this->input->POST('meta_description');
          $meta_keywords =$this->input->POST('meta_keywords');
          $statusf =$this->input->POST('status');
          $sco_Keyword =$this->input->POST('sco_Keyword');
          $upId =$this->input->POST('id'); // Category Id
          $del_img1 =$this->input->POST('del_img1');

          if($this->form_validation->run() == false){

        			$this->session->set_flashdata(['status'=>'Please Fill Required Fields']);
					redirect(base_url('admin/edit-car-style/'.$upId));
					exit();
		    }
		    else
		    {
		    	if($_FILES['file1']['name']){
                    	$config['upload_path'] = 'assets-orrish/storage/car-style/';
                    	$config['allowed_types']        = 'jpg|png|jpeg|svg';
						$config['max_size']             = 1024;
						$config['detect_mime']          = TRUE;
						$config['encrypt_name']         = TRUE;
						$config['remove_spaces']        = TRUE;
						$config['max_filename']         = 0;
						$this->load->library('upload', $config);
						
						if(!$this->upload->do_upload('file1')){
                        $this->upload->display_errors();
                        redirect(base_url('admin/edit-car-style/'.$upId));
                    	}
                    	else{
                    		$cat_update =[
                        	's_name' =>$s_name,
							'description' =>$description,
							'meta_title' =>$meta_title,
							'meta_description' =>$meta_description,
							'meta_keywords' =>$meta_keywords,
							'status' =>$statusf,
							'sco_Keyword' =>$sco_Keyword,
                            'file1' => $this->upload->data()['file_name'],
                            'updated_at' => date("Y-m-d H:i:s"),
                        ];
                        
                        $img = $this->_recordChecker($upId,'tbl_car_style');
                        if($img->file1 && file_exists('assets-orrish/storage/car-style/'.$img->file1)){
                            unlink("assets-orrish/storage/car-style/".$img->file1);
                          }
            			 $this->session->set_flashdata(['status'=>'Update Brand']);
                        $this->db->where('id',$upId)->set($cat_update)->update('tbl_car_style');
                        redirect(base_url('admin/edit-car-style/'.$upId));           
                   		}
		   }
		   if($_FILES['file2']['name']){
                    	$config['upload_path'] = 'assets-orrish/storage/car-style/';
                    	$config['allowed_types']        = 'jpg|png|jpeg|svg';
						$config['max_size']             = 1024;
						$config['detect_mime']          = TRUE;
						$config['encrypt_name']         = TRUE;
						$config['remove_spaces']        = TRUE;
						$config['max_filename']         = 0;
						$this->load->library('upload', $config);
						
						if(!$this->upload->do_upload('file2')){
                        $this->upload->display_errors();
                        redirect(base_url('admin/edit-car-style/'.$upId));
                    	}
                    	else{
                    		$cat_update =[
                        	's_name' =>$s_name,
							'description' =>$description,
							'meta_title' =>$meta_title,
							'meta_description' =>$meta_description,
							'meta_keywords' =>$meta_keywords,
							'status' =>$statusf,
							'sco_Keyword' =>$sco_Keyword,
                            'file2' => $this->upload->data()['file_name'],
                            'updated_at' => date("Y-m-d H:i:s"),
                        ];
                        
                        $img = $this->_recordChecker($upId,'tbl_car_style');
                        if($img->file2 && file_exists('assets-orrish/storage/car-style/'.$img->file2)){
                            unlink("assets-orrish/storage/car-style/".$img->file2);
                          }
            			 $this->session->set_flashdata(['status'=>'Update Brand']);
                        $this->db->where('id',$upId)->set($cat_update)->update('tbl_car_style');
                        redirect(base_url('admin/edit-car-style/'.$upId));           
                   		}
		   }
            else{
                $cat_update =[
                        	's_name' =>$s_name,
							'description' =>$description,
							'meta_title' =>$meta_title,
							'meta_description' =>$meta_description,
							'meta_keywords' =>$meta_keywords,
							'status' =>$statusf,
							'sco_Keyword' =>$sco_Keyword,
							'updated_at' => date("Y-m-d H:i:s"),
                        ];
                         $this->session->set_flashdata(['status'=>'Update Brand']);
                $this->db->where('id',$upId)->set($cat_update)->update('tbl_car_style');
                        redirect(base_url('admin/edit-car-style/'.$upId));
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
                $status = $this->_recordChecker($cat_id_Home,'tbl_car_style');
                if($status->status==1)
                {
                    $this->db->where('id',$cat_id_Home)->set('status','0')->update('tbl_car_style');
                    redirect(base_url('admin/car-style'));
                }
                else
                {
                    $this->db->where('id',$cat_id_Home)->set('status','1')->update('tbl_car_style');
                    redirect(base_url('admin/car-style'));
                }
            }
            else
            {
                redirect(base_url('admin/car-style'));
            }
        }
    //End Of Stats Update

           //Delect Category 
			public function delect_car()
			{
		        $cat_id_del = $this->uri->segment(3);
		        if($cat_id_del=="")
		        {
		           redirect(base_url('admin/car-style'));
		        }
		        else
		        {
		        	$img = $this->_recordChecker($cat_id_del,'tbl_car_style');

                        if($img->file1 && file_exists('assets-orrish/storage/car-style/'.$img->file1)){
                            unlink("assets-orrish/storage/car-style/".$img->file1);
                            unlink("assets-orrish/storage/car-style/".$img->file2);
                          }		            
		           $this->_recordDelect($cat_id_del,'tbl_car_style');
		            redirect(base_url('admin/car-style'));
		            
		        }
		    }


    //-------Categories--------------------------
    private function _categoriesList(){
        return $this->db->from('tbl_car_style')->order_by('id','desc')->get()->result_array();
    }
    protected function _recordChecker($id,$table){
        return $this->db->where('id',$id)->from($table)->get()->row();
    }

    protected function _recordDelect($id,$table){
        return $this->db->where('id',$id)->from($table)->delete();
    }
}