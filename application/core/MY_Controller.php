<?php 
class MY_Controller extends CI_Controller{

	/**
	 * @var $topHeader
	 */
	protected $topHeader;

	/**
	 * @var $topNavigation
	 */
	protected $topNavigation;

	public function __construct(){
		parent::__construct();
		$this->load->model("MY_Model", "category");
		$this->topHeader = $this->category->categoryTreeByColumn(["is_top_header" => 1]);
		$this->topNavigation = $this->category->categoryTreeByColumn(["is_banner_part" => 1, 'parent_id' => 0]);
	}
}
