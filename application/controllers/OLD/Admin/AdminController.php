<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {
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
	public function index(){
		
		$this->load->view('admin-orrish/dashboard');
		
	}
	// profile
	public function profilePage(){
		
		$this->load->view('admin-orrish/profile/profile');
	}

	public function updateProfilePage(){
		$this->form_validation->set_rules('name', 'name', 'required|xss_clean|max_length[40]');
		$this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean|valid_email');
        $this->form_validation->set_rules('phone', 'phone', 'trim|required|xss_clean|regex_match[/^[0-9]{10}$/]');
        // check form validation of user input
        if ($this->form_validation->run() == FALSE) {
			$array = [
				'email_up' => form_error('email'),
				'phone_up' => form_error('phone'),
				'name_up' => form_error('name')
			];
			$this->session->set_flashdata($array);
			redirect($this->refer);
			exit;
		}
			$email = $this->ci->auth->emailExist();
			if($email){
				$array = [
					'email_up' => 'email all ready has been taken. try diffrent email',
				];
				$this->session->set_flashdata($array);
				redirect($this->refer);
			}else{
				$phone = $this->ci->auth->phoneExist();
				if($phone){
					$array = [
						'phone_up' => 'phone all ready has been taken. try diffrent phone',
					];
					$this->session->set_flashdata($array);
					redirect($this->refer);
				}else{
					$name = $this->security->xss_clean($this->input->post('name'));
					$email = $this->security->xss_clean($this->input->post('email'));
					$phone = $this->security->xss_clean($this->input->post('phone'));
					if($_FILES['profile']['name']){
						$config['upload_path']          = 'assets-orrish/storage/profile/';
						$config['allowed_types']        = 'jpg|png|jpeg|svg';
						$config['max_size']             = 1024;
						//$config['max_width']            = 1024;
						//$config['max_height']           = 768;
						$config['detect_mime']          = TRUE;
						$config['encrypt_name']         = TRUE;
						$config['remove_spaces']        = TRUE;
						$config['max_filename']         = 0;
						$this->load->library('upload', $config);
						if ( ! $this->upload->do_upload('profile')){
							$array = array(
								'profile_up'=>$this->upload->display_errors()
							);
							$this->session->set_flashdata($array);
							redirect($this->refer);
						}else{
							$fileData = $this->upload->data();
							$update = [
								'name' => $this->security->xss_clean($this->input->post('name')),
								'email' => $this->security->xss_clean($this->input->post('email')),
								'phone' => $this->security->xss_clean($this->input->post('phone')),
								'profile' => $fileData['file_name']
							];
							
						}
					}else{
					
						$update = [
							'name' => $this->security->xss_clean($this->input->post('name')),
							'email' => $this->security->xss_clean($this->input->post('email')),
							'phone' => $this->security->xss_clean($this->input->post('phone'))
						];
						
					}
					if($this->ci->auth->updateRecord($update)){
						$array = array(
							'save'=>'changes has been saved.'
						);
						$this->session->set_flashdata($array);
						redirect($this->refer);
					}
				}
			}

			
	}

	public function deletePhotoFunction(){
		$data = $this->ci->auth->profileremove();
		$array = array(
			'save'=>$data
		);
		$this->session->set_flashdata($array);
		redirect($this->refer);
	}

	public function passwordchangeFunction(){
		$this->form_validation->set_rules('current_password', 'current password', 'trim|required|xss_clean|min_length[8]|max_length[20]');
		$this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean|min_length[8]|max_length[20]');
		$this->form_validation->set_rules('password_confirmation', 'confirm password', 'trim|required|xss_clean|min_length[8]|max_length[20]|matches[password]');
        // check form validation of user input
        if ($this->form_validation->run() == FALSE) {
			$response = [
				'current_password' => form_error('current_password'),
				'password_change' => form_error('password'),
				'password_confirmation' => form_error('password_confirmation')
			];
			$this->session->set_flashdata($response);
			redirect($this->refer);
			exit;
		}
		$getPassword = $this->_getPassword();	
		$reponse = $this->_verifyPassword($getPassword['password'],$this->security->xss_clean($this->input->post('current_password')));
		if($reponse){
			$data = $this->_privateUpdatePassword($this->security->xss_clean($this->input->post('password')));
			$response = [
				'save' => $data
			];
		}else{
			$response = [
				'current_password' => 'current password not matched.'
			];
			
		}
		$this->session->set_flashdata($response);
		redirect($this->refer);
		
	}

	private function _privateUpdatePassword($pass){
		return $this->ci->auth->changePassword($pass);
	}

	private function _getPassword(){
		return $this->ci->auth->getpassword();
	}

	protected function _verifyPassword($data,$password){
		if(password_verify($password,$data)){
           return TRUE;
       	}else{
           return FALSE;
       	}
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
}



