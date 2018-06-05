<?php
require 'views/layout/header_admin.php';
?>

<div class="container">
	<h3>Tên danh mục</h3>
	<form class="form-horizontal" action="?action=edit_category" method="POST">
		<div class="form-group">
			<div class="col-sm-10">
				<input type="hidden" class="form-control" name="id" value="<?php echo $data['id']?>">
			</div>
			<div class="col-sm-10">
				<input type="text" class="form-control" placeholder="<?php echo $data['name_category']?>" name="name_category" value="<?php echo $data['name_category']?>">
			</div>
		</div>
		<div class="form-group">        
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-info">Sửa danh mục này</button>
				<a href="?action=delete_category&id=<?php echo $data['id']?>" class='btn btn-danger'>Xóa danh mục này</a>
			</div>
		</div>
	</form>
</div>

<?php
require 'views/layout/footer_admin.php';
?>