<?php
function product_detail()
{
    //lấy ra thông tin sản phẩm
    $id = $_GET['id'];
    $sql = "select * from product where id_product  = $id";
    $product_detail = executeQuery($sql, false);

    // Lấy ra sản phẩm theo danh mục
    $id_brand = $_GET['id_brand'];
    $sql_same = "select * from product where id_brand =" . $id_brand . " AND id_product <>" . $id;
    $product_same_kind = executeQuery($sql_same);

    //lấy ra bình luận
    $sql = "SELECT * FROM comment bl INNER JOIN user kh ON bl.id_user = kh.id_user WHERE id_product = $id order by date desc";
    $comment = executeQuery($sql);
 
    client_render('product-detail/index.php', [
        'product_detail' => $product_detail,
        'product_same_kind' => $product_same_kind,
        'comment' => $comment
    ]);
}

function save_add_commment()
{
    // nhận dữ liệu từ form gửi lên
    $date = $_POST['date'];
    $id_product = $_POST['id_product'];
    $content = $_POST['content'];
    $id_brand = $_POST['id_brand'];
    $id_user = $_POST['id_user'];
    // tạo ra câu sql insert tài khoản mới
    $sql = "INSERT INTO comment(date, id_user, id_product, content) VALUES ('$date', '$id_user', '$id_product', '$content')";

    // $sql = "INSERT INTO comment(date, id_user, id_product, content) 
    //                         VALUES 
    //                     ('$date', '$_SESSION['khach_hang']['id_user']', '$id_product', '$content')";

    executeQuery($sql);

    // Thực thi câu sql với db
    header("location: " . CLIENT_URL . 'chi-tiet-san-pham?id=' . $id_product . '&id_brand=' . $id_brand);
}
