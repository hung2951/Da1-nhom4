<h2>Quản lý hóa đơn</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($dsTaiKhoan as $o) : ?>
            <tr>
                <td><?= $o['id_user'] ?></td>
                <td><a href="<?= ADMIN_URL . 'hoa-don/chi-tiet?id=' . $o['id_user'] ?>">Chi tiết</a></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>