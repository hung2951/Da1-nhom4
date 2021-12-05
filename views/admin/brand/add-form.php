<h2 style="text-align: center; margin-top: 20px;">Thêm thương hiệu</h2>
<form action="<?= ADMIN_URL . 'thuong-hieu/luu-tao-moi' ?>" method="post">
    <div class="row">
        <div class="col-6 offset-3">
            <div class="form-group">
                <label for="">Tên thương hiệu</label>
                <input type="text" name="brand_name" id="" class="form-control" placeholder="Nhập tên thương hiệu">
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <a href="<?= ADMIN_URL . 'thuong-hieu' ?>" class="btn btn-sm btn-danger">Hủy</a>
                &nbsp;
                <button type="submit" class="btn btn-primary btn-sm">Lưu</button>
            </div>
        </div>
    </div>
</form>