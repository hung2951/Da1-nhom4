<h2>Danh sách thương hiệu</h2>
<table class="table table-stripped">
    <thead>
        <th>ID</th>
        <th>Tên thương hiệu</th>
        <th>
        <a href="<?= ADMIN_URL . 'thuong-hieu/tao-moi' ?>" class="btn btn-sm btn-success">Tạo mới</a>
        </th>
    </thead>
    <tbody>
        <?php foreach($brand as $b): ?>
            <tr>
                <td><?= $b['id_brand'] ?></td>
                <td><?=$b['brand_name']?></td>
                <td>
                    <a href="<?= ADMIN_URL . 'thuong-hieu/sua?id=' . $b['id_brand'] ?>" class="btn btn-sm btn-info">Sửa</a>
                    <a href="javascript:;" 
                        data-url="<?= ADMIN_URL . 'thuong-hieu/xoa?id=' . $b['id_brand'] ?>" 
                        data-name="<?= $b['brand_name'] ?>" 
                        class="btn btn-sm btn-danger btn_remove_product">Xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>