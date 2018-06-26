<?php
require 'views/view_category_user.php';
require 'models/model_category.php';
class Category{
    public function loadAllCategory(){
        CategoryUser::getInstance()->loadAllCategory(CategoryModel::getInstance()->getAllCategory());
    }
    public function showListPostInCategory(){
        $id = $_GET['id'];
        CategoryUser::getInstance()->loadListPostInCategory(CategoryModel::getInstance()->showListPostInCategory($id));
    }
}