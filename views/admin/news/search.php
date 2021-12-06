<?php if (empty($dsTinTuc)) :?>
    <h2>Danh sách tìm kiếm rỗng</h2>
<?php else : ?>
    <h3 style="margin-bottom: 20px;">Tin Tức tìm kiếm theo "<?= $_GET['query']?>"</h3>
    <table class="table table-stripped">
        <thead>
        <th>ID</th>
        <th>Tên Tin Tức</th>
        <th>Ảnh</th>
        <th>details</th>
        <th>especially</th>
        <th>Ngày Đăng</th>
            <th>
                <a href="<?= ADMIN_URL . 'tin-tuc/tao-moi' ?>" class="btn btn-sm btn-success">Tạo mới</a>
            </th>
        </thead>
        <tbody>
            <?php foreach ($dsTinTuc as $p) : ?>
                <tr>
                <tr>
                <td><?= $p['id_news'] ?></td>
                <td><?= $p['name_news'] ?></td>
                <td>
                    <img src="<?= PUBLIC_ASSETS . $p['image_news'] ?>" width="100">
                </td>
                <td><?= $p['details_news'] ?></td>
                <td><?= $p['especially_news'] ?></td>
                <td><?= $p['date_news'] ?></td>
                <td>
                    <a href="<?= ADMIN_URL . 'tin-tuc/sua?id=' . $p['id_news'] ?>" class="btn btn-sm btn-info">Sửa</a>
                    <a href="<?= ADMIN_URL . 'tin-tuc/xoa?id=' . $p['id_news'] ?>" class="btn btn-sm btn-danger">Xóa</a>
                </td>
            </tr>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
<?php endif ?>