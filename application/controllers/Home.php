<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{
	private $bannerCategories;

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model("Categoriesmodel");
		$this->load->model("Productsmodel");
		$this->load->model("Pagesmodel");
		$this->bannerCategories = $this->Categoriesmodel->categoryTreeByColumn(["is_banner_part" => 1]);
	}

	public function index()
	{
		$data['quotation'] = $this->session->flashdata('quotation');
		$data['quotation']['success'] = $this->session->flashdata('success');
		$data['quotation']['error'] = $this->session->flashdata('error');
		$this->load->view(
			'website/index',
			[
				"topHeader" => $this->topHeader,
				"topNavigationCategories" => $this->topNavigation,
				"controller" => $this,
				"bannerCategories" => $this->bannerCategories,
				"data" => $data
			]
		);
	}

	public function enquiry()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('message', 'Message', 'required');
		$this->form_validation->set_rules('quantity', 'Quantity', 'required|numeric');
		$this->form_validation->set_rules('piece', 'Piece/pieces', 'required|numeric');

		$data = ['message', 'quantity', 'piece'];
		$post = $this->input->post($data);
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('quotation', $post);
			$this->session->set_flashdata('error', validation_errors());
			redirect(base_url());
		} else {
			if (!$this->session->userdata('logged_in')) {
				$this->session->set_flashdata('error', '<div class="error">To request for quotation, you need to login first.</div>');
				redirect(base_url());
			}

			$to = $this->session->userdata('email');
			$subject = "Niswarth Sewa: One Request, Multiple Quotes";
			$message = "Hello, <br><br>Message: ".$post['message']."<br>Quantity: ".$post['quantity']."<br>Piece: ".$post['piece']."<br><br>--<br>All the best,<br>Niswarth Sewa Team";
			$from = $this->session->userdata('email');

			$this->session->set_flashdata('success', '<div class="success">Your request has been sent.</div>');
			redirect(base_url());
		}
	}


}
