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
		$this->load->model("Productsmodel", "product");
		$product = $this->product->getProductBySlug($slug);
		$leftNavigation = $this->category->categoryTreeByColumn(['parent_id' => 0]);

		$this->load->view('website/product',
			[
				"topHeader" => $this->topHeader,
				"topNavigationCategories" => $this->topNavigation, //
				"controller" => $this, //
				"product" => $product,
				"leftNavigation" => $leftNavigation
			]
		);
	}


}
