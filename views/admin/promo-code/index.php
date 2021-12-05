<h2>Quản lý mã giảm giá</h2>
<table class="table table-stripped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên mã giảm giá</th>
            <th>Phần trăm giảm</th>
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
                <td>
                    <a href="<?= ADMIN_URL . 'ma-giam-gia/sua?id=' . $code['id_code'] ?>" class="btn btn-sm btn-info">Sửa</a>
                    <a href="<?= ADMIN_URL . 'ma-giam-gia/xoa?id=' . $code['id_code'] ?>" class="btn btn-sm btn-danger">Xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>