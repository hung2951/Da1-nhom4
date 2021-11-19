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

    function list_orders(){
        $id=$_GET['id'];
        $sql= "select *from product p
                inner join orders o on o.id_product = p.id_product
                inner join user u on o.id_user = u.id_user
                where u.id_user=$id
                order by o.status asc";
                
        $orders=executeQuery($sql);

        client_render('orders/index.php', [
            'dsHoadon' => $orders,
        ]);
    }
?>