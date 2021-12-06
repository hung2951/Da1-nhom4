<?php
// đăng nhập
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
            header('location: ' . BASE_URL);
        } else {
            $err = "Mật khẩu sai";
            client_render('login/login.php', [
                'err' => $err
            ]);
        }
    } else {
        $email = "Tài khoản không tồn tại";
        client_render('login/login.php', [
            'err' => $email
        ]);
    }
}
// đăng ký
function regester()
{
    client_render('login/regester.php');
}
function save_regester()
{
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "select * from user";
    $check = executeQuery($sql);
    foreach ($check as $item) {
        if ($item['email'] == $email) {
            $err = " Email đã có người sử dụng";
        }
    }
    if (isset($err)) {
        client_render('login/regester.php', [
            'err' => $err,
        ]);
    } else {
        // mã hóa mật khẩu
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "insert into user(full_name,email,password) values('$full_name','$email','$passwordHash')";
        executeQuery($sql);
        client_render('login/note.php');
    }
}
// đổi mật khẩu
function change_password()
{

    $id = $_SESSION['khach_hang']['id_user'];
    $sql = "select * from user where id_user = $id";
    $user = executeQuery($sql, false);
    client_render('profile/change-password.php', [
        'u' => $user,
    ]);
}
function save_change_password()
{

    $id = $_POST['id_user'];
    $password = $_POST['password'];
    $passwordNew = $_POST['password-new'];

    $sql = "SELECT * FROM user WHERE id_user = $id";
    $oldData = executeQuery($sql, false);

    $repasswordNew = $_POST['re-password-new'];
    // mã hóa mật khẩu
    if (password_verify($password, $oldData['password'])) {
        if ($passwordNew == $repasswordNew) {
            $passwordHash = password_hash($passwordNew, PASSWORD_DEFAULT);
            $sql = "update user set password = '$passwordHash' where id_user = $id";
            executeQuery($sql);
            unset($_SESSION['khach_hang']);
            client_render('profile/note.php');
            die;
        } else {
            $check = "Mật khẩu không trùng khớp";
            client_render('profile/change-password.php', [
                'check' => $check,
                'u' => $oldData,
            ]);
        }
    } else {
        $check = "Mật khẩu không đúng";
        client_render('profile/change-password.php', [
            'check' => $check,
            'u' => $oldData,
        ]);
    }
}
