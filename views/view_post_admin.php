<?php
class ViewPostAdmin{
    public function loadAllPost($data){
        require 'post_temp_admin/list_post.php';
    }
    public function loadContentPost($data){
        require 'post_temp_admin/content_post.php';
    }
    public function editPost($data){
        require 'post_temp_admin/edit_post.php';
    }
}