<?php

require_once 'header.php';

if((isset($_GET['act'])) && ($_GET['act'] !="" )){
    $act= $_GET['act'];
    switch ($act) {
        case 'chitietsp':
            if(isset($_GET['id_product'])&&($_GET['id_product']>0)){
                $id_product = $_GET['id_product'];
                $onesp = product_select_by_id($id_product);
                extract($onesp);
                $sp_cung_loai= product_cung_loai($id_product,$id_brand);
                // dd($sp_cung_loai);
                require_once './views/client/product_details.php'; 
            }
            require_once './views/client/product_details.php'; 
        break;    

        default:
        require_once 'home.php';
            break;
    }
}else{
    require_once 'home.php';
}

require_once 'footer.php';
?>