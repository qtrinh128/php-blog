<?php
require 'views/view_category_admin.php';
class CategoryAdmin{
    public function loadAllCategory(){
        $vCategoryAdmin = new ViewCategoryAdmin();
        $vCategoryAdmin->loadAllCategory();
    }
}