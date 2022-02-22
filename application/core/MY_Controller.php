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

	function generateRandomString($length = 10) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}

	public function slugify($text, $divider = '-')
	{
		// replace non letter or digits by divider
		$text = preg_replace('~[^\pL\d]+~u', $divider, $text);

		// transliterate
		$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

		// remove unwanted characters
		$text = preg_replace('~[^-\w]+~', '', $text);

		// trim
		$text = trim($text, $divider);

		// remove duplicate divider
		$text = preg_replace('~-+~', $divider, $text);

		// lowercase
		$text = strtolower($text);

		if (empty($text)) {
			return 'n-a';
		}

		return $text;
	}

	public function upload($input, $width = 0, $height = 0)
	{
		$config['upload_path'] = UPLOAD_DIR;
		$config['allowed_types'] = 'gif|jpg|jpeg|bmp|png';
		$config['max_size'] = 2048;
		if (!empty($width)) {
			$config['max_width'] = $width;
		}
		if (!empty($height)) {
			$config['max_height'] = $height;
		}
		$config['file_name'] = $this->login->generateRandomString(12) . time();

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload($input)) {
			$data = ['error' => $this->upload->display_errors()];
		} else {
			$data = ['success' => $this->upload->data()];
		}

		return $data;
	}

	public function resend($link = "", $to = "", $subject = "", $message = "")
	{
		if ($this->input->is_ajax_request()) {
			$post = $this->input->post(['module']);
			if (!empty($post['module']) && $post['module'] == "login") {
				$to = $post['to'];
				$subject = "Niswarth Sewa: Email Verification";
				$message = "Hello, <br><br>Please visit below link to verify your account.<br><br>' . $link . '<br><br>--<br>All the best,<br>Niswarth Sewa Team";
				$link = "";
				$this->load->model("Signupmodel", "login");
				$login = $this->login->checkEmailExists($to);
				if (!empty($login)) {
					$postUpdate['id'] = $login->id;
					$postUpdate['verify'] = md5($postUpdate['id'] . $to);
					$this->login->updateData($postUpdate);
					$this->resend($link, $to, $subject, $message);
				}
			}
		}
		if (!$this->input->is_ajax_request() && empty($link)) {
			die('No direct script access allowed');
		}
		$from = "noreply@niswarthsewa.com";
		$config = [
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE
		];
		$this->load->library('email', $config);
		$this->email->from($from, 'Niswarth Sewa');
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->send();
		$data['csrfHash'] = $this->security->get_csrf_hash();
		#$this->sendMail($from, $to, $subject, $message);

		echo json_encode($data);
	}

	function sendMail($from, $to, $subject, $message)
	{
		$config = [
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'thisankitisunique@gmail.com', // change it to yours
			'smtp_pass' => 'xxxxx', // change it to yours
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE
		];

		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from($from); // change it to yours
		$this->email->to($to);// change it to yours
		$this->email->subject($subject);
		$this->email->message($message);
		if ($this->email->send()) {
			return 1;
		} else {
			return show_error($this->email->print_debugger());
		}

	}

	public function check_strong_password($str)
	{
		if (preg_match('#[0-9]#', $str) && preg_match('#[a-zA-Z]#', $str)) {
			return TRUE;
		}
		$this->form_validation->set_message('check_strong_password', 'The password field must be contains at least one letter and one digit.');
		return FALSE;
	}
}
