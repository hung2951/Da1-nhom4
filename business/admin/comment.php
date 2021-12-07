<?php
function thong_ke_binh_luan()
{
    $sql = "SELECT p.id_product, p.product_name,"
        . " COUNT(*) so_luong,"
        . " MIN(c.date) cu_nhat,"
        . " MAX(c.date) moi_nhat"
        . " FROM comment c "
        . " JOIN product p ON p.id_product=c.id_product "
        . " GROUP BY p.id_product, p.product_name"
        . " HAVING so_luong > 0";
    $cmt = executeQuery($sql);
    admin_render('comment/index.php', [
        'cmt' => $cmt,
    ]);
}
function select_cmt_by_product()
{
    $id = $_GET['id'];
    $sql = "select * from comment c join product p on p.id_product = c.id_product
                                    join user u on u.id_user = c.id_user                                   
                                    where c.id_product = '$id'";
    $cmt = executeQuery($sql);
    admin_render(
        'comment/detail.php',
        [
            'cmt' => $cmt,
        ],
        ['customize/js/comment/cmt.js']
    );
}
function comment_delete()
{
    $id = $_GET['id'];
    $sql = "DELETE FROM comment WHERE id_comment='$id'";
    executeQuery($sql);
    header('location: ' . ADMIN_URL . 'binh-luan');
}
