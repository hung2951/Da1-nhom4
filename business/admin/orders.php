<?php

function account_index()
{
    $sql = "select * from user";
    $users = executeQuery($sql);

    admin_render('orders/index.php', [
        'dsTaiKhoan' => $users,
    ]);
}
function order_details()
{
    $id = $_GET['id'];
    $sql = "select*from user u inner join  orders o on u.id_user = o.id_user
                                inner join product p on p.id_product = o.id_product
                                where u.id_user = $id";
    $orders = executeQuery($sql);
    admin_render('orders/order-details.php', [
        'dsCTHoaDon' => $orders,
    ]);
}
