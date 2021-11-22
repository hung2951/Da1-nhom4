<?php

function cart(){
    $id = $_GET['id'];
    $sql = "select * from cart where id_cart  = $id";
    $cart = executeQuery($sql, false);
    client_render('cart/index.php', [
        'cart' => $cart
    ]);
}
