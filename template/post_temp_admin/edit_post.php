<?php require 'layout/header_admin.php'; ?>
<div class="container">
        <div class="col-sm-10">
        <label for="">Tiêu đề bài viết</label>
        <input type="text" class="form-control" placeholder="<?php echo $data['title']?>">
        <label for="">Nội dung bài viết</label>
        <textarea name="" id="" cols="30" rows="10" class="form-control">
            <?php echo $data['content']?>
        </textarea>
        <label for="">Link ảnh</label>
        <input type="text" class="form-control" value="<?php echo $data['img']?>">
        <label for="">Tác giả</label>
        <input type="text" class="form-control" value="<?php echo $data['author']?>">
        <label for="">Danh mục</label>
        <input type="date" class="form-control" value="<?php echo $data['time_post']?>">
        <label for="">Ngày đăng</label>
        <input type="date" class="form-control" value="<?php echo $data['time_post']?>">
        <h3></h3>
        <a href="?id=<?php echo $data['id']?>" class="btn btn-primary">Sửa</a>
        </div>

        <div class="col-sm-3"></div>
        
</div>
<?php require 'layout/footer_admin.php'; ?>