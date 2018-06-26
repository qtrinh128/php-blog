<?php
require 'views/view_post_admin.php';
require 'models/model_post.php';
require 'models/model_category.php';
class PostAdmin{
    public function loadAllPost(){
        ViewPostAdmin::getInstance()->loadAllPost(PostModel::getInstance()->getAllPost());
    }
    public function showContentPost(){
        ViewPostAdmin::getInstance()->loadContentPost(PostModel::getInstance()->getContentPost($_GET['id']));
    }
    public function showPageAdd(){
        $category = CategoryModel::getInstance()->getAllCategory();
        ViewPostAdmin::getInstance()->pageAdd($category);
    }
    public function add(){
        if(isset($_POST['btn_add'])){
            $title = $_POST['title_post'];
            $content = $_POST['content_post'];
            $author = $_POST['author'];
            $picture = $_POST['link_pic'];
            $category = $_POST['id_category'];
            $date = $_POST['date_post'];
            if(empty($title) || empty($content) || empty($author) || empty($picture) || empty($date)){
                echo"<script>alert('Điền thông tin'); window.location = '?controller=PostAdmin&action=showPageAdd';</script>";
            }else{
                if(PostModel::getInstance()->add($title, $content, $picture, $author, $date, $category)){
                    header('location: ?controller=PostAdmin&action=showContentPost&id='.$id);
                }else{
                    echo"<script>alert('Vui lòng thử lại'); window.location='?controller=PostAdmin&action=showPageAdd';</script>";
                }
            }

        }else{
            echo"<script>alert('what's going on?'); window.location = '?controller=PostAdmin&action=loadAllPost';</script>";
        }
    }

    public function editPost(){
        $id = $_GET['id'];
        $category = CategoryModel::getInstance()->getAllCategory();
        $data = PostModel::getInstance()->getContentPost($id);
        ViewPostAdmin::getInstance()->editPost($data, $category);
    }
    public function edit(){
        if(isset($_POST['btn_edit'])){
			$id = $_POST['id_post'];
			$title = $_POST['title_post'];
			$content = $_POST['content_post'];
			$author = $_POST['author'];
			$picture = $_POST['link_pic'];
			$category = $_POST['id_category'];
			$date = $_POST['date_post'];

			if(empty($title) || empty($content) || empty($author) || empty($picture) || empty($date)){
				echo"<script>alert('Điền thông tin'); window.location = '?controller=PostAdmin&action=loadAllPost';</script>";
			}else{
				if(PostModel::getInstance()->edit($title, $content, $picture, $author, $date, $category, $id)){
                    header('location: ?controller=PostAdmin&action=showContentPost&id='.$id);
                }else{
                    echo"<script>alert('Vui lòng thử lại'); window.location='?controller=PostAdmin&action=editPost&id=$id';</script>";
                }
			}
        }else{
			echo"<script>alert('what's going on?'); window.location = '?controller=PostAdmin&action=loadAllPost';</script>";
		}
    }

    public function deletePost(){
        $id = $_GET['id'];
        PostModel::getInstance()->deletePost($id);
        echo"<script>alert('Xóa thành công'); window.location='?controller=PostAdmin&action=loadAllPost';</script>";
    }
}