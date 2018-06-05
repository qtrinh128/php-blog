<?php
require 'controllers/admin.php';
$admin = new Admin();
if (isset($_GET['action'])) {
	$action = $_GET['action'];
	switch ($action) {
		case 'login-page':
			$admin->show_page_login();
			break;

		case 'login':
			$admin->check_login();
			break;
		
		case 'homepage-admin':
			$admin->click_here();
			break;

		case 'logout-page':
			$admin->destroy_session();
			break;

		case 'list_category':
			$admin->show_page_category();
			break;

		case 'page_add_category':
			$admin->show_page_add_category();
			break;

		case 'add_category':
			$admin->add_category();
			break;


		case 'detail_category':
			$admin->show_page_detail_category();
			break;

		case 'edit_category':
			$admin->edit_category_by_id();
			break;

		case 'delete_category':
			$admin->delete_category_by_id();
			break;

		default:
			$admin->show();
			break;
	}
}else{
	$admin->show();
}
