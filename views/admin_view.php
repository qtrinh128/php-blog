<?php
class AdminView{
	public function show(){
		require 'temp_admin/home_temp.php';
	}
	public function show_page_login(){
		require 'temp_admin/login_temp.php';
	}
	public function show_page_login_success($data){
		require 'temp_admin/home_admin_temp.php';
	}
	public function show_page_add_category(){
		require 'temp_admin/add_category_temp.php';
	}
	public function show_page_category($data){
		require 'temp_admin/list_category_temp.php';
	}
	public function show_page_detail_category($data){
		require 'temp_admin/detail_category_temp.php';
	}
}