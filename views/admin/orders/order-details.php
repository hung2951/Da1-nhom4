<h2>Chi tiết hóa đơn</h2>
<div class="info-user">
    <h3>Thông tin khách đặt hàng</h3>
    <table class="table table-stripped">
    <?php foreach ($dsCTHoaDon as $o) : ?>
        <tr>
            <td>Họ tên:</td>
            <td><?= $o['full_name']?></td>
        </tr>
        <tr>
            <td>Địa chỉ:</td>
            <td><?= $o['address']?></td>
        </tr>
        <tr>
            <td>Số điện thoại:</td>
            <td><?= $o['phone']?></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><?= $o['email']?></td>
        </tr>
    </table>
</div>

<div class="orders-title">
    <p>Đơn hàng đã đặt</p>
</div>

    <div class="orders">
        <div class="orders-info">
            <div class="img">
                <p> <img src="<?= PUBLIC_ASSETS . $o['image'] ?>" width="100"></p>
            </div>
            <div class="info">
                <p id="info-title"><?= $o['name'] ?></p>
                <p id="size">Phân loại hàng: <?= $o['size'] ?></p>
                <span>x<?= $o['quantity'] ?></span>
                <p>Đơn giá: <span id="price"><?= number_format($o['price']) ?></span><u>đ</u></p>
            </div>
        </div>
        <div class="tong-tien">
            <p>Tổng số tiền: <span id="money"><?= number_format($o['money']) ?></span><u>đ</u></p>
        </div>
    </div>
<?php endforeach; ?>