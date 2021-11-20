<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= CLIENT_ASSETS ?>css/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= CLIENT_ASSETS ?>css/dist/css/adminlte.min.css">
</head>
<style>
    body{
        font-size:15px;
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
    <div class="card card-solid">
      <div class="card-body">
        <div class="row">
        <?php product_detail(); ?>
          <div class="col-12 col-sm-6" style="text-align:center">
            <h2 class="d-inline-block d-sm-none"><?= $product_detail['product_name'] ?></h2>
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
        <?php ?>
          <div class="col-12 col-sm-6">
            <?php product_detail(); ?>
            <h2 style="font-size:30px" class="my-3"><?= $product_detail['product_name'] ?></h2>
            <?php ?>
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
                <input type="radio" name="color_option" id="color_option_b1" autocomplete="off">
                <span class="text-xl">36</span>
              </label>
              <label class="btn btn-default text-center">
                <input type="radio" name="color_option" id="color_option_b2" autocomplete="off">
                <span class="text-xl">37</span>
              </label>
              <label class="btn btn-default text-center">
                <input type="radio" name="color_option" id="color_option_b3" autocomplete="off">
                <span class="text-xl">38</span>
              </label>
              <label class="btn btn-default text-center">
                <input type="radio" name="color_option" id="color_option_b4" autocomplete="off">
                <span class="text-xl">39</span>
              </label>
              <label class="btn btn-default text-center">
                <input type="radio" name="color_option" id="color_option_b4" autocomplete="off">
                <span class="text-xl">40</span>
              </label>
              <label class="btn btn-default text-center">
                <input type="radio" name="color_option" id="color_option_b4" autocomplete="off">
                <span class="text-xl">41</span>
              </label>
              <label class="btn btn-default text-center">
                <input type="radio" name="color_option" id="color_option_b4" autocomplete="off">
                <span class="text-xl">42</span>
              </label>
              <label class="btn btn-default text-center">
                <input type="radio" name="color_option" id="color_option_b4" autocomplete="off">
                <span class="text-xl">43</span>
              </label>
            </div>

            <div class="bg-gray py-2 px-3 mt-4">
            <?php product_detail(); ?>
              <h2 class="mb-0">
                <?= number_format($product_detail['price']) ?> <u>đ</u>
              </h2>
              <?php ?>
            </div>

            <div class="mt-4">
              <div class="btn btn-primary btn-lg btn-flat">
                <i class="fas fa-cart-plus fa-lg mr-2"></i>
                Add to Cart
              </div>

              <div class="btn btn-default btn-lg btn-flat">
                <i class="fas fa-heart fa-lg mr-2"></i>
                Add to Wishlist
              </div>
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
        </div>
        <div class="row mt-4">
          <nav class="w-100">
            <div class="nav nav-tabs" id="product-tab" role="tablist">
              <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc"
                role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
              <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments"
                role="tab" aria-controls="product-comments" aria-selected="false">Comments</a>
            </div>
          </nav>
          <div class="tab-content p-3" id="nav-tabContent">
            <?php product_detail(); ?>
                <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"><?= $product_detail['details'] ?></div>
            <?php ?>



            <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">
              <form id="cart-form" action="" method="POST" style="padding: 10px;">
                <input type="hidden" name="ma_hh" value="<?= $ma_hh ?>">

                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="noi_dung"></textarea>
                <button type="submit" name="btn_binhluan" style="margin-top:10px">GỬi</button>
              </form>

              <div class="evaluate">

                <div class="kh" style="display:flex; padding: 5px 15px">
                  <img src="<?= PUBLIC_ASSETS . '/uploads/avatars/' . $product_detail['product_image'] ?>" alt="" width="40px"
                    style="border-radius:50%;-moz-border-radius:50%; -webkit-border-radius:50%;">
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