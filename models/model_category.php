<?php
require 'models/database.php';
class CategoryModel extends DataBase{
    public function getAllCategory(){
        $this->connect();
        $sql = 'SELECT * FROM Category';
        $this->query($sql);
        $arrayData = [];
        while($data = $this->fetch()){
            $arrayData[] = $data;
        }
        return $arrayData;
    }
    // Hiển thị danh sách post trong category
    public function showListPostInCategory($idCategory){
        $this->connect();
        $sql = 'SELECT * FROM post WHERE id_category = '.$idCategory;
        $this->query($sql);
        $arrayData = [];
        while($data = $this->fetch()){
            $arrayData[] = $data;
        }
        return $arrayData;
    }
}