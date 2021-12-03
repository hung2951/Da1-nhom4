<?php
if (isset($_SESSION['khach_hang'])) {
  if ($_SESSION['khach_hang']['role'] != 1) {
    echo '<a href="http://localhost/da1-nhom4/">' . 'Quay lại trang chủ' . '</a>';
    echo '<pre>';
    die('Đường dẫn không tồn tại !');
  }
} else {
  header('location:' . CLIENT_URL . 'dang-nhap');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quản trị </title>
  <?php include_once "./views/admin/layouts/style.php" ?>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="<?= ADMIN_ASSETS ?>dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <?php include_once "./views/admin/layouts/header.php" ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include_once "./views/admin/layouts/sidebar.php" ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">

            <div class="col-sm-6">

            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <?php include_once $businessView; ?>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  <?php include_once "./views/admin/layouts/script.php" ?>

  <?php if (count($jsFiles) > 0) : ?>
    <?php foreach ($jsFiles as $jsFile) : ?>
      <script src="<?= PUBLIC_ASSETS . $jsFile ?>" type="text/javascript"></script>
    <?php endforeach ?>
  <?php endif ?>

</body>

</html>