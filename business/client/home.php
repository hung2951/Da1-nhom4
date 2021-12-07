<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function product_home()
{
    // SẢN PHẨM MỚi
    $sql = "select * from product p join brand b on p.id_brand = b.id_brand
     where p.new_product = 1 order by date_add desc limit 0,8";
    $list_spdacbiet = executeQuery($sql);
    // SẢN PHẨM CÓ LƯỢT XEM NHIỀU NHẤT
    $sql = "select * from product p join brand b on p.id_brand = b.id_brand
                    where 1 order by view desc limit 0,8";
    $list_sp = executeQuery($sql);
    $sql = "select * from news order by date_news desc limit 0,3";
    $show_news = executeQuery($sql);

    client_render('home/index.php', [
        'list_spdacbiet' => $list_spdacbiet,
        'list_sp' => $list_sp,
        'show_news' => $show_news,
    ]);
}



function select_product_by_id()
{
    $id = $_GET['id_brand'];
    $sql = " SELECT * FROM product WHERE id_brand=$id";
    $product_category = executeQuery($sql);

    $sql_brand = "SELECT * FROM brand WHERE id_brand=$id";
    $brand = executeQuery($sql_brand, false);

    client_render('product-category/index.php', [
        'product_category' => $product_category,
        'brand' => $brand,
    ]);
}
function  email_form()
{
    client_render('acc/index.php');
}

function  send_email()
{
    $email = $_POST['email'];
    $sql = " SELECT * FROM user WHERE email= '$email'";
    $send = executeQuery($sql);
    $userId = $send[0]['id_user'];

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->CharSet = 'UTF-8';
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'hungphu201@gmail.com';                     //SMTP username
        $mail->Password   = 'hung2001';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('dainxph14951@fpt.edu.vn', 'DaiNV');   // gửi từ ai

        // $arrEmail = explode(',', $recceiver); // gửi nhiều người
        // foreach($arrEmail as $em){
        //     $mail->addAddress(trim($em)); 
        // }

        $mail->addAddress($email);
        $min = 100000;
        $max = 999999;
        $passwordNew = rand($min, $max);
        $passwordHash = password_hash($passwordNew, PASSWORD_DEFAULT);
        $sql = "UPDATE user SET password='$passwordHash' WHERE id_user= $userId";
        $product_detail = executeQuery($sql);


        $mail->isHTML(true);
        $mail->Subject = 'Cập nhật mật khẩu mới !';
        $mail->Body    = 'Mật Khẩu Mới của bạn là: ' . $passwordNew;
        $mail->AltBody = ''; // trường hợp mạng yếu sẽ hiển thị

        $mail->send();
        echo 'OK Message has been sent';
        header('location: '.CLIENT_URL.'notificaEmail');
    } catch (Exception $e) {
        echo "LỖI Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
function notificaEmail(){
    client_render('acc/note.php');
}