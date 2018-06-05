<?php
require 'models/database.php';
class AdminModel extends DataBase{
	// check the login via usename and password
	function check_login($user, $pass){
		$this->connect();
		$sql = 'SELECT * FROM `admin` WHERE username = "'.$user.'" and password = "'.$pass.'"';
		$this->query($sql);
		return $this->row();
	}
	// Get the data of the entire article
	function get_all_post(){
		$array_data = [];
		$this->connect();
		$sql = 'SELECT * FROM post';
		$this->query($sql);
		while($data = $this->fetch()){
			$array_data[] = $data;
		}
		return $array_data;
	}

	// add a category
	function add_category($name_category){
		$this->connect();
		$sql = 'INSERT INTO `category` (`id`, `name_category`) VALUES (NULL, "'.$name_category.'")';
		$this->query($sql);
	}

	//get the data of the entire category
	function get_all_category(){
		$array_data = [];
		$this->connect();
		$sql = 'SELECT * FROM category';
		$this->query($sql);
		while($data = $this->fetch()){
			$array_data[] = $data;
		}
		return $array_data;
	}
	// lấy chi tiết danh mục
	function get_detail_category($id){
		// $array_data = [];
		$this->connect();
		$sql = 'SELECT * FROM category WHERE id ='.$id;
		$this->query($sql);
		$data = $this->fetch();
		return $data;
	}
	// xóa danh mục
	function delete_category_by_id($id){
		$this->connect();
		$sql  = 'DELETE FROM `category` WHERE `category`.`id` ='.$id;
		$this->query($sql);
	}
	// sửa danh mục
	function edit_category_by_id($name_category, $id){
		$this->connect();
		$sql  = 'UPDATE `category` SET `name_category` = "'.$name_category.'" WHERE `id` ='.$id;
		$this->query($sql);
	}
}