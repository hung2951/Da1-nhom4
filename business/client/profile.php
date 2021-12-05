<?php
function select_user()
{
    $id = $_SESSION['khach_hang']['id_user'];
    $sql = "select * from user where id_user = $id";
    $user = executeQuery($sql, false);
    client_render('profile/index.php', [
        'u' => $user,
    ]);
}
function save_update_user()
{
    
    // lấy ra thông tin cũ của dữ liệu vừa submit lên
    $id = $_POST['id_user'];
    $sql = "select * from user where id_user = $id";
    $oldData = executeQuery($sql, false);
    // nhận dữ liệu từ form gửi lên
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $role = $_POST['role'];

    // lưu ảnh vào thư mục public/uploads
    $file = $_FILES['avatar'];
    $avatar = $oldData['avatar'];
    // Lưu ảnh
    if($file['size'] > 0){
        $filename = uniqid() . '-' . $file['name'];
        move_uploaded_file($file['tmp_name'], './public/uploads/avatars/' . $filename);
        $avatar = "uploads/avatars/" . $filename;
    }
    // tạo ra câu sql insert tài khoản mới
    $sql = "update user 
            set
                full_name = '$full_name', 
                email = '$email', 
                phone = '$phone',
                avatar = '$avatar',
                address = '$address',
                role = '$role'
            where id_user = $id";
    // Thực thi câu sql với db
    executeQuery($sql);
    header('location: '.CLIENT_URL.'profile?id='.$id);
   
}
function logout(){
    session_destroy();
    unset($_SESSION['cart']);
    header('location: '.CLIENT_URL.'dang-nhap');
}