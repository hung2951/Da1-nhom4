<?php
function list_code()
{
    $sql = "select * from promo_code";
    $codes = executeQuery($sql);
    admin_render('promo-code/index.php', [
        'codes' => $codes,
    ],[
        'customize/js/promo-code/code.js'
    ]
);
}
function add_code()
{
    admin_render('promo-code/add-code.php');
}
function save_add_code()
{
    $name = $_POST['name'];
    $code = $_POST['code'];
    $number_use = $_POST['number_use'];
    $sql = "select * from promo_code";
    $check = executeQuery($sql);

    foreach ($check as $item) {
        if ($item['code_name'] == $name) {
            $err = " Mã giảm giá tồn tại";
        }
    }
    if (isset($err)) {
        admin_render('promo-code/add-code.php',[
            'err' => $err,
        ]);
    } else {
        $sql = "insert into promo_code(code_name,code,number_use) values('$name','$code','$number_use')";
        executeQuery($sql);
        header('location: ' . ADMIN_URL . 'ma-giam-gia');
    }
}
function delete_promo_code()
{
    $id = $_GET['id'];
    $sql = "delete from promo_code where id_code = $id";
    executeQuery($sql);
    header('location: ' . ADMIN_URL . 'ma-giam-gia');
}
function update_promo_code()
{
    $id = $_GET['id'];
    $sql = "select * from promo_code where id_code = $id";
    $code = executeQuery($sql, false);
    admin_render('promo-code/edit.php', [
        'code' => $code,
    ]);
}
function save_update_promo_code()
{
    $id = $_GET['id'];
    $name = $_POST['name'];
    $code = $_POST['code'];
    $number_use = $_POST['number_use'];
    $sql = "update promo_code set code_name = '$name', code = '$code',number_use = ' $number_use' where id_code = $id";
    executeQuery($sql);
    header('location: ' . ADMIN_URL . 'ma-giam-gia');
}
