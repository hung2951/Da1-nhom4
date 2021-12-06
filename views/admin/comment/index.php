<h2>Danh sách bình luận</h2>
<table class="table table-stripped">
    <thead>
        <th>Sản phẩm</th>
        <th>Số bình luận</th>
        <th>Mới nhất</th>
        <th>Cũ nhất</th>

        <th> </th>
    </thead>
    <tbody>
        <?php foreach ($cmt as $c) : ?>
            <tr>
                <td><?= $c['product_name'] ?></td>
                <td><?= $c['so_luong'] ?></td>
                <td><?= $c['cu_nhat'] ?></td>
                <td><?= $c['moi_nhat'] ?></td>
                <td><a href="<?= ADMIN_URL.'binh-luan/chi-tiet?id='.$c['id_product']?>">Chi tiết</a></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>