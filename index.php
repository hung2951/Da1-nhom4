<?php
session_start();

require_once './commons/app_config.php';
require_once './commons/helpers.php';
require_once './dao/system_dao.php';
$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url) {

    case '/':
        require_once './business/client/home.php';
        product_home();
    case 'client/search':
        require_once './business/client/search.php';
        search();
        break;
    case 'client/product-category':
        require_once "./business/client/home.php";
        select_product_by_id();
        break;
    case 'client/hoa-don/chi-tiet':
        require_once "./business/client/orders.php";
        order();
        break;
    case 'client/hoa-don':
        require_once './business/client/orders.php';
        list_orders();
        break;
    case 'client/hoa-don/xoa':
        require_once "./business/client/orders.php";
        delete_order();
        break;
    case 'client/hoa-don/sua':
        require_once "./business/client/orders.php";
        update_order();
        break;
    case 'client/hoa-don/sua/luu-sua':
        require_once "./business/client/orders.php";
        save_update_order();
        break;
    case 'client/chi-tiet-san-pham':
        require_once './business/client/product-detail.php';
        product_detail();
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
    case 'cp-admin/hoa-don/ds-hoa-don/chi-tiet':
        require_once "./business/admin/orders.php";
        order_details();
        break;
    case 'cp-admin/hoa-don/ds-hoa-don':
        require_once "./business/admin/orders.php";
        list_order();
        break;
    case 'cp-admin/hoa-don/ds-hoa-don/sua':
        require_once "./business/admin/orders.php";
        select_orders();
        break;
    case 'cp-admin/hoa-don/ds-hoa-don/sua/luu-sua':
        require_once "./business/admin/orders.php";
        save_update_status();
        break;
    case 'cp-admin/hoa-don':
        require_once "./business/admin/orders.php";
        orders_manage();
        break;
    case 'client/dang-nhap':
        require_once "./business/client/login.php";
        login();
        break;
    case 'client/check-dang-nhap':
        require_once "./business/client/login.php";
        check_login();
        break;
    default:
        echo "Đường dẫn bạn đang truy cập chưa được định nghĩa";
        break;
}
