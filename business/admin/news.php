<?php
function list_news()
{
    $sql = "select * from news";
    $news = executeQuery($sql);

    admin_render('news/index.php', [
        'news' => $news,
    ]);
}

function news_remove()
{
    // lấy id từ đường dẫn
    $id = $_GET['id'];
    // thực thi câu lệnh xóa dựa vào id
    $sql = "delete from news where id_news = $id";
    executeQuery($sql);
    header("location: " . ADMIN_URL . 'tin-tuc');
}

function product_add_form()
{

    $sql = "select* from user";
    $brand = executeQuery($sql);

    admin_render('news/add-form.php', [
        'news' => $news,
    ]);
}

function news_save_add()
{
    // nhận dữ liệu từ form gửi lên
    $name_news = $_POST['name_news'];
    $details_news = $_POST['details_news'];
    $especially_news = $_POST['especially_news'];
    $date_news = $_POST['date_news'];
    //Chọn nhiều ảnh
    $gallery = $_FILES['gallery'];
    for ($i = 0; $i < count($gallery['name']); $i++) {
        echo "name: " . $gallery['name'][$i];
        echo "<br>";
        echo "tmp name: " . $gallery['tmp_name'][$i];
        echo "<br>";
    }
    // lưu ảnh vào thư mục public/uploads
    $file = $_FILES['image_news'];
    $image_news = "";
    // Lưu ảnh
    if ($file['size'] > 0) {
        $filename = uniqid() . '-' . $file['name'];
        move_uploaded_file($file['tmp_name'], './public/uploads/news/' . $filename);
        $product_image = "uploads/product/" . $filename;
    }

    // tạo ra câu sql insert tài khoản mới
    $sql = "insert into news
                (name_news,image_news, details_news, especially_news, date_news) 
            values 
                ('$name_news','$image_news', '$details_news','$especially_news', '$date_news')";
    // Thực thi câu sql với db
    executeQuery($sql);
    header("location: " . ADMIN_URL . 'tin-tuc');
}

function tintuc_edit_form()
{
    $id = $_GET['id'];
    $sql = "select * from news where id_news = $id";
    $products = executeQuery($sql, false);


    admin_render('news/edit-form.php', [
        'news' => $news,

    ]);
}

function news_save_edit()
{
    // lấy ra thông tin cũ của dữ liệu vừa submit lên
    $id = $_GET['id'];
    $sql = "select * from news where id_news = $id";
    $oldData = executeQuery($sql, false);
    // nhận dữ liệu từ form gửi lên
    $name_news = $_POST['name_news'];
    $details_news = $_POST['details_news'];
    $especially_news = $_POST['especially_news'];
    $date_news = $_POST['date_news'];

    // lưu ảnh vào thư mục public/uploads
    $file = $_FILES['image'];
    $image_news = $oldData['image_news'];
    // Lưu ảnh
    if ($file['size'] > 0) {
        $filename = uniqid() . '-' . $file['name'];
        move_uploaded_file($file['tmp_name'], './public/uploads/news/' . $filename);
        $image_news = "uploads/news/" . $filename;
    }

    // tạo ra câu sql insert tài khoản mới
    $sql = "update news
            set
                name_news = '$name_news', 
                image_news = '$image_news', 
                details_news = '$details_news',
                especially_news = '$especially_news',
                date_news = '$date_news',

            where id_news = $id";
    // Thực thi câu sql với db
    executeQuery($sql);
    header("location: " . ADMIN_URL . 'tin-tuc');
}
function search_news_admin()
{
    $query = $_GET['query'];
    $sql = "select *from news p join brand b on p.id_news = b.id_news 
                        where 
                        name_news like'%" . $query . "%'
                        or
                        details_news like '%" . $query . "%'
                        or
                        especially_news like '%" . $query . "%'
                        or
                        date_news like '%" . $query . "%'
                        ";
    $search = executeQuery($sql);
    admin_render('news/search.php', [
        'dsTinTuc' => $search,
    ]);
}