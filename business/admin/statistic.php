<?php
    function statistic(){
        $sql = "SELECT b.id_brand, b.brand_name,"
        . " COUNT(*) so_luong,"
        . " MIN(p.price) gia_min,"
        . " MAX(p.price) gia_max,"
        . " AVG(p.price) gia_avg"
        . " FROM product p "
        . " JOIN brand b ON b.id_brand = p.id_brand "
        . " GROUP BY b.id_brand, b.brand_name";
        $statistic = executeQuery($sql);
        admin_render('statistic/index.php',[
            'statistic' => $statistic,
        ]);
    }
    function chart(){
        $sql = "SELECT b.id_brand, b.brand_name,"
        . " COUNT(*) so_luong,"
        . " MIN(p.price) gia_min,"
        . " MAX(p.price) gia_max,"
        . " AVG(p.price) gia_avg"
        . " FROM product p "
        . " JOIN brand b ON b.id_brand = p.id_brand "
        . " GROUP BY b.id_brand, b.brand_name";
        $chart = executeQuery($sql);
        admin_render('statistic/chart.php',[
            'chart' => $chart,
        ]);
    }
