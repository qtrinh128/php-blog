<?php require 'views/layout/header.php'; ?>
<div class="container">
    <h3 class="text-center">Danh sách danh mục</h3>
    <ul>
        <?php
        foreach($data as $key){
        ?>
        <ul class="list-group">
            <li class="list-group-item"><a href='?controller=Post&action=showContentPost&id=<?php echo $key['id']; ?>'><?php echo $key['title']; ?></a></li>
        </ul>
        <?php
        }
        ?>
    </ul>
</div>
<?php require 'views/layout/footer.php'; ?>