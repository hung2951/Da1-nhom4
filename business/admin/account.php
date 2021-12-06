<?php
function account_index()
{
    $sql = "select * from user order by role desc";
    $users = executeQuery($sql);

    admin_render(
        'account/index.php',
        [
            'dsTaiKhoan' => $users,
        ],
        [
            'customize/js/account/list.js'
        ]
    );
}

function account_remove()
{
    // lấy id từ đường dẫn
    $id = $_GET['id'];
    // thực thi câu lệnh xóa dựa vào id
    $sql = "delete from user where id_user = $id";
    executeQuery($sql);
    header("location: " . ADMIN_URL . 'tai-khoan');
}

function account_add_form()
{
    admin_render('account/add-form.php');
}
function account_save_add()
{

    // nhận dữ liệu từ form gửi lên
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $role = $_POST['role'];
    // check tồn tại email
    $sql = "select * from user";
    $check = executeQuery($sql);
    foreach ($check as $item) {
        if ($item['email'] == $email) {
            $err = " Email đã có người sử dụng";
        }
    }
    if (isset($err)) {
        admin_render('account/add-form.php', [
            'err' => $err,
        ]);
    } else {
        // mã hóa mật khẩu
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        // lưu ảnh vào thư mục public/uploads
        $file = $_FILES['image'];
        $avatar = "";
        // Lưu ảnh
        if ($file['size'] > 0) {
            $filename = uniqid() . '-' . $file['name'];
            move_uploaded_file($file['tmp_name'], './public/uploads/avatars/' . $filename);
            $avatar = "uploads/avatars/" . $filename;
        }

        // tạo ra câu sql insert tài khoản mới
        $sql = "insert into user
                (full_name, email,phone, password, avatar,role) 
            values 
                ('$name', '$email', '$phone','$passwordHash', '$avatar','$role')";
        // Thực thi câu sql với db
        executeQuery($sql);
        header("location: " . ADMIN_URL . 'tai-khoan');
    }
}

function account_edit_form()
{
    $id = $_GET['id'];
    $sql = "select * from user where id_user = $id";
    $user = executeQuery($sql, false);
    admin_render('account/edit-form.php', [
        'user' => $user
    ]);
}

function account_save_edit()
{
    // lấy ra thông tin cũ của dữ liệu vừa submit lên
    $id = $_GET['id'];
    $sql = "select * from user where id_user = $id";
    $oldData = executeQuery($sql, false);
    // nhận dữ liệu từ form gửi lên
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    // lưu ảnh vào thư mục public/uploads
    $file = $_FILES['avatar'];
    $avatar = $oldData['avatar'];
    // Lưu ảnh
    if ($file['size'] > 0) {
        $filename = uniqid() . '-' . $file['name'];
        move_uploaded_file($file['tmp_name'], './public/uploads/avatars/' . $filename);
        $avatar = "uploads/avatars/" . $filename;
    }

    // tạo ra câu sql insert tài khoản mới
    $sql = "update user 
            set
                full_name = '$name', 
                email = '$email', 
                phone = '$phone',
                avatar = '$avatar' 
            where id_user = $id";
    // Thực thi câu sql với db
    executeQuery($sql);
    header("location: " . ADMIN_URL . 'tai-khoan');
}
