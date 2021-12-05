
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
        <form class="form-signin" action="<?= CLIENT_URL . 'check-dang-nhap' ?>" method="POST">
            <h2 class="form-signin-heading">Đăng nhập</h2>
            <input type="text" class="form-control" name="email" placeholder="Nhập email"> 
            <span style="color: red;"><?= isset($email)?$email:""?></span>
            <input type="password" class="form-control" name="password" placeholder="Mật khẩu">
            <span style="color: red;"><?= isset($err)?$err:""?></span>
            <label class="checkbox">
                <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Nhớ mật khẩu
            </label>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="btn-submit">Đăng nhập</button>
            <p style="text-align: center; margin-top: 20px; "><a href="<?= CLIENT_URL.'xac-nhan-email'?>">Quên mật khẩu</a></p>
            <p style="text-align: center; margin-top: 30px; ">Bạn chưa có tài khoản?<a href="<?= CLIENT_URL.'dang-ky'?>">Đăng ký</a></p>
        </form>
    </div>
    <!-- partial -->

</body>

</html>