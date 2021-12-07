<h2>Quản lý mã giảm giá</h2>
<table class="table table-stripped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Mã giảm giá</th>
            <th>Phần trăm giảm</th>
            <th>Số lượt sử dụng</th>
            <th>
                <a href="<?= ADMIN_URL . 'ma-giam-gia/tao-moi' ?>" class="btn btn-sm btn-success">Tạo mới</a>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($codes as $code) : ?>
            <tr>
                <td><?= $code['id_code'] ?></td>
                <td><?= $code['code_name'] ?></td>
                <td><?= $code['code'] ?></td>
                <td><?= $code['number_use'] ?></td>
                <td>
                    <a href="<?= ADMIN_URL . 'ma-giam-gia/sua?id=' . $code['id_code'] ?>" class="btn btn-sm btn-info">Sửa</a>
                    <a href="javascript:;" 
                        data-url="<?= ADMIN_URL .'ma-giam-gia/xoa?id=' . $code['id_code'] ?>" 
                        data-name="<?= $code['code_name'] ?>" 
                        class="btn btn-sm btn-danger btn_remove_voucher">Xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>