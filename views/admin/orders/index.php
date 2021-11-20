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
        <h3>Danh sách khách hàng đặt đơn </h3>
    </div>
    <table class="table table-stripped">
        <thead>
            <th>Tên khách hàng</th>
            <th>Tổng đơn hàng</th>
            <th>Tổng tiền</th>
            <th>Chi tiết đơn hàng</th>
        </thead>
        <tbody>
            <?php foreach ($dsHoadon as $o) : ?>
                <tr>
                    <td><?= $o['full_name'] ?></td>
                    <td><?= $o['Tong'] ?></td>
                    <td><?= number_format($o['tongtien']) ?></td>
                    <td><a class="btn btn-sm btn-danger" href="<?= ADMIN_URL . 'hoa-don/ds-hoa-don?id=' . $o['id_user'] ?>">Chi tiết</a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>