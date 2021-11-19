<body>
    <div class="container-fluid">
        <section>
            <div class="learning-news">
                <div class="container">
                    <h2 style="margin-top: 20px;">Giỏ Hàng</h2>
                    <hr>
                    <table>
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Giầy</th>
                                <th>Hình Ảnh</th>
                                <th>Màu Sắc</th>
                                <th>Size</th>
                                <th>Số Lượng</th>
                                <th>Giá</th>

                            </tr>
                        </thead>
                        <?php
                                mytocart();
                        ?>

                        <tbody>
                            <tr>
                                <th><?= $mytocart['id_product'] ?></th>
                                <th><?= $mytocart['id_user'] ?></th>
                                <th><?= $mytocart['order_date'] ?></th>
                                <th><?= $mytocart['order_quantity'] ?></th>
                                <th><?= $mytocart['status'] ?></th>
                                <th><?= $mytocart['money'] ?></th>
                                <th></th>
                            </tr>
                        </tbody>
                        <?php ?>
                    </table>
                    <hr>
                </div>
        </section>
    </div>

</body>

</html>