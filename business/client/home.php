<?php
    function category(){
        $sql = " SELECT * FROM brand ORDER BY id_brand";
        $categories=executeQuery($sql);

        client_render('layouts/main.php', [
            'dsDanhMuc' => $categories,
        ]);
    }

    function select_product_by_id(){
        $id=$_GET['id_brand'];
        $sql=" SELECT * FROM product WHERE id_brand=$id";
        $product_category=executeQuery($sql);

        client_render('product-category/index.php', [
            'product_category'=>$product_category,
        ]);
    }
?>