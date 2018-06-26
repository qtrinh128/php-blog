<?php
	class ViewCategoryAdmin{
		
		private static $instance = null;
		
		private function __construct(){}
		
		public static function getInstance(){
			if(!self::$instance){
				self::$instance = new ViewCategoryAdmin();
			}
			return self::$instance;
		}
		
		public function loadAllCategory($category){
			require 'template/category_temp_admin/Category.php';
		}
		public function loadListPostInCategory($post){
			require 'template/category_temp_admin/listPostInCategory.php';
		}
		public function showPageAdd(){
			require 'template/category_temp_admin/pageAddCategory.php';
		}
	}	