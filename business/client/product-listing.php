<?php
function product_listing(){
    $sql="select * from product";
   $product_listing = executeQuery($sql);
   client_render('product-listing/index.php', [
       'product_listing' => $product_listing,
   ]);
}
?>