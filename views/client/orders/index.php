<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= CLIENT_ASSETS ?>css/orders.css" rel="stylesheet" />
    <title>Document</title>
</head>

<body>
    <div class="container">
        <?php foreach ($dsHoadon as $o) : ?>
            <div class="orders">
                <div class="order-title">
                    <span>ID ĐƠN HÀNG: <?= $o['id_orders'] ?> |
                        <?php if ($o['status'] == 0) : ?>
                            <span>CHỜ XÁC NHẬN</span>
                        <?php elseif ($o['status'] == 1) : ?>
                            <span>ĐANG GIAO HÀNG</span>
                        <?php else : ?>
                            <span>GIAO HÀNG THÀNH CÔNG</span>
                        <?php endif ?>
                    </span>
                </div>
                <a href="<?= CLIENT_URL . 'hoa-don/chi-tiet?id=' . $o['id_orders'] ?>">
                    <div class="order">
                        <div class="order-image">
                            <p><img src="<?= PUBLIC_ASSETS . '/uploads/avatars/' . $o['product_image'] ?>" width="130px"></p>
                        </div>
                        <div class="order-info">
                            <p id="order-info-name"><?= $o['product_name'] ?></p>
                            <p>Size: <?= $o['orders_size'] ?></p>
                            <p>x<?= $o['quantity_orders'] ?></p>
                            <p id="order-info-price">Đơn giá: <span><?= number_format($o['price']) ?></span><u>đ</u></p>
                        </div>
                    </div>
                    <div class="money">
                        <p>Tổng tiền: </p>
                        <p><span> <?= number_format($o['price']*$o['quantity_orders']) ?> <u>đ</u></span></p>
                    </div>
                </a>
                <?php if ($o['status'] == 2) : ?>
                    <div class="buy">
                        <p><a href="">Mua lại</a></p>
                    </div>
                <?php elseif ($o['status'] == 1) : ?>
                    <div class="delivery">
                        <p>Đang giao hàng</p>
                    </div>
                <?php else : ?>
                    <div class="update-orders">
                        <div class="update-order">
                            <p><a href="<?= CLIENT_URL .'hoa-don/sua?id='.$o['id_orders']?>">Chỉnh sửa</a></p>
                        </div>
                        <div class="wait">
                            <p>Chờ xác nhận</p>
                        </div>
                    </div>
                <?php endif ?>

            </div>
        <?php endforeach ?>
    </div>
</body>

</html>