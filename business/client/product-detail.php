<?php

function product_detail(){
    $id = $_GET['id'];
    $sql = "select * from product where id_product  = $id";
    $product_detail = executeQuery($sql, false);
    client_render('product-detail/index.php', [
        'product_detail' => $product_detail
    ]);
}