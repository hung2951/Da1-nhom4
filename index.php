<?php
session_start();
require_once './vender/PHPMailer/src/Exception.php';
require_once './vender/PHPMailer/src/PHPMailer.php';
require_once './vender/PHPMailer/src/SMTP.php';

require_once './commons/app_config.php';
require_once './commons/helpers.php';
require_once './dao/system_dao.php';
$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url) {

    case '/':
        require_once './business/client/home.php';
        product_home();
        break;
    case 'client/search':
        require_once './business/client/search.php';
        search();
        break;
    case 'client/product-category':
        require_once "./business/client/home.php";
        select_product_by_id();
        break;
    case 'client/chi-tiet-san-pham':
        require_once './business/client/product-detail.php';
        product_detail();
        break;

    case 'client/binh_luan/luu-tao-moi':
        require_once "./business/client/product-detail.php";
        save_add_commment();
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
    case 'cp-admin/don-hang':
        require_once "./business/admin/orders.php";
        select_order();
        break;
    case 'cp-admin/don-hang/trang-thai':
        require_once "./business/admin/orders.php";
        order_status();
        break;
    case 'cp-admin/don-hang/trang-thai/luu':
        require_once "./business/admin/orders.php";
        save_update_status();
        break;
    case 'cp-admin/don-hang/chi-tiet':
        require_once "./business/admin/orders.php";
        order_details();
        break;
    case 'client/gio-hang':
        require_once './business/client/mytocart.php';
        addCart();
        break;
    case 'client/gio-hang/delete':
        require_once './business/client/mytocart.php';
        delete_cart();
        break;
    case 'client/gio-hang/checkout':
        require_once './business/client/mytocart.php';
        checkout();
        break;
    case 'client/pay-cart':
        require_once './business/client/mytocart.php';
        pay_cart();
    case 'client/dang-nhap':
        require_once "./business/client/login.php";
        login();
        break;
    case 'client/check-dang-nhap':
        require_once "./business/client/login.php";
        check_login();
    case 'client/dang-ky':
        require_once "./business/client/login.php";
        regester();
        break;
    case 'client/dang-ky/luu':
        require_once "./business/client/login.php";
        save_regester();
        break;
    case 'client/doi-mat-khau':
        require_once "./business/client/login.php";
        change_password();
        break;
    case 'client/luu-mat-khau':
        require_once "./business/client/login.php";
        save_change_password();
        break;
    case 'client/profile':
        require_once "./business/client/profile.php";
        select_user();
        break;
    case 'client/profile/luu':
        require_once "./business/client/profile.php";
        save_update_user();
        break;
    case 'client/logout':
        require_once "./business/client/profile.php";
        logout();
        break;
    case 'client/shoes':
        require_once "./business/client/product-listing.php";
        product_listing();
        break;
        // quản lý thương hiệu
    case 'cp-admin/thuong-hieu':
        require_once "./business/admin/brand.php";
        list_brand();
        break;
    case 'cp-admin/thuong-hieu/tao-moi':
        require_once "./business/admin/brand.php";
        add_brand();
        break;
    case 'cp-admin/thuong-hieu/luu-tao-moi':
        require_once "./business/admin/brand.php";
        save_add_brand();
        break;
    case 'cp-admin/thuong-hieu/xoa':
        require_once "./business/admin/brand.php";
        delete_brand();
        break;
    case 'cp-admin/thuong-hieu/sua':
        require_once "./business/admin/brand.php";
        update_brand();
        break;
    case 'cp-admin/thuong-hieu/luu-sua':
        require_once "./business/admin/brand.php";
        save_update_brand();
        break;
        // quản lý sản phẩm 
    case 'cp-admin/san-pham':
        require_once "./business/admin/product.php";
        list_product();
        break;
    case 'cp-admin/san-pham/tao-moi':
        require_once "./business/admin/product.php";
        product_add_form();
        break;
    case 'cp-admin/san-pham/luu-tao-moi':
        require_once "./business/admin/product.php";
        product_save_add();
        break;
    case 'cp-admin/san-pham/sua':
        require_once "./business/admin/product.php";
        product_edit_form();
        break;
    case 'cp-admin/san-pham/luu-sua':
        require_once "./business/admin/product.php";
        product_save_edit();
        break;
    case 'cp-admin/san-pham/xoa':
        require_once "./business/admin/product.php";
        product_remove();
        break;
    case 'cp-admin/san-pham/search':
        require_once "./business/admin/product.php";
        search_product_admin();
        break;
    case 'cp-admin/thong-ke':
        require_once "./business/admin/statistic.php";
        statistic();
        break;
    case 'cp-admin/thong-ke/bieu-do':
        require_once "./business/admin/statistic.php";
        chart();
        break;
    case 'cp-admin/thong-ke/bieu-do/hoa-don':
        require_once "./business/admin/statistic.php";
        chart_orders();
        break;
    case 'cp-admin/ma-giam-gia':
        require_once "./business/admin/promoCode.php";
        list_code();
        break;
    case 'cp-admin/ma-giam-gia/tao-moi':
        require_once "./business/admin/promoCode.php";
        add_code();
        break;
    case 'cp-admin/ma-giam-gia/luu-tao-moi':
        require_once "./business/admin/promoCode.php";
        save_add_code();
        break;
    case 'cp-admin/ma-giam-gia/xoa':
        require_once "./business/admin/promoCode.php";
        delete_promo_code();
        break;
    case 'cp-admin/ma-giam-gia/sua':
        require_once "./business/admin/promoCode.php";
        update_promo_code();
        break;
    case 'cp-admin/ma-giam-gia/luu-sua':
        require_once "./business/admin/promoCode.php";
        save_update_promo_code();
        break;
    case 'cp-admin/binh-luan':
        require_once "./business/admin/comment.php";
        thong_ke_binh_luan();
        break;
    case 'cp-admin/binh-luan/chi-tiet':
        require_once "./business/admin/comment.php";
        select_cmt_by_product();
        break;
    case 'cp-admin/binh-luan/chi-tiet/xoa':
        require_once "./business/admin/comment.php";
        comment_delete();
        break;
    case 'client/quen-mat-khau': // ------------------------------------------------
        require_once "./business/client/home.php";
        send_email();
        break;
    case 'client/xac-nhan-email': // ------------------------------------------------
        require_once "./business/client/home.php";
        email_form();
        break;
    case 'client/notificaEmail': // ------------------------------------------------
        require_once "./business/client/home.php";
        notificaEmail();
        break;
    case 'client/lien-he':
        require_once "./business/client/contact.php";
        contact_add_form();
        break;
    case 'client/lien-he/luu-tao-moi':
        require_once "./business/client/contact.php";
        save_add_contact();
        break;
    case 'client/news':
        require_once "./business/client/news.php";
        news();
        break;
    case 'client/news_detail':
        require_once "./business/client/news.php";
        news_detail();
        break;
    case 'cp-admin/tin-tuc':
        require_once "./business/admin/news.php";
        list_news();
        break;
    case 'cp-admin/tin-tuc/tao-moi':
        require_once "./business/admin/news.php";
        news_add_form();
        break;
    case 'cp-admin/tin-tuc/luu-tao-moi':
        require_once "./business/admin/news.php";
        news_save_add();
        break;
    case 'cp-admin/tin-tuc/sua':
        require_once "./business/admin/news.php";
        news_edit_form();
        break;
    case 'cp-admin/tin-tuc/luu-sua':
        require_once "./business/admin/news.php";
        news_save_edit();
        break;
    case 'cp-admin/tin-tuc/xoa':
        require_once "./business/admin/news.php";
        news_remove();
        break;
    default:
        echo "Đường dẫn bạn đang truy cập chưa được định nghĩa";
        break;
}
