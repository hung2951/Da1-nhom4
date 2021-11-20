<?php
function list_order()
{
    $id = $_GET['id'];
    $sql = "select * from user u inner join  orders o on u.id_user = o.id_user
                                inner join product p on p.id_product = o.id_product
                                where u.id_user = $id";
    $orders = executeQuery($sql);
    admin_render('orders/list-orders.php', [
        'dsHoaDon' => $orders,
    ]);
}
function order_details()
{
    $id = $_GET['id'];
    $sql_user = "select * from user u join orders o on u.id_user = o.id_user
                            where u.id_user = o.id_user and  id_orders=$id";
    $user = executeQuery($sql_user, false);

    $sql_order_detail = "select * from orders o join product p on p.id_product = o.id_product
                                 where id_orders=$id";
    $order_detail = executeQuery($sql_order_detail, false);
    admin_render('orders/order-detail.php', [
        'u' => $user,
        'o' => $order_detail,
    ]);
}
function select_user_by_id()
{
    $id = $_GET['id'];
    $sql = "select*from user where id_user=$id";
    $user = executeQuery($sql, false);
    admin_render('orders/order-details.php', [
        'u' => $user,
    ]);
}
function show_user_order()
{
    $sql = "select*from orders o inner join user u on o.id_user=u.id_user 
                    group by(u.id_user)
                    having (u.id_user)>=1";
    $user = executeQuery($sql);
    admin_render('orders/show-user-order.php', [
        'user' => $user,
    ]);
}
function list_update_status()
{
    $id = $_GET['id'];
    $sql = "select * from user u inner join  orders o on u.id_user = o.id_user where u.id_user = $id";
    $orders = executeQuery($sql);
    admin_render('orders/list-update-status.php', [
        'orders' => $orders,
    ]);
}
function select_orders()
{
    $id = $_GET['id'];
    $sql = "select*from orders where id_orders=$id";
    $orders = executeQuery($sql, false);
    admin_render('orders/update-status.php', [
        'o' => $orders,
    ]);
}
function save_update_status()
{
    $id = $_GET['id'];
    $status = $_POST['status'];
    $sql = "update orders set status = $status where id_orders = $id";
    executeQuery($sql);
    header("location: " . ADMIN_URL . 'hoa-don/list-sua-tt');
}

function orders_manage()
{
    $sql = "select *, count(o.id_user) Tong, sum(o.money) tongtien
        from orders o 
        inner join user u on o.id_user=u.id_user
        group by o.id_user 
        having count(o.id_user)>=1";
    $orders = executeQuery($sql);

    admin_render('orders/index.php', [
        'dsHoadon' => $orders,
    ]);
}
