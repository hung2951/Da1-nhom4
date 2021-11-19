<h2>Cập nhật trạng thái đơn hàng</h2>
<table class="table table-stripped">
    <thead>
        <tr>
            <th>Mã đơn hàng</th>
            <th>Tổng tiền</th>
            <th>Trạng thái</th>
            <th>Cập nhật trạng thái</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($orders as $o) : ?>
            <tr>
                <td><?= $o['id_orders'] ?></td>
                <td><?= $o['money'] ?></td>
                <td>
                    <?= $o['status'] == 0 ? "Đang giao hàng" : "Nhận hàng thành công" ?>
                </td>
                <?php if ($o['status'] == 0) : ?>
                    <td>
                        <a href="<?= ADMIN_URL . 'hoa-don/list-sua-tt/trang-thai/sua?id=' . $o['id_orders'] ?>">Cập nhật</a>
                    </td>
                <?php else : ?>
                    <td></td>
                <?php endif ?>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>