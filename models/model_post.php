<?php
require 'config/DataBase.php';
class PostModel extends DataBase{
    public function getAllPost(){
        $this->connect();
        $sql = 'SELECT * FROM post';
        $this->query($sql);
        $arrayData = [];
        while($data = $this->fetch()){
            $arrayData[] = $data;
        }
        return $arrayData;
    }

    public function getContentPost($id){
        $this->connect();
        $sql = 'SELECT * FROM post WHERE id = '.$id;
        $this->query($sql);
        return $this->fetch();
    }
    public function deletePost($id){
        $this->connect();
        $sql = 'DELETE FROM post WHERE post.id = '.$id;
        $this->query($sql);
    }
}