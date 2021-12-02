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
            <form action="<?= CLIENT_URL . 'hoa-don/sua/luu-sua?id=' . $o['id_orders'] ?>" method="post">
                <input type="text" name="id_user" value="<?= $o['id_user'] ?>" hidden> 
                <div class="order">
                    <div class="order-image">
                        <p><img src="<?= PUBLIC_ASSETS . '/uploads/avatars/' . $o['product_image'] ?>" width="130px"></p>
                    </div>
                    <div class="order-info">
                        <p id="order-info-name"><?= $o['product_name'] ?></p>
                        <span>Size: </span>
                        <select name="size" id="select_size">
                            <option <?= $o['orders_size'] == 39 ? "selected" : ""; ?> value="39">39</option>
                            <option <?= $o['orders_size'] == 40 ? "selected" : ""; ?> value="40">40</option>
                            <option <?= $o['orders_size'] == 41 ? "selected" : ""; ?> value="41">41</option>
                            <option <?= $o['orders_size'] == 42 ? "selected" : ""; ?> value="42">42</option>
                            <option <?= $o['orders_size'] == 43 ? "selected" : ""; ?> value="43">43</option>
                        </select>
                        <p>Số lượng<input type="number" name="quantity" id="input_quantity" value="<?= $o['quantity_orders'] ?>" min="0"></p>
                        <p id="order-info-price">Đơn giá: <span><input type="nummber" id="input_price" value="<?= number_format($o['price']) ?>" readonly><u>đ</u></span></p>
                    </div>
                </div>
                <div class="money">
                    <input type="text" name="money" value="<?= $o['price'] * $o['quantity_orders'] ?>" hidden>
                    <p>Tổng tiền: </p>
                    <p><span>
                            <p><span> <?= number_format($o['price'] * $o['quantity_orders']) ?> <u>đ</u></span></p>
                        </span></p>
                </div>
                <div class="btn-order">
                    <input type="submit" id="btn_update" value="Xác nhận">
                    <p id="delete_order"><a href="<?= CLIENT_URL . 'hoa-don/xoa?id=' . $o['id_orders'].'&id_user='.$o['id_user']?>">Hủy đơn hàng</a></p>
                </div>
            </form>
        </div>

    </div>
</body>

</html>