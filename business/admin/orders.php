<?php
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

