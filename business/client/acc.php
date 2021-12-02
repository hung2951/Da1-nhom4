<?php
echo "ok";
function passRetrieval(){
    $email=$_POST['email'];
    $token= uniqid(); // sinh ra 1 đoạn chuỗi không bị trùng
    $expine= strtostring("+1 day");
    $sql= "INSERT INTO forgotpassword(email) VALUES ('$email')";
    executeQuery($sql);
    client_render('acc/index.php', [
        
    ]);
    //    echo "<pre>";
    //     var_dump($bill);
    //     echo "</pre>";
    //     die;
}

client_render('acc/index.php');



?>