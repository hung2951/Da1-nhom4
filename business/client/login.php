<?php
session_start();
function login(){   

    if (isset($_POST['btn-submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM user WHERE email = '$email'";
        $oldData = executeQuery($sql, false); 
        if(isset($_POST['email'])){
            $password = password_verify($password, $oldData['password']);
            if($password){
                $_SESSION['user'] = $oldData;
                header('location: ' .CLIENT_URL. 'home.php');
            }else{
                echo 'Mật khẩu không đúng';
            }
        }else{
            echo 'Email không tồn tại';
        }


    }
}