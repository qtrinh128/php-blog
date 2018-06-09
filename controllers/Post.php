<?php
require 'views/view_post_user.php';
class Post{
    public function loadAllPost(){
        $vPostUser = new PostUser();
        $vPostUser->loadAllPost();
    }
}