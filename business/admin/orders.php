<?php

function save_update_status()
{
    $id = $_GET['id'];
    $status = $_POST['status'];
    $sql = "update orders set status = $status where id_orders = $id";
    executeQuery($sql);
    header("location: " . ADMIN_URL . 'don-hang');
}
function select_order()
{
    $sql = "select * from orders  order by status asc";
    $orders = executeQuery($sql);
    admin_render('orders/index.php', [
        'dsHoadon' => $orders,
    ]);
}
function order_status()
{   
    $id = $_GET['id'];
    $sql = "select * from orders where id_orders=$id";
    $orders = executeQuery($sql,false);
    admin_render('orders/update-status.php', [
        'o' => $orders,
    ]);
}
function order_details(){
    $id = $_GET['id'];
    $sql = "select*from orders where id_orders=$id";
    $orders = executeQuery($sql,false); 
    $sql = "select*from order_detail od join product p on p.id_product = od.id_product
                                     where id_orders=$id and p.id_product = od.id_product";
    $order_detail = executeQuery($sql);
    admin_render('orders/order-detail.php',[
        'orders' => $orders,
        'order_detail' => $order_detail,
    ]);
}
