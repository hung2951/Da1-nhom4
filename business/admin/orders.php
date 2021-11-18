<?php
function orders_manage()
{
    $sql = "select *, count(o.id_user) Tong, sum(o.money) tongtien
        from orders o inner join user u on o.id_user=u.id_user
        group by o.id_user 
        having count(o.id_user)>=1";
    $orders = executeQuery($sql);

    admin_render('orders/index.php', [
        'dsHoadon' => $orders,
    ]);
}
