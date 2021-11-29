<?php
// echo "ok";

function billCart(){
    $id = $_GET['id'];
    $sql = "select * from product where id_product = $id";
    $bill= executeQuery($sql);
    client_render('bill/index.php', [
        'bill' => $bill
    ]);

    //    echo "<pre>";
    //     var_dump($bill);
    //     echo "</pre>";
    //     die;
}


function add_bill(){
    $bill_name=$_POST['bill_name'];
    $bill_compaly=$_POST['bill_compaly'];
    $bill_email=$_POST['bill_email'];
    $bill_phone=$_POST['bill_phone'];
    $quantity=$_POST['quantity'];

    $sql= "INSERT INTO billcart(bill_name,bill_compaly,bill_email,bill_phone,quantity) VALUES ('$bill_name','$bill_compaly','$bill_email','$bill_phone','$quantity')";
    executeQuery($sql);
    client_render('bill/saveBill.php', [
        
    ]);
}

?>