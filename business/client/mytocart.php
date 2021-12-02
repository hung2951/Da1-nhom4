<?php

function addCart()
{
    if (isset($_POST['id']) && !empty($_POST)) {
        $id = $_POST['id'];
        $sql = "select * from product where id_product = $id";
        $data_product = executeQuery($sql, false);
        $size = $_POST['size'];
        $quantity = $_POST['quantity'];
        if (!isset($_SESSION['cart'])) {
            $cart = [];
            $cart[$id] = [
                'id' => $id,
                'product_name' => $data_product['product_name'],
                'product_image' => $data_product['product_image'],
                'price' => $data_product['price'],
                'quantity' => $quantity,
                'size' => $size,
                'sum_money' => $data_product['price'] + 1,
            ];
        } else {
            $cart = $_SESSION['cart'];

            if (array_key_exists($id, $cart)) { // kiểm tra $id có tồn tại trong mảng kg
                $cart[$id] = [
                    'id' => $id,
                    'product_name' => $data_product['product_name'],
                    'product_image' => $data_product['product_image'],
                    'price' => $data_product['price'],
                    'quantity' => $quantity + $cart[$id]['quantity'],
                    'size' => $size,
                    'sum_money' => $data_product['price'] + 1,
                ];
            } else {
                $cart[$id] = [
                    'id' => $id,
                    'product_name' => $data_product['product_name'],
                    'product_image' => $data_product['product_image'],
                    'price' => $data_product['price'],
                    'quantity' => $quantity,
                    'size' => $size,
                    'sum_money' => $data_product['price'] + 1,
                ];
            }
        }
        $_SESSION['cart'] = $cart;
    }
    client_render('mytocart/index.php', []);
}

function delete_cart()
{
    // lấy về tên giỏi hàng
    $cart = $_SESSION['cart'];
    // lấy về id sản phẩm trong giỏi hàng
    $id = $_GET['id'];
    if ($id == 0) {
        unset($_SESSION['cart']); // xóa giỏ hàng
        client_render('mytocart/index.php', []);
    } else {
        unset($_SESSION['cart'][$id]); // xóa sp trong giỏi hàng
        client_render('mytocart/index.php', []);
    }
}


function checkout()
{

    client_render('mytocart/checkout.php',);
}
function pay_cart()
{
    $date = $_POST['date'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $sql = "insert into orders(order_date,custom_name,custom_phone,custom_email,custom_address) values ('$date','$name','$phone','$email','$address')";
    $invoiceId = insertDataAndGetId($sql);
    $totalMoney = 0;
    // chạy vòng lặp qua các phần tử của giỏ hàng, sau đó insert dữ liệu vào bảng order_detail
    foreach ($_SESSION['cart'] as $item) {
        $productId = $item['id'];
        $price = $item['price'];
        $quantity = $item['quantity'];
        $size = $item['size'];
        $totalMoney += $price * $quantity;
        $insertInvoiceDetailQuery = "insert into order_detail 
                                        (id_orders, id_product, quantity, unit_price, size)
                                    values 
                                        ($invoiceId, $productId, $quantity, $price, $size)";
        executeQuery($insertInvoiceDetailQuery, false);
    }
    // Cập nhật tổng số tiền vào hóa đơn
    $updateTotalPriceToInvoice = "update orders
                                    set money = $totalMoney
                                where id_orders = $invoiceId";
    executeQuery($updateTotalPriceToInvoice, false);

    unset($_SESSION['cart']);
    client_render('mytocart/note.php');
    die;
}
