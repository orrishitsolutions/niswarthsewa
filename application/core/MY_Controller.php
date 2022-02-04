<?php 
class MY_Controller extends CI_Controller{

	/**
	 * @var $currentUser[]
	 */
	public $currentUser;

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
		date_default_timezone_set('Asia/Kolkata');
		$this->load->model("MY_Model", "category");
		$this->topHeader = $this->category->categoryTreeByColumn(["is_top_header" => 1]);
		$this->topNavigation = $this->category->categoryTreeByColumn(["is_banner_part" => 1, 'parent_id' => 0]);
		$this->currentUser = $this->session->userdata();
	}
}
