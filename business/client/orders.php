<?php
    function order(){
        $id = $_GET['id'];
        $sql = "select * from user u inner join  orders o on u.id_user = o.id_user
                                    inner join product p on p.id_product = o.id_product
                                    where o.id_orders = $id";
        $orders = executeQuery($sql,false);
        client_render('orders/order-details.php',[
            'o' => $orders,
        ]);
    }

?>