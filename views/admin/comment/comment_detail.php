<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Chi tiết bình luận</h2>
    <table class="table table-stripped">
        <thead>
            <th>NỘI DUNG</th>
            <th>NGÀY BÌNH LUẬN </th>
            <th>NGƯỜI BÌNH LUẬN</th>
            <th></th>
        </thead>
        <tbody>
            <?php foreach ($chiTiet as $ct) : ?>
                <tr>
                    <td><?= $ct['content'] ?></td>
                    <td><?= $ct['date'] ?></td>
                    <td><?= $ct['full_name'] ?></td>
                    <td>
                        <a href="<?= ADMIN_URL . 'chi-tiet-binh-luan/xoa?id=' . $ct['id_comment'] ?>" class="btn btn-sm btn-danger">Xóa</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>