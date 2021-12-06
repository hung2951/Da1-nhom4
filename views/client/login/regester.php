<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CodePen - Bootstrap Snippet: Login Form</title>
    <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
    <link rel="stylesheet" href="<?= CLIENT_ASSETS ?>css/login.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="wrapper">
        <form class="form-signin" action="<?= CLIENT_URL . 'dang-ky/luu' ?>" method="POST">
            <h2 class="form-signin-heading">Đăng ký</h2>
            <input type="text" class="form-control" name="full_name" placeholder="Họ và tên">
            <input type="text" class="form-control" name="email" placeholder="Email">
            <p style="color: red;"><?= isset($err)?$err:""?></p>
            <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu"/>
            <input type="password" class="form-control" name="re-password" placeholder="Nhập lại mật khẩu">
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="btn-submit">Đăng ký</button>
            <p style="text-align: center; margin-top: 30px; ">Bạn đã có tài khoản?<a href="<?= CLIENT_URL.'dang-nhap'?>">Đăng nhập</a></p>
        </form>
    </div>
    <!-- partial -->

</body>

</html>