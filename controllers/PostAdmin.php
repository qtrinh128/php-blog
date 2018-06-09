<?php
require 'views/view_post_admin.php';
class PostAdmin{
    public function loadAllPost(){
        $vPostAdmin = new ViewPostAdmin();
        $vPostAdmin->loadAllPost();
    }
}