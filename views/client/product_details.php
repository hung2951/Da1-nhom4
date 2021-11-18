<body>
    <div class="container-fluid">
        <section>
            <div class="learning-news">
                <div class="container">
                    <h2 style="margin-top: 20px;">Chi Tiết Sản Phẩm</h2> <hr>
                  
                        <div class="row" style="margin-top: 15px; margin-bottom: 30px;">
                            <?php
                               
                                extract($onesp);
                                echo '
                                
                                <div class="col-sm-6 col-md-4" style="border: 1px double #adaaaa; padding:10px">
                                    <a href=""><img style="width:410px" src="'.$image.'"/></a>
                                </div>
                                ';
                                
                            ?>
                        
                            
                            <div class="col-sm-6 col-md-4" style="border: 1px double #adaaaa;">
                                    <h4 style="margin-top: 30px; margin-bottom: 20px; text-align: center;">Bảng Size Thời Trang</h4>
                                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                            <img src="content/image/size.jpg" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                            <img src="content/image/size1.jpg" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                            <img src="content//image//size1.png" class="d-block w-100" alt="...">
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                        </div>
                                    </div>
                                <div class="col-sm-6 col-md-4" style="border: 1px double #adaaaa;">    

                                <?php
                                
                                    extract($onesp);
                                   

                                echo '
                                    <h4 style="text-transform: uppercase; margin-top: 20px; margin-bottom: 20px;"><a style="text-decoration: none; color:black" href="">'.$product_name.'</a></h4>

                                    <span> <a style="text-decoration: none; color:red; font-size:20px; font-weight: bold;" href="">Giá: '.$price.'VNĐ</a></span>
                                
                                ';
                                ?>

                                
                                    
                                
                                <br>
                            
                                    <form id="cart-form" action="" method="POST" style="padding: 10px;">
                                        <strong>SIZE:</strong>
                                        <table style="margin-left: 50px;">
                                            <tr>
                                                <td><input type='radio' name='size' ng-model='mValue' value='S' checked/> S</td>
                                                <td><input type='radio' name='size' ng-model='mValue' value='M' /> M</td>
                                                <td><input type='radio' name='size' ng-model='mValue' value='L' /> L</td>
                                            </tr>
                                            <tr>
                                                <td><input type='radio' name='size' ng-model='mValue' value='XL' /> XL</td>
                                                <td><input type='radio' name='size' ng-model='mValue' value='2XL' /> 2XL</td>
                                                <td><input type='radio' name='size' ng-model='mValue' value='3XL' /> 3XL</td>
                                            </tr>
                                        </table>
                                        <br>
                                        <strong>MÀU:</strong>
                                        <input type='radio' name='mausac' ng-model='mValue' value='Đen' checked/>Đen
                                        <input type='radio' name='mausac' ng-model='mValue' value='Đỏ' />Đỏ
                                        <input type='radio' name='mausac' ng-model='mValue' value='Trắng' />Trắng
                                        <input type='radio' name='mausac' ng-model='mValue' value='Xám' />Xám
                                        <br><br>
                                        <strong>SỐ LƯỢNG:</strong>
                                        <input style="text-align: center; width:70px" type="number" name="soluong" value="1"> <br><br>
                                        
                                        <input style="background: rgb(177, 15, 15); color: #fcfafa; font-size: 20px;" type="submit" value="Mua Ngay" name="btn_them"> <br> <br>

                                        <input style="background: rgb(173, 21, 21); color: #fcfafa; font-size: 20px;" type="submit" value="Thêm Vào Giỏ Hàng" name="btn_them">
                                    </form>
                                </div>


                            <div class="grid" style="margin-top: 30px;">
                                <?php
                                    extract($onesp);
                                    

                                echo '
                                    <div class="grid__column">
                                    <div class="product-single__description">
                                        <h3 class="product-single__heading">Mô tả chi tiết</h3>
                                        <hr>

                                        <div class="info-box">'.$details.'</span>
                                        </div>
                                    </div>
                                ';
                                ?>
                               </div>
                            </div>
                        </div>
                    
                 






                        

                        <div class="mb-3">
                            <h4>Đánh Giá</h4>

                            <?php if (isset($_SESSION['user'])) : ?>

                            <form id="cart-form" action="" method="POST" style="padding: 10px;">
                                <input type="hidden" name="ma_hh" value="<?=$ma_hh?>">
                               
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="noi_dung"></textarea>
                                <button type="submit" name="btn_binhluan" style="margin-top:10px">GỬi</button>
                            </form>

                                <?php
                                    $binh_luan = binh_luan_select_by_hang_hoa($ma_hh);
                                    if(array_key_exists('btn_binhluan', $_REQUEST)){
                                        $ngay_tao = date('Y-m-d');
                                        binh_luan_insert($noi_dung, $ma_hh, $_SESSION['user']['ma_kh'], $ngay_tao);
                                    }
                                ?>

                            <?php else : ?>
                                <div class="alert"><a href="index.php?act=dangnhap">Bạn cần phải đăng nhập để bình luận</a></div>
                            <?php endif; ?>
                            <hr>
                           
                                

                            <?php 
                            $binh_luan = binh_luan_select_by_hang_hoa($ma_hh);
                            if ($binh_luan) : ?>
                                <?php foreach($binh_luan as $bl): 
                                
                            ?>
                                <div class="evaluate">
                                    <div class="kh" style="display:flex; padding: 5px 15px">
                                        <img src="<?= $IMAGE_URL . '/' . $bl['hinh_anh']?>" alt="" width="40px" style="border-radius:50%;-moz-border-radius:50%; -webkit-border-radius:50%;">
                                        <strong class="name" style="padding:10px"><?=$bl['ho_ten']?></strong>
                                    </div>

                                    <div class="danh_gia" style="padding: 0px 50px;">
                                        <div class="nd_bl"><?=$bl['noi_dung']?></div>
                                        <div class="date" style="font-size: 13px;"><?=$bl['ngay_tao']?></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <?php endif; ?>
                            















                            <div class="relate_to" style="padding: 20px 0px;">
                                <hr>
                                <div class="top_one">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item list-group-item-action" aria-current="true" style="background:#dfdddd">
                                            <h3>Sản Phẩm Cùng Loại</h3>
                                        </a>
                                        <div class="row">
                                            <?php
                                                foreach($sp_cung_loai as $sp_cung_loai){
                                                    extract($sp_cung_loai);
                                                    $hinh=$img_path.$hinh_anh;
                                                    $linksp="index.php?act=chitietsp&ma_hh=".$ma_hh;
                                                    echo '
                                                        <div class="col-4" style="padding: 2px;">
                                                            <a href="'.$linksp.'" class="list-group-item list-group-item-action"> 
                                                                <img src="'.$hinh.'" alt="" width="55px"> 
                                                                <span style="text-transform: capitalize;">'.$ten_hh.'</span> 
                                                            </a>
                                                        </div>
                                                    ';
                                                }
                                            ?>                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                             
                        </div>
                        <hr>
                </div>
                        <table style="border-collapse: collapse; width: 100%; height: 340px;" border="1">
                                <tbody>
                                    <tr style="height: 319px; ">
                                        <td style="width: 50%; text-align: center; height: 319px; "><iframe src="//www.youtube.com/embed/Ltq0dkiG0QE?t=1684 " width="100% " height="314 " allowfullscreen="allowfullscreen
                                            " data-gtm-yt-inspected-11288696_41="true "></iframe></td>
                                        <td style="width: 50%; text-align: center; height: 319px; "><iframe src="//www.youtube.com/embed/rZSTBOBL3Dk " width="100% " height="314 " allowfullscreen="allowfullscreen
                                            " data-gtm-yt-inspected-11288696_41="true "></iframe></td>
                                    </tr>
                                    <tr style="height: 18px; ">
                                        <td style="width: 50%; text-align: center; height: 18px; "><em>Youtuber Nguyễn Hữu Trí</em></td>
                                        <td style="width: 50%; text-align: center; height: 18px; "><em>Youtuber Vũ Lê Trang Anh</em></td>
                                    </tr>
                                </tbody>
                        </table>
                        <hr>
        </section>
        </div>








</body>

</html>