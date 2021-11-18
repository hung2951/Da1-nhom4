<form action="<?= ADMIN_URL . 'tai-khoan/luu-sua?id=' . $user['id_user'] ?>" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-6 offset-3">
            <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" name="name" value="<?= $user['full_name'] ?>" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" value="<?= $user['email'] ?>" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="number" name="phone" value="<?= $user['phone'] ?>" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <div>
                    <img src="<?= PUBLIC_ASSETS . $user['image']?>" width="250">
                </div>
                <label for="">Ảnh đại diện</label>
                <input type="file" name="image" id="" class="form-control" placeholder="">
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