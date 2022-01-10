<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutController extends CI_Controller {
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
    //Directors ----------------------------------------------------
    public function about_view()
    {
    	$directors_select = $this->_directorsList('type','directors');
    	$this->load->view('admin-orrish/directors-abouts',compact('directors_select'));
    }
    public function about_add_view()
    {
        $this->load->view('admin-orrish/add-directors');
    }

    public function experience_view()
    {
    	$cat_id = 5;
        if($cat_id!==''){
        	$abouts_details = $this->_recordChecker($cat_id,'tbl_about_us');
        	if($abouts_details)
        	{
        		$this->load->view('admin-orrish/edit-experience',compact('abouts_details'));
        	}
            else{
            	//redirect(base_url('admin/categories'));	
            }
        }
        else{           
            redirect(base_url('admin-orrish/edit-experience'));
        }   
    }

    //team_view-------------------------------

    public function team_view()
    {
    	$directors_select = $this->_directorsList('type','team');
    	$this->load->view('admin-orrish/our-team',compact('directors_select'));
 	}
 	public function team_add_view()
    {
        $this->load->view('admin-orrish/add-team');
    }


    public function testimonials_view()
    {
    	$directors_select = $this->_directorsList('type','testimonials');
    	$this->load->view('admin-orrish/our-testimonials',compact('directors_select'));
 	}
 	public function testimonials_add_view()
    {
        $this->load->view('admin-orrish/add-testimonials');
    }

    public function deal_view()
    {
    	$directors_select = $this->_directorsList('type','deal');
    	$this->load->view('admin-orrish/our-deal',compact('directors_select'));
 	}
 	public function deal_add_view()
    {
        $this->load->view('admin-orrish/add-deal');
    }

 //testimonials-------------------------------

    //------------------Insert
    public function insertData()
    {
    	  $this->load->library('form_validation');
          $this->form_validation->set_rules('name', 'Directors name', 'required|max_length[70]'); 
          $name =$this->security->xss_clean($this->input->POST('name'));
          $description =$this->input->POST('description');
           $title2 =$this->security->xss_clean($this->input->POST('title2'));
          $type =$this->security->xss_clean($this->input->POST('type'));
          $status =$this->security->xss_clean($this->input->POST('status'));

          if($this->form_validation->run() == false){

        			$this->session->set_flashdata(['error'=>'Oops! please check form carefully.']);
					redirect(base_url('admin/add-'.$type));
					exit();
		    }else{
    	 				date_default_timezone_set("Asia/Kolkata");
	    				$config['upload_path'] = 'assets-orrish/storage/About-image/';
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
	                'title1' => $name,
	                'description1' => $description,
	                'file' => $file,
	                'type' =>$type,
	                'title2'=>$title2,
	                'status'=>$status,
					'created_at' => date("Y-m-d H:i:s")
	                );
	        $this->db->insert('tbl_about_us',$data);
            $this->session->set_flashdata(['status'=>'Hurray! has been added successfully!']);
            redirect(base_url('admin/add-'.$type));
	    }	   
    }
   //----------------End Insert------------------------------------
 //----------------Update------------------------------------
    public function edit_directors()
    {
    	$cat_id = $this->uri->segment(3);
        if($cat_id!==''){
        	$abouts_details = $this->_recordChecker($cat_id,'tbl_about_us');
        	if($abouts_details)
        	{
        		$this->load->view('admin-orrish/add-directors',compact('abouts_details'));
        	}
            else{
            	//redirect(base_url('admin/categories'));	
            }
        }
        else{           
            redirect(base_url('admin/add-directors'));
        }   
    }
    public function edit_team()
    {
    	$cat_id = $this->uri->segment(3);
        if($cat_id!==''){
        	$abouts_details = $this->_recordChecker($cat_id,'tbl_about_us');
        	if($abouts_details)
        	{
        		$this->load->view('admin-orrish/add-team',compact('abouts_details'));
        	}
            else{
            	//redirect(base_url('admin/categories'));	
            }
        }
        else{           
            redirect(base_url('admin/add-team'));
        }   
    }

    public function deal_team()
    {
    	$cat_id = $this->uri->segment(3);
        if($cat_id!==''){
        	$abouts_details = $this->_recordChecker($cat_id,'tbl_about_us');
        	if($abouts_details)
        	{
        		$this->load->view('admin-orrish/add-deal',compact('abouts_details'));
        	}
            else{
            	//redirect(base_url('admin/categories'));	
            }
        }
        else{           
            redirect(base_url('admin/add-deal'));
        }   
    }
    

     public function testimonials_team()
    {
    	$cat_id = $this->uri->segment(3);
        if($cat_id!==''){
        	$abouts_details = $this->_recordChecker($cat_id,'tbl_about_us');
        	if($abouts_details)
        	{
        		$this->load->view('admin-orrish/add-testimonials',compact('abouts_details'));
        	}
            else{
            	//redirect(base_url('admin/categories'));	
            }
        }
        else{           
            redirect(base_url('admin/add-testimonials'));
        }   
    }

    
    public function update_Home()
    {
        $cat_id_Home = $this->uri->segment(3);
        if($cat_id_Home!=="")
        {
            $status = $this->_recordChecker($cat_id_Home,'tbl_about_us');
            if($status->status==1)
            {
                $this->db->where('id',$cat_id_Home)->set('status','0')->update('tbl_about_us');
                redirect(base_url('admin/our-'.$status->type));
            }
            else
            {
                $this->db->where('id',$cat_id_Home)->set('status','1')->update('tbl_about_us');
                redirect(base_url('admin/our-'.$status->type));
            }
        }
        else
        {
            redirect(base_url('admin/directors-abouts'));
        }
    }
    public function UpdateData()
    {
    	  $this->load->library('form_validation');
          $this->form_validation->set_rules('name', 'Directors name', 'required|max_length[70]'); 
          $name =$this->security->xss_clean($this->input->POST('name'));
          $title2 =$this->security->xss_clean($this->input->POST('title2'));
          $title3 =$this->security->xss_clean($this->input->POST('title3'));
          $description =$this->input->POST('description');
          $status =$this->security->xss_clean($this->input->POST('status'));
          $upId =$this->input->POST('id');
          $up_details = $this->_recordChecker($upId,'tbl_about_us');
          // echo $up_details->type;
          // die();
          if($this->form_validation->run() == false){

        			$this->session->set_flashdata(['error'=>'Oops! please check form carefully.']);
					redirect(base_url('admin/edit-'.$up_details->type.'/'.$upId));
					exit();
		    }else{
		    	if($_FILES['file']['name']){
    	 				date_default_timezone_set("Asia/Kolkata");
	    				$config['upload_path'] = 'assets-orrish/storage/About-image/';
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
				                'title1' => $name,
				                'description1' => $description,
				                'file' => $file,
				                'title2'=>$title2,
				                'title3'=>$title3,
				                'status'=>$status,
								'created_at' => date("Y-m-d H:i:s")
				                );
				        
			            if($up_details->file && file_exists('assets-orrish/storage/About-image/'.$up_details->file)){
			                        unlink("assets-orrish/storage/About-image/".$up_details->file);
			                }
			        }
			        else
			        {
			        	$data = array(
				                'title1' => $name,
				                'description1' => $description,
				                'title2'=>$title2,
				                'title3'=>$title3,
	                			'status'=>$status,
								'created_at' => date("Y-m-d H:i:s")
				                );
			        }
		           $this->session->set_flashdata(['status'=>'Hurray!  has been Update successfully!']);
		           $this->db->where('id',$upId)->set($data)->update('tbl_about_us');
				   redirect(base_url('admin/edit-'.$up_details->type.'/'.$upId));  
		 }
    }
    //End Of Stats Update

           //Delect Category 
			public function delect_abouts()
			{
				
		         $cat_id_del = $this->uri->segment(3);
		         $img = $this->_recordChecker($cat_id_del,'tbl_about_us');
		        if($cat_id_del=="")
		        {
		           redirect(base_url('admin/our-'.$img->type));
		           //redirect(base_url('admin/directors-abouts'));
		        }
		        else
		        {
		            $img = $this->_recordChecker($cat_id_del,'tbl_about_us');
		            if($img->file && file_exists('assets-orrish/storage/About-image/'.$img->file)){
                        unlink("assets-orrish/storage/About-image/".$img->file);
                	}
		            $this->_recordDelect($cat_id_del,'tbl_about_us');
		            redirect(base_url('admin/our-'.$img->type));
		            
		        }
		    }


    //-------Categories--------------------------
    private function _categoriesList(){
        return $this->db->from('tbl_category')->order_by('id','desc')->get()->result_array();
    }

    private function _directorsList($wc,$tname){
        return $this->db->from('tbl_about_us')->order_by('id','desc')->where($wc,$tname)->get()->result_array();
    }
    protected function _recordChecker($id,$table){
        return $this->db->where('id',$id)->from($table)->get()->row();
    }

     protected function _recordType($type,$table){
        return $this->db->where('type',$type)->from($table)->get()->row();
    }

    protected function _recordDelect($id,$table){
        return $this->db->where('id',$id)->from($table)->delete();
    }
}