<?php
    function order(){
        $id = $_GET['id'];
        $sql = "select *from product p
                        inner join orders o on o.id_product = p.id_product
                        inner join user u on o.id_user = u.id_user
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
        $sql_user = "select * from user where id_user = $id";
        $user = executeQuery($sql_user,false);
        client_render('orders/index.php', [
            'dsHoadon' => $orders,
            'u' => $user,
        ]);
    }
    function update_order(){
        $id = $_GET['id'];
        $sql = "select * from user u inner join orders o on u.id_user = o.id_user
                                    inner join product p on p.id_product = o.id_product
                                    where o.id_orders = $id";
        $orders = executeQuery($sql,false);
        client_render('orders/update-order.php',[
            'o' => $orders,
        ]);
    }
    function save_update_order(){
        $id = $_GET['id'];
        $id_user = $_POST['id_user'];
        $size = $_POST['size'];
        $money = $_POST['money'];
        $quantity = $_POST['quantity'];
        $sql = "update orders set 
                orders_size = '$size',
                money = '$money',
                quantity_orders = '$quantity'
                where id_orders = $id";
        executeQuery($sql);
        header('location: '.CLIENT_URL.'hoa-don?id='.$id_user);
    }
    function delete_order(){
        $id = $_GET['id'];
        $id_user = $_GET['id_user'];
        $sql = "delete from orders where id_orders = $id";
        executeQuery($sql);
        header('location: '.CLIENT_URL.'hoa-don?id='.$id_user);
    }
?>