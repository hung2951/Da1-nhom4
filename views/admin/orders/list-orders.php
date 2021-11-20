<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>dist/css/orders.css">
</head>

<body>
    <div class="title">
        <h3>Danh sách hóa đơn</h3>
    </div>

    <table class="table table-stripped">
        <thead>
            <tr>
                <th>Mã đơn hàng</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Tổng tiền</th>
                <th>Ngày đặt hàng</th>
                <th>Trạng thái</th>
                <th>Chi tiết</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dsHoaDon as $d) : ?>
                <tr>
                    <td><?= $d['id_orders'] ?></td>
                    <td><?= $d['product_name'] ?></td>
                    <td><?= $d['quantity_orders'] ?></td>
                    <td><?= $d['money'] ?></td>
                    <td><?= $d['order_date'] ?></td>
                    <td><?= $d['status'] == 0 ? "Đang giao hàng" : "Giao hàng thành công" ?></td>
                    <td><a class="btn btn-sm btn-danger" href="<?= ADMIN_URL . 'hoa-don/ds-hoa-don/chi-tiet?id=' . $d['id_orders'] ?>">Chi tiết</a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>