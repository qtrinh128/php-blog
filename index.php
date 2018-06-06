<?php
if(isset($_GET['controller'])){
	$controller = $_GET['controller'];
	require 'controllers/'.$controller.'.php';
	$controller = new $controller();
	if(isset($_GET['action'])){
		$action = $_GET['action'];
		$controller->$action();
	}else{
		$controller->show();
	}
}
else{
	require 'controllers/admin.php';
	$controller = new admin();
	$controller->show();
}
// }else{
// 	require 'controllers/admin.php';
// 	require 'controllers/post.php';
// 	$controller = new admin();
// 	if(isset($_GET['action'])){
// 		$action = $_GET['action'];
// 		$controller->$action();
// 	}else{
// 		$controller->show();
// 	}
// }






// if (isset($_GET['action'])) {
// 	$action = $_GET['action'];
// 	switch ($action) {
// 		case 'page_login':
// 			$admin->page_login();
// 			break;

// 		case 'login':
// 			$admin->check_login();
// 			break;

// 		case 'homepage-admin':
// 			$admin->click_here();
// 			break;

// 		case 'logout-page':
// 			$admin->destroy_session();
// 			break;

// 		case 'list_category':
// 			$admin->show_page_category();
// 			break;

// 		case 'page_add_category':
// 			$admin->show_page_add_category();
// 			break;

// 		case 'add_category':
// 			$admin->add_category();
// 			break;


// 		case 'detail_category':
// 			$admin->show_page_detail_category();
// 			break;

// 		case 'edit_category':
// 			$admin->edit_category_by_id();
// 			break;

// 		case 'delete_category':
// 			$admin->delete_category_by_id();
// 			break;

// 		default:
// 			$admin->show();
// 			break;
// 	}
// }else{
// 	$admin->show();
// }
