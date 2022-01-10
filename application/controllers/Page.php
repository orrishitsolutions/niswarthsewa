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
		$this->load->model("PageInfo");
		$this->load->model("Services");
		$slug = substr($this->uri->segment(1), 0,-5);
		$page = $this->Pagesmodel->getPageBySlug($slug);
		$pageInfo = $this->PageInfo->pageInfoByPageId($page->id);
		$service = $this->Services->pageServicesByPageId($page->id);

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


}
