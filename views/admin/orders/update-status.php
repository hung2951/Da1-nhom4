<h3>Cập nhật trạng thái đơn hàng</h3>
<form action="<?= ADMIN_URL . 'don-hang/trang-thai/luu?id=' . $o['id_orders'] ?>" method="post">
    <table class="table table-stripped">
        <tr>
            <td>Trạng thái:</td>
            <td>
                <input type="radio" name="status" <?= $o['status'] == 0 ? "checked" : "" ?> value="0">Chờ xác nhận đơn hàng
            </td>
            <td>
                <input type="radio" name="status" <?= $o['status'] == 1 ? "checked" : "" ?> value="1">Khách hủy hàng
            </td>
            <td>
                <input type="radio" name="status" <?= $o['status'] == 2 ? "checked" : "" ?> value="2">Đang giao hàng
            </td>
            <td>
                <input type="radio" name="status" <?= $o['status'] == 3 ? "checked" : "" ?> value="3">Giao hàng thành công
            </td>
            <td>
                <input type="radio" name="status" <?= $o['status'] == 4 ? "checked" : "" ?> value="4">Giao hàng thất bại
            </td>
        </tr>
    </table>
    <input type="submit" value="Cập nhật">
</form>