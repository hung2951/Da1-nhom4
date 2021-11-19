<body>
    <div class="container-fluid">
        <section>
            <div class="learning-news">
                <div class="container">
                    <h2 style="margin-top: 20px;">Chi Tiết Sản Phẩm</h2>
                    <hr>

                    <div class="row" style="margin-top: 15px; margin-bottom: 30px;">
                        <?php
                                product_detail();
                            ?>

                        <div class="col-sm-6 col-md-4" style="border: 1px double #adaaaa; padding:10px">
                            <a href=""><img style="width:410px"
                                    src="<?= PUBLIC_ASSETS . $product_detail['image'] ?>" /></a>
                        </div>



                        <?php 
                            ?>

                        <div class="col-sm-6 col-md-4" style="border: 1px double #adaaaa;">
                            <h4 style="margin-top: 30px; margin-bottom: 20px; text-align: center;">Bảng Size Thời Trang
                            </h4>
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="0" class="active" aria-current="true"
                                        aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?= CLIENT_ASSETS ?>images/size4.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?= CLIENT_ASSETS ?>images/size2.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?= CLIENT_ASSETS ?>images/size3.png" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4" style="border: 1px double #adaaaa;">

                            <?php
                                    product_detail();
                                ?>
                            <h4 style="text-transform: uppercase; margin-top: 20px; margin-bottom: 20px;"><a
                                    style="text-decoration: none; color:black" href="">
                                    <?php echo $product_detail['product_name'] ?>
                                </a></h4>

                            <span> <a style="text-decoration: none; color:red; font-size:20px; font-weight: bold;"
                                    href="">Giá:
                                    <?php echo $product_detail['price'] ?>
                                </a></span>

                            <?php 
                            ?>




                            <br>

                            <form id="cart-form" action="" method="POST" style="padding: 10px;">
                                <strong>SIZE:</strong>
                                <table style="margin-left: 50px;">
                                    <tr>
                                        <td><input type='radio' name='size' ng-model='mValue' value='36' checked /> 36
                                        </td>
                                        <td><input type='radio' name='size' ng-model='mValue' value='37' /> 37</td>
                                        <td><input type='radio' name='size' ng-model='mValue' value='38' /> 38</td>
                                        <td><input type='radio' name='size' ng-model='mValue' value='39' /> 39</td>
                                    </tr>
                                    <tr>
                                        <td><input type='radio' name='size' ng-model='mValue' value='40' /> 40</td>
                                        <td><input type='radio' name='size' ng-model='mValue' value='41' /> 41</td>
                                        <td><input type='radio' name='size' ng-model='mValue' value='42' /> 42</td>
                                        <td><input type='radio' name='size' ng-model='mValue' value='43' /> 43</td>
                                    </tr>
                                </table>
                                <br>
                                <strong>MÀU:</strong>
                                <input type='radio' name='mausac' ng-model='mValue' value='Đen' checked />Đen
                                <input type='radio' name='mausac' ng-model='mValue' value='Đỏ' />Đỏ
                                <input type='radio' name='mausac' ng-model='mValue' value='Trắng' />Trắng
                                <input type='radio' name='mausac' ng-model='mValue' value='Xám' />Xám
                                <br><br>
                                <strong>SỐ LƯỢNG:</strong>
                                <input style="text-align: center; width:70px" type="number" name="soluong" value="1">
                                <br><br>

                                <input style="background: rgb(177, 15, 15); color: #fcfafa; font-size: 20px;"
                                    type="submit" value="Mua Ngay" name="btn_them"> <br> <br>

                                <input style="background: rgb(173, 21, 21); color: #fcfafa; font-size: 20px;"
                                    type="submit" value="Thêm Vào Giỏ Hàng" name="btn_them">
                            </form>
                        </div>


                        <div class="grid" style="margin-top: 30px;">
                            <?php
                                    product_detail();
                                ?>
                            <div class="grid__column">
                                <div class="product-single__description">
                                    <h3 class="product-single__heading">Mô tả chi tiết</h3>
                                    <hr>

                                    <div class="info-box">
                                        <?php echo $product_detail['details'] ?></span>
                                    </div>
                                </div>
                                <?php 
                            ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>


                <div class="container">
                    <div class="mb-3">
                        <h4>Đánh Giá</h4>


                        <form id="cart-form" action="" method="POST" style="padding: 10px;">
                            <input type="hidden" name="ma_hh" value="<?=$ma_hh?>">

                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                name="noi_dung"></textarea>
                            <button type="submit" name="btn_binhluan" style="margin-top:10px">GỬi</button>
                        </form>
                        <br><br>


                        <div class="evaluate">

                        <?php 
                            $comment = comment();
                            if ($comment) : ?>
                                <?php foreach($comment as $comment): 
                                
                            ?>

                            <div class="kh" style="display:flex; padding: 5px 15px">
                                <img src=" " alt="" width="40px"
                                    style="border-radius:50%;-moz-border-radius:50%; -webkit-border-radius:50%;">
                                <strong class="name" style="padding:10px"><?= $comment['full_name'] ?></strong>
                            </div>

                            <div class="danh_gia" style="padding: 0px 50px;">
                                <div class="nd_bl"><?= $comment['content'] ?></div>
                                <div class="date" style="font-size: 13px;"><?= $comment['date'] ?></div>
                            </div>

                            <?php endforeach; ?>
                            <?php endif; ?>

                        </div>


                    </div>



                    <div class="relate_to" style="padding: 20px 0px;">
                        <hr>
                        <div class="top_one">
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action" aria-current="true"
                                    style="background:#dfdddd">
                                    <h3>Sản Phẩm Cùng Loại</h3>
                                    <br>
                                </a>
                                <br>
                                <div class="row">

                                    <div class="col-4" style="padding: 2px;">
                                        <a href=" " class="list-group-item list-group-item-action">
                                            <img src="<?= CLIENT_ASSETS ?>images/size4.jpg" alt="" width="55px">
                                            <span style="text-transform: capitalize;">Tên sản phẩm</span>
                                        </a>
                                    </div>
                                    <div class="col-4" style="padding: 2px;">
                                        <a href=" " class="list-group-item list-group-item-action">
                                            <img src="<?= CLIENT_ASSETS ?>images/size4.jpg" alt="" width="55px">
                                            <span style="text-transform: capitalize;">Tên sản phẩm</span>
                                        </a>
                                    </div>
                                    <div class="col-4" style="padding: 2px;">
                                        <a href=" " class="list-group-item list-group-item-action">
                                            <img src="<?= CLIENT_ASSETS ?>images/size4.jpg" alt="" width="55px">
                                            <span style="text-transform: capitalize;">Tên sản phẩm</span>
                                        </a>
                                    </div>
                                    <div class="col-4" style="padding: 2px;">
                                        <a href=" " class="list-group-item list-group-item-action">
                                            <img src="<?= CLIENT_ASSETS ?>images/size4.jpg" alt="" width="55px">
                                            <span style="text-transform: capitalize;">Tên sản phẩm</span>
                                        </a>
                                    </div>
                                    <div class="col-4" style="padding: 2px;">
                                        <a href=" " class="list-group-item list-group-item-action">
                                            <img src="<?= CLIENT_ASSETS ?>images/size4.jpg" alt="" width="55px">
                                            <span style="text-transform: capitalize;">Tên sản phẩm</span>
                                        </a>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>

                </div>



                <br><br><br>
                <table style="border-collapse: collapse; width: 100%; height: 340px;" border="1">
                    <tbody>
                        <tr style="height: 319px; ">
                            <td style="width: 50%; text-align: center; height: 319px; "><iframe
                                    src="//www.youtube.com/embed/Ltq0dkiG0QE?t=1684 " width="100% " height="314 "
                                    allowfullscreen="allowfullscreen
                                            " data-gtm-yt-inspected-11288696_41="true "></iframe></td>
                            <td style="width: 50%; text-align: center; height: 319px; "><iframe
                                    src="//www.youtube.com/embed/rZSTBOBL3Dk " width="100% " height="314 "
                                    allowfullscreen="allowfullscreen
                                            " data-gtm-yt-inspected-11288696_41="true "></iframe></td>
                        </tr>
                        <tr style="height: 18px; ">
                            <td style="width: 50%; text-align: center; height: 18px; "><em>Youtuber Nguyễn Hữu
                                    Trí</em>
                            </td>
                            <td style="width: 50%; text-align: center; height: 18px; "><em>Youtuber Vũ Lê Trang
                                    Anh</em>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <hr>

        </section>
    </div>








</body>

</html>