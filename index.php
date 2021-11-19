<?php

require_once './commons/app_config.php';
require_once './commons/helpers.php';
require_once './dao/system_dao.php';
$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url) {
    case '/':
        require_once './views/client/layouts/index.php';
        break;
    case 'client/chi-tiet-san-pham':
        require_once './business/client/product-detail.php';
        product_detail();
        
        // product_same_kind();
        break;
    case 'client/gio-hang':
        require_once './business/client/product-cart.php';
       
        break;



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
    case 'cp-admin/hoa-don/chi-tiet':
        require_once "./business/admin/orders.php";
        // select_user_by_id();
        order_details();
        break;
    case 'cp-admin/hoa-don/list-sua-tt':
        require_once "./business/admin/orders.php";
        show_user_order();
        break;
    case 'cp-admin/hoa-don/list-sua-tt/trang-thai':
        require_once "./business/admin/orders.php";
        list_update_status();
        break;
    case 'cp-admin/hoa-don/list-sua-tt/trang-thai/sua':
        require_once "./business/admin/orders.php";
        select_orders();
        break;
    case 'cp-admin/hoa-don/list-sua-tt/list-sua/trang-thai/luu-sua':
        require_once "./business/admin/orders.php";
        save_update_status();
        break;
    
    default:
        echo "Đường dẫn bạn đang truy cập chưa được định nghĩa";
        break;
}
