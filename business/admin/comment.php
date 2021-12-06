<?php
function comment_detail()
{
    $sql = "SELECT * FROM comment bl INNER JOIN product p ON bl.id_product = p.id_product 
    INNER JOIN user kh ON bl.id_user = kh.id_user
     order by date desc";
    $comment_detail = executeQuery($sql);

    admin_render('comment/comment_detail.php', [
        'chiTiet' => $comment_detail,
    ]);
}

function delete_comment()
{
    $id = $_GET['id'];
    $sql = "DELETE FROM comment WHERE id_comment= '$id'";
    executeQuery($sql);
    header('location:'.ADMIN_URL.'chi-tiet-binh-luan');
}
