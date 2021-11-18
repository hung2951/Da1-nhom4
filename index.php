<?php

require_once './commons/app_config.php';
require_once './commons/helpers.php';
require_once './dao/system_dao.php';
require_once './business/admin/product.php';

$allproduct = product_select_all();

// dd($allproduct);


$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url) {
    case '/':
        require_once './views/client/layouts/index.php';
        break;
<<<<<<< Updated upstream
    case 'client/chi-tiet-san-pham':
        require_once './business/client/product-detail.php';
        product_detail();
        break;



=======
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
   
>>>>>>> Stashed changes
    case 'cp-admin/dashboard':
        require_once './business/admin/dashboard.php';
        dashboard_info();
        break;
    case 'cp-admin/tai-khoan':
        require_once "./business/admin/account.php";
        account_index();
        break;
    case 'cp-admin/tai-khoan/tao-moi':
        require_once "./business/admin/account.php";
        account_add_form();
        break;
    case 'cp-admin/tai-khoan/luu-tao-moi':
        require_once "./business/admin/account.php";
        account_save_add();
        break;
    case 'cp-admin/tai-khoan/sua':
        require_once "./business/admin/account.php";
        account_edit_form();
        break;
    case 'cp-admin/tai-khoan/luu-sua':
        require_once "./business/admin/account.php";
        account_save_edit();
        break;
    case 'cp-admin/tai-khoan/xoa':
        require_once "./business/admin/account.php";
        account_remove();
        break;
    default:
        echo "Đường dẫn bạn đang truy cập chưa được định nghĩa";
        break;
}

?>