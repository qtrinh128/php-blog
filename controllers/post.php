<?php
require 'views/post_view.php';
require 'models/post_model.php';
class Post{
	function show_page_detail_post(){
		$id = $_GET['id'];
		$md_post = new PostModel();
		$data = $md_post->get_detail_post($id);
		$post = new PostView();
		$post->show_page_detail_post($data);
	}
	function show_page_add_post(){
		$md_post = new PostModel();
		$data = $md_post->get_list_category();
		$post = new PostView();
		$post->show_page_add_post($data);
	}
}