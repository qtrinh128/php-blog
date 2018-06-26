<?php
	class ViewPostAdmin{
		
		
		
		private static $instance = null;
		
		private function __construct(){}
		
		public static function getInstance(){
			if(!self::$instance){
				self::$instance = new ViewPostAdmin();
			}
			return self::$instance;
		}
		
		public function loadAllPost($data){
			require 'template/post_temp_admin/list_post.php';
		}
		public function loadContentPost($data){
			require 'template/post_temp_admin/content_post.php';
		}
		public function pageAdd($category){
			require 'template/post_temp_admin/page_add_post.php';
		}
		public function editPost($data, $category){
			require 'template/post_temp_admin/edit_post.html';
		}
	}	