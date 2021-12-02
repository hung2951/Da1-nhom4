<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">
  
<!-- Mirrored from nouthemes.net/html/trueshoes/product-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Nov 2021 02:13:48 GMT -->
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
    <title>Shoe - Product Listing</title>
    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:300,400,700%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="<?= CLIENT_ASSETS ?>plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= CLIENT_ASSETS ?>plugins/ps-icon/style.css">
    <!-- CSS Library-->
    <link rel="stylesheet" href="<?= CLIENT_ASSETS ?>plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= CLIENT_ASSETS ?>plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="<?= CLIENT_ASSETS ?>plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="<?= CLIENT_ASSETS ?>plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="<?= CLIENT_ASSETS ?>plugins/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="<?= CLIENT_ASSETS ?>plugins/Magnific-Popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="<?= CLIENT_ASSETS ?>plugins/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="<?= CLIENT_ASSETS ?>plugins/revolution/css/settings.css">
    <link rel="stylesheet" href="<?= CLIENT_ASSETS ?>plugins/revolution/css/layers.css">
    <link rel="stylesheet" href="<?= CLIENT_ASSETS ?>plugins/revolution/css/navigation.css">
    <!-- Custom-->
    <link rel="stylesheet" href="<?= CLIENT_ASSETS ?>css/style.css">
  <body class="ps-loading">
    
    <main class="ps-main">
      <div class="ps-products" style="padding: 20px 50px;">
        <div class="ps-products" data-mh="product-listing">
          <div class="ps-section--offer mb-40">
            <div class="ps-column"><a class="ps-offer" href="product-listing.html"><img src="<?= CLIENT_ASSETS ?>images/banner/banner-1.jpg" alt=""></a></div>
            <div class="ps-column"><a class="ps-offer" href="product-listing.html"><img src="<?= CLIENT_ASSETS ?>images/banner/banner-2.jpg" alt=""></a></div>
          </div>
          
          <div class="ps-product__columns">
          <?php foreach ($product_listing as $ps) : ?>
            <div class="ps-product__column">
              <div class="ps-shoe mb-30">
                <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a>
                <img src="<?= PUBLIC_ASSETS . '/uploads/avatars/' . $ps['product_image'] ?>" alt=""><a class="ps-shoe__overlay" href="<?= CLIENT_URL .'chi-tiet-san-pham?id='.$ps['id_product'].'&id_brand='.$ps['id_brand']?>"></a>
                </div>
                <div class="ps-shoe__content">
                  <div class="ps-shoe__variants">
                    <div class="ps-shoe__variant normal">
                        <img src="<?= PUBLIC_ASSETS . '/uploads/avatars/' . $ps['product_image'] ?>" alt="">
                        <img src="<?= PUBLIC_ASSETS . '/uploads/avatars/' . $ps['product_image'] ?>" alt="">
                        <img src="<?= PUBLIC_ASSETS . '/uploads/avatars/' . $ps['product_image'] ?>" alt="">
                        <img src="<?= PUBLIC_ASSETS . '/uploads/avatars/' . $ps['product_image'] ?>" alt="">
                    </div>
                  </div>
                  <div class="ps-shoe__detail"><a class="ps-shoe__name" href="<?= CLIENT_URL .'chi-tiet-san-pham?id='.$ps['id_product'].'&id_brand='.$ps['id_brand']?>"><?= $ps['product_name'] ?></a>
                  <span class="ps-shoe__price"><?= $ps['price'] ?></span>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach?>
          </div>
          


          <div class="ps-product-action">
            <div class="ps-pagination">
              <ul class="pagination">
                <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- JS Library-->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="plugins/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="<?= CLIENT_ASSETS ?>plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= CLIENT_ASSETS ?>plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script type="text/javascript" src="<?= CLIENT_ASSETS ?>plugins/owl-carousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?= CLIENT_ASSETS ?>plugins/gmap3.min.js"></script>
    <script type="text/javascript" src="<?= CLIENT_ASSETS ?>plugins/imagesloaded.pkgd.js"></script>
    <script type="text/javascript" src="<?= CLIENT_ASSETS ?>plugins/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="<?= CLIENT_ASSETS ?>plugins/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="<?= CLIENT_ASSETS ?>plugins/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="<?= CLIENT_ASSETS ?>plugins/slick/slick/slick.min.js"></script>
    <script type="text/javascript" src="<?= CLIENT_ASSETS ?>plugins/elevatezoom/jquery.elevatezoom.js"></script>
    <script type="text/javascript" src="<?= CLIENT_ASSETS ?>plugins/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="<?= CLIENT_ASSETS ?>plugins/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx39JFH5nhxze1ZydH-Kl8xXM3OK4fvcg&amp;region=GB"></script><script type="text/javascript" src="<?= CLIENT_ASSETS ?>plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="<?= CLIENT_ASSETS ?>plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="<?= CLIENT_ASSETS ?>plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="<?= CLIENT_ASSETS ?>plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="<?= CLIENT_ASSETS ?>plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="<?= CLIENT_ASSETS ?>plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="<?= CLIENT_ASSETS ?>plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="<?= CLIENT_ASSETS ?>plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <!-- Custom scripts-->
    <script type="text/javascript" src="<?= CLIENT_ASSETS ?>js/main.js"></script>
  </body>
</html>