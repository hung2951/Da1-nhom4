<h2>Danh sách tài khoản</h2>
<table class="table table-stripped">
    <thead>
        <th>ID</th>
        <th>Họ và tên</th>
        <th>Email</th>
        <th>Vai trò</th>
        <th>Avatar</th>
        <th>Số điện thoại</th>
        <th>
            <a href="<?= ADMIN_URL . 'tai-khoan/tao-moi' ?>" class="btn btn-sm btn-success">Tạo mới</a>
        </th>
    </thead>
    <tbody>
        <?php foreach ($dsTaiKhoan as $u) : ?>
            <tr>
                <td><?= $u['id_user'] ?></td>
                <td><?= $u['full_name'] ?></td>
                <td><?= $u['email'] ?></td>
                <td><?= $u['role'] == 0 ? "Khách hàng" : "Quản trị" ?></td>
                <td>
                    <img src="<?= PUBLIC_ASSETS . $u['avatar'] ?>" width="100">
                </td>
                <td><?= $u['phone'] ?></td>
                <td>
                    <a href="<?= ADMIN_URL . 'tai-khoan/sua?id=' . $u['id_user'] ?>" class="btn btn-sm btn-info">Sửa</a>
                    <a href="javascript:;" 
                        data-url="<?= ADMIN_URL . 'tai-khoan/xoa?id=' . $u['id_user'] ?>" 
                        data-name="<?= $u['full_name'] ?>" 
                        class="btn btn-sm btn-danger btn_remove_account">Xóa</a>
                    <!-- <a onclick="return confirm('Bạn có muốn xóa không?')" href="<?= ADMIN_URL . 'tai-khoan/xoa?id=' . $u['id_user'] ?>" class="btn btn-sm btn-danger btn_remove_account">Xóa</a> -->
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>