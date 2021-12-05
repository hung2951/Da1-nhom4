<div class="header--sidebar"></div>
<main class="ps-main">
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

                    </tbody>
                </table>
                <form action="<?= CLIENT_URL . 'gio-hang/checkout' ?>" method="post">
                    <div class="ps-cart__actions">
                        <div class="ps-cart__promotion">
                            <div class="form-group">
                                <div class="ps-form--icon"><i class="fa fa-angle-right"></i>
                                    <!-- <input class="form-control" type="text" placeholder="Promo Code"> -->
                                    <?php if (isset($_SESSION['khach_hang'])) : ?>
                                        <select name="code" id="" class="form-control">
                                            <option value="">Mã giảm giá</option>
                                            <?php foreach ($codes as $code) : ?>
                                                <option value="<?= $code['id_code'] ?>"><?= $code['code_name'] ?></option>
                                            <?php endforeach ?>
                                        </select>
                                        <?php else:?>
                                            <select class="form-control">
                                                <option value="">Đăng nhập để nhận mã giảm giá</option>
                                            </select>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <a class="ps-btn ps-btn--gray" href="<?= BASE_URL ?>">Continue Shopping</a>
                            </div>
                        </div>
                        <div class="ps-cart__total">
                            <input type="submit" value="Process to checkout" class="ps-btn">
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
</main>