<?php require 'layout/header_admin.php'; ?>
<div class="container">
    <form action="#" method="POST">
            <div class="form-group">
                <label>Tiêu đề bài viết</label>
                <input type="text" name="title_post" class="form-control" placeholder="<?php echo $data['title']?>">
            </div>
            <div class="form-group">
                <label>Nội dung bài viết</label>
                <textarea name="" id="" cols="30" rows="10" class="form-control">
                    <?php echo $data['content']?>
                </textarea>
            </div>
            <div class="form-group">
                <label>Link ảnh</label>
                <input type="" name="" class="form-control" value="<?php echo $data['img']?>">
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                <label>Tác giả</label>
                <input type="" name="" class="form-control" value="<?php echo $data['author']?>">
            </div>

                </div>
                <div class="col">
                    
                     <div class="form-group">
                <label>Danh mục</label>
                <select name="id_category">
                    <?php
                    foreach($category as $key): ?>
                    <option value="<?php echo $key['id']; ?>"><?php echo $key['name']; ?></option>
                    <?php
                        endforeach
                    ?>
                </select>
            </div>
                </div>
                <div class="col">
                    <div class="form-group">
                <label>Ngày đăng</label>
                <input type="date" class="form-control" value="<?php echo $data['time_post']?>">
            </div>
                    
                </div>
            </div>
            
           
            
            <a href="?id=<?php echo $data['id']?>" class="btn btn-primary">Sửa</a>
            <a href="?id=<?php echo $data['id']?>" class="btn btn-primary">Sửa</a>
    </form>
        
        
</div>
<?php require 'layout/footer_admin.php'; ?>