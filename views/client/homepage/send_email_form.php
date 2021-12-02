<form action="<?= BASE_URL . 'submit-email'?>" method="POST">
<div>
    <label for="">Người Nhận</label>
    <input type="text" name="recceiver">

</div>
<div>
    <label for="">Tiêu Đề</label>
    <input type="text" name="title">
</div>
<div class="">
    <label for="">Nội Dung</label>
    <textarea name="content" id="" cols="30" rows="10"></textarea>
</div>
<div>
    <button type="submit">Gửi</button>
</div>
</form>