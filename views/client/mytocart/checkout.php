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
            <form class="ps-checkout__form" action="<?= CLIENT_URL . 'pay-cart'?>" method="POST">
                <div class="row">

                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">

                        <div class="ps-checkout__billing">
                            <h3>Billing Detail</h3>
                            <div class="form-group form-group--inline">
                                <label>Name<span>*</span>
                                </label>
                                <input class="form-control" type="text" name="name">
                            </div>
                            <div class="form-group form-group--inline">
                                <label>Phone<span>*</span>
                                </label>
                                <input class="form-control" type="text" name="phone">
                            </div>
                            <div class="form-group form-group--inline">
                                <label>Email<span>*</span>
                                </label>
                                <input class="form-control" type="email" name="email">
                            </div>
                            <div class="form-group form-group--inline">
                                <label>Address<span>*</span>
                                </label>
                                <input class="form-control" type="text" name="address">
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
                                <h3>Your Order</h3>
                            </header>
                            <div class="content">
                                <table class="table ps-checkout__products">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase">Product Name</th>
                                            <th class="text-uppercase">Quantity</th>
                                            <th class="text-uppercase">Money</th>
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
                                    <tr>
                                        <td>Total money</td>
                                        <td><?= number_format($totalPrice) ?></td>

                                    </tr>
                                </table>

                            </div>

                        </div>
                        <footer>
                            <div class="form-group paypal">
                                <button type="submit" class="ps-btn ps-btn--fullwidth">Place Order<i class="ps-icon-next"></i></button>
                            </div>
                        </footer>
                        <!-- --------------------------end--------------------------------- -->
                        <div class="ps-shipping">
                            <h3>FREE SHIPPING</h3>
                            <p>YOUR ORDER QUALIFIES FOR FREE SHIPPING.<br> <a href="#"> Singup </a> for free shipping on every order, every time.</p>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</body>

</html>