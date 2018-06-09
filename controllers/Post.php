<?php
require 'views/view_post_user.php';
require 'models/model_post.php';
class Post{
    public function loadAllPost(){
        $mPostUser = new PostModel();

        $vPostUser = new PostUser();
        $vPostUser->loadAllPost($mPostUser->getAllPost());
    }
    public function showContentPost(){
        $mPostUser = new PostModel();

        $vPostUser = new PostUser();
        $vPostUser->loadContentPost($mPostUser->getContentPost($_GET['id']));
    }
}