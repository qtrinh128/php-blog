<?php
require 'views/layout/header_admin.php';
?>

<div class="container">
	<h3>Thêm bài viết</h3>
	<form action="?controller=Post&action=add_post" method="POST">
		<div class="form-group">
			<label for="category">Tiêu đề bài viết</label>
			<input type="text" class="form-control" id="category" name="title_post">
		</div>
		<div class="form-group">
			<label for="category">Ảnh bài viết</label>
			<input type="file" class="form-control" id="category" name="img_post">
		</div>
		
		<div class="form-group">
			<label for="exampleFormControlTextarea3">Nội dung bài viết</label>
			<textarea class="form-control" id="exampleFormControlTextarea3" rows="7" name="content_post"></textarea>
		</div>
		<div class="form-group">
			<label for="sel1">Danh mục bài viết</label>
			<select class="form-control" id="sel1">
				<?php
				foreach($data as $key){
				?>
				<option name='<?php echo $key['id']?>'><?php echo $key['name_category']?></option>
				<?php
				}
				?>
			</select>
		</div>
		
		<div class="form-group">
			<label for="category">Tác giả</label>
			<input type="text" class="form-control" id="category" name="author_post">
		</div>
		<button type="submit" class="btn btn-default">Thêm</button>
	</form>
</div>

<?php
require 'views/layout/footer_admin.php';
?>