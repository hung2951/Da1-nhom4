<?php
    function select_product_by_id(){
        $id=$_GET['id_brand'];
        $sql=" SELECT * FROM product WHERE id_brand=$id";
        $product_category=executeQuery($sql);

        $sql_brand="SELECT * FROM brand WHERE id_brand=$id";
        $brand=executeQuery($sql_brand, false);

        client_render('product-category/index.php', [
            'product_category'=>$product_category,
            'brand'=>$brand,
        ]);
    }
    
?>