<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Categoriesmodel"); //
		$this->load->model("Pagesmodel"); //
	}

	public function index()
	{
		$slug = $this->uri->segment(2);
		$pid = $this->input->get('pid', TRUE);
		$this->load->model("Productsmodel", "product");
		$product = $this->product->getProductByUniqueId($pid);
		$donerDescription = $this->product->getProductBySlug($slug);
		$leftNavigation = $this->category->categoryTreeByColumn(['parent_id' => 0]);
		//echo "<pre>";print_r($product);die;

		$this->load->view('website/product',
			[
				"topHeader" => $this->topHeader,
				"topNavigationCategories" => $this->topNavigation, //
				"controller" => $this, //
				"product" => $product,
				"leftNavigation" => $leftNavigation,
				"donerDescription" => $donerDescription,
			]
		);
	}


}
