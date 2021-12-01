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
    $bill_address=$_POST['bill_address'];
    $bill_email=$_POST['bill_email'];
    $bill_phone=$_POST['bill_phone'];


    $sql= "INSERT INTO billcart(bill_name,bill_address,bill_email,bill_phone) VALUES ('$bill_name','$bill_address','$bill_email','$bill_phone')";
    executeQuery($sql);
    client_render('bill/saveBill.php', [
        
    ]);
}

?>