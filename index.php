<?php

require_once './commons/app_config.php';
require_once './commons/helpers.php';
require_once './dao/system_dao.php';
$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url) {
    case '/':
        require_once './views/client/layouts/index.php';
        break;
    case 'client/hoa-don/chi-tiet':
        require_once "./business/client/orders.php";
        order();
    case 'client/hoa-don':
        require_once './business/client/orders.php';
        list_orders();
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
    default:
        echo "Đường dẫn bạn đang truy cập chưa được định nghĩa";
        break;
}
