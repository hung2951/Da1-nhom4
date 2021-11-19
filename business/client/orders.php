<?php
    function list_orders(){
        $id=$_GET['id'];
        $sql= "select * from product p
                inner join orders o on o.id_product = p.id_product
                inner join user u on o.id_user = u.id_user
                where u.id_user=$id";
        $orders=executeQuery($sql);

        client_render('orders/index.php', [
            'dsHoadon' => $orders,
        ]);
    }
?>