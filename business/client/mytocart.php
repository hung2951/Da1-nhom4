<?php

function mytocart(){
    $id = $_GET['id'];
    $sql = "select * from orders where id_orders  = $id";
    $mytocart = executeQuery($sql, false);
    client_render('mytocart/index.php', [
        'mytocart' => $mytocart
    ]);
}