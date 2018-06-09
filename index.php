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