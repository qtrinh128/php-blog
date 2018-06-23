<?php
class CategoryUser{
    public function loadAllCategory($data){
        require 'template/category_temp_user/Category.php';
    }
    public function loadListPostInCategory($data){
        require 'template/category_temp_user/listPostInCategory.php';
    }
}