<?php
    function category(){
        $sql = " SELECT * FROM brand ORDER BY id_brand";
        $categorys=executeQuery($sql);

        client_render('home/index.php', [
            'dsDanhMuc' => $categorys,
        ]);
    }
?>