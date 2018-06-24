<?php
require 'views/view_post_admin.php';
require 'models/model_post.php';
require 'models/model_category.php';
class PostAdmin{
    public function loadAllPost(){
        $mModel = new PostModel();
        $vPostAdmin = new ViewPostAdmin();
        $vPostAdmin->loadAllPost($mModel->getAllPost());
    }
    public function showContentPost(){
        $mPostUser = new PostModel();

        $vPostAdmin = new ViewPostAdmin();
        $vPostAdmin->loadContentPost($mPostUser->getContentPost($_GET['id']));
    }
    public function editPost(){
        $id = $_GET['id'];
        $mModelCategory = new CategoryModel();
        $category = $mModelCategory->getAllCategory();
        $mModel = new PostModel();
        $data = $mModel->getContentPost($id);
        $vPostAdmin = new ViewPostAdmin();
        $vPostAdmin->editPost($data, $category);

    }
    public function deletePost(){
        $id = $_GET['id'];
        $mModel = new PostModel();
        $mModel->deletePost($id);
        echo"<script>alert('Xóa thành công'); window.location='?controller=PostAdmin&action=loadAllPost';</script>";
    }
}