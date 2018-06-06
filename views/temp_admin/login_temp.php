
<?php
session_start();
require 'views/layout/header.php';
?>
<!-- content -->
<div class="container">
	<h3 class="text-center">Đăng nhập</h3>
	<div class="container">
    <form class="form-horizontal" action="?controller=admin&action=check_login" method="POST">
      <div class="form-group">
        <label class="control-label col-sm-2" for="username">Tên đăng nhập</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="username" placeholder="Tên đăng nhập" name="username" value="admin">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Mật khẩu:</label>
        <div class="col-sm-10">          
          <input type="password" class="form-control" id="pwd" placeholder="Nhập mật khẩu" name="pwd" value="1">
        </div>
      </div>
      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <div class="checkbox">
            <label><input type="checkbox" name="remember"> Ghi nhớ</label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Đăng nhập</button>
        </div>
      </div>
    </form>
  </div>
</div>
<?php
require 'views/layout/footer.php';
?>