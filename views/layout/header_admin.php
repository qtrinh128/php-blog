<?php
session_start();

if (!isset($_SESSION['username'])) {
	echo"<script>alert('yêu cầu đăng nhập'); window.location='?action=login-page';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang chu</title>
	<link rel="stylesheet" href="public/css/bootstrap.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	<script src="public/js/jquery-1.9.1.min.js" defer></script>
	<script src="public/js/bootstrap.js" defer></script>
	<style>
	body{
		font-family: 'Roboto', sans-serif;
	}
</style>
</head>
<body>
	<nav class="nav navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">qtrinh</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="?action=list_category">Danh mục</a></li>
				<li><a href="?action=posts">Thêm bài viết</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="?action=logout-page" class="glyphicon glyphicon-login">Đăng xuất</a></li>
			</ul>
		</div>
	</nav>