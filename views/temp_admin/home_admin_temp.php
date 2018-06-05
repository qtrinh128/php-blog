<?php
require 'views/layout/header_admin.php';
?>

<div class="container">
	<h3>Danh sách bài viết</h3>
	<?php
		foreach ($data as $key) {
	?>
	<ul class="list-group">
		<li class="list-group-item"><a href="?action=chitiet"><?php echo $key['title_post']?></a></li>
	</ul>
	<?php
		}
	?>
</div>

<?php
require 'views/layout/footer_admin.php';
?>