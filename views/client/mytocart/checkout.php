<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?= CLIENT_ASSETS ?>css/checkout.css" rel="stylesheet" />
</head>

<body>
    <div class="ps-checkout pt-80 pb-80">
        <div class="ps-container">
            <form class="ps-checkout__form" action="<?= CLIENT_URL . 'pay-cart' ?>" method="POST">
                <div class="row">

                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">

                        <div class="ps-checkout__billing">
                            <h3>Thông tin nhận hàng</h3>
                            <div class="form-group form-group--inline">
                                <label>Họ và tên<span>*</span>
                                </label>
                                <input class="form-control" type="text" name="name" value="<?= isset($_SESSION['khach_hang']) ? $_SESSION['khach_hang']['full_name'] : "" ?>">
                            </div>
                            <div class="form-group form-group--inline">
                                <label>Số điện thoại<span>*</span>
                                </label>
                                <input class="form-control" type="text" name="phone" value="<?= isset($_SESSION['khach_hang']) ? $_SESSION['khach_hang']['phone'] : "" ?>">
                            </div>
                            <div class="form-group form-group--inline">
                                <label>Email<span>*</span>
                                </label>
                                <input class="form-control" type="email" name="email" value="<?= isset($_SESSION['khach_hang']) ? $_SESSION['khach_hang']['email'] : "" ?>">
                            </div>
                            <div class="form-group form-group--inline">
                                <label>Địa chị<span>*</span>
                                </label>
                                <input class="form-control" type="text" name="address" value="<?= isset($_SESSION['khach_hang']) ? $_SESSION['khach_hang']['address'] : "" ?>">
                            </div>
                            <div>
                                <input type="date" name="date" value="<?= date('Y-d-m') ?>" hidden>
                            </div>
                            <div class="form-group">
                            </div>
                            <hr>
                        </div>

                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                        <div class="ps-checkout__order">
                            <header>
                                <h3>Đơn hàng của bạn</h3>
                            </header>
                            <div class="content">
                                <table class="table ps-checkout__products">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase">Tên sản phẩm</th>
                                            <th class="text-uppercase">Số lượng</th>
                                            <th class="text-uppercase">Tổng tiền sản phẩm</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $totalPrice = 0; ?>
                                        <?php foreach ($_SESSION['cart'] as $cart) : ?>
                                            <tr>
                                                <td><?= $cart['product_name'] ?></td>
                                                <td id="quantity_checkout">
                                                    <input type="number" name="quantity" min="1" value="<?= $cart['quantity'] ?>">
                                                </td>
                                                <td><?= number_format($cart['price'] * $cart['quantity']) ?></td>
                                                <td><?php $totalPrice += $cart['price'] * $cart['quantity']; ?></td>
                                            </tr>
                                            <tr>
                                            <?php endforeach ?>
                                    </tbody>
                                    <?php if (!empty($code)) : ?>
                                        <tr>
                                            <td>Phí giao hàng</td>
                                            <td>- 25.000đ</td>
                                        </tr>
                                        <tr>
                                            <td>Mã giảm giá</td>
                                            <td>- <?= number_format(($code['code'] / 100) * $totalPrice) ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tổng tiền</td>
                                            <td><?= number_format($totalPrice - (($code['code'] / 100) * $totalPrice)- 25000) ?></td>
                                            <td hidden><input type="text" name="totalPrice" value="<?= $totalPrice - (($code['code'] / 100) * $totalPrice) - 25000 ?>"></td>
                                        </tr>
                                        <td><input type="text" name="id_code" value="<?= $code['id_code'] ?>" hidden></td>
                                    <?php else : ?>
                                        <tr>
                                            <td>Phí giao hàng</td>
                                            <td>- 25.000đ</td>
                                        </tr>
                                        <tr>
                                            <td>Tổng tiền</td>
                                            <td><?= number_format($totalPrice - 25000) ?></td>
                                            <td hidden><input type="text" name="totalPrice" value="<?= $totalPrice - 25000 ?>"></td>
                                        </tr>
                                    <?php endif ?>
                                </table>

                            </div>

                        </div>
                        <footer>
                            <div class="form-group paypal">
                                <button type="submit" class="ps-btn ps-btn--fullwidth">Đặt hàng<i class="ps-icon-next"></i></button>
                            </div>
                        </footer>
                        <!-- --------------------------end--------------------------------- -->
                        <?php if (!isset($_SESSION['khach_hang'])) : ?>
                            <div class="ps-shipping">
                                <h3>Mã giảm giá</h3>
                                <p>Đăng nhập để nhận mã giảm giá ngay tại đây.<br> <a href="<?= CLIENT_URL . 'dang-nhap' ?>"> Đăng nhập </a></p>
                            </div>
                        <?php endif ?>
                    </div>

                </div>
            </form>
        </div>
    </div>
</body>

</html>