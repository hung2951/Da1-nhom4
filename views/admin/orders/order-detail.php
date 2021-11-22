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
        <h3>Chi tiết hóa đơn</h3>
    </div>

    <div class="info-user">
        <h4>Thông tin khách đặt hàng</h4>
        <table class="table table-stripped">
            <tr>
                <td>Họ tên:</td>
                <td><?= $u['full_name'] ?></td>
            </tr>
            <tr>
                <td>Địa chỉ:</td>
                <td><?= $u['address'] ?></td>
            </tr>
            <tr>
                <td>Số điện thoại:</td>
                <td><?= $u['phone'] ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><?= $u['email'] ?></td>
            </tr>
        </table>
    </div>

    <div class="orders-title">
        <p>Đơn hàng đã đặt</p>
    </div>
    <div class="orders">
        <div class="orders-info">
            <div class="img">
                <p> <img src="<?= PUBLIC_ASSETS . '/uploads/avatars/' . $o['product_image'] ?>" width="100"></p>
            </div>
            <div class="info">
                <p id="info-title"><?= $o['product_name'] ?></p>
                <p id="size">Phân loại hàng: <?= $o['size'] ?></p>
                <span>x<?= $o['quantity_orders'] ?></span>
                <p>Đơn giá: <span id="price"><?= number_format($o['price']) ?></span><u>đ</u></p>
            </div>
        </div>
        <div class="tong-tien">
            <p>Tổng số tiền: <span id="money"><?= number_format($o['money']) ?></span><u>đ</u></p>
        </div>
    </div>
</body>

</html>