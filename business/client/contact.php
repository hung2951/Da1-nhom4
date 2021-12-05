<?php

function contact_add_form()
{

    client_render('contact/contact.php');
}
  
function save_add_contact()
{
    // nhận dữ liệu từ form gửi lên
    $name_contact = $_POST['name_contact'];
    $phone_contact = $_POST['phone_contact'];
    $email_contact = $_POST['email_contact'];
    $date_contact = $_POST['date_contact'];
    $content_contact = $_POST['content_contact'];
    // tạo ra câu sql insert tài khoản mới
    $sql = "INSERT INTO contact(name_contact, phone_contact, email_contact, date_contact, content_contact) VALUES ('$name_contact',  '$phone_contact', '$email_contact','$date_contact', '$content_contact')";

    executeQuery($sql);
    // Thực thi câu sql với db
    client_render('contact/note.php');
}
?>