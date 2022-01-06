<?php

class Categoriesmodel extends MY_Model
{

	/**
	 * @param int $parentId
	 * @return mixed
	 */
	public function getCategory($parentId = 0)
	{
		return $this->db->get_where($this->categoryTable, ["status" => 1, "parent_id" => $parentId])->result();
	}

	/**
	 * @param string $slug
	 * @return mixed
	 */
	public function getCategoryBySlug($slug = "")
	{
		return $this->db->get_where($this->categoryTable, ["status" => 1, "slug" => $slug])->row();
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
}
