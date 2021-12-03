<div class="header--sidebar"></div>
<main class="ps-main">
    <form action="<?= CLIENT_URL ?>thanh-toan?id=<?= $cart['id'] ?>" method="POST">
        <div class="ps-content pt-80 pb-80">
            <div class="ps-container">

                <div class="ps-cart-listing">
                    <table class="table ps-cart__table">
                        <thead>
                            <tr>
                                <th>ID product</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Size</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th>Delete</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <form action="" method="post">
                                <?php $totalMoney = 0; ?>
                                <?php foreach ($_SESSION['cart'] as $cart) : ?>
                                    <tr>
                                        <td><?= $cart['id'] ?></td>
                                        <td><a class="ps-product__preview" href="product-detail.html"><img class="mr-15" src="<?= PUBLIC_ASSETS  . $cart['product_image'] ?>" alt="" style="width:150px"><?= $cart['product_name'] ?></a></td>
                                        <td><?= number_format($cart['price']) ?></td>
                                        <td><?= $cart['size'] ?></td>
                                        <td>
                                            <?= $cart['quantity'] ?>
                                        </td>
                                        <td><?= $tong = number_format($cart['price'] * $cart['quantity']) ?><u>đ</u></td>
                                        <td>
                                            <a href="<?= CLIENT_URL . 'gio-hang/delete?id=' . $cart['id'] ?>" onclick="return confirm('Bạn có muốn xóa sản phẩm này ?')"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                        <td><?php $totalMoney += $cart['price'] * $cart['quantity']; ?></td>
                                    </tr>
                                <?php endforeach ?>
                            </form>

                        </tbody>
                    </table>
                    <div class="ps-cart__actions">
                        <div class="ps-cart__promotion">
                            <div class="form-group">
                                <div class="ps-form--icon"><i class="fa fa-angle-right"></i>
                                    <input class="form-control" type="text" placeholder="Promo Code">
                                </div>
                            </div>
                            <div class="form-group">

                                <a class="ps-btn ps-btn--gray" href="http://localhost/Da1-nhom4/index.php">Continue Shopping</a>
                            </div>
                        </div>
                        <div class="ps-cart__total">
                            <a href="<?= CLIENT_URL . 'gio-hang/checkout' ?>"> <strong class="ps-btn">Process to checkout<i class="ps-icon-next"></i></strong></a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </form>
</main>