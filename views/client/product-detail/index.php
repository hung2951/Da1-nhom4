
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= CLIENT_ASSETS ?>css/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= CLIENT_ASSETS ?>css/dist/css/adminlte.min.css">
</head>

<style>
    body {
        font-size: 15px;
    }

    h3 {
        font-size: 2.05rem;
        padding: 10px;
    }

    label.btn.btn-default.text-center {
        font-size: 1.3rem;
        padding: 8px;
    }

    h4.mt-3 {
        font-size: 2rem;
    }

    h2.mb-0 {
        font-size: 3rem;
    }

    .btn.btn-primary.btn-lg.btn-flat {
        font-size: 2.05rem;
    }

    .btn.btn-default.btn-lg.btn-flat {
        font-size: 2.05rem;
    }

    textarea#exampleFormControlTextarea1 {
        font-size: 15px;
    }

    .mt-4.product-share {
        font-size: 18px;
    }

    .col-12.product-image-thumbs {
        text-align: center;
    }
</style>

<body>
    <section class="content">

        <!-- Default box -->
        <div class="card card-solid" style="padding: 20px 0px">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-6" style="text-align:center">
                        <h2 class="d-inline-block d-sm-none">
                            <?= $product_detail['product_name'] ?>
                        </h2>
                        <div class="col-12">
                            <img src="<?= PUBLIC_ASSETS . '/uploads/avatars/' . $product_detail['product_image'] ?>" class="product-image" alt="Product Image" style="width:500px;">
                        </div>
                        <div class="col-12 product-image-thumbs">
                            <div class="product-image-thumb active"><img src="<?= PUBLIC_ASSETS . '/uploads/avatars/' . $product_detail['product_image'] ?>" alt="Product Image"></div>
                            <div class="product-image-thumb"><img src="<?= PUBLIC_ASSETS . '/uploads/avatars/' . $product_detail['product_image'] ?>" alt="Product Image"></div>
                            <div class="product-image-thumb"><img src="<?= PUBLIC_ASSETS . '/uploads/avatars/' . $product_detail['product_image'] ?>" alt="Product Image"></div>
                            <div class="product-image-thumb"><img src="<?= PUBLIC_ASSETS . '/uploads/avatars/' . $product_detail['product_image'] ?>" alt="Product Image"></div>
                            <div class="product-image-thumb"><img src="<?= PUBLIC_ASSETS . '/uploads/avatars/' . $product_detail['product_image'] ?>" alt="Product Image"></div>
                        </div>
                    </div>
                    <form action="<?= CLIENT_URL?>them-gio-hang?id=<?= $product_detail['id_product']?>" method="POST">
                    <div class="col-12 col-sm-6">
                        <h2 style="font-size:30px" class="my-3">
                            <?= $product_detail['product_name'] ?>
                        </h2>
                        <hr>
                        <h3>Available Colors</h3>
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-default text-center">
                                <input type="radio" name="color_option" id="color_option_a2" autocomplete="off">
                                Blue
                                <br>
                                <i class="fas fa-circle fa-2x text-blue"></i>
                            </label>
                            <label class="btn btn-default text-center">
                                <input type="radio" name="color_option" id="color_option_a3" autocomplete="off">
                                warning
                                <br>
                                <i class="fas fa-circle fa-2x text-warning"></i>
                            </label>
                            <label class="btn btn-default text-center">
                                <input type="radio" name="color_option" id="color_option_a4" autocomplete="off">
                                Red
                                <br>
                                <i class="fas fa-circle fa-2x text-red"></i>
                            </label>
                            <label class="btn btn-default text-center">
                                <input type="radio" name="color_option" id="color_option_a5" autocomplete="off">
                                white
                                <br>
                                <i class="fas fa-circle fa-2x text-white"></i>
                            </label>
                            <label class="btn btn-default text-center">
                                <input type="radio" name="color_option" id="color_option_a6" autocomplete="off" checked>
                                Body
                                <br>
                                <i class="fas fa-circle fa-2x text-body"></i>
                            </label>
                        </div>

                        <h3 class="mt-3">Size <small>Please select one</small></h3>
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-default text-center">
                                <input type="radio" name="color_option" id="color_option_b1" autocomplete="off" value="36">
                                <span class="text-xl">36</span>
                            </label>
                            <label class="btn btn-default text-center">
                                <input type="radio" name="size" id="color_option_b2" autocomplete="off" value="37">
                                <span class="text-xl">37</span>
                            </label>
                            <label class="btn btn-default text-center">
                                <input type="radio" name="size" id="color_option_b3" autocomplete="off" value="38">
                                <span class="text-xl">38</span>
                            </label>
                            <label class="btn btn-default text-center">
                                <input type="radio" name="size" id="color_option_b4" autocomplete="off" value="39" checked>
                                <span class="text-xl">39</span>
                            </label>
                            <label class="btn btn-default text-center">
                                <input type="radio" name="size" id="color_option_b4" autocomplete="off" value="40">
                                <span class="text-xl">40</span>
                            </label>
                            <label class="btn btn-default text-center">
                                <input type="radio" name="size" id="color_option_b4" autocomplete="off" value="41">
                                <span class="text-xl">41</span>
                            </label>
                            <label class="btn btn-default text-center">
                                <input type="radio" name="size" id="color_option_b4" autocomplete="off" value="42">
                                <span class="text-xl">42</span>
                            </label>
                            <label class="btn btn-default text-center">
                                <input type="radio" name="size" id="color_option_b4" autocomplete="off" value="43">
                                <span class="text-xl">43</span>
                            </label>
                        </div>
                        <div class="ct_quantity" style="display: flex">
                            <h3 class="mt-3">Số lượng</h3>
                            <input name="quantity" min="1" style="text-align:center; width:100px; height:30px; margin-top:18px" type="number" value="1">
                        </div>
                        <div class="bg-gray py-2 px-3 mt-4">
                            <h2 class="mb-0">
                                <?= number_format($product_detail['price']) ?> <u>đ</u>
                            </h2>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-lg btn-flat">
                                <i class="fas fa-cart-plus fa-lg mr-2"></i>
                                Add to Cart
                            </button>

                            <a class="btn btn-default btn-lg btn-flat">
                                <i class="fas fa-heart fa-lg mr-2"></i>
                                Add to Wishlist
                          </a>
                        </div>

                        <div class="mt-4 product-share">
                            <a href="#" class="text-gray">
                                <i class="fab fa-facebook-square fa-2x"></i>
                            </a>
                            <a href="#" class="text-gray">
                                <i class="fab fa-twitter-square fa-2x"></i>
                            </a>
                            <a href="#" class="text-gray">
                                <i class="fas fa-envelope-square fa-2x"></i>
                            </a>
                            <a href="#" class="text-gray">
                                <i class="fas fa-rss-square fa-2x"></i>
                            </a>
                        </div>

                    </div>
                    </form>
                </div>
                <div class="row mt-4">
                    <nav class="w-100">
                        <div class="nav nav-tabs" id="product-tab" role="tablist">
                            <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
                            <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Comments</a>
                        </div>
                    </nav>
                    <div class="tab-content p-3" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
                            <?= $product_detail['details'] ?>
                        </div>
                        <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">
                            <form id="cart-form" action="" method="POST" style="padding: 10px;">
                                <input type="hidden" name="ma_hh" value="<?= $ma_hh ?>">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="noi_dung"></textarea>
                                <button type="submit" name="btn_binhluan" style="margin-top:10px">Bình luận</button>
                            </form>
                            <div class="evaluate">

                                <div class="kh" style="display:flex; padding: 5px 15px">
                                    <img src="<?= PUBLIC_ASSETS . '/uploads/avatars/' . $product_detail['product_image'] ?>" alt="" width="40px" style="border-radius:50%;-moz-border-radius:50%; -webkit-border-radius:50%;">
                                    <strong class="name" style="padding:10px">
                                        Nguyễn Văn Trăm
                                    </strong>
                                </div>
                                <div class="danh_gia" style="padding: 0px 50px;">
                                    <div class="nd_bl">
                                        Vivamus rhoncus nisl sed venenatis luctus. Sed condimentum risus ut tortor feugiat laoreet.
                                        Suspendisse potenti. Donec et finibus sem, ut commodo lectus. Cras eget neque dignissim, placerat
                                        orci interdum, venenatis odio. Nulla turpis elit, consequat eu eros ac, consectetur fringilla urna.
                                        Duis gravida ex pulvinar mauris ornare, eget porttitor enim vulputate. Mauris hendrerit, massa nec
                                        aliquam cursus, ex elit euismod lorem, vehicula rhoncus nisl dui sit amet eros. Nulla turpis lorem,
                                        dignissim a sapien eget, ultrices venenatis dolor. Curabitur vel turpis at magna elementum hendrerit
                                        vel id dui. Curabitur a ex ullamcorper, ornare velit vel, tincidunt ipsum.
                                    </div>
                                    <div class="date" style="font-size: 13px;">
                                        23/12/2022
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="ps-section ps-section--top-sales ps-owl-root pt-40 pb-80">
                    <div class="ps-container">
                        <div class="ps-section__header mb-50">
                            <div class="row">
                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                                    <h3 class="ps-section__title" data-mask="Related item">- YOU MIGHT ALSO LIKE</h3>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                                    <div class="ps-owl-actions"><a class="ps-prev" href="#"><i class="ps-icon-arrow-right"></i>Prev</a><a class="ps-next" href="#">Next<i class="ps-icon-arrow-left"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="ps-section__content">
                            <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">
                                <?php foreach ($product_same_kind as $ps) : ?>
                                    <div class="ps-shoes--carousel">
                                        <div class="ps-shoe">
                                            <div class="ps-shoe__thumbnail">
                                                <div class="ps-badge"><span>New</span></div>
                                                <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a>
                                                <img src="<?= PUBLIC_ASSETS . '/uploads/avatars/' . $ps['product_image'] ?>" alt="">
                                                <a class="ps-shoe__overlay" href="<?= CLIENT_URL .'chi-tiet-san-pham?id='.$ps['id_product'].'&id_brand='.$ps['id_brand']?>"></a>
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
                                                <div class="ps-shoe__detail">
                                                    <a class="ps-shoe__name" href="<?= CLIENT_URL .'chi-tiet-san-pham?id='.$ps['id_product'].'&id_brand='.$ps['id_brand']?>">
                                                        <?= $ps['product_name'] ?>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach?>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->



    </section>



    <!-- jQuery -->
    <script src="<?= CLIENT_ASSETS ?>css/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= CLIENT_ASSETS ?>css/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= CLIENT_ASSETS ?>css/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= CLIENT_ASSETS ?>css/dist/js/demo.js"></script>
</body>

</html>