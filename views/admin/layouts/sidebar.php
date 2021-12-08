<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="" class="brand-link" style="text-decoration: none;">
    <img src="<?= ADMIN_ASSETS ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Shose Store</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= PUBLIC_ASSETS . $_SESSION['khach_hang']['avatar'] ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" style="text-decoration: none;" class="d-block"><?= $_SESSION['khach_hang']['full_name'] ?></a>
      </div>
    </div>
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
        <a class="nav-link" href="<?= BASE_URL ?>">Đi tới trang chủ &raquo;</a>
      </div>

    </div>
    <!-- SidebarSearch Form -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <p> Tài khoản<i class="fas fa-angle-left right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= ADMIN_URL . 'tai-khoan/tao-moi' ?>" class="nav-link"><i class="far fa-circle nav-icon"></i>
                <p>Tạo mới</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= ADMIN_URL . 'tai-khoan' ?>" class="nav-link"><i class="far fa-circle nav-icon"></i>
                <p>Danh sách</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <p> Thương hiệu<i class="fas fa-angle-left right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= ADMIN_URL . 'thuong-hieu/tao-moi' ?>" class="nav-link"><i class="far fa-circle nav-icon"></i>
                <p>Tạo mới</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= ADMIN_URL . 'thuong-hieu' ?>" class="nav-link"><i class="far fa-circle nav-icon"></i>
                <p>Danh sách</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <p>Sản phẩm<i class="fas fa-angle-left right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= ADMIN_URL . 'san-pham/tao-moi' ?>" class="nav-link"><i class="far fa-circle nav-icon"></i>
                <p>Tạo mới</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= ADMIN_URL . 'san-pham' ?>" class="nav-link"><i class="far fa-circle nav-icon"></i>
                <p>Danh sách</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <p>Bình luận<i class="fas fa-angle-left right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= ADMIN_URL.'binh-luan'?>" class="nav-link"><i class="far fa-circle nav-icon"></i>
                <p>Danh sách</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">
            <p>Đơn hàng<i class="fas fa-angle-left right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= ADMIN_URL . 'don-hang' ?>" class="nav-link"><i class="far fa-circle nav-icon"></i>
                <p>Danh sách</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">
            <p>Mã giảm giá<i class="fas fa-angle-left right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= ADMIN_URL . 'ma-giam-gia/tao-moi' ?>" class="nav-link"><i class="far fa-circle nav-icon"></i>
                <p>Tạo mới</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= ADMIN_URL . 'ma-giam-gia' ?>" class="nav-link"><i class="far fa-circle nav-icon"></i>
                <p>Danh sách</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">
            <p>Thống kê<i class="fas fa-angle-left right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= ADMIN_URL . 'thong-ke' ?>" class="nav-link"><i class="far fa-circle nav-icon"></i>
                <p>Danh sách thống kê sản phẩm</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= ADMIN_URL . 'thong-ke/bieu-do' ?>" class="nav-link"><i class="far fa-circle nav-icon"></i>
                <p>Biểu đồ sản phẩm</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= ADMIN_URL . 'thong-ke/bieu-do/hoa-don' ?>" class="nav-link"><i class="far fa-circle nav-icon"></i>
                <p>Biểu đồ hóa đơn</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">
            <p>Tin tức<i class="fas fa-angle-left right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= ADMIN_URL . 'tin-tuc/tao-moi' ?>" class="nav-link"><i class="far fa-circle nav-icon"></i>
                <p>Tạo mới</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= ADMIN_URL . 'tin-tuc' ?>" class="nav-link"><i class="far fa-circle nav-icon"></i>
                <p>Danh sách</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
        <li class="nav-item">
          <a href="<?= CLIENT_URL . 'logout' ?>" class="nav-link">
            <p style="color: #ff6a57;">Đăng xuất <i class="fas fa-sign-out-alt "></i></p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>