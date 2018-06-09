<?php
require 'views/view_category_user.php';
class Category{
    public function loadAllCategory(){
        $vCategoryUser = new CategoryUser();
        $vCategoryUser->loadAllCategory();
    }
}