<?php require 'layout/header_admin.php'; ?>
<div class="container">
        <div class="col-sm-10">
            <h3><?php echo $data['title']?></h3>
            <p><?php echo $data['author']?>: <?php echo $data['time_post']?></p>
            <img class="img-fluid hinhanh-baiviet" src="<?php echo $data['img']?>" alt="hinh-anh">
            <h1></h1>
            <p class="font-weight-normal"><?php echo $data['content']?></p>
            <a href="?controller=PostAdmin&action=editPost&id=<?php echo $data['id']?>" class="btn btn-primary">Sua</a>
            <a href="?controller=PostAdmin&action=deletePost&id=<?php echo $data['id']?>" class="btn btn-danger">Xoa</a>
        </div>

        <div class="col-sm-3"></div>
        
</div>
<?php require 'layout/footer_admin.php'; ?>