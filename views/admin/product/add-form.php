<h2 style="text-align: center; margin-top: 20px;">Thêm sản phẩm</h2>
<form action="<?= ADMIN_URL . 'san-pham/luu-tao-moi' ?>" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-6 offset-3">
            <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input type="text" name="name" id="" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <select style="width: 100%;" name="brand" id="">
                    <option>Thương hiệu</option>
                    <?php foreach ($brands as $brand) : ?>
                        <option value="<?= $brand['id_brand'] ?>"><?= $brand['brand_name'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Ảnh</label>
                <input type="file" name="product_image" id="" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Ảnh gallery</label>
                <input type="file" multiple name="gallery[]" id="" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Giá</label>
                <input type="text" name="price" id="" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Giảm giá</label>
                <input type="number" name="discount" id="" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Số lượng</label>
                <input type="number" name="quantity" id="" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Chi tiết</label>
                <textarea name="details" id="" cols="30" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="">Trạng thái</label>
                <input type="radio" name="status" value="0"> Hết hàng
                <input type="radio" name="status" value="1" checked> Còn hàng
            </div>
            <div class="form-group">
                <label for="">Loại hàng</label>
                <input type="radio" name="new_product" value="0"> Hàng cũ
                <input type="radio" name="new_product" value="1" checked> Hàng mới
            </div>
            <div class="form-group" hidden>
                <label for="">Lượt xem</label>
                <input type="number" name="view" id="" class="form-control" placeholder="">
            </div>
            <div class="form-group" hidden>
                <label for="">Ngày nhập</label>
                <input type="date" name="date_add" value="<?= date('Y-d-m') ?>" class="form-control" placeholder="">
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