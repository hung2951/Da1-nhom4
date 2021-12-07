<?php
function list_product()
{
    $sql = "select * from product";
    $product = executeQuery($sql);

    admin_render(
        'product/index.php',
        [
            'listProduct' => $product,
        ],
        ['customize/js/product/product.js']
    );
}

function product_remove()
{
    // lấy id từ đường dẫn
    $id = $_GET['id'];
    // thực thi câu lệnh xóa dựa vào id
    $sql = "delete from product where id_product = $id";
    executeQuery($sql);
    header("location: " . ADMIN_URL . 'san-pham');
}

function product_add_form()
{

    $sql = "select* from brand";
    $brand = executeQuery($sql);

    admin_render('product/add-form.php', [
        'brands' => $brand,
    ]);
}

function product_save_add()
{
    // nhận dữ liệu từ form gửi lên
    $name = $_POST['name'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $details = $_POST['details'];
    $quantity = $_POST['quantity'];
    $status = $_POST['status'];
    $view = $_POST['view'];
    $date_add = $_POST['date_add'];
    $date_fix = $_POST['date_fix'];
    $new_product = $_POST['new_product'];
    $brand = $_POST['brand'];
    //Chọn nhiều ảnh
    $gallery = $_FILES['gallery'];
    for ($i = 0; $i < count($gallery['name']); $i++) {
        echo "name: " . $gallery['name'][$i];
        echo "<br>";
        echo "tmp name: " . $gallery['tmp_name'][$i];
        echo "<br>";
    }
    // lưu ảnh vào thư mục public/uploads
    $file = $_FILES['product_image'];
    $product_image = "";
    // Lưu ảnh
    if ($file['size'] > 0) {
        $filename = uniqid() . '-' . $file['name'];
        move_uploaded_file($file['tmp_name'], './public/uploads/product/' . $filename);
        $product_image = "uploads/product/" . $filename;
    }

    // tạo ra câu sql insert tài khoản mới
    $sql = "insert into product
                (product_name,id_brand, product_image, price, discount, details, product_quantity, status, new_product, view, date_add, date_fix) 
            values 
                ('$name','$brand', '$product_image','$price', '$discount','$details', '$quantity','$status', '$new_product','$view', '$date_add', '$date_fix')";
    // Thực thi câu sql với db
    executeQuery($sql);
    header("location: " . ADMIN_URL . 'san-pham');
}

function product_edit_form()
{
    $id = $_GET['id'];
    $sql = "select * from product where id_product = $id";
    $products = executeQuery($sql, false);

    $sql = "select* from brand";
    $brand = executeQuery($sql);

    admin_render('product/edit-form.php', [
        'products' => $products,
        'brand' => $brand
    ]);
}

function product_save_edit()
{
    // lấy ra thông tin cũ của dữ liệu vừa submit lên
    $id = $_GET['id'];
    $sql = "select * from product where id_product = $id";
    $oldData = executeQuery($sql, false);
    // nhận dữ liệu từ form gửi lên
    $brand = $_POST['brand'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $details = $_POST['details'];
    $quantity = $_POST['quantity'];
    $status = $_POST['status'];
    $view = $_POST['view'];
    $date_add = $_POST['date_add'];
    $date_fix = $_POST['date_fix'];
    $new_product = $_POST['new_product'];
    // lưu ảnh vào thư mục public/uploads
    $file = $_FILES['image'];
    $product_image = $oldData['product_image'];
    // Lưu ảnh
    if ($file['size'] > 0) {
        $filename = uniqid() . '-' . $file['name'];
        move_uploaded_file($file['tmp_name'], './public/uploads/product/' . $filename);
        $product_image = "uploads/product/" . $filename;
    }

    // tạo ra câu sql insert tài khoản mới
    $sql = "update product
            set
                id_brand = '$brand',
                product_name = '$name', 
                product_image = '$product_image', 
                price = '$price',
                discount = '$discount',
                details = '$details',
                product_quantity = '$quantity',
                status = '$status',
                new_product='$new_product',
                view = '$view',
                date_add = '$date_add',
                date_fix = '$date_fix'
            where id_product = $id";
    // Thực thi câu sql với db
    executeQuery($sql);
    header("location: " . ADMIN_URL . 'san-pham');
}
function search_product_admin()
{
    $query = $_GET['query'];
    $sql = "select *from product p join brand b on p.id_brand = b.id_brand 
                        where 
                        product_name like'%" . $query . "%'
                        or
                        brand_name like'%" . $query . "%'
                        or 
                        product_quantity like '%" . $query . "%'
                        or
                        status like '%" . $query . "%'
                        or
                        price like '%" . $query . "%'
                        ";
    $search = executeQuery($sql);
    admin_render('product/search.php', [
        'dsSanPham' => $search,
    ]);
}
