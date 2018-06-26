<?php
	class CategoryUser{
		
		private static $instance = null;
		
		private function __construct(){}
		
		public static function getInstance(){
			if(!self::$instance){
				self::$instance = new CategoryUser();
			}
			return self::$instance;
		}
		
		
		public function loadAllCategory($data){
			require 'template/category_temp_user/Category.php';
		}
		public function loadListPostInCategory($data){
			require 'template/category_temp_user/listPostInCategory.php';
		}
	}	