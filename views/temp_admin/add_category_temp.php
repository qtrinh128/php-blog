<?php
require 'views/layout/header_admin.php';
?>

<div class="container">
	<h3>Thêm danh mục</h3>
	<form action="?controller=admin&action=add_category" method="POST" accept-charset='utf-8'>
		<div class="form-group">
			<label for="category">Tên danh mục</label>
			<input type="text" class="form-control" id="category" name="category">
		</div>
		<button type="submit" class="btn btn-default">Thêm</button>
	</form>
</div>

<?php
require 'views/layout/footer_admin.php';
?>