<?php
function bill(){
    $id = $_GET['id'];
    $sql = "select * from billcart where id_product = $id";
    $bill= executeQuery($sql);
    client_render('bill/index.php', [
        'bill' => $bill
    ]);
}


?>