<h2>Chi tiết hóa đơn</h2>
<div class="info-user">
    <h3>Thông tin khách đặt hàng</h3>
    <table class="table table-stripped">
        <tr>
            <td>Họ tên:</td>
            <td>Hùng</td>
        </tr>
        <tr>
            <td>Địa chỉ:</td>
            <td>Hà Nội</td>
        </tr>
        <tr>
            <td>Số điện thoại:</td>
            <td>098312</td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>hung@gmail.com</td>
        </tr>

    </table>
</div>

<div class="orders-title">
    <p>Đơn hàng đã đặt</p>
</div>
<?php foreach ($dsCTHoaDon as $p) : ?>
    <div class="orders">
        <div class="orders-info">
            <div class="img">
                <p> <img src="<?= PUBLIC_ASSETS . $p['image'] ?>" width="100"></p>
            </div>
            <div class="info">
                <p id="info-title"><?= $p['name'] ?></p>
                <p id="size">Phân loại hàng: <?= $p['size'] ?></p>
                <span>x<?= $p['quantity'] ?></span>
                <p>Đơn giá: <span id="price"><?= number_format($p['price']) ?></span><u>đ</u></p>
            </div>
        </div>
        <div class="tong-tien">
            <p>Tổng số tiền: <span id="money"><?= number_format($p['money']) ?></span><u>đ</u></p>
        </div>
    </div>
<?php endforeach; ?>