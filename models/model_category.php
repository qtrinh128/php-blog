<?php
include_once 'config/DataBase.php';
class CategoryModel{
    public function getAllCategory(){
        DataBase::getInstance()->connect();
        $sql = 'SELECT * FROM Category';
        DataBase::getInstance()->query($sql);
        $arrayData = [];
        while($data = DataBase::getInstance()->fetch()){
            $arrayData[] = $data;
        }
        return $arrayData;
    }
    // Hiển thị danh sách post trong category
    public function showListPostInCategory($idCategory){
        DataBase::getInstance()->connect();
        $sql = 'SELECT * FROM post WHERE id_category = '.$idCategory;
        DataBase::getInstance()->query($sql);
        $arrayData = [];
        while($data = DataBase::getInstance()->fetch()){
            $arrayData[] = $data;
        }
        return $arrayData;
    }
}