<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= CLIENT_ASSETS ?>/css/order-detail.css">
    
</head>

<body>
    <div class="container">
        <div class="status">
            <p><a href="">Quay lại</a></p>
            <p>ID ĐƠN HÀNG- <?= $o['id_orders'] ?> | <?= $o['status'] == 0 ? "ĐƠN HÀNG ĐANG GIAO ĐẾN BÊN BẠN" : "ĐƠN HÀNG ĐÃ GIAO" ?></p>
        </div>
        <div class="info-user">
            <p id="info-user-title">Địa chỉ nhận hàng</p>
            <p id="info-user-name"><?= $o['full_name'] ?></p>
            <p>(+84) <?= $o['phone'] ?></p>
            <p><?= $o['address'] ?></p>
            <span>TRẠNG THÁI: </span><span id="info-user-status"> <?= $o['status'] == 0 ? "ĐƠN HÀNG ĐANG ĐƯỢC GIAO ĐẾN BÊN BẠN" : "GIAO HÀNG THÀNH CÔNG" ?></span>
        </div>
        <div class="orders">
            <p id="date">Ngày đặt hàng: <?= $o['order_date'] ?></p>
            <div class="orders-info">
                <div class="img">
                    <p> <img src="<?= PUBLIC_ASSETS . '/uploads/avatars/' . $o['product_image'] ?>" width="120"></p>
                </div>
                <div class="info">
                    <p id="info-title"><?= $o['product_name'] ?></p>
                    <p id="size">Phân loại hàng: <?= $o['size'] ?></p>
                    <span>x<?= $o['quantity_orders'] ?></span>
                    <p>Đơn giá: <span id="price"><?= number_format($o['price']) ?></span><u>đ</u></p>
                </div>
            </div>
            <div class="tong-tien">
                <p id="tong-tien-title"> Tổng số tiền</p>
                <p><span id="money"><?= number_format($o['money']) ?></span><u>đ</u></p>
            </div>
            <?php if ($o['status'] == 1) : ?>
                <p id="ths">Cảm ơn bạn đã tin tưởng mua hàng của chúng tôi !</p>
            <?php endif ?>
        </div>
    </div>
</body>

</html>