<h2 style="text-align: center; margin-top: 20px;">Tạo mã giảm giá</h2>
<form action="<?= ADMIN_URL . 'ma-giam-gia/luu-sua?id=' . $code['id_code'] ?>" method="post">
    <div class="row">
        <div class="col-6 offset-3">
            <div class="form-group">
                <label for="">Mã giảm giá</label>
                <input type="text" name="name" id="" class="form-control" placeholder="Nhập tên mã giảm giá" value="<?= $code['code_name'] ?>">
            </div>
            <div class="form-group">
                <label for="">Phần trăm giảm giá</label>
                <input type="number" name="code" id="" class="form-control" placeholder="Nhập phần trăm giảm giá" value="<?= $code['code'] ?>">
            </div>
            <div class="form-group">
                <label for="">Số lượt dùng</label>
                <input type="number" name="number_use" id="" class="form-control" placeholder="Nhập số lượt dùng" value="<?= $code['number_use'] ?>">
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <a href="<?= ADMIN_URL . 'ma-giam-gia' ?>" class="btn btn-sm btn-danger">Hủy</a>
                &nbsp;
                <button type="submit" class="btn btn-primary btn-sm">Lưu</button>
            </div>
        </div>
    </div>
</form>