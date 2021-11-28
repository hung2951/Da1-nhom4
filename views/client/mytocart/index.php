<?php
session_start();
?>
<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">
  
<!-- Mirrored from nouthemes.net/html/trueshoes/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Nov 2021 02:15:19 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <meta name="author" content="Nghia Minh Luong">
    <meta name="keywords" content="Default Description">
    <meta name="description" content="Default keyword">
    <title>Shoe - Cart</title>
    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:300,400,700%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="<?= CLIENT_ASSETS ?>css/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= CLIENT_ASSETS ?>css/plugins/ps-icon/style.css">
    <!-- CSS Library-->
    <link rel="stylesheet" href="<?= CLIENT_ASSETS ?>css/plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= CLIENT_ASSETS ?>css/plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="<?= CLIENT_ASSETS ?>css/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="<?= CLIENT_ASSETS ?>css/plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="<?= CLIENT_ASSETS ?>css/plugins/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="<?= CLIENT_ASSETS ?>css/plugins/Magnific-Popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="<?= CLIENT_ASSETS ?>css/plugins/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="<?= CLIENT_ASSETS ?>css/plugins/revolution/css/settings.css">
    <link rel="stylesheet" href="<?= CLIENT_ASSETS ?>css/plugins/revolution/css/layers.css">
    <link rel="stylesheet" href="<?= CLIENT_ASSETS ?>css/plugins/revolution/css/navigation.css">
    <!-- Custom-->
    <link rel="stylesheet" href="css/style.css">
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->
  <body class="ps-loading">
    <div class="header--sidebar"></div>
    <main class="ps-main">
      <div class="ps-content pt-80 pb-80">
        <div class="ps-container">
          <div class="ps-cart-listing">
            <table class="table ps-cart__table">
              <thead>
                <tr>
                  <th>All Products</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Size</th>
                  <th>Color</th>
                  <th>Total</th>
                  <th></th>
                </tr>
              </thead>  
              <tbody>
              <?php foreach ($_SESSION['cart'] as $cart): ?>
               
                    <?php
                      
                      $tong= $cart['price'] * $cart['product_quanity'];
                      ?>
                   
                    
                <tr>
                  <td><?= $cart['name']?></td>
                  <td><a class="ps-product__preview" href="product-detail.html"><img class="mr-15" src="<?= PUBLIC_ASSETS . '/uploads/avatars/' . $cart['product_image'] ?>" alt="" style="width:150px" ><?= $cart['product_name'] ?></a></td>
                  <td><?= number_format($cart['price']) ?></td>
                  <td>
                    <div class="form-group--number">
                      <button class="minus"><span>-</span></button>
                      <input class="form-control" type="text" value="<?= $cart['product_quanity'] ?>">
                      <button class="plus"><span>+</span></button>
                    </div>
                  </td>
                  <td><?= $cart['size'] ?></td>
                  <td><?= $cart['color'] ?></td>

                  <td><?= $tong?><u>đ</u></td>
                  <td>
                    <div class="ps-remove"></div>
                  </td>
                </tr>
              <?php endforeach ?>  
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
                  <button class="ps-btn ps-btn--gray">Continue Shopping</button>
                </div>
              </div>
              <div class="ps-cart__total">
                <h3>Total Price: <span> 2599.00 $</span></h3><a class="ps-btn" href="checkout.html">Process to checkout<i class="ps-icon-next"></i></a>
              </div>
            </div>
          </div>
          <div class="ps-cart-listing">
                        <table class="table ps-cart__table">
              <thead>
                <tr>
                  <th>All Products</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Size</th>
                  <th>Color</th>
                  <th>Total</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($mytocart as $cart): ?>
               
                    <?php
                      
                      $tong= $cart['price'] * $cart['product_quanity'];
                      ?>
                   
                    
                <tr>
                  <td><a class="ps-product__preview" href="product-detail.html"><img class="mr-15" src="<?= PUBLIC_ASSETS . '/uploads/avatars/' . $cart['product_image'] ?>" alt="" style="width:150px" ><?= $cart['product_name'] ?></a></td>
                  <td><?= number_format($cart['price']) ?></td>
                  <td>
                    <div class="form-group--number">
                      <button class="minus"><span>-</span></button>
                      <input class="form-control" type="text" value="<?= $cart['product_quanity'] ?>">
                      <button class="plus"><span>+</span></button>
                    </div>
                  </td>
                  <td><?= $cart['size'] ?></td>
                  <td><?= $cart['color'] ?></td>

                  <td><?= $tong?><u>đ</u></td>
                  <td>
                    <div class="ps-remove"></div>
                  </td>
                </tr>
              <?php endforeach ?>  
              </tbody>
            </table>
          </div>
        </div>
      </div>
      
    </main>




    
    <!-- JS Library-->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="<?= CLIENT_ASSETS ?>css/plugins/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="<?= CLIENT_ASSETS ?>css/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= CLIENT_ASSETS ?>css/plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script type="text/javascript" src="<?= CLIENT_ASSETS ?>css/plugins/owl-carousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?= CLIENT_ASSETS ?>css/plugins/gmap3.min.js"></script>
    <script type="text/javascript" src="<?= CLIENT_ASSETS ?>css/plugins/imagesloaded.pkgd.js"></script>
    <script type="text/javascript" src="<?= CLIENT_ASSETS ?>css/plugins/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="<?= CLIENT_ASSETS ?>css/plugins/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="<?= CLIENT_ASSETS ?>css/plugins/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="<?= CLIENT_ASSETS ?>css/plugins/slick/slick/slick.min.js"></script>
    <script type="text/javascript" src="<?= CLIENT_ASSETS ?>css/plugins/elevatezoom/jquery.elevatezoom.js"></script>
    <script type="text/javascript" src="<?= CLIENT_ASSETS ?>css/plugins/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="<?= CLIENT_ASSETS ?>css/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx39JFH5nhxze1ZydH-Kl8xXM3OK4fvcg&amp;region=GB"></script><script type="text/javascript" src="<?= CLIENT_ASSETS ?>css/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?= CLIENT_ASSETS ?>css/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="<?= CLIENT_ASSETS ?>css/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="<?= CLIENT_ASSETS ?>css/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="<?= CLIENT_ASSETS ?>css/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="<?= CLIENT_ASSETS ?>css/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="<?= CLIENT_ASSETS ?>css/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="<?= CLIENT_ASSETS ?>css/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <!-- Custom scripts-->
    <script type="text/javascript" src="js/main.js"></script>
    
  </body>

<!-- Mirrored from nouthemes.net/html/trueshoes/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Nov 2021 02:15:28 GMT -->
</html>