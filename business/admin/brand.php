<?php
function add_brand()
{
    admin_render('brand/add-form.php');
}
function list_brand()
{
    $sql = "select * from brand";
    $brand = executeQuery($sql);

    admin_render(
        'brand/index.php',
        [
            'brand' => $brand,
        ],
        ['customize/js/product/brand.js']
    );
}
function save_add_brand()
{
    $brand_name = $_POST['brand_name'];
    $sql = "insert into brand(brand_name) values('$brand_name')";
    executeQuery($sql);
    header("location: " . ADMIN_URL . 'thuong-hieu');
}
function delete_brand()
{
    $id = $_GET['id'];
    $sql = "delete from brand where id_brand = $id";
    executeQuery($sql);
    header("location: " . ADMIN_URL . 'thuong-hieu');
}
function update_brand()
{
    $id = $_GET['id'];
    $sql = "select * from brand where id_brand = $id";
    $brand = executeQuery($sql, false);

    admin_render('brand/edit-form.php', [
        'b' => $brand,
    ]);
}
function save_update_brand()
{
    $id = $_GET['id'];
    $brand_name = $_POST['brand_name'];
    $sql = "update brand set brand_name = '$brand_name' where id_brand = $id";
    executeQuery($sql);
    header("location: " . ADMIN_URL . 'thuong-hieu');
}
