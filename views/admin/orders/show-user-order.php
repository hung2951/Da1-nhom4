<h2>Cập nhật trạng thái đơn hàng</h2>
<table class="table table-stripped">
    <thead>
        <tr>
            <th>Tên khách hàng</th>
            <th>Số điện thoại</th>
            <th>Địa chỉ</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($user as $u) : ?>
            <tr>
                <td><?= $u['full_name']?></td>
                <td><?= $u['phone']?></td>
                <td><?= $u['address']?></td>
                <td><a href="<?= ADMIN_URL. 'hoa-don/list-sua-tt/trang-thai?id='.$u['id_user']?>">Trạng thái đơn hàng</a></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
