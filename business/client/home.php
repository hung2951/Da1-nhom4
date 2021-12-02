<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
function product_home(){
    // SẢN PHẨM MỚi
    $sql="select * from product p join brand b on p.id_brand = b.id_brand
     where new_product=1 order by date_add desc limit 0,8";
    $list_spdacbiet = executeQuery($sql);
    // SẢN PHẨM CÓ LƯỢT XEM NHIỀU NHẤT
    $sql ="select * from product p join brand b on p.id_brand = b.id_brand
                    where 1 order by view desc limit 0,8";
    $list_sp = executeQuery($sql);

    client_render('home/index.php', [
        'list_spdacbiet' => $list_spdacbiet,
        'list_sp' => $list_sp,
    ]);
}



    function select_product_by_id(){
        $id=$_GET['id_brand'];
        $sql=" SELECT * FROM product WHERE id_brand=$id";
        $product_category=executeQuery($sql);

        $sql_brand="SELECT * FROM brand WHERE id_brand=$id";
        $brand=executeQuery($sql_brand, false);

        client_render('product-category/index.php', [
            'product_category'=>$product_category,
            'brand'=>$brand,
        ]);
    }
    
    function  email_form(){
        client_render('homepage/send_email_form.php');
    }
    function  send_email(){
        $recceiver= $_POST['recceiver'];
        $title= $_POST['title'];
        $content= $_POST['content'];

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;    
            $mail->CharSet = 'UTF-8';                  
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'xuandai300092@gmail.com';                     //SMTP username
            $mail->Password   = '01686300092';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('dainxph14951@fpt.edu.vn', 'DaiNX');   // gửi từ ai

            $arrEmail = explode(',', $recceiver); // gửi nhiều người
            foreach($arrEmail as $em){
                $mail->addAddress(trim($em)); 
            }

            $mail->addReplyTo('tramnvph14967@fpt.edu.vn', 'TramNV');


            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $title;
            $mail->Body    = $content;
            $mail->AltBody = $content; // trường hợp mạng yếu sẽ hiển thị

            $mail->send();
            echo 'OK Message has been sent';
        } catch (Exception $e) {
            echo "LỖI Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
            }
?>