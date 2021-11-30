<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= CLIENT_ASSETS ?>/css/profile.css">
</head>

<body>
    <div class="container">
        <div class="content-left">
            <div class="content-left-title">
                <div class="content-left-title-img">
                    <a href="#">
                        <img src="<?=  PUBLIC_ASSETS . $u['avatar'] ?>" alt="">
                    </a>
                </div>
                <div class="title-name">
                    <p><?= $u['full_name']?></p>
                </div>
            </div>
            <div class="nav-bar">
                <ul>
                    <li><a href="">Hồ sơ</a></li>
                    <li><a href="">Đổi mật khẩu</a></li>
                    <li><a href="">Đơn mua</a></li>
                </ul>
            </div>
        </div>
        <div class="content-right">
            <div class="content-right-title">
                <p>Hồ sơ của tôi</p>
                <span>Quản lý thông tin hồ sơ để bảo mật tài khoản</span>
            </div>
            <div class="content-right-input">
                <form action="" method="get">
                    <div class="row">
                        <div class="col-6 offset-3">
                            <div class="form-group">
                                <label for="">Họ và tên</label>
                                <input type="text" name="name" id="" class="form-control" placeholder="Họ và tên" value="<?= isset($u['full_name'])?$u['full_name']:""?>">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" id="" class="form-control" placeholder="Email" value="<?= isset($u['email'])?$u['email']:""?>">
                            </div>
                            <div class="form-group">
                                <label for="">Số điện thoại</label>
                                <input type="number" name="phone" id="" class="form-control" placeholder="Số điện thoại" value="<?=  isset($u['phone'])?$u['phone']:""?>">
                            </div>
                            <div class="form-group">
                                <label for="">Ảnh đại diện</label>
                                <input type="file" name="image" id="" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="">Địa chỉ</label>
                                <input type="text" name="phone" id="" class="form-control" placeholder="Địa chỉ"value="<?=  isset($u['address'])?$u['address']:""?>">
                            </div>
                            <button type="submit" name="btn-submit" id="btn-submit"><a href="">Lưu</a></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>