<?php
require 'views/view_category_user.php';
require 'models/model_category.php';
class Category{
    public function loadAllCategory(){
        $mCategory = new CategoryModel();
        $vCategoryUser = new CategoryUser();
        $vCategoryUser->loadAllCategory($mCategory->getAllCategory());
    }
    public function showListPostInCategory(){
        $id = $_GET['id'];
        $mCategory = new CategoryModel();
        $vCategoryUser = new CategoryUser();
        $vCategoryUser->loadListPostInCategory($mCategory->showListPostInCategory($id));
    }
}