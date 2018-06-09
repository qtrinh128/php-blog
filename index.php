<?php
if(isset($_GET['controller']) && isset($_GET['action'])){
    $getController = $_GET['controller'];
    $getMethod = $_GET['action'];
    require 'controllers/'.$getController.'.php';
    $controller = new $getController();
    $controller->$getMethod();
}else{
    require 'controllers/post.php';
    $post = new Post();
    $post->loadAllPost();
}
