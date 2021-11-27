<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:300,400,700%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet" />
    <link href="<?= CLIENT_ASSETS ?>plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?= CLIENT_ASSETS ?>plugins/ps-icon/style.css" rel="stylesheet" /><!-- CSS Library-->
    <link href="<?= CLIENT_ASSETS ?>plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= CLIENT_ASSETS ?>plugins/owl-carousel/assets/owl.carousel.css" rel="stylesheet" />
    <link href="<?= CLIENT_ASSETS ?>plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css" rel="stylesheet" />
    <link href="<?= CLIENT_ASSETS ?>plugins/slick/slick/slick.css" rel="stylesheet" />
    <link href="<?= CLIENT_ASSETS ?>plugins/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" />
    <link href="<?= CLIENT_ASSETS ?>plugins/Magnific-Popup/dist/magnific-popup.css" rel="stylesheet" />
    <link href="<?= CLIENT_ASSETS ?>plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
    <link href="<?= CLIENT_ASSETS ?>plugins/revolution/css/settings.css" rel="stylesheet" />
    <link href="<?= CLIENT_ASSETS ?>plugins/revolution/css/layers.css" rel="stylesheet" />
    <link href="<?= CLIENT_ASSETS ?>plugins/revolution/css/navigation.css" rel="stylesheet" /><!-- Custom-->
    <link href="<?= CLIENT_ASSETS ?>css/style.css" rel="stylesheet" />
</head>

<body class="ps-loading">
    <main class="ps-main">
        <div class="ps-section__header mb-50">
            <h3 class="ps-section__title" data-mask="features"><?= $brand['brand_name'] ?></h3>
        </div>

        <div class="ps-section__content pb-50">
            <div class="masonry-wrapper" data-col-md="4" data-col-sm="2" data-col-xs="1" data-gap="30" data-radio="100%">
                <div class="ps-masonry">
                    <div class="grid-sizer"></div>
                    <?php foreach ($product_category as $category) : ?>
                        <div class="grid-item kids">
                            <div class="grid-item__content-wrapper">
                                <div class="ps-shoe mb-30">
                                    <a href="<?= CLIENT_URL . 'chi-tiet-san-pham?id=' . $category['id_product'] . '&id_brand=' . $category['id_brand'] ?>">
                                        <div class="ps-shoe__thumbnail">
                                            <img alt="" src="<?= PUBLIC_ASSETS . '/uploads/avatars/' . $category['product_image'] ?>" />
                                        </div>
                                    </a>

                                    <div class="ps-shoe__content">
                                        <div class="ps-shoe__variants">
                                            <div class="ps-shoe__variant normal">
                                                <img alt="" src="<?= PUBLIC_ASSETS . '/uploads/avatars/' . $category['product_image'] ?>" />
                                                <img alt="" src="<?= PUBLIC_ASSETS . '/uploads/avatars/' . $category['product_image'] ?>" />
                                                <img alt="" src="<?= PUBLIC_ASSETS . '/uploads/avatars/' . $category['product_image'] ?>" />
                                                <img alt="" src="<?= PUBLIC_ASSETS . '/uploads/avatars/' . $category['product_image'] ?>" />
                                            </div>
                                        </div>

                                        <div class="ps-shoe__detail"><a class="ps-shoe__name" href="<?= CLIENT_URL . 'chi-tiet-san-pham?id=' . $category['id_product'] . '&id_brand=' . $category['id_brand'] ?>"><?= $category['product_name'] ?></a>
                                            <span class="ps-shoe__price"> <?= number_format($category['price']) ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        </div>
        </div>
        <div class="ps-section--offer">
            <div class="ps-column"><a class="ps-offer" href="product-listing.html"><img alt="" src="<?= CLIENT_ASSETS ?>images/banner/home-banner-1.png" /></a></div>

            <div class="ps-column"><a class="ps-offer" href="product-listing.html"><img alt="" src="<?= CLIENT_ASSETS ?>images/banner/home-banner-2.png" /></a></div>
        </div>
    </main>
    <!-- JS Library-->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="text/javascript" src="<?= CLIENT_ASSETS ?>plugins/jquery/dist/jquery.min.js"></script>
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
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-XBs8xkUbYA0ykeWNnxWRP8SMOSQHFW8&amp;region=GB"></script>
    <script type="text/javascript" src="<?= CLIENT_ASSETS ?>plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
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