<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Danh sách tài khoản</h2>
<table class="table table-stripped">
    <thead>
        <th>HÀNG HÓA</th>
        <th>SỐ BL</th>
        <th>MỚI NHẤT</th>
        <th>CŨ NHẤT</th>
        <th></th>
    </thead>
    <tbody>
        <?php foreach($dsBinhLuan as $bl): ?>
            <tr>
                <td><?= $bl['product_name']?></td>
                <td><?= $bl['$quantity']?></td>
                <td><?= $bl['$newest']?></td>
                <td><?= $bl['$older']?></td>
                <td>
                    <a href="<?= ADMIN_URL . 'chi-tiet-binh-luan' ?>" class="btn btn-sm btn-info">Chi tiết</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
</body>
</html>