<?php
defined('BASEPATH') or exit('No direct script access allowed');


class MY_Model extends CI_Model
{

	/**
	 * @var string $categoryTable
	 */
	protected $categoryTable;

	public function __construct()
	{
		parent::__construct();
		$this->categoryTable = "ns_category";
	}

	/**
	 * @param array $parentId
	 * @return mixed
	 */
	public function getCategoriesByParent($parentId = [])
	{
		$this->db->select(['id', 'title', 'slug', 'banner_part_image', 'category_image', 'tabs_image', 'tabs_text'])->from($this->categoryTable);
		$this->db->where_in("parent_id", $parentId);
		$this->db->where("status", 1);
		$query = $this->db->get();

		return $query->result();
	}

	/**
	 * @param array $columns
	 * @return mixed
	 */
	public function categoryTreeByColumn($columns = [])
	{
		$columns = array_merge($columns, ["status" => 1]);
		return $this->db->get_where($this->categoryTable, $columns)->result();
	}

	/**
	 * @param int $id
	 * @return mixed
	 */
	public function categoryById($id = 0)
	{
		$this->db->select(['title', 'slug', 'banner_part_image', 'category_image', 'tabs_text', 'tabs_image'])->from($this->categoryTable);
		$this->db->where("id", $id);
		$this->db->where("status", 1);
		$query = $this->db->get();

		return $query->row();
	}

	/**
	 * @param array $ids
	 * @return mixed
	 */
	public function allCategoryByIds($ids = [])
	{
		$this->db->select(['title', 'slug', 'banner_part_image', 'category_image'])->from($this->categoryTable);
		$this->db->where_in("id", $ids);
		$this->db->where("status", 1);
		$query = $this->db->get();

		return $query->result();
	}
}
