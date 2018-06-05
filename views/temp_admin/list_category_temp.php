<?php
require 'views/layout/header_admin.php';
?>

<div class="container">
	<h3>Danh sách danh mục</h3>
	<a href="?action=page_add_category" class="btn btn-primary">Thêm danh mục</a>
	<p></p>
	<?php
		foreach ($data as $key) {
	?>
	<ul class="list-group">
		<li class="list-group-item">
			<a href="?action=detail_category&id=<?php echo $key['id']?>"><?php echo $key['name_category']?></a>
		</li>
	</ul>
	<?php
		}
	?>
</div>

<?php
require 'views/layout/footer_admin.php';
?>