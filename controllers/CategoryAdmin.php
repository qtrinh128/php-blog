<?php
require 'views/view_category_admin.php';
require 'models/model_category.php';
class CategoryAdmin{
    public function loadAllCategory(){
    	$category = CategoryModel::getInstance()->getAllCategory();
		ViewCategoryAdmin::getInstance()->loadAllCategory($category);
    }
    public function showListPostInCategory(){
        $id = $_GET['id'];
        $post = CategoryModel::getInstance()->showListPostInCategory($id);
        ViewCategoryAdmin::getInstance()->loadListPostInCategory($post);
    }
    public function showPageAdd(){
    	ViewCategoryAdmin::getInstance()->showPageAdd();
    }
    public function add(){
    	if(isset($_POST['btn_add'])){
    		if(!empty($_POST['name_category'])){
				$name = trim(strtoupper($_POST['name_category']));
    			if(CategoryModel::getInstance()->add($name)){
    				header('location: ?controller=CategoryAdmin&action=loadAllCategory');
    			}else{
    				echo"<script>alert('Vui lòng thử lại'); window.location='?controller=CategoryAdmin&action=showPageAdd';</script>";
    			}
    		}else{
    			header('location: ?controller=CategoryAdmin&action=showPageAdd');
    		}
    	}else{
    		header('location: ?controller=CategoryAdmin&action=showPageAdd');
    	}
    	
    }
}