<?php
require 'views/view_login.php';
require 'models/model_login.php';
require 'views/view_post_admin.php';
class Login{
    public function loadPageLogin(){
        $vLogin = new LoginView();
        $vLogin->loadPageLogin();
    }
    public function checkLogin(){
        if(!isset($_POST['email']) && !isset($_POST['pwd'])){
            echo"<script>alert('Vui lòng đăng nhập lại'); window.location='?controller=login&action=loadPageLogin';</script>";
        }else{
            $email = $_POST['email'];
            $pwd = $_POST['pwd'];   
            $mLogin = new LoginModel();
            if($mLogin->checkLogin($email, $pwd)){
                session_start();
                $_SESSION['email'] = $email ;
                header('location: ?controller=PostAdmin&action=loadAllPost');
            }else{
                echo"<script>alert('Sai thông tin đăng nhập'); window.location='?controller=login&action=loadPageLogin';</script>";
            }
        }
    }
    public function sessionDestroy(){
        session_start();
        session_destroy();
        header('location: ?controller=Login&action=loadPageLogin');
    }
}