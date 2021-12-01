<?php

function login(){
    client_render('login/login.php');
}
function check_login(){

    // if (isset($_POST['btn-submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM user WHERE email = '$email'";
        $oldData = executeQuery($sql, false); 
        if ($oldData) {
            if ($email == $oldData['email']) {
                if ($password == password_verify($password, $oldData['password']) ){
                    $_SESSION['khach_hang'] = $oldData;
                    header('http://localhost/da1-nhom4/');
                } 
            } else{
                echo 'Mật khẩu không đúng';
            }
        }else{
            echo 'Tài khoản không tồn tại';
        }
    
    //     if(isset($_POST['email'])){
    //         $password = password_verify($password, $oldData['password']);
    //         if($password){
    //             $_SESSION['user'] = $oldData;
    //             header('location: ' .CLIENT_URL. 'index.php');
    //         }else{
    //             header('location: ' .CLIENT_URL. 'login/login.php');
    //             echo 'Mật khẩu không đúng';
    //         }
    //     }else{
    //         header('location: ' .CLIENT_URL. 'login/login.php');
    //         echo 'Email không tồn tại';
    //     }
    // }
}