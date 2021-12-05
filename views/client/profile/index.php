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
                            <li class="active">
                                <a href="<?= CLIENT_URL . 'profile?id=' . $u['id_user'] ?>"><i class="glyphicon glyphicon-user"></i>Hồ sơ </a>
                            </li>
                            <li>
                                <a href="<?= CLIENT_URL .'doi-mat-khau'?>"><i class="fas fa-key"></i></i>Đổi mật khẩu </a>
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
                        <form action="<?= CLIENT_URL . 'profile/luu' ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-6 offset-3">
                                    <input type="text" name="id_user" value="<?= $u['id_user'] ?>" hidden>
                                    <div class="form-group">
                                        <label for="">Họ và tên</label>
                                        <input type="text" name="full_name" id="" class="form-control" placeholder="First and Last name" value="<?= isset($u['full_name']) ? $u['full_name'] : "" ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" name="email" id="" class="form-control" placeholder="Email" value="<?= isset($u['email']) ? $u['email'] : "" ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Số điện thoại</label>
                                        <input type="text" name="phone" id="" class="form-control" placeholder="Phone number" value="<?= isset($u['phone']) ? $u['phone'] : "" ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Hình ảnh</label>
                                        <input type="file" name="avatar" id="" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Địa chỉ</label>
                                        <input type="text" name="address" id="" class="form-control" placeholder="Address" value="<?= isset($u['address']) ? $u['address'] : "" ?>">
                                    </div>
                                    <div class="form-group" hidden>
                                        <label for="">Vai trò</label> <br>
                                        <input type="radio" value="0" checked name="role"> Khách hàng
                                        <input type="radio" value="1" name="role"> Quản trị
                                    </div>
                                    <button type="submit" name="btn-submit" id="btn-submit">Lưu</button>
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