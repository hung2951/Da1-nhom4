<body class="ps-loading">
  <div class="header--sidebar"></div>
  <main class="ps-main">
    <div class="ps-checkout pt-80 pb-80">
      <div class="ps-container">
        <form class="ps-checkout__form" action="<?= CLIENT_URL . 'add/thanh-toan' ?>" method="POST">
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
                  <label>ddress<span>*</span>
                  </label>
                  <input class="form-control" type="text" name="bill_address">
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
                        <th class="text-uppercase">Price</th>
                      </tr>
                    </thead>
                    <!-- ---------------------------------BILL------------------------------- -->
                    <tbody>
                      <?php
                      foreach ($_SESSION['cart'] as $cart) : ?>
                        <tr>
                          <td><?= $cart['product_name'] ?></td>
                          <td class="text-center"><?= $cart['quantity'] ?></td>
                          <td><?= $cart['price'] ?></td>
                        
                        </tr>
                        <tr>
                          <td><?php $tong = 0;
                              // echo $tong += $cart['price'] ?></td>
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                    <tr>
                      <td>Total money</td>
                      <?php $tong += $cart['price'] * $cart['quantity']?>
                      <td><?= $tong ?></td>
                      
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
   
  </main>

</body>