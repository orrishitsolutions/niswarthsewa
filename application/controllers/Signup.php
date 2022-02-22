<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signup extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Categoriesmodel"); //
		$this->load->model("Pagesmodel"); //
		$this->load->model("Signupmodel", "login");
		$this->load->library(['form_validation']);
		if ($this->session->userdata('logged_in')) {
			redirect(base_url('profile'));
		}
	}

	public function index()
	{
		$redirect = $this->input->get('redirect', TRUE);
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"><strong>Danger!</strong> ', '</div>');
		$this->form_validation->set_rules('user_type', 'User Type', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|callback_check_strong_password');

		$inputs = [
			'email',
			'password',
			'user_type',
			'password'
		];
		$post = $this->input->post($inputs);
		$submit = $this->input->post(['register']);
		$data['signup'] = $post;
		$data['redirect'] = !empty($redirect) ? "?redirect=" . $redirect : "";
		if ($this->form_validation->run() == FALSE) {
			$data['signup']['error'] = validation_errors();
		} else {
			try {
				$post['status'] = 0;
				$insert = $this->login->saveData($post);
				$dbError = $this->db->error();
				if (!empty($dbError['message'])) {
					$data['signup']['error'] = '<div class="alert alert-danger"><strong>Danger!</strong> ' . $dbError['message'] . '</div>';
				}
				if (!$insert) {
					$data['signup']['error'] = '<div class="alert alert-danger"><strong>Danger!</strong> ' . "This Email address already exists. If you've lost your password, please reset it and try login" . '.</div>';
				}
			} catch (\Exception $e) {
				$data['signup']['error'] = '<div class="alert alert-danger"><strong>Danger!</strong> ' . $e->getMessage() . '</div>';
			}
		}

		if (empty($data['signup']['error']) && !empty($submit['register'])) {
			$postUpdate['id'] = $insert;
			$postUpdate['verify'] = md5($insert . $post['email']);
			$this->login->updateData($postUpdate);
			$link = base_url("login?verify=" . md5($insert . $post['email']));
			$inputs = [
				'email'
			];
			$post = $this->input->post($inputs);
			$to = $post['email'];
			$subject = "Niswarth Sewa: Email Verification";
			$message = 'Hello, <br><br>Please visit below link to verify your account.<br><br>' . $link . '<br><br>--<br>All the best,<br>Niswarth Sewa Team';
			$this->resend($link, $to, $subject, $message);
			$this->session->set_flashdata('success', '<div class="alert alert-success"><strong>Success!</strong> ' . "You've successfully signed up, please verify your account then login with same credentials." . '</div>');
			$data['signup']['success'] = $this->session->flashdata('success');
		}

		$this->load->view(
			'website/signup',
			[
				"topHeader" => $this->topHeader,
				"topNavigationCategories" => $this->topNavigation, //
				"controller" => $this, //
				"signup" => $data['signup'],
				"data" => $data
			]
		);
	}

}
