<div class="container">
    <?php foreach ($dsHoadon as $o) : ?>
        <div class="orders">
            <div class="order-title">
                <span>ID ĐƠN HÀNG: <?= $o['id_orders'] ?> | <?= $o['status'] == 0 ? "ĐƠN HÀNG ĐANG GIAO ĐẾN BÊN BẠN" : "ĐƠN HÀNG ĐÃ GIAO" ?></span>
            </div>
            <a href="">
                <div class="order">
                    <div class="order-image">
                        <p><img src="<?= PUBLIC_ASSETS . '/uploads/avatars/' . $o['product_image'] ?>" width="130px"></p>
                    </div>
                    <div class="order-info">
                        <p id="order-info-name"><?= $o['product_name'] ?></p>
                        <p>Size: <?= $o['size'] ?></p>
                        <p>x<?= $o['quantity_orders'] ?></p>
                        <p id="order-info-price">Đơn giá: <span><?= number_format($o['price']) ?></span><u>đ</u></p>
                    </div>
                </div>
                <div class="money">
                    <p>Tổng tiền: </p>
                    <p><span> <?= number_format($o['money']) ?> <u>đ</u></span></p>
                </div>
            </a>
            <div class="buy">
                <a href="" id="buys"> <p>Mua lại</p> </a>
            </div>
        </div>
    <?php endforeach ?>
</div>