<h2 style="text-align: center; margin-top: 20px;">Thêm Tin Tức</h2>
<form action="<?= ADMIN_URL . 'tin-tuc/luu-tao-moi' ?>" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-6 offset-3">
            <div class="form-group">
                <label for="">Tên Tin Tức</label>
                <input type="text" name="name_news" id="" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Ảnh</label>
                <input type="file" name="image_news" id="" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Details</label>
                <textarea name="details_news" id="" cols="30" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="">especially</label>
                <textarea name="especially_news" id="" cols="30" class="form-control"></textarea>
            </div>
            <div class="form-group" hidden>
                <label for="">Ngày Đăng</label>
                <input type="date" name="date_news" value="<?= date('Y-d-m') ?>" class="form-control" placeholder="">
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <a href="<?= ADMIN_URL . 'tin-tuc' ?>" class="btn btn-sm btn-danger">Hủy</a>
                &nbsp;
                <button type="submit" class="btn btn-primary btn-sm">Lưu</button>
            </div>
        </div>
    </div>
</form>