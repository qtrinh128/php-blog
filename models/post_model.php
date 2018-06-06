<?php
require 'models/database.php';
class PostModel extends DataBase{
	function get_detail_post($id){
		$array_data = [];
		$this->connect();
		$sql = 'SELECT * FROM `post` WHERE id = '.$id;
		$this->query($sql);
		$array_data = $this->fetch();
		return $array_data;
	}
	
	function get_list_category(){
		$array_data = [];
		$this->connect();
		$sql = 'SELECT * FROM category';
		$this->query($sql);
		while($data = $this->fetch()){
			$array_data[] = $data;
		}
		return $array_data;
	}
}