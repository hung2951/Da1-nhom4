<?php

function product_detail(){
    $id = $_GET['id'];
    $sql = "select * from product where id_product  = $id";
    $product_detail = executeQuery($sql, false);
    client_render('product-detail/index.php', [
        'product_detail' => $product_detail
    ]);
}


//lấy  list bình luận
function comment(){
    $id = $_GET['id'];
    $sql = "SELECT * FROM comment bl INNER JOIN user kh ON bl.id_user=kh.id_user WHERE id=?";
    $comment = executeQuery($sql, false);
    client_render('product-detail/index.php', [
        'comment' => $comment
    ]);
}


//lấy ra sản phẩm liên quan
// function product_same_kind(){
//     $id_brand = $_GET['id_brand'];
//     $id_product = $_GET['id_product'];
//     $sql = "select * from product where id_brand =".$id_brand." AND id_product <>".$id_product;
//     $product_same_kind = executeQuery($sql, false);
//     client_render('product-detail/index.php', [
//         'product_same_kind' => $product_same_kind
//     ]);
// }
