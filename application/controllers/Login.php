<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends MY_Controller
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
		$verify = $this->input->get('verify', TRUE);
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"><strong>Danger!</strong> ', '</div>');
		$this->form_validation->set_rules('login_email', 'Email', 'trim|required');
		$this->form_validation->set_rules('login_password', 'Password', 'trim|required');

		if (!empty($verify)) {
			$isVerify = $this->login->checkVerify($verify);
			if (!empty($isVerify)) {
				$updateData['id'] = $isVerify->id;
				$updateData['verify'] = '';
				$updateData['status'] = 1;
				$this->login->updateData($updateData);
				$this->session->set_flashdata('success', '<div class="alert alert-success"><strong>Success!</strong> ' . "Your account has been verified, please login with your credentials." . '</div>');
				redirect(base_url('login'));
			}
		}

		$inputs = [
			'login_email',
			'login_password'
		];
		$post = $this->input->post($inputs);
		$submit = $this->input->post(['login']);
		$data['login'] = $post;
		$data['redirect'] = !empty($redirect) ? "?redirect=" . $redirect : "";
		if ($this->form_validation->run() == FALSE) {
			$data['login']['error'] = validation_errors();
		} else {
			try {
				$login = $this->login->checkLogin($post['login_email'], $post['login_password']);
				if (!empty($login)) {
					if (empty($login->status)) {
						$data['login']['error'] = '<div class="alert alert-danger"><strong>Danger!</strong> ' . 'Your account isn\'t verified yet, please check your email to verify. If you haven\'t received email click <a href="javascript:void(0)" id="login_verify" onclick="login_verify()" >resend</a>.' . '</div>';
					} else {
						$this->session->set_flashdata('success', '<div class="alert alert-success"><strong>Success!</strong> ' . "You've successfully logged In." . '</div>');
						$user = [
							'id' => $login->id,
							'email' => $login->email,
							'user_type' => $login->user_type,
							'logged_in' => TRUE
						];
						$this->session->set_userdata($user);
						if (!empty($redirect)) {
							redirect(base_url($redirect));
						} else {
							redirect(base_url('profile'));
						}
					}
				} else {
					$data['login']['error'] = '<div class="alert alert-danger"><strong>Danger!</strong> ' . "Invalid login credentials." . '</div>';
				}
			} catch (\Exception $e) {
				$data['login']['error'] = '<div class="alert alert-danger"><strong>Danger!</strong> ' . $e->getMessage() . '</div>';
			}
		}

		$this->load->view(
			'website/signup',
			[
				"topHeader" => $this->topHeader,
				"topNavigationCategories" => $this->topNavigation, //
				"controller" => $this, //
				"login" => $data['login'],
				"data" => $data
			]
		);
	}

	public function recover_password()
	{
		$redirect = $this->input->get('redirect', TRUE);
		$verify = $this->input->get('verify', TRUE);
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"><strong>Danger!</strong> ', '</div>');
		$this->form_validation->set_rules('login_email', 'Email', 'trim|required');

		if (!empty($verify)) {
			$isVerify = $this->login->checkVerify($verify);
			if (!empty($isVerify)) {
				redirect(base_url('login/reset-password?verify=' . $verify));
			} else {
				redirect(base_url('login/recover-password'));
			}
		}

		$inputs = [
			'login_email'
		];
		$post = $this->input->post($inputs);
		$submit = $this->input->post(['login']);
		$data['login'] = $post;
		$data['redirect'] = !empty($redirect) ? "?redirect=" . $redirect : "";
		if ($this->form_validation->run() == FALSE) {
			$data['login']['error'] = validation_errors();
		} else {
			try {
				$login = $this->login->recoverPassword($post['login_email']);
				if (!empty($login)) {
					if (empty($login->status)) {
						$data['login']['error'] = '<div class="alert alert-danger"><strong>Danger!</strong> ' . 'Your account isn\'t verified yet, please check your email to verify. If you haven\'t received email click <a href="javascript:void(0)" >resend</a>.' . '</div>';
					} else {
						$randomString = md5($login->id . $post['login_email'] . $this->generateRandomString(6) . time());
						$postUpdate['id'] = $login->id;
						$postUpdate['verify'] = $randomString;
						$this->login->updateData($postUpdate);
						$data['login']['success'] = '<div class="alert alert-success"><strong>Success!</strong> ' . "We've sent you the instructions, check your spam folder if the email doesn’t show up in a few minutes." . '</div>';
						$link = base_url("login/recover-password?verify=" . $randomString);
						$to = $post['login_email'];
						$subject = "Niswarth Sewa: Password reset requested";
						$message = 'Hello, <br><br>You have requested a reset of your Niswarth Sewa password. Please follow the link below to set a new password.<br><br>' . $link . '<br><br>--<br>All the best,<br>Niswarth Sewa Team';
						$this->resend($link, $to, $subject, $message);
					}
				} else {
					$data['login']['error'] = '<div class="alert alert-danger"><strong>Danger!</strong> ' . "This email isn't registered with us." . '</div>';
				}
			} catch (\Exception $e) {
				$data['login']['error'] = '<div class="alert alert-danger"><strong>Danger!</strong> ' . $e->getMessage() . '</div>';
			}
		}

		$this->load->view(
			'website/recover-password',
			[
				"topHeader" => $this->topHeader,
				"topNavigationCategories" => $this->topNavigation, //
				"controller" => $this, //
				"login" => $data['login'],
				"data" => $data
			]
		);
	}

	public function reset_password()
	{
		$verify = $this->input->get('verify', TRUE);
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"><strong>Danger!</strong> ', '</div>');
		$this->form_validation->set_rules('reset_password', 'Password', 'trim|required|min_length[8]|callback_check_strong_password');
		$this->form_validation->set_rules('reset_confirm_password', 'Confirm Password', 'trim|required|matches[reset_password]');

		if (empty($verify)) {
			redirect(base_url('login/recover-password'));
		}
		$login = $this->login->checkVerify($verify);
		if (empty($login->id)) {
			$this->session->set_flashdata('error', '<div class="alert alert-danger"><strong>Danger!</strong> ' . "Invalid URL." . '</div>');
			redirect(base_url('login/recover-password'));
		}

		$inputs = [
			'reset_password',
			'reset_confirm_password'
		];
		$post = $this->input->post($inputs);
		$submit = $this->input->post(['login']);
		$data['login'] = $post;
		$data['login']['verify'] = !empty($verify) ? "?verify=" . $verify : "";
		if ($this->form_validation->run() == FALSE) {
			$data['login']['error'] = validation_errors();
		} else {
			try {
				if ($post['reset_password'] !== $post['reset_confirm_password']) {
					$data['login']['error'] = '<div class="alert alert-danger"><strong>Danger!</strong> ' . "Password and Confirm Password must be same." . '</div>';
				} elseif (empty($login->id)) {
					$this->session->set_flashdata('error', '<div class="alert alert-danger"><strong>Danger!</strong> ' . "Invalid URL." . '</div>');
					redirect(base_url('login/recover-password'));
				} else {
					$updatedPost['id'] = $login->id;
					$updatedPost['password'] = md5($post['reset_password']);
					$updatedPost['verify'] = '';
					$updated = $this->login->updateData($updatedPost);
					$dbError = $this->db->error();
					if (!empty($dbError['message'])) {
						$data['signup']['error'] = '<div class="alert alert-danger"><strong>Danger!</strong> ' . $dbError['message'] . '</div>';
					}
					$this->session->set_flashdata('success', '<div class="alert alert-success"><strong>Success!</strong> ' . "Your password has been updated, login with same credentials." . '</div>');
					redirect(base_url('login'));
				}
			} catch (\Exception $e) {
				$data['login']['error'] = '<div class="alert alert-danger"><strong>Danger!</strong> ' . $e->getMessage() . '</div>';
			}
		}

		$this->load->view(
			'website/reset-password',
			[
				"topHeader" => $this->topHeader,
				"topNavigationCategories" => $this->topNavigation, //
				"controller" => $this, //
				"login" => $data['login'],
				"data" => $data
			]
		);
	}
}
