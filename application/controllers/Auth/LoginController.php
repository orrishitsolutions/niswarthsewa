<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('security');

		
	}
	public function loginPage()
	{
		$this->_loggedOrNot();
		$this->load->view('login/login');

	}

	public function loginCheckPageFunction(){
		
		$this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean');
        // check form validation of user input
        if ($this->form_validation->run() == FALSE) {
			$array = [
				'email' => form_error('email'),
				'password' => form_error('password')
			];
			$this->session->set_flashdata($array);
			redirect(base_url().'admin/login');
			exit;
        }
		$username = $this->security->xss_clean($this->input->post('email'));
        $sessionVariable = array(
            'email' => $username,
		);
		//load authentication library to check username and password
        $this->load->library('authentication');
		$isUserFound = $this->authentication->checkUser($sessionVariable);
		if ($isUserFound) {
			$password = $this->security->xss_clean($this->input->post('password'));
			if($this->_verifyPassword($isUserFound,$password)){
				
				$this->session->set_userdata(['isLogged'=>true,'id'=>$isUserFound['id']]);
				$this->session->set_userdata($isUserFound);
				redirect(base_url().'admin/dashboard');
				exit();
			}else{
				$array = [
					'email' => 'credential not matched our records',
				];
				$this->session->set_flashdata($array);
				redirect(base_url().'admin');
				exit();
			}
        } else {
			$array = [
				'email' => 'credential not matched our records',
			];
			$this->session->set_flashdata($array);
			redirect(base_url('admin'));
        }
	}

	protected function _verifyPassword($data,$password){
		if(password_verify($password,$data['password'])){
           return TRUE;
       	}else{
           return FALSE;
       	}
	}

	public function loggedout(){
		$this->session->sess_destroy();
		redirect(base_url('admin'));
	}

	private function _loggedOrNot(){
		$logged = $this->session->userdata();
		if(!empty($logged['isLogged'])){
			if($logged['isLogged'] == true){
				redirect(base_url().'admin/dashboard');
			}
		}
		
	}
}
