<?php
class PostUser{
    public function loadAllPost($data){
        require 'template/post_temp_user/list_post.php';
    }
    public function loadContentPost($data){
        require 'template/post_temp_user/content_post.php';
    }
}