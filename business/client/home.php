<?php
function product_home(){
    // SẢN PHẨM MỚi
    $sql="select * from product p join brand b on p.id_brand = b.id_brand
     where p.new_product = 1 order by date_add desc limit 0,8";
    $list_spdacbiet = executeQuery($sql);
    // SẢN PHẨM CÓ LƯỢT XEM NHIỀU NHẤT
    $sql ="select * from product p join brand b on p.id_brand = b.id_brand
                    where 1 order by view desc limit 0,8";
    $list_sp = executeQuery($sql);

    client_render('home/index.php', [
        'list_spdacbiet' => $list_spdacbiet,
        'list_sp' => $list_sp,
    ]);
}



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