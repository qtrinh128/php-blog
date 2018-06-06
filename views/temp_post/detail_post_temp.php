<?php
require 'views/layout/header_admin.php';
?>

<div class="container">
	<h3 class='text-center'><?php echo $data['title_post'];?></h3>
	<p><?php echo $data['content_post'];?></p>
	<h5>Tác giả: <?php echo $data['author_post']?></h5>
</div>
<?php
require 'views/layout/footer_admin.php';
?>