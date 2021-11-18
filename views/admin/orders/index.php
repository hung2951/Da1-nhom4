<h2>Danh sách hóa đơn</h2>
<table class="table table-stripped">
    <thead>
        <th>Tên khách hàng</th>
        <th>Tổng đơn hàng</th>
        <th>Tổng tiền</th>
        <th>Chi tiết đơn hàng</th>
    </thead>
    <tbody>
        <?php foreach($dsHoadon as $o):?>
            <tr>
                <td><?=$o['name']?></td>
                <td><?=$o['Tong']?></td>
                <td><?=$o['tongtien']?></td>
                <td><a class="btn btn-sm btn-danger" href="<?= ADMIN_URL . 'hoa-don/chi-tiet?id='. $o['id_user'] ?>">Chi tiết</a></td>
            </tr>
        <?php endforeach?>
    </tbody>
</table>