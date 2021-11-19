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

                </div>
                <button class="btn btn-primary btn-sm">Đồng Ý Đặt hàng</button>
        </section>
    </div>

</body>

</html>