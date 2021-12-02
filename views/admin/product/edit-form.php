<form action="<?= ADMIN_URL . 'san-pham/luu-sua?id=' . $products['id_product'] ?>" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-6 offset-3">
            <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input type="text" name="name" value="<?= $products['product_name'] ?>" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Ảnh</label>
                <input type="file" name="image" value="<?= $products['product_image'] ?>" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Giá</label>
                <input type="text" name="price" value="<?= $products['price'] ?>" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Giảm giá</label>
                <input type="number" name="discount" value="<?= $products['discount'] ?>" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Chi tiết</label>
                <input type="text" name="details" value="<?= $products['details'] ?>" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Số lượng</label>
                <input type="number" name="quantity" value="<?= $products['product_quantity'] ?>" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Trạng thái</label>
                <input type="radio" name="status" value="0"> Hết hàng
                <input type="radio" name="status" value="1" checked> Còn hàng
            </div>
            <div class="form-group" >
                <label for="">Loại hàng</label>
                <input type="radio" name="new_product" value="0" checked> Hàng cũ
                <input type="radio" name="new_product" value="1"> Hàng mới
            </div>
            <div class="form-group" hidden>
                <label for="">Lượt xem</label>
                <input type="number" name="view" value="<?= $products['view'] ?>" class="form-control" placeholder="">
            </div>
            <div class="form-group" hidden>
                <label for="">Ngày nhập</label>
                <input type="date" name="date_add" value="<?= $products['date_add'] ?>" class="form-control" placeholder="">
            </div>
            <div class="form-group" hidden>
                <label for="">Ngày sửa</label>
                <input type="date" name="date_fix" value="<?= date('Y-d-m') ?>" class="form-control" placeholder="">
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <a href="<?= ADMIN_URL . 'san-pham' ?>" class="btn btn-sm btn-danger">Hủy</a>
                &nbsp;
                <button type="submit" class="btn btn-primary btn-sm">Lưu</button>
            </div>
        </div>
    </div>
</form>