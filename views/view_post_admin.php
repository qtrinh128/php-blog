<?php
class ViewPostAdmin{
    public function loadAllPost($data){
        require 'template/post_temp_admin/list_post.php';
    }
    public function loadContentPost($data){
        require 'template/post_temp_admin/content_post.php';
    }
    public function editPost($data, $category){
        require 'template/post_temp_admin/edit_post.php';
    }
}