<h3>Cập nhật trạng thái đơn hàng</h3>
<form action="<?= ADMIN_URL.'hoa-don/list-sua-tt/list-sua/trang-thai/luu-sua?id='.$o['id_orders']?>" method="post">
    <table class="table table-stripped">
        <tr>
            <td>Trạng thái:</td>
            <td><input type="radio" name="status" value="0" <?= $o['status'] == 0 ? "checked" : "" ?>> Đang giao hàng</td>
            <td><input type="radio" name="status" value="1"> Giao hàng thành công</td>
        </tr>
    </table>
    <input type="submit" value="Cập nhật">
</form>