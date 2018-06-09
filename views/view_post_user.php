<?php
class PostUser{
    public function loadAllPost($data){
        require 'post_temp_user/list_post.php';
    }
    public function loadContentPost($data){
        require 'post_temp_user/content_post.php';
    }
}