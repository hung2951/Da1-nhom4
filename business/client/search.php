<?php
function search()
{
    $query = $_GET['query'];
    $sql = "select *from product p join brand b on p.id_brand = b.id_brand 
                        where 
                        product_name like'%" . $query . "%'
                        or
                        brand_name like'%" . $query . "%'
                        ";
    $search = executeQuery($sql);
    client_render('product-search/index.php', [
        'dsSanPham' => $search,
    ]);
}
