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
            header('location: http://localhost/da1-nhom4/');
        }else{
            echo "mật khẩu sai";
        }
    } else {
        echo 'Tài khoản không tồn tại';
    }


}
