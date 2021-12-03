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
            <h2 class="form-signin-heading">Regester</h2>
            <input type="text" class="form-control" name="full_name" placeholder="First and last name">
            <input type="text" class="form-control" name="email" placeholder="Email address">
            <input type="password" class="form-control" name="password" placeholder="Enter password"/>
            <input type="password" class="form-control" name="re-password" placeholder="Enter re-password">
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="btn-submit">Regester</button>
            <p style="text-align: center; margin-top: 50px; ">Do you have an account?<a href="<?= CLIENT_URL . 'dang-nhap' ?>">Login now</a></p>
        </form>
    </div>
    <!-- partial -->

</body>

</html>