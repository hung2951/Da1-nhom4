<?php 

function addCart(){
    if(isset($_GET['id']) && !empty($_POST)){
     
        
        $id = $_GET['id'];
        $sql = "select * from product where id_product  = $id";
        $data_product = executeQuery($sql, false);
        $size = $_POST['size'];
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
                'quantity' => $data_product['quantity'],
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
                    'quantity' => $data_product['quantity'] +1,
                    // 'quantity' => $quantity+ $cart[$id]['quantity'],
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
                    'quantity' => $data_product['quantity'],
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
       
        header('location: ' . $_SERVER['HTTP_REFERER']);
    }


}





// function addCart(){
//     // kiểm tra xem giỏi hàng có tồn tại hay không
//         if(!isset($_SESSION['cart']))// nếu không tồn tại

//         $_SESSION['cart']=array(); // tạo 1 giỏi hàng bằng một mảng
//         $id=$_GET['id']; // lấy id bằng get
//         $product_name=$_GET['product_name'];
//         $product_image=$_GET['product_image'];
//         $price=$_GET['price'];

//         if(isset($_SESSION['cart'] [$id])){// kiểm tra xem sp có trong giỏi hàng chưa

//             $_SESSION['cart'] [$id] ['qty'] +=1; // nếu tt thì tăng số lượng lên 1
//             $_SESSION['cart'] [$id] ['product_name']= $product_name;  
//             $_SESSION['cart'] [$id] ['product_image']= $product_image;  
//             $_SESSION['cart'] [$id] ['price']= $price;   

//         }else{
//             $_SESSION['cart'] [$id] = $id; // gán id cho sp trong giỏi hàng
//             $_SESSION['cart'] [$id] ['qty'] =1; // gán số lượng bằng 1
//             $_SESSION['cart'] [$id] ['product_name']= $product_name;  
//             $_SESSION['cart'] [$id] ['product_image']= $product_image;  
//             $_SESSION['cart'] [$id] ['price']= $price;  
//         }
// }
//     // in ra giỏi hàng
//     function printCart(){
//         echo "<pre>";
//         print_r($_SESSION['cart']);
//         echo "</pre>";
//     }

//     // xóa giỏi hàng
    // function dellCart(){
    //     // lấy về tên giỏi hàng
    //     $cart= $_SESSION['cart'];
    //     // lấy về id sản phẩm trong giỏi hàng
    //     $id=$_GET['id'];
    //     if($id==0){
    //         unset($_SESSION['cart']); // xóa giỏi hàng
    //     }else{
    //         unset($_SESSION['cart'] [$id]); // xóa sp trong giỏi hàng
    //     }
    // }
















    //     // b1 lấy id của sản phẩm cần thêm vào giỏ hàng
    //   $id= isset($_GET['id']) ? $_GET['id'] :"";

    //     // kiểm tra đã tồn tại session
    //     if(isset($_SESSION['cart'])){
    //         // var_dump(" đã tồn tại giỏi hàng");
    //         if(isset($_SESSION['cart'] [$id])){
    //             $_SESSION['cart'] [$id] ['qty'] +=1;

              
    //         }else{
    //             $_SESSION['cart'] [$id] ['qty']=1;  
    //         }
    //         // $_SESSION['success'] = 'Tồn tại giỏi hàng cập nhật thành công';
    //         header('location: http://localhost/Da1-nhom4/client/chi-tiet-san-pham?id=6');exit();
    //     }else{
    //         // var_dump(" Chưa tồn tại session");
    //         $_SESSION['cart'] [$id] ['qty']=1;
    //         // $_SESSION['success'] = 'Tạo Mới giỏi hàng thành công'; 
    //         header('location: http://localhost/Da1-nhom4/client/chi-tiet-san-pham?id=6');exit();
    // }
