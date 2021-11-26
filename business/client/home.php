<?php

// function product_home(){
//     //lấy ra thông tin sản phẩm
//     $sql = "select * from product";
//     $product_home = executeQuery($sql);
//     client_render('home/index.php', [
//         'product_home' => $product_home,
//     ]);
// }


function product_home(){
    // SẢN PHẨM ĐẶC BIỆT
    $sql="select * from product where status=1 order by date_add desc limit 0,8";
    $list_spdacbiet = executeQuery($sql);
    // SẢN PHẨM CÓ LƯỢT XEM NHIỀU NHẤT
    $sql ="select * from product where 1 order by view desc limit 0,8";
    $list_sp = executeQuery($sql);

    client_render('home/index.php', [
        'list_spdacbiet' => $list_spdacbiet,
        'list_sp' => $list_sp,
    ]);
}

// //tốp 10 hàng hóa
// function top10_luot_xem(){
//     $sql ="select * from product where 1 order by luot_xem desc limit 0,10";
//     $listsanpham= pdo_query($sql);
//     client_render('home/index.php', [
//         'product_home' => $product_home,
//     ]);
// }




?>