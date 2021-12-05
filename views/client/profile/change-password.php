<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= CLIENT_ASSETS ?>/css/profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>

<body>
    <div class="container">
        <div class="row profile">
            <div class="col-md-3">
                <div class="profile-sidebar">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                        <img class="img-responsive" src="<?= PUBLIC_ASSETS . $u['avatar'] ?>" alt="">
                    </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">
                            <?= $u['full_name'] ?>
                        </div>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->
                    <!-- SIDEBAR BUTTONS -->
                    <div class="profile-userbuttons">
                        <button type="button" class="btn btn-danger btn-sm"><a style="color: #fff;" href="<?= CLIENT_URL . 'logout' ?>">Đăng xuất</a></button>
                    </div>
                    <!-- END SIDEBAR BUTTONS -->
                    <!-- SIDEBAR MENU -->
                    <div class="profile-usermenu">
                        <ul class="nav">
                            <li>
                                <a href="<?= CLIENT_URL . 'profile?id=' . $u['id_user'] ?>"><i class="glyphicon glyphicon-user"></i>Hồ sơ </a>
                            </li>
                            <li class="active">
                                <a href="<?= CLIENT_URL . 'doi-mat-khau' ?>"><i class="fas fa-key"></i></i>Đổi mật khẩu </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END MENU -->
                </div>
            </div>
            <div class="col-md-9">
                <div class="profile-content">
                    <div class="content-right-title">
                        <p>Hồ sơ của tôi</p>
                        <span>Quản lý thông tin hồ sơ để bảo mật tài khoản</span>
                    </div>
                    <div class="content-right-input">
                        <form action="<?= CLIENT_URL . 'luu-mat-khau' ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-6 offset-3">
                                    <input type="text" name="id_user" value="<?= $u['id_user'] ?>" hidden>
                                    <div class="form-group">
                                        <label for="">Mật khẩu cũ</label>
                                        <input type="password" name="password" id="" class="form-control" placeholder="Mật khẩu cũ">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Mật khẩu mới</label>
                                        <input type="password" name="password-new" id="" class="form-control" placeholder="Mật khẩu mới">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nhập lại mật khẩu</label>
                                        <input type="password" name="re-password-new" id="" class="form-control" placeholder="Nhập lại mật khẩu mới">
                                    </div>
                                    <p style="color: red;"><?= isset($check) ? $check : ""?></p>
                                    <button type="submit" name="btn-submit" id="btn-submit">Đổi mật khẩu</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>

</html>