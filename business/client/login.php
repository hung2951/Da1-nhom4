<?php

function login()
{
    client_render('login/login.php');
}
function check_login()
{

    // if (isset($_POST['btn-submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE email = '$email'";
    $oldData = executeQuery($sql, false);
    if ($oldData) {
        if (password_verify($password, $oldData['password'])) {
            $_SESSION['khach_hang'] = $oldData;
            header('location: '.BASE_URL);
        }else{
            $err = "Mật khẩu sai";
            client_render('login/login.php',[
                'err'=>$err
            ]);
        }
    } else {
        $email = "Tài khoản không tồn tại";
            client_render('login/login.php',[
                'err'=>$email
            ]);
    }


}
