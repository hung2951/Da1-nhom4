<body>
    <div class="container-fluid">
        <section>
            <div class="learning-news">
                <div class="container">
                    <h2 style="margin-top: 20px; text-align: center">Thanh Toán</h2>
                    <hr>
                    <table class="table table-stripped">
                        <div>
                            <label for="">Tên Khách hàng:</label><br>
                            <label for="">Số Điện Thoại:</label><br>
                            <label for="">Địa Chỉ:</label>
                        </div>

                    </table>
                    <hr>
                    <hr>
                    <table class="table table-stripped">
                        <div>
                            <label for="">MÃ Giảm Giá:</label><br>
                        </div>

                    </table>
                    <hr>
                    <hr>
                    <table class="table table-stripped">
                        <div style="text-align: center">

                            <form action="" method="POST">
                                <input type='radio' name='bills' value='0' checked />Thanh Toán Khi Nhận Hàng
                                &nbsp; &nbsp;
                                <input type='radio' name='bills' value='1'/>Thanh Toán Qua App
                                &nbsp; &nbsp;

                                <input type='radio' name='bills' value='2'>Thanh Toán Qua Thẻ Ngân Hàng
                            </form>
                        </div>

                    </table>
                    <hr>
                    <hr>
                    <table class="table table-stripped">
                        <div style="text-align: left; padding-left: 46%;">
                            <h3>Hóa Đơn</h3>
                            <?php foreach ($bill as $a) : ?>
                                <label for="">Hóa Đơn Ngày: <?= $a['bill_date'] ?></label><br>
                                <label for="">MÃ Hóa Đơn: <?= $a['id_bill'] ?></label><br>
                                <label for="">Tên Khách hàng: <?= $a['name_user'] ?></label><br>
                                <label for="">Tên Sản Phẩm: <?= $a['name_product'] ?></label><br>
                                <label for="">Số Lượng: <?= $a['quantity'] ?></label><br>
                                <label for="">Size: <?= $a['size'] ?></label><br>
                                <label for="">Mùa Sắc: <?= $a['color'] ?></label><br>
                                <label for="">Giá: <?= $a['price'] ?></label><br>
                                <label for="">Tổng Hóa Đơn:</label><br>

                            <?php endforeach ?>
                        </div>

                    </table>
                    <hr>


  <body class="ps-loading">
    <div class="header--sidebar"></div>
    <main class="ps-main">
      <div class="ps-checkout pt-80 pb-80">
        <div class="ps-container">
          <form class="ps-checkout__form" action="<?= CLIENT_URL . 'add/thanh-toan'?>" method="POST">
            <div class="row">
              
                  <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
                    
                    <div class="ps-checkout__billing">
                      <h3>Billing Detail</h3>
                            <div class="form-group form-group--inline">
                              <label>Name<span>*</span>
                              </label>
                              <input class="form-control" type="text" name="bill_name">
                            </div>
                            <div class="form-group form-group--inline">
                              <label>Company Name<span>*</span>
                              </label>
                              <input class="form-control" type="text" name="bill_compaly">
                            </div>
                            <div class="form-group form-group--inline">
                              <label>Email Address<span>*</span>
                              </label>
                              <input class="form-control" type="email" name="bill_email">
                            </div>
                            <div class="form-group form-group--inline">
                              <label>Phone<span>*</span>
                              </label>
                              <input class="form-control" type="text" name="bill_phone">
                            </div>
                            <div class="form-group form-group--inline">
                              <label>Address<span>*</span>
                              </label>
                              <input class="form-control" type="text" name="quantity">
                            </div>
                      <div class="form-group">
                      </div>
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
                              <th class="text-uppercase">Product</th>
                              <th class="text-uppercase">Total</th>
                            </tr>
                          </thead>
                          <!-- ---------------------------------BILL------------------------------- -->
                          <tbody>
                          <?php
                           foreach ($_SESSION['cart'] as $cart): ?>
                            <tr>
                              <td><?= $cart['product_name'] ?></td>
                              <td><?= $cart['price']?></td>
                            </tr>
                            <?php endforeach ?> 
                          </tbody>
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
      <div class="ps-subscribe">
        <div class="ps-container">
          <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 ">
                  <h3><i class="fa fa-envelope"></i>Sign up to Newsletter</h3>
                </div>
                <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12 ">
                  <form class="ps-subscribe__form" action="http://nouthemes.net/html/trueshoes/do_action" method="post">
                    <input class="form-control" type="text" placeholder="">
                    <button>Sign up now</button>
                  </form>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 ">
                  <p>...and receive  <span>$20</span>  coupon for first shopping.</p>
                </div>
          </div>
        </div>
      </div>
      <div class="ps-footer bg--cover" data-background="images/background/parallax.jpg">
        <div class="ps-footer__content">
          <div class="ps-container">
            <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--info">
                      <header><a class="ps-logo" href="index.html"><img src="images/logo-white.png" alt=""></a>
                        <h3 class="ps-widget__title">Address Office 1</h3>
                      </header>
                      <footer>
                        <p><strong>460 West 34th Street, 15th floor, New York</strong></p>
                        <p>Email: <a href="http://nouthemes.net/cdn-cgi/l/email-protection#99eaece9e9f6ebedd9eaedf6ebfcb7faf6f4"><span class="__cf_email__" data-cfemail="8bf8fefbfbe4f9ffcbf8ffe4f9eea5e8e4e6">[email&#160;protected]</span></a></p>
                        <p>Phone: +323 32434 5334</p>
                        <p>Fax: ++323 32434 5333</p>
                      </footer>
                    </aside>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--info second">
                      <header>
                        <h3 class="ps-widget__title">Address Office 2</h3>
                      </header>
                      <footer>
                        <p><strong>PO Box 16122 Collins  Victoria 3000 Australia</strong></p>
                        <p>Email: <a href="http://nouthemes.net/cdn-cgi/l/email-protection#7d0e080d0d120f093d0e09120f18531e1210"><span class="__cf_email__" data-cfemail="26555356564954526655524954430845494b">[email&#160;protected]</span></a></p>
                        <p>Phone: +323 32434 5334</p>
                        <p>Fax: ++323 32434 5333</p>
                      </footer>
                    </aside>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--link">
                      <header>
                        <h3 class="ps-widget__title">Find Our store</h3>
                      </header>
                      <footer>
                        <ul class="ps-list--link">
                          <li><a href="#">Coupon Code</a></li>
                          <li><a href="#">SignUp For Email</a></li>
                          <li><a href="#">Site Feedback</a></li>
                          <li><a href="#">Careers</a></li>
                        </ul>
                      </footer>
                    </aside>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--link">
                      <header>
                        <h3 class="ps-widget__title">Get Help</h3>
                      </header>
                      <footer>
                        <ul class="ps-list--line">
                          <li><a href="#">Order Status</a></li>
                          <li><a href="#">Shipping and Delivery</a></li>
                          <li><a href="#">Returns</a></li>
                          <li><a href="#">Payment Options</a></li>
                          <li><a href="#">Contact Us</a></li>
                        </ul>
                      </footer>
                    </aside>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--link">
                      <header>
                        <h3 class="ps-widget__title">Products</h3>
                      </header>
                      <footer>
                        <ul class="ps-list--line">
                          <li><a href="#">Shoes</a></li>
                          <li><a href="#">Clothing</a></li>
                          <li><a href="#">Accessries</a></li>
                          <li><a href="#">Football Boots</a></li>
                        </ul>
                      </footer>
                    </aside>
                  </div>
            </div>
          </div>
        </div>
        <div class="ps-footer__copyright">
          <div class="ps-container">
            <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                    <p>&copy; <a href="#">NOUTHEMES</a>, Inc. All rights Resevered. Design by <a href="#"> Alena Studio</a></p>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                    <ul class="ps-social">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </main>

  </body>
