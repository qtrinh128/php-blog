<?php
require 'views/view_post_user.php';
require 'models/model_post.php';
class Post{
    public function loadAllPost(){
        PostUser::getInstance()->loadAllPost(PostModel::getInstance()->getAllPost());
    }
    public function showContentPost(){
        PostUser::getInstance()->loadContentPost(PostModel::getInstance()->getContentPost($_GET['id']));
    }
}