<h2>Quản lí đơn hàng</h2>
<a href="">
    <div>
        <?php foreach ($dsHoadon as $o) : ?>
            <div class="orders">
                <div class="order-image">
                    <p><img src="<?= PUBLIC_ASSETS . '/uploads/avatars/' . $o['product_image'] ?>" width="100"></p>
                </div>
                <div class="order-info">
                    <p><?= $o['product_name'] ?></p>
                    <p>Size: <?= $o['size'] ?></p>
                    <p>X<?= $o['quantity_orders'] ?></p>
                    <p>Đơn giá: <?= $o['price'] ?></p>
                </div>
            </div>
            <p>Tổng tiền: <?=number_format($o['money']) ?> VNĐ</p>
            <a href="">
                <p>Mua lại</p>
            </a>
        <?php endforeach ?>
    </div>
</a>