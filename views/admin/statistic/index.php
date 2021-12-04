<h2>Thống kê sản phẩm</h2>
<table class="table table-stripped">
    <thead>
        <tr>
            <th>Thương hiệu</th>
            <th>Số lượng</th>
            <th>Giá thấp nhất</th>
            <th>Giá cao nhất</th>
            <th>Giá trung bình</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($statistic as $item) : ?>
            <tr>
                <td><?= $item['brand_name'] ?></td>
                <td><?= $item['so_luong'] ?></td>
                <td><?= number_format($item['gia_min']) ?></td>
                <td><?= number_format($item['gia_max']) ?></td>
                <td><?= number_format($item['gia_avg']) ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
 <a href="<?= ADMIN_URL .'thong-ke/bieu-do'?>" class="btn btn-sm btn-info">Biểu đồ</a>