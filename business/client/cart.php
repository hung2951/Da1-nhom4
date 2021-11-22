<?php

function cart(){
    $id = $_GET['id'];
    $sql = "select * from product where id_product  = $id";
    $cart = executeQuery($sql, false);
    client_render('cart/index.php', [
        'cart' => $cart
    ]);
}
