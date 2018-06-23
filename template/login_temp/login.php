<?php require 'layout/header_guest.php'; ?>
<div class="container">
    <h3 class="text-center">Trang đăng nhập</h3>
    <form action="?controller=Login&action=checkLogin" method="post">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" value="qtrinh128@gmail.com">
        </div>
        <div class="form-group">
            <label for="pwd">Email</label>
            <input type="text" class="form-control" name="pwd" value="123123">
        </div>
        <div class="form-group form-check">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input"> Nhớ mật khẩu
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Đăng nhập</button>
    </form>
</div>
<?php require 'layout/footer_guest.php'; ?>