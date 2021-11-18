<?php
    require_once "dao/system_dao.php";


// Lấy ra tất cả hàng hóa
    function  product_select_all(){
        $sql="select * from product order by id_product  DESC";
        return executeQuery($sql);
    }

// lấy ra hàng hóa theo id
    function product_select_by_id($id_product){
        $id_product = $_GET['id_product'];
        $sql = "select * from product where id_product = $id_product";
        return executeQuery($sql);
    }

// lấy ra các hàng hóa cùng loại
    function product_cung_loai($id_product,$id_brand){
        $sql = "select * from product where id_brand=".$id_brand." AND id_product  <>".$id_product;
        return executeQuery($sql);
    }

// lấy hàng hóa mới nhất ra
    function loadall_hanghoa_home(){
        $sql ="select * from product where 1 order by id_product  desc limit 0,6";
        $listsanpham= executeQuery($sql);
        return $listsanpham;
    }
