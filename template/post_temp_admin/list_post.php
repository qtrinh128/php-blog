<?php require 'layout/header_admin.php'; ?>
<div class="container">
<?php
        foreach($data as $key){
    ?>
    <ul class="list-group">
        <li class="list-group-item"><a href='?controller=PostAdmin&action=showContentPost&id=<?php echo $key['id']; ?>'><?php echo $key['title']; ?></a></li>
    </ul>
    <?php
        }
    ?>
</div>
<?php require 'layout/footer_admin.php'; ?>