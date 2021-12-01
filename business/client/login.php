<?php

function login(){
    client_render('login/login.php');
}
function check_login(){
    if (isset($_POST['btn-submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM user WHERE email = '$email'";
        $oldData = executeQuery($sql, false); 
    
        if(isset($_POST['email'])){
            $password = password_verify($password, $oldData['password']);
            if($password){
                $_SESSION['user'] = $oldData;
                header('location: ' .CLIENT_URL. 'index.php');
            }else{
                header('location: ' .CLIENT_URL. 'login/login.php');
                echo 'Mật khẩu không đúng';
            }
        }else{
            header('location: ' .CLIENT_URL. 'login/login.php');
            echo 'Email không tồn tại';
        }
    }
}