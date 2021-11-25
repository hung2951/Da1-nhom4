<?php

function product_home(){
    //lấy ra thông tin sản phẩm
    $sql = "select * from product";
    $product_home = executeQuery($sql);
    client_render('home/index.php', [
        'product_home' => $product_home,
    ]);
}
?>