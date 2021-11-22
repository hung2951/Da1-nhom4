<?php

function product_detail(){
    //lấy ra thông tin sản phẩm
    $id = $_GET['id'];
    $sql = "select * from product where id_product  = $id";
    $product_detail = executeQuery($sql, false);
    // Lấy ra sản phẩm theo danh mục
    $id_brand = $_GET['id_brand'];
    $sql = "select * from product where id_brand =".$id_brand." AND id_product <>".$id;
    $product_same_kind = executeQuery($sql, false);
    client_render('product-detail/index.php', [
        'product_detail' => $product_detail,
        'product_same_kind' => $product_same_kind
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