<?php
require 'models/database.php';
class LoginModel extends DataBase{
    public function checkLogin($emal, $pwd){
        $this->connect();
        $sql = 'SELECT * FROM login WHERE email = "'.$emal.'" and password = "'.$pwd.'"';
        $this->query($sql);
        if($this->row() == 1){
            return true;
        }
        return false;
    }
}