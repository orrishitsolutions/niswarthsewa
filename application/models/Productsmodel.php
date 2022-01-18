<?php

class Productsmodel extends CI_Model
{

	/**
	 * @var string
	 */
	private $product;

	/**
	 * @var string
	 */
	private $category;

	/**
	 * @var string
	 */
	private $productCategory;

	/**
	 * @var string
	 */
	private $usersProduct;

	/**
	 * @var string
	 */
	private $users;

	/**
	 * @var string
	 */
	private $productImage;


	private $productAttributesSku;
	private $productAttributesValue;
	private $productAttributes;

	public function __construct()
	{
		parent::__construct();
		$this->product = "ns_products";
		$this->category = "ns_category";
		$this->productCategory = "ns_product_category";
		$this->productImage = "ns_product_image";
		$this->usersProduct = "ns_users_products";
		$this->users = "ns_users";
		$this->productAttributesSku = "ns_product_attributes_sku";
		$this->productAttributesValue = "ns_product_attributes_value";
		$this->productAttributes = "ns_product_attributes";
	}

	/**
	 * @param int $categoryId
	 * @return mixed
	 */
	public function getProductsByCategory($categoryId = 0)
	{
		$this->db->select($this->category . ".title as category_title, " . $this->product . ".title, " . $this->product . ".slug, " . $this->category . ".category_image, (SELECT ".$this->productImage.".`image` from ".$this->productImage." WHERE ".$this->productImage.".`is_main_image` = 1 AND ".$this->productImage.".`product_id`=`ns_products`.`id`) as image");
		$this->db->from($this->product);
		$this->db->join($this->productCategory, $this->productCategory . '.product_id = ' . $this->product . '.id', "inner");
		$this->db->join($this->category, $this->category . '.id = ' . $this->productCategory . '.category_id', "inner");
		$this->db->join($this->productImage, $this->product . '.id = ' . $this->productImage . '.product_id', "left");
		$this->db->where($this->category . '.id', $categoryId);
		//$this->db->where($this->productImage . '.is_main_image', 1);
		$this->db->where($this->product . '.status', 1);
		$this->db->group_by($this->product . '.id');

		return $this->db->get()->result();
	}


	public function getProductsByAttribute($categoryId = 0, $filter = "")
	{
		$filters = explode("&", $filter);

		$this->db->select($this->category . ".title as category_title, " . $this->product . ".title, " . $this->product . ".slug, " . $this->category . ".category_image, " . $this->productImage . ".image");
		$this->db->from($this->productAttributes);
		$this->db->join($this->productAttributesValue, $this->productAttributes . '.id = ' . $this->productAttributesValue . '.product_attributes_id', "inner");
		$this->db->join($this->productAttributesSku, $this->productAttributesValue . '.id = ' . $this->productAttributesSku . '.product_attributes_value_id', "inner");
		$this->db->join($this->product, $this->productAttributesSku . '.product_id = ' . $this->product . '.id', "inner");
		$this->db->join($this->productCategory, $this->productCategory . '.product_id = ' . $this->product . '.id', "inner");
		$this->db->join($this->category, $this->category . '.id = ' . $this->productCategory . '.category_id', "inner");
		$this->db->join($this->productImage, $this->product . '.id = ' . $this->productImage . '.product_id', "left");
		foreach ($filters as $val) {
			if (!empty($val)) {
				$attribute = substr($val, 0, strpos($val, "-"));
				$attributeValue = substr($val, strpos($val, "=") + 1);
				$this->db->or_group_start();
				$this->db->where($this->productAttributes . '.slug', $attribute);
				$this->db->where($this->productAttributesValue . '.name', $attributeValue);
				$this->db->group_end();
			}
		}
		$this->db->where($this->category . '.id', $categoryId);
		$this->db->where($this->product . '.status', 1);
		$this->db->group_by($this->product . ".id");
		$this->db->order_by($this->product . '.title', 'asc');

		return $this->db->get()->result();
	}

	/**
	 * @param int $categoryId
	 * @return mixed
	 */
	public function getAttributesByCategory($categoryId = 0)
	{
		$this->db->select($this->productAttributes . ".id, " . $this->productAttributes . ".slug, " . $this->productAttributes . ".name");
		$this->db->from($this->productAttributes);
		$this->db->join($this->productAttributesValue, $this->productAttributes . '.id = ' . $this->productAttributesValue . '.product_attributes_id', "inner");
		$this->db->join($this->productAttributesSku, $this->productAttributesValue . '.id = ' . $this->productAttributesSku . '.product_attributes_value_id', "inner");
		$this->db->join($this->product, $this->productAttributesSku . '.product_id = ' . $this->product . '.id', "inner");
		$this->db->join($this->productCategory, $this->productCategory . '.product_id = ' . $this->product . '.id', "inner");
		$this->db->join($this->category, $this->category . '.id = ' . $this->productCategory . '.category_id', "inner");
		$this->db->where($this->category . '.id', $categoryId);
		$this->db->where($this->product . '.status', 1);
		$this->db->group_by($this->productAttributes . ".name");
		$this->db->order_by($this->productAttributes . '.ordering', 'asc');

		return $this->db->get()->result();
	}

	/**
	 * @param int $id
	 * @return mixed
	 */
	public function getAttributesValueByAttributeId($id = 0)
	{
		$this->db->select($this->productAttributesValue . ".id, " . $this->productAttributesValue . ".name");
		$this->db->from($this->productAttributes);
		$this->db->join($this->productAttributesValue, $this->productAttributes . '.id = ' . $this->productAttributesValue . '.product_attributes_id', "inner");
		$this->db->join($this->productAttributesSku, $this->productAttributesValue . '.id = ' . $this->productAttributesSku . '.product_attributes_value_id', "inner");
		$this->db->where($this->productAttributesValue . '.product_attributes_id', $id);
		$this->db->group_by($this->productAttributesValue . ".name");
		$this->db->order_by($this->productAttributesValue . '.ordering', 'asc');

		return $this->db->get()->result();
	}

	/**
	 * @param string $slug
	 * @return mixed
	 */
	public function getProductBySlug($slug = "")
	{
		$this->db->select("*");
		$this->db->from($this->product);
		$this->db->join($this->productImage, $this->product . '.id = ' . $this->productImage . '.product_id', "left");
		$this->db->join($this->usersProduct, $this->product . '.id = ' . $this->usersProduct . '.product_id', "left");
		$this->db->join($this->users, $this->usersProduct . '.users_id = ' . $this->users . '.id', "left");
		$this->db->where($this->product . '.slug', $slug);
		$this->db->where($this->product . '.status', 1);

		return $this->db->get()->result();
	}

}
