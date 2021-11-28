<?php 
session_start();
?>

<?php
if(isset($_SESSION['cart'])): ?>

<table>
    <thead>
        <tr>
            <th>STT</th>
            <th>Qty</th>

        </tr>
    </thead>
    <tbody>
        
        <?php foreach($_SESSION['cart'] as $key => $val) :?>
        <tr>
            <td><?= $key ?></td>
            <td><?= $val['qty'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php else :?>
<p>Không tồn tại giỏ hàng</p>
<?php endif; ?>