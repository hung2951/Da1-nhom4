<?php
    function category(){
        $sql = " SELECT * FROM brand ORDER BY id_brand";
        $categorys=executeQuery($sql);

        client_render('layouts/main.php', [
            'dsDanhMuc' => $categorys,
        ]);
    }
?>