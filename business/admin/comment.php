<?php
function comment_index()
{
    $sql =     $sql = "SELECT p.id_product, p.product_name, 
                COUNT(cmt.id_comment) AS quantity, 
                MIN(cmt.date) AS older,
                MAX(cmt.date) AS newest   
                FROM comment cmt JOIN product p ON p.id_product=cmt.id_product
                GROUP BY p.id_product, p.product_name HAVING quantity > 0";

    $bl = executeQuery($sql);

    admin_render('comment/index.php', [
        'dsBinhLuan' => $bl,
    ]);
}

function comment_detail()
{
    $id = $_GET['id_product'];
    $sql = "SELECT cmt.id_comment, cmt.content, cmt.date, u.full_name 
    FROM comment cmt INNER JOIN product p ON b.id_product = p.id_product
    INNER JOIN user u ON p.id_user = u.id_user WHERE cmt.id_product= '$id' 
    ORDER BY ngay_bl DESC";
    $comment_detail = executeQuery($sql);

    admin_render('comment/index.php', [
        'chiTiet' => $comment_detail,
    ]);
}

function delete_comment()
{
    $id = $_GET['id_comment'];
    $sql = "DELETE FROM comment WHERE id_comment= '$id'";
    executeQuery($sql);
    header('location:'.ADMIN_URL.'chi-tiet-binh-luan');
}
