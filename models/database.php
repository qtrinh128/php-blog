<?php
class DataBase
{
	private $hostname = 'localhost';
	private $username = 'root';
	private $password = '';
	private $db_name = 'blog';
	private $conn = null;
	private $result = null;

	function connect(){
		$this->conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->db_name);
		mysqli_set_charset($this->conn, 'utf8');
	}
	function query($sql){

		$this->result = mysqli_query($this->conn, $sql);
		mysqli_query($this->conn, "UTF8");
	}
	function row(){
		if($this->result){
			$row = mysqli_num_rows($this->result);
		}else{
			$row = 0;
		}
		return $row;
	}
	function fetch(){
		if($this->result){
			$data = mysqli_fetch_assoc($this->result);
		}else{
			$data = 0;
		}
		return $data;
	}
}