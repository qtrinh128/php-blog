<?php
require 'views/admin_view.php';
require 'models/admin_model.php';
class admin{


	function show_alert($messgae, $controller, $action){
		echo"<script>alert('".$messgae."'); window.location='?controller=".$controller."&action=".$action."';</script>";
	}
	// private $admin = new AdminView();
	public function show(){
		$admin = new AdminView();
		$admin->show();
	}

	public function page_login(){
		$admin = new AdminView();
		$admin->show_page_login();
	}
	// Kiểm tra đăng nhập
	public function check_login(){
		$status = 0;
		$user = $_POST['username'];
		$pass = $_POST['pwd'];
		$md_admin = new AdminModel();
		$status = $md_admin->check_login($user, $pass);
		if($status == 1){
			session_start();
			$_SESSION['username'] = $user;
			header('location: ?controller=admin&action=homepage_admin');
		}else{
			$this->show_alert('Đăng nhập không thành công', 'admin', 'page_login');
			// header('location: ?action=login-page');
		}

	}
	// Đăng nhập thành công và redirect đến trang chủ admin
	public function homepage_admin(){
		$md_admin = new AdminModel();
		$data = $md_admin->get_all_post();
		$admin = new AdminView();
		$admin->show_page_login_success($data);
	}
	// Hủy session khi click vào logout
	public function destroy_session(){
		session_start();
		session_unset();
		header('location: ?controller=admin&action=page_login');
	}
	// Hiển thị page thêm danh mục
	function show_page_add_category(){
		$admin = new AdminView();
		$admin->show_page_add_category();
	}
	// adding catalogs to the database
	function add_category(){
		if (!isset($_POST['category'])) {
			$this->show_alert('Vui lòng thực hiện lại', 'admin', 'show_page_category');
		}else if(empty(trim($_POST['category']))){
			$this->show_alert('Vui lòng nhập giá trị', 'admin', 'show_page_category');
		}else{
			$md_admin = new AdminModel();
			$md_admin->add_category(strtoupper($_POST['category']));
			$this->show_alert('Thêm thành công', 'admin', 'show_page_category');
		}
	}
	// Hiển thị page danh mục
	function show_page_category(){
		$md_admin = new AdminModel();
		$data = $md_admin->get_all_category();
		$admin = new AdminView();
		$admin->show_page_category($data);
	}
	// hiển thị trang chi tiết danh mục
	function show_page_detail_category(){
		$id = $_GET['id'];
		$md_admin = new AdminModel();
		$data = $md_admin->get_detail_category($id);
		$admin = new AdminView();
		$admin->show_page_detail_category($data);
	}
	// thực hiện xóa danh mục
	function delete_category_by_id(){
		$id = $_GET['id'];
		// thử sửa đổi link trong htaccess xem có chạy được không và có hiển thị đúng theo id không?
		$md_admin = new AdminModel();
		$md_admin->delete_category_by_id($id);
		$this->show_alert('Xóa thành công', 'admin', 'show_page_category');
	}
	// thực hiện sửa danh mục
	function edit_category_by_id(){
		$id = $_POST['id'];
		$name = $_POST['name_category'];
		$md_admin = new AdminModel();
		$md_admin->edit_category_by_id(strtoupper($name), $id);
		$this->show_alert('Sửa thành công', 'admin', 'show_page_category');
	}
}