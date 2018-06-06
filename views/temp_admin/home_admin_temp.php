<?php
require 'views/layout/header_admin.php';
?>

<div class="container">
	<h3>Danh sách bài viết</h3>
	<a href="?controller=Post&action=show_page_add_post" class="btn btn-primary">Thêm bài viết</a>
	<p></p>
	<?php
		foreach ($data as $key) {
	?>
	<ul class="list-group">
		<li class="list-group-item"><a href="?controller=Post&action=show_page_detail_post&id=<?php echo $key['id']?>"><?php echo $key['title_post']?></a></li>
	</ul>
	<?php
		}
	?>
</div>

<?php
require 'views/layout/footer_admin.php';
?>