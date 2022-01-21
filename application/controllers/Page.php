<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Categoriesmodel"); //
	}

	/**
	 *
	 */
	public function index()
	{
		$this->load->model("Pagesmodel");
		$this->load->model("Pageinfomodel");
		$this->load->model("Servicesmodel");
		$slug = substr($this->uri->segment(1), 0,-5);
		$page = $this->Pagesmodel->getPageBySlug($slug);
		$pageInfo = !empty($page->id) ? $this->Pageinfomodel->pageInfoByPageId($page->id) : "";
		$service = !empty($page->id) ? $this->Servicesmodel->pageServicesByPageId($page->id) : "";

		$this->load->view('website/page',
			[
				"topHeader" => $this->topHeader,
				"topNavigationCategories" => $this->topNavigation, //
				"controller" => $this, //
				"page" => $page,
				"pageInfo" => $pageInfo,
				"service" => $service
			]
		);
	}


	public function blog_view()
	{
		$this->load->model("Pagesmodel");
		$this->load->model("Pageinfomodel");
		$this->load->model("Servicesmodel");
		$slug = substr($this->uri->segment(1), 0,-5);
		$page = $this->Pagesmodel->getPageBySlug($slug);
		$pageInfo = !empty($page->id) ? $this->Pageinfomodel->pageInfoByPageId($page->id) : "";
		$service = !empty($page->id) ? $this->Servicesmodel->pageServicesByPageId($page->id) : "";

		$BlogAll = $this->db->from('ns_blog')->order_by('id','desc')->get()->result_array();

		// echo "<pre>";
		// print_r($BlogAll);

		$this->load->view('website/blog',
			[
				"topHeader" => $this->topHeader,
				"topNavigationCategories" => $this->topNavigation, //
				"controller" => $this, //
				"page" => $page,
				"pageInfo" => $pageInfo,
				"service" => $service,
				"BlogAll" => $BlogAll
			]);
	}
}
