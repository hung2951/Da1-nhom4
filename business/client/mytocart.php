<?php 

function addCart(){
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $sql = "select * from product where id_product = $id";
        $data_product = executeQuery($sql, false);
        $size = $_POST['size'];
        $quantity = $_POST['quantity'];
        // echo "<pre>";
        // var_dump($data_product);
        // echo "</pre>";
        // die;
            
        // dd($data_product);
        if(!isset($_SESSION['cart'])){  
            $cart = [];
            $cart[$id] = [
                'id' => $id,
                'product_name' => $data_product['product_name'],
                'product_image' => $data_product['product_image'],
                'price' => $data_product['price'],
                'quantity' => $quantity,
                // 'Quantity' => 1,
                'size' =>$size,
                'sum_money' => $data_product['price'] + 1,
            ];
        }else{
            $cart = $_SESSION['cart'];
            if(array_key_exists($id,$cart)){ // kiểm tra $id có tồn tại trong mảng kg
                $cart[$id] = [
                    'id' => $id,
                    'product_name' => $data_product['product_name'],
                    'product_image' => $data_product['product_image'],
                    'price' => $data_product['price'],
                    // 'quantity' => $data_product['quantity'] +1,
                    'quantity' => $quantity+ $cart[$id]['quantity'],
                    // 'Quantity' => 1,
                    'size' =>$size,
                    'sum_money' => $data_product['price'] + 1,
                ];
            }else{
                $cart[$id] = [
                    'id' => $id,
                    'product_name' => $data_product['product_name'],
                    'product_image' => $data_product['product_image'],
                    'price' => $data_product['price'],
                    'quantity' => $quantity,
                    // 'Quantity' => 1,
                    'size' =>$size,
                    'sum_money' => $data_product['price'] + 1,
                ];
            }
        }
        $_SESSION['cart'] = $cart;

    //   var_dump($_SESSION['cart']);
    //   die;
      client_render('mytocart/index.php', []);
    }else {
        echo "Không tồn tại sản phẩm trong giỏ hàng";
    }


}

function delete_cart(){
        // lấy về tên giỏi hàng
        $cart= $_SESSION['cart'];
        // lấy về id sản phẩm trong giỏ hàng
        $id=$_GET['id'];
        if($id==0){
            unset($_SESSION['cart']); // xóa giỏ hàng
            client_render('mytocart/index.php', []);
        }else{
            unset($_SESSION['cart'] [$id]); // xóa sp trong giỏi hàng
            client_render('mytocart/index.php', []);
        }
}