<?php
require 'config/DataBase.php';
class LoginModel{
	
	private static $instance = null;
	
	private function __construct(){}
	
	public static function getInstance(){
		if(!self::$instance){
			self::$instance = new LoginModel();
		}
		return self::$instance;
	}
	
    public function checkLogin($emal, $pwd){
        DataBase::getInstance()->connect();
        $sql = 'SELECT * FROM login WHERE email = "'.$emal.'" and password = "'.$pwd.'"';
       	DataBase::getInstance()->query($sql);
        if(DataBase::getInstance()->row() == 1){
            return true;
        }
        return false;
    }
}