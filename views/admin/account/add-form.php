<h2 style="text-align: center; margin-top: 20px;">Tạo mới tài khoản</h2>
<p style="text-align: center; margin-bottom: 30px;">(Tài khoản admin)</p>
<form action="<?= ADMIN_URL . 'tai-khoan/luu-tao-moi' ?>" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-6 offset-3">
            <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" name="name" id="" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" id="" class="form-control" placeholder="">
            </div>
            <p style="color: red;"><?= isset($err)?$err:""?></p>
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="number" name="phone" id="" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Ảnh đại diện</label>
                <input type="file" name="image" id="" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Mật khẩu</label>
                <input type="password" name="password" id="" class="form-control" placeholder="">
            </div>
            <div class="form-group" hidden>
                <label for="">Vai trò</label>
                <input type="radio" name="role" value="0"> khách hàng
                <input type="radio" name="role" value="1" checked> Quản trị
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <a href="<?= ADMIN_URL . 'tai-khoan'?>" class="btn btn-sm btn-danger">Hủy</a>
                &nbsp;  
                <button type="submit" class="btn btn-primary btn-sm">Lưu</button>
            </div>
        </div>
    </div>
</form>