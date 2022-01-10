<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$this->load->view('admin/admin');
	}

	public function login()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = ['message', 'quantity', 'piece'];
			$post = $this->input->post($data);
			$this->session->set_flashdata('data', $post);
			$this->session->set_flashdata('error', validation_errors());
			redirect(base_url('admin'));
		} else {
			die('success');
			//redirect(base_url());
		}
	}
}
