<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>dist/css/orders.css">
</head>

<body>
    <div class="title">
        <h3>Danh sách đơn hàng</h3>
    </div>
    <table class="table table-stripped">
        <thead>
            <th>Mã đơn hàng</th>
            <th>Ngày đặt</th>
            <th>Tổng tiền</th>
            <th>Trạng thái</th>
            <th>Chi tiết đơn hàng</th>
        </thead>
        <tbody>
            <?php foreach ($dsHoadon as $o) : ?>

                <tr>
                    <td><?= $o['id_orders'] ?></td>
                    <td><?= $o['order_date'] ?></td>
                    <td><?= number_format($o['money']) ?></td>
                    <td>
                        <?php if ($o['status'] == 0) : ?>
                            <a href="<?= ADMIN_URL . 'don-hang/trang-thai?id='.$o['id_orders'] ?>">Chờ xác nhận đơn hàng...</a>
                        <?php elseif ($o['status'] == 1) : ?>
                            Khách hủy đơn hàng <i class="far fa-times-circle"></i>
                        <?php elseif ($o['status'] == 2) : ?>
                            <a href="<?= ADMIN_URL . 'don-hang/trang-thai?id='.$o['id_orders'] ?>">Đang giao hàng</a>
                        <?php elseif ($o['status'] == 3) : ?>
                            Giao hàng thành công <i class="far fa-check-circle"></i>
                        <?php elseif ($o['status'] == 4) : ?>
                            <a href="<?= ADMIN_URL . 'don-hang/trang-thai?id='.$o['id_orders'] ?>">Giao hàng thất bại <i class="far fa-times-circle"></i></a>
                        <?php endif ?>
                    </td>
                    <td><a href="<?= ADMIN_URL.'don-hang/chi-tiet?id='.$o['id_orders']?>">Chi tiết</a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>