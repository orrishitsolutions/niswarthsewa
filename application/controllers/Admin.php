<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("admin/Adminmodel", 'login');
		$this->load->helper(array('form', 'url', 'email'));
		$this->load->library(['form_validation']);
		$methodName = $this->router->fetch_method();
		if ($this->session->userdata('logged_in') && $methodName === "index") {
			redirect(base_url('admin/dashboard'));
		} elseif (!$this->session->userdata('logged_in') && $methodName !== "index") {
			redirect(base_url('admin'));
		}
	}

	public function index()
	{
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"><strong>Danger!</strong> ', '</div>');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$inputs = ['email', 'password'];
		$post = $this->input->post($inputs);
		$data['login'] = $post;
		if ($this->form_validation->run() == FALSE) {
			$data['login']['error'] = validation_errors();
			$this->load->view('admin/admin', $data);
		} else {
			$login = $this->login->checkLogin($post['email'], $post['password']);
			if (!empty($login)) {
				$user = [
					'id' => $login->id,
					'name' => $login->name,
					'email' => $login->email,
					'logged_in' => TRUE
				];
				$this->session->set_userdata($user);
				redirect(base_url('admin/dashboard'));
			} else {
				$data['login']['error'] = '<div class="alert alert-danger"><strong>Danger!</strong>  Invalid login credentials.</div>';
				$this->load->view('admin/admin', $data);
			}
		}
	}

	public function dashboard()
	{
		$this->load->view('admin/dashboard');
	}

	public function category()
	{
		$category = $this->login->getCategories();

		$this->load->view('admin/category', ['category' => $category]);
	}

	public function change_status($module = "")
	{
		$param = $this->uri->segment(4);
		$this->login->changeStatus($module, $param);
		$this->session->set_flashdata('success', '<div class="alert alert-success"><strong>Success!</strong> Status has been changed successfully.</div>');
		redirect(base_url('admin/' . $module));
	}

	public function delete($module = "")
	{
		$param = $this->uri->segment(4);
		$this->login->delete($module, $param);
		$this->session->set_flashdata('success', '<div class="alert alert-success"><strong>Success!</strong> Data has been deleted successfully.</div>');
		redirect(base_url('admin/' . $module));
	}

	public function add_category()
	{
		$param = $this->uri->segment(3);
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"><strong>Danger!</strong> ', '</div>');
		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		$this->form_validation->set_rules('slug', 'Slug', 'trim|required');

		$inputs = [
			'title',
			'meta_title',
			'meta_keyword',
			'meta_description',
			'slug',
			'content',
			'tabs_text',
			'is_top_header',
			'is_top_navigation',
			'is_banner_part',
			'top_header_order',
			'top_navigation_order',
			'banner_part_order',
			'status'
		];
		$post = $this->input->post($inputs);
		$submit = $this->input->post('submit');
		$data['category'] = $post;
		if (!empty($param)) {
			$data['category'] = $this->login->getCategoriesById($param);
			$data['category']['param'] = $param;
		}
		$data['category']['category'] = $this->login->getModule("category");
		if ($this->form_validation->run() == FALSE) {
			$data['category']['error'] = validation_errors();
			$data['category']['success'] = $this->session->flashdata('success');
			$this->load->view('admin/add-category', $data);
		} else {
			if (!empty($_FILES['category_image']['name'])) {
				$image = $this->upload("category_image", 325, 225);
				$post['category_image'] = !empty($image['success']['file_name']) ? UPLOAD_URL . $image['success']['file_name'] : "";
			}
			if (empty($image['error']) && !empty($_FILES['top_header_image']['name'])) {
				$image = $this->upload("top_header_image", 100, 100);
				$post['top_header_image'] = !empty($image['success']['file_name']) ? UPLOAD_URL . $image['success']['file_name'] : "";
			}
			if (empty($image['error']) && !empty($_FILES['top_navigation_image']['name'])) {
				$image = $this->upload("top_navigation_image", 500, 500);
				$post['top_navigation_image'] = !empty($image['success']['file_name']) ? UPLOAD_URL . $image['success']['file_name'] : "";
			}
			if (empty($image['error']) && !empty($_FILES['banner_part_image']['name'])) {
				$image = $this->upload("banner_part_image", 64, 64);
				$post['banner_part_image'] = !empty($image['success']['file_name']) ? UPLOAD_URL . $image['success']['file_name'] : "";
			}
			if (empty($image['error']) && !empty($_FILES['tabs_image']['name'])) {
				$image = $this->upload("tabs_image", 200, 270);
				$post['tabs_image'] = !empty($image['success']['file_name']) ? UPLOAD_URL . $image['success']['file_name'] : "";
			}
			if (empty($image['error'])) {
				try {
					if (!empty($param)) {
						$post['id'] = $param;
						$update = $this->login->updateModule("category", $post);
					} else {
						$insert = $this->login->saveModule("category", $post);
					}
					$dbError = $this->db->error();
					if (!empty($dbError['message'])) {
						$data['category']['error'] = '<div class="alert alert-danger"><strong>Danger!</strong> ' . $dbError['message'] . '</div>';
					}
				} catch (\Exception $e) {
					$data['category']['error'] = '<div class="alert alert-danger"><strong>Danger!</strong> ' . $e->getMessage() . '</div>';
				}
			} else {
				$data['category']['error'] = '<div class="alert alert-danger"><strong>Danger!</strong> ' . $image['error'] . '</div>';
			}
			if ($data['category']['error']) {
				$this->load->view("admin/add-category", $data);
			} else {
				$this->session->set_flashdata('success', '<div class="alert alert-success"><strong>Success!</strong> Data has been saved successfully.</div>');
				redirect(base_url('admin/category'));
			}

		}

	}

	public function category_pages()
	{
		$category = $this->login->getCategoryPages();

		$this->load->view('admin/category-pages', ['category' => $category]);
	}

	public function pages()
	{
		$module = __FUNCTION__;
		$data = $this->login->getModule($module);

		$this->load->view('admin/' . $module, ['data' => $data]);
	}

	public function static_blocks()
	{
		$module = __FUNCTION__;
		$data = $this->login->getModule($module);

		$this->load->view('admin/' . $module, ['data' => $data]);
	}

	public function services()
	{
		$module = __FUNCTION__;
		$data = $this->login->getModule($module);

		$this->load->view('admin/' . $module, ['data' => $data]);
	}

	public function add_static_blocks()
	{
		$param = $this->uri->segment(3);
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"><strong>Danger!</strong> ', '</div>');
		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		$this->form_validation->set_rules('block_id', 'Block ID', 'trim|required');
		$this->form_validation->set_rules('content', 'Content', 'trim|required');
		$page = "static-blocks";
		$addPage = "add-" . $page;

		$inputs = [
			'title',
			'block_id',
			'content',
			'status'
		];
		$post = $this->input->post($inputs);
		$submit = $this->input->post('submit');
		$data['data'] = $post;
		if (!empty($param)) {
			$data['data'] = $this->login->getModuleById($page, $param);
			$data['data']['param'] = $param;
		}
		if ($this->form_validation->run() == FALSE) {
			$data['data']['error'] = validation_errors();
			$data['data']['success'] = $this->session->flashdata('success');
			$this->load->view('admin/' . $addPage, $data);
		} else {
			try {
				if (!empty($param)) {
					$post['id'] = $param;
					$update = $this->login->updateModule($page, $post);
				} else {
					$insert = $this->login->saveModule($page, $post);
				}
				$dbError = $this->db->error();
				if (!empty($dbError['message'])) {
					$data['data']['error'] = '<div class="alert alert-danger"><strong>Danger!</strong> ' . $dbError['message'] . '</div>';
				}
			} catch (\Exception $e) {
				$data['data']['error'] = '<div class="alert alert-danger"><strong>Danger!</strong> ' . $e->getMessage() . '</div>';
			}
			if ($data['data']['error']) {
				$this->load->view("admin/" . $addPage, $data);
			} else {
				$this->session->set_flashdata('success', '<div class="alert alert-success"><strong>Success!</strong> Data has been saved successfully.</div>');
				redirect(base_url('admin/' . $page));
			}
		}
	}

	public function add_services()
	{
		$param = $this->uri->segment(3);
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"><strong>Danger!</strong> ', '</div>');
		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		$this->form_validation->set_rules('content', 'Content', 'trim|required');
		$page = "services";
		$addPage = "add-" . $page;

		$inputs = [
			'page_id',
			'title',
			'content',
			'status'
		];
		$post = $this->input->post($inputs);
		$submit = $this->input->post('submit');
		$data['data'] = $post;
		if (!empty($param)) {
			$data['data'] = $this->login->getModuleById($page, $param);
			$data['data']['param'] = $param;
		}
		$data['data']['pages'] = $this->login->getModule("pages");
		if ($this->form_validation->run() == FALSE) {
			$data['data']['error'] = validation_errors();
			$data['data']['success'] = $this->session->flashdata('success');
			$this->load->view('admin/' . $addPage, $data);
		} else {
			try {
				if (!empty($param)) {
					$post['id'] = $param;
					$update = $this->login->updateModule($page, $post);
				} else {
					$insert = $this->login->saveModule($page, $post);
				}
				$dbError = $this->db->error();
				if (!empty($dbError['message'])) {
					$data['data']['error'] = '<div class="alert alert-danger"><strong>Danger!</strong> ' . $dbError['message'] . '</div>';
				}
			} catch (\Exception $e) {
				$data['data']['error'] = '<div class="alert alert-danger"><strong>Danger!</strong> ' . $e->getMessage() . '</div>';
			}
			if ($data['data']['error']) {
				$this->load->view("admin/" . $addPage, $data);
			} else {
				$this->session->set_flashdata('success', '<div class="alert alert-success"><strong>Success!</strong> Data has been saved successfully.</div>');
				redirect(base_url('admin/' . $page));
			}
		}
	}

	public function add_pages()
	{
		$param = $this->uri->segment(3);
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"><strong>Danger!</strong> ', '</div>');
		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		$this->form_validation->set_rules('slug', 'Slug', 'trim|required');
		$addPage = "add-pages";
		$page = "pages";

		$inputs = [
			'category',
			'title',
			'meta_title',
			'meta_keyword',
			'meta_description',
			'slug',
			'content',
			'status'
		];
		$post = $this->input->post($inputs);
		$submit = $this->input->post('submit');
		$data['data'] = $post;
		$data['controller'] = $this;
		if (!empty($param)) {
			$data['data'] = $this->login->getModuleById($page, $param);
			$data['data']['param'] = $param;
			$data['data']['category'] = $this->login->getModuleBycolumn("pages-category", ["pages_category_id"], "pages_id", $param);
		}
		if ($this->form_validation->run() == FALSE) {
			$data['data']['error'] = validation_errors();
			$data['data']['success'] = $this->session->flashdata('success');
			$this->load->view('admin/' . $addPage, $data);
		} else {
			if (!empty($_FILES['menu_icon_image']['name'])) {
				$image = $this->upload("menu_icon_image");
				$post['menu_icon_image'] = !empty($image['success']['file_name']) ? UPLOAD_URL . $image['success']['file_name'] : "";
			}
			if (empty($image['error']) && !empty($_FILES['banner_image']['name'])) {
				$image = $this->upload("banner_image");
				$post['banner_image'] = !empty($image['success']['file_name']) ? UPLOAD_URL . $image['success']['file_name'] : "";
			}
			if (empty($image['error']) && !empty($_FILES['side_image']['name'])) {
				$image = $this->upload("side_image");
				$post['side_image'] = !empty($image['success']['file_name']) ? UPLOAD_URL . $image['success']['file_name'] : "";
			}
			if (empty($image['error'])) {
				try {
					$categoryPage['category'] = $post['category'];
					unset($post['category']);
					if (!empty($param)) {
						$post['id'] = $param;
						$update = $this->login->updateModule($page, $post);
					} else {
						$insert = $this->login->saveModule($page, $post);
					}
					$dbError = $this->db->error();
					if (!empty($dbError['message'])) {
						$data['data']['error'] = '<div class="alert alert-danger"><strong>Danger!</strong> ' . $dbError['message'] . '</div>';
					} else {
						$mapId = !empty($param) ? $param : $insert;
						$arr = [];
						$this->login->deleteModuleMapping("pages-category", "pages_id", $mapId);
						foreach ($categoryPage['category'] as $cVal) {
							$arr['pages_id'] = $mapId;
							$arr['pages_category_id'] = $cVal;
							$this->login->updateModuleMapping("pages-category", $mapId, $arr);
						}
					}
				} catch (\Exception $e) {
					$data['data']['error'] = '<div class="alert alert-danger"><strong>Danger!</strong> ' . $e->getMessage() . '</div>';
				}
			} else {
				$data['data']['error'] = '<div class="alert alert-danger"><strong>Danger!</strong> ' . $image['error'] . '</div>';
			}
			if ($data['data']['error']) {
				$this->load->view("admin/" . $addPage, $data);
			} else {
				$this->session->set_flashdata('success', '<div class="alert alert-success"><strong>Success!</strong> Data has been saved successfully.</div>');
				redirect(base_url('admin/' . $page));
			}
		}
	}

	public function add_category_pages()
	{
		$param = $this->uri->segment(3);
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"><strong>Danger!</strong> ', '</div>');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$addPage = "add-category-pages";
		$page = "category-pages";

		$inputs = [
			'name',
			'status'
		];
		$post = $this->input->post($inputs);
		$submit = $this->input->post('submit');
		$data['category'] = $post;
		if (!empty($param)) {
			$data['category'] = $this->login->getModuleById($page, $param);
			$data['category']['param'] = $param;
		}
		if ($this->form_validation->run() == FALSE) {
			$data['category']['error'] = validation_errors();
			$data['category']['success'] = $this->session->flashdata('success');
			$this->load->view('admin/' . $addPage, $data);
		} else {
			try {
				if (!empty($param)) {
					$post['id'] = $param;
					$update = $this->login->updateModule($page, $post);
				} else {
					$insert = $this->login->saveModule($page, $post);
				}
				$dbError = $this->db->error();
				if (!empty($dbError['message'])) {
					$data['category']['error'] = '<div class="alert alert-danger"><strong>Danger!</strong> ' . $dbError['message'] . '</div>';
				}
			} catch (\Exception $e) {
				$data['category']['error'] = '<div class="alert alert-danger"><strong>Danger!</strong> ' . $e->getMessage() . '</div>';
			}
			if ($data['category']['error']) {
				$this->load->view("admin/" . $addPage, $data);
			} else {
				$this->session->set_flashdata('success', '<div class="alert alert-success"><strong>Success!</strong> Data has been saved successfully.</div>');
				redirect(base_url('admin/' . $page));
			}
		}
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

	public function products()
	{
		$products = $this->login->getProducts();

		$this->load->view('admin/products', ['products' => $products]);
	}

	public function add_products()
	{
		$param = $this->uri->segment(3);
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"><strong>Danger!</strong> ', '</div>');
		$this->form_validation->set_rules('product_type_id', 'Type Name', 'trim|required');
		$this->form_validation->set_rules('users_id', 'Users', 'trim|required');
		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		$this->form_validation->set_rules('sku', 'sku', 'trim|required');
		$this->form_validation->set_rules('quantity', 'Quantity', 'trim|required');
		$addPage = "add-products";
		$page = "products";

		$inputs = [
			'category',
			'product_type_id',
			'attributes_set_id',
			'users_id',
			'title',
			'meta_title',
			'meta_keyword',
			'meta_description',
			'slug',
			'sku',
			'quantity',
			'content',
			'status'
		];
		$post = $this->input->post($inputs);
		$submit = $this->input->post('submit');
		$data['data'] = $post;
		if (!empty($param)) {
			$data['data'] = $this->login->getModuleById($page, $param);
			$data['data']['param'] = $param;
			$data['data']['category'] = $this->login->getModuleBycolumn("product-category", ["category_id"], "product_id", $param);
		}
		$data['data']['users'] = $this->login->getModule("users");
		$data['data']['attribute_set'] = $this->login->getModule("product-attributes-set");
		$data['data']['product_type'] = $this->login->getModule("product-type");
		$data['controller'] = $this;
		if ($this->form_validation->run() == FALSE) {
			$data['data']['error'] = validation_errors();
			$data['data']['success'] = $this->session->flashdata('success');
			$this->load->view('admin/' . $addPage, $data);
		} else {
			$post['slug'] = $this->slugify($post['title']);
			if (!empty($_FILES['menu_icon_image']['name'])) {
				$image = $this->upload("menu_icon_image");
				$post['menu_icon_image'] = !empty($image['success']['file_name']) ? UPLOAD_URL . $image['success']['file_name'] : "";
			}
			if (empty($image['error']) && !empty($_FILES['banner_image']['name'])) {
				$image = $this->upload("banner_image");
				$post['banner_image'] = !empty($image['success']['file_name']) ? UPLOAD_URL . $image['success']['file_name'] : "";
			}
			if (empty($image['error']) && !empty($_FILES['side_image']['name'])) {
				$image = $this->upload("side_image");
				$post['side_image'] = !empty($image['success']['file_name']) ? UPLOAD_URL . $image['success']['file_name'] : "";
			}
			if (empty($image['error'])) {
				try {
					$categoryPage['category'] = $post['category'];
					unset($post['category']);
					unset($post['users']);
					unset($post['attribute_set']);
					unset($post['product_type']);
					if (!empty($param)) {
						$post['id'] = $param;
						$post['unique_id'] = md5($param.$post['users_id']);
						$update = $this->login->updateModule($page, $post);
					} else {
						$insert = $this->login->saveModule($page, $post);
					}
					$dbError = $this->db->error();
					if (!empty($dbError['message'])) {
						$data['data']['error'] = '<div class="alert alert-danger"><strong>Danger!</strong> ' . $dbError['message'] . '</div>';
					} else {
						$mapId = !empty($param) ? $param : $insert;
						if (!empty($mapId)) {
							$update['id'] = $mapId;
							$update['unique_id'] = md5($insert . $post['users_id']);
							$this->login->updateModule($page, $update);
						}
						$arr = [];
						$this->login->deleteModuleMapping("product-category", "product_id", $mapId);
						$this->login->deleteModuleMapping("users-products", "product_id", $mapId);
						$this->login->deleteModuleMapping("product-product-type", "product_id", $mapId);
						$this->login->deleteModuleMapping("product-attributes-sku", "product_id", $mapId);
						foreach ($categoryPage['category'] as $cVal) {
							$arr['product_id'] = $mapId;
							$arr['category_id'] = $cVal;
							$this->login->updateModuleMapping("product-category", $mapId, $arr);
						}
						$userArr['product_id'] = $mapId;
						$userArr['users_id'] = $data['data']['users_id'];
						$this->login->updateModuleMapping("users-products", $mapId, $userArr);
						$productTypeMapping['product_id']  = $mapId;
						$productTypeMapping['product_type_id']  = $data['data']['product_type_id'];
						$this->login->updateModuleMapping("product-product-type", $mapId, $productTypeMapping);
						if ($data['data']['product_type_id'] == 2) {
							$productId = $mapId;
							$qty = $post['quantity'];
							$attributeSetId = $data['data']['attributes_set_id'];
							$productToAttribute = $this->login->assignProductToAttribute($productId, $qty, $attributeSetId);
							foreach ($productToAttribute as $ptaVal) {
								$slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $data['data']['slug'])));
								$ptaMapping['product_id'] = $productId;
								$ptaMapping['product_attributes_value_id'] = $ptaVal->product_attributes_value_id;
								$ptaMapping['sku'] = $ptaVal->sku . "-" . $slug;
								$ptaMapping['price'] = $ptaVal->price;
								$ptaMapping['quantity'] = $ptaVal->quantity;
								$this->login->updateModuleMapping("product-attributes-sku", $productId, $ptaMapping);
							}
						}
					}
				} catch (\Exception $e) {
					$data['data']['error'] = '<div class="alert alert-danger"><strong>Danger!</strong> ' . $e->getMessage() . '</div>';
				}
			} else {
				$data['data']['error'] = '<div class="alert alert-danger"><strong>Danger!</strong> ' . $image['error'] . '</div>';
			}
			if ($data['data']['error']) {
				$this->load->view("admin/" . $addPage, $data);
			} else {
				$this->session->set_flashdata('success', '<div class="alert alert-success"><strong>Success!</strong> Data has been saved successfully.</div>');
				redirect(base_url('admin/' . $page));
			}
		}
	}

	public function logout()
	{
		$user = [
			'id',
			'name',
			'email',
			'logged_in'
		];
		$this->session->unset_userdata($user);
		redirect(base_url('admin'));
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
}
