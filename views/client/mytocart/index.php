<body>
    <div class="container-fluid">
        <section>
            <div class="learning-news">
                <div class="container">
                    <h2 style="margin-top: 20px;">Giỏ Hàng</h2>
                    <hr>
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>Tên Sản Phẩm</th>
                                <th>Hình Ảnh</th>
                                <th>Giá</th>
                                <th>Số Lượng</th>
                                <th>Size</th>
                                <th>màu</th>
                                <th>Tổng Tiền</th>
                                <th>Xóa</th>

                            </tr>
                        </thead>
                     
                        <tbody>
                        <?php foreach ($mytocart as $cart): ?>
                                <?php 
                                    $tong= $cart['price'] * $cart['quantity'];
                                ?>
                            <tr>
                                <th><?= $cart['name'] ?></th>
                                <th><?= $cart['image'] ?></th>
                                <th><?= $cart['price'] ?></th>
                                <th><?= $cart['quantity'] ?></th>
                                <th><?= $cart['size'] ?></th>
                                <th><?= $cart['color'] ?></th>
                                <th><?= $tong?></th>
                                <th></th>
                            </tr>
                        <?php endforeach ?>  
                        </tbody>

                    </table>
                    <button type="submit" class="btn btn-sm btn-danger">Lưu</button>
                &nbsp;  
                <button type="submit" class="btn btn-primary btn-sm">Lưu</button>
                   
                    <hr>
                </div>
        </section>
    </div>

</body>

</html>