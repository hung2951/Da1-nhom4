<!-- <?php
echo "ok";
function rand_string($length){
    $chars= "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
    $size = strlen($chars);
    $str = '';
    for ($i=0; $i < $length ; $i++) { 
        $str .= $chars[rand(0,$size -1 )]; 
    }
    return $str;
}
 function send(){
        // kt neu thuc hien thao tac cap quen cua nguoi dung
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $errors = '';
        $email = '';
         // kiem tra email co ton tai hay khong
     if(isset($_POST['email']) && filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
        $email = $_POST['email'];

     }else{
         $errors = "email";
     }
     if(empty($_POST['email'])){
        $_SESSION['errors'] = 'Please enter your email';
        client_render('acc/index.php');
        exit();
     }
    if(!empty($errors)){
        $_SESSION['errors'] = 'Email address dost not exitst';
        client_render('acc/index.php');
        exit();
    }
    if(empty($errors) && !empty($email)){
        // truy van email trong data base
        $sql = "SELECT * `id_user`,``,``,``,`` FROM `user` WHERE Email='". $email."'";
        $comment = executeQuery($sql);

    }
 }
} -->
// function passRetrieval(){
//     $email=$_POST['email'];
//     $token= uniqid(); // sinh ra 1 đoạn chuỗi không bị trùng
//     $expine= strtostring("+1 day");
//     $str= '';
//     $sql= "INSERT INTO forgotpassword(email) VALUES ('$email')";
//     executeQuery($sql);
//     client_render('acc/index.php', [
        
//     ]);
//     //    echo "<pre>";
//     //     var_dump($bill);
//     //     echo "</pre>";
//     //     die;
// }

client_render('acc/index.php');



?>