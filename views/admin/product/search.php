<?php if (empty($dsSanPham)) :?>
    <h2>Danh sách tìm kiếm rỗng</h2>
<?php else : ?>
    <h3 style="margin-bottom: 20px;">Sản phẩm tìm kiếm theo "<?= $_GET['query']?>"</h3>
    <table class="table table-stripped">
        <thead>
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Ảnh</th>
            <th>Giá</th>
            <th>Giảm giá</th>
            <th>Số lượng</th>
            <th>Trạng thái</th>
            <th>Ngày nhập</th>
            <th>
                <a href="<?= ADMIN_URL . 'san-pham/tao-moi' ?>" class="btn btn-sm btn-success">Tạo mới</a>
            </th>
        </thead>
        <tbody>
            <?php foreach ($dsSanPham as $p) : ?>
                <tr>
                    <td><?= $p['id_product'] ?></td>
                    <td><?= $p['product_name'] ?></td>
                    <td>
                        <img src="<?= PUBLIC_ASSETS . $p['product_image'] ?>" width="100">
                    </td>
                    <td><?= $p['price'] ?></td>
                    <td><?= $p['discount'] ?></td>
                    <td><?= $p['product_quantity'] ?></td>
                    <td><?= $p['status'] == 1 ? "Còn hàng" : "Hết hàng" ?></td>
                    <td><?= $p['date_add'] ?></td>
                    <td>
                        <a href="<?= ADMIN_URL . 'san-pham/sua?id=' . $p['id_product'] ?>" class="btn btn-sm btn-info">Sửa</a>
                        <a href="<?= ADMIN_URL . 'san-pham/xoa?id=' . $p['id_product'] ?>" class="btn btn-sm btn-danger">Xóa</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
<?php endif ?>