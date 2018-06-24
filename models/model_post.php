<?php
include_once 'config/DataBase.php';
class PostModel{
    public function getAllPost(){
        DataBase::getInstance()->connect();
        $sql = 'SELECT * FROM post';
        DataBase::getInstance()->query($sql);
        $arrayData = [];
        while($data = DataBase::getInstance()->fetch()){
            $arrayData[] = $data;
        }
        return $arrayData;
    }

    public function getContentPost($id){
        DataBase::getInstance()->connect();
        $sql = 'SELECT * FROM post WHERE id = '.$id;
        DataBase::getInstance()->query($sql);
        return DataBase::getInstance()->fetch();
    }
    public function deletePost($id){
        DataBase::getInstance()->connect();
        $sql = 'DELETE FROM post WHERE post.id = '.$id;
        DataBase::getInstance()->query($sql);
    }
}