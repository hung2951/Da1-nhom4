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


