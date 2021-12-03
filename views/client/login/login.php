
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
            <h2 class="form-signin-heading">Login</h2>
            <input type="text" class="form-control" name="email" placeholder="Email Address"> 
            <span style="color: red;"><?= isset($email)?$email:""?></span>
            <input type="password" class="form-control" name="password" placeholder="Password">
            <span style="color: red;"><?= isset($err)?$err:""?></span>
            <label class="checkbox">
                <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
            </label>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="btn-submit">Login</button>
            <p style="text-align: center; margin-top: 50px; ">You don't have an account?<a href="<?= CLIENT_URL.'dang-ky'?>">Register now</a></p>
        </form>
    </div>
    <!-- partial -->

</body>

</html>