<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends MY_Controller
{
	/**
	 * @var array
	 */
	public $profile;

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Categoriesmodel"); //
		$this->load->model("Pagesmodel"); //
		$this->load->model("Signupmodel", "login");
		$this->load->library(['form_validation']);
		$methodName = $this->router->fetch_method();
		if (!$this->session->userdata('logged_in')) {
			redirect(base_url('login'));
		}
		$this->currentUser = $this->session->userdata();
		$this->profile = (array)$this->login->getUserById($this->currentUser['id']);
	}

	public function index()
	{
		$this->load->model("Productsmodel", "product");
		$donatedProducts = $this->product->getProductsByUser($this->currentUser['id']);

		$this->load->view(
			'website/profile',
			[
				"topHeader" => $this->topHeader,
				"topNavigationCategories" => $this->topNavigation, //
				"controller" => $this, //
				"login" => $this->profile,
				"donatedProducts" => $donatedProducts
			]
		);
	}

	public function edit()
	{
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"><strong>Danger!</strong> ', '</div><br/>');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('mobile', 'Phone Number', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$inputs = [
			'name',
			'intro',
			'mobile',
			'email'
		];
		$post = $this->input->post($inputs);
		$data['login'] = $post;
		if ($this->form_validation->run() == FALSE) {
			$data['login']['error'] = validation_errors();
			$this->load->view(
				'website/profile-edit',
				[
					"topHeader" => $this->topHeader,
					"topNavigationCategories" => $this->topNavigation, //
					"controller" => $this, //
					"login" => !empty($data['login']['email']) ? $data['login'] : $this->profile
				]
			);
		} else {
			$parts = explode(' ', $data['login']['name']);
			unset($data['login']['name']);
			$data['login']['first_name'] = array_shift($parts);
			$data['login']['last_name'] = array_pop($parts);
			$data['login']['middle_name'] = trim(implode(' ', $parts));
			$data['login']['id'] = $this->profile['id'];
			$this->login->updateData($data['login']);
			$this->session->set_flashdata('success', '<div class="alert alert-success"><strong>Success!</strong> Your profile has been updated.</div>');
			redirect(base_url('profile'));
		}
	}

	public function donate()
	{
		$this->load->model("admin/Adminmodel", 'admin');
		$this->load->model("Locationmodel", "location");
		$state = $this->location->getModule($this->location->state);
		//echo "<pre>";print_r($state);die;
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"><strong>Danger!</strong> ', '</div><br/>');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('mobile', 'Phone Number', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$inputs = [
			'name',
			'intro',
			'mobile',
			'email'
		];
		$post = $this->input->post($inputs);
		$data['login'] = $post;
		$profile['attributeSet'] = $this->admin->getModule("product-attributes-set");
		$profile['productType'] = $this->admin->getModule("product-type");
		$profile['state'] = $state;
		if ($this->form_validation->run() == FALSE) {
			$data['login']['error'] = validation_errors();
			$profile['topHeader'] = $this->topHeader;
			$profile['topNavigationCategories'] = $this->topNavigation;
			$profile['controller'] = $this;
			$profile['login'] = !empty($data['login']['email']) ? $data['login'] : $this->profile;
			$this->load->view('website/donate', $profile);
		} else {
			$parts = explode(' ', $data['login']['name']);
			unset($data['login']['name']);
			$data['login']['first_name'] = array_shift($parts);
			$data['login']['last_name'] = array_pop($parts);
			$data['login']['middle_name'] = trim(implode(' ', $parts));
			$data['login']['id'] = $this->profile['id'];
			$this->login->updateData($data['login']);
			$this->session->set_flashdata('success', '<div class="alert alert-success"><strong>Success!</strong> Your profile has been updated.</div>');
			redirect(base_url('profile'));
		}
	}

	public function district()
	{
		if (!$this->input->is_ajax_request()) {
			die('No direct script access allowed');
		}
		$this->load->model("Locationmodel", "location");
		$inputs = [
			'state'
		];
		$post = $this->input->post($inputs);
		$state = $this->location->getModuleBycolumn($this->location->district, "state_id", $post['state']);
		$result = '<select class="form-control" name="district" id="district"><option value="">------Select District------</option>';
		foreach ($state as $val) {
			$result .= '<option value="'.$val['districtid'].'">'.$val['district_title'].'</option>';
		}
		$result .= '</select>';
		$data['result'] = $result;
		$data['csrfHash'] = $this->security->get_csrf_hash();

		echo json_encode($data);
	}

	public function city()
	{
		if (!$this->input->is_ajax_request()) {
			die('No direct script access allowed');
		}
		$this->load->model("Locationmodel", "location");
		$inputs = [
			'district'
		];
		$post = $this->input->post($inputs);
		$city = $this->location->getModuleBycolumn($this->location->city, "districtid", $post['district']);
		$result = '<select class="form-control" name="city" id="city"><option value="">------Select City------</option>';
		foreach ($city as $val) {
			$result .= '<option value="'.$val['id'].'">'.$val['name'].'</option>';
		}
		$result .= '</select>';
		$data['result'] = $result;
		$data['csrfHash'] = $this->security->get_csrf_hash();

		echo json_encode($data);
	}

	public function logout()
	{
		$user = [
			'id',
			'email',
			'user_type',
			'logged_in'
		];
		$this->session->unset_userdata($user);
		redirect(base_url());
	}

}
