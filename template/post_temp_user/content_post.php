<?php require 'layout/header_guest.php'; ?>
<div class="container">
        <div class="col-sm-10">
            <h3><?php echo $data['title']?></h3>
            <p><?php echo $data['author']?>: <?php echo $data['time_post']?></p>
            <img class="img-fluid hinhanh-baiviet" src="<?php echo $data['img']?>" alt="hinh-anh">
            <h1></h1>
            <p class="font-weight-normal"><?php echo $data['content']?></p>
        </div>
        <div class="col-sm-3"></div>
    <!-- <h3 class="text-center"><?php echo $data['title']?></h3>
    <p><?php echo $data['author']?>: <?php echo $data['time_post']?></p>
    <img class="img-fluid" src="<?php echo $data['img']?>" alt="hinh-anh" width="460" height="345">
    <h1></h1>
    <p class="font-weight-normal"><?php echo $data['content']?></p> -->

</div>
<?php require 'layout/footer_guest.php'; ?>