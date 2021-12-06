<h2>Chi tiết bình luận</h2>
<table class="table table-stripped">
    <thead>
        <th>Nội dung</th>
        <th>Ngày bình luận</th>
        <th>Người bình luận</th>
        <th></th>

        <th> </th>
    </thead>
    <tbody>
        <?php foreach ($cmt as $c) : ?>
            <tr>
                <td><?= $c['content'] ?></td>
                <td><?= $c['date'] ?></td>
                <td><?= $c['full_name'] ?></td>
                <td><a href="<?= ADMIN_URL.'binh-luan/chi-tiet/xoa?id='.$c['id_comment']?>">Xóa</a></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>