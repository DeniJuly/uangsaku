<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo $judul; ?></title>

  <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendors/css/vendor.bundle.base.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendors/css/vendor.bundle.addons.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/style.css') ?>">

  <link rel="shortcut icon" href="<?php echo base_url('assets/img/app/logo/logo_32.png') ?>">

  <script src="<?php echo base_url('assets/admin/vendors/js/vendor.bundle.base.js') ?>"></script>
  <script src="<?php echo base_url('assets/admin/vendors/js/vendor.bundle.addons.js') ?>"></script>

  <script src="<?php echo base_url('assets/admin/js/off-canvas.js') ?>"></script>
</head>

<body>
 <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top" style="background-color: #11d1d4;">
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-right">
          
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell"></i>
              <span class="count">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <a class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">3 Pesan Baru
                </p>
                <span class="badge badge-pill badge-warning float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="mdi mdi-star-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">4 Feedback Masuk</h6>
                  <p class="font-weight-light small-text">
                    Just now
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="mdi mdi-comment-text-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">10 Permintaan Bergabung</h6>
                  <p class="font-weight-light small-text">
                    Just now
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-primary">
                    <i class="mdi mdi-account-multiple-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">5.000 User Baru Bergabung</h6>
                  <p class="font-weight-light small-text">
                    Setelah Lomba Ini
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="<?php echo site_url('assets/img/user/coba.jpg') ?>" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a href="#" class="dropdown-item mt-2">
                <i class="mdi mdi-logout"></i>Sign Out
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span><i class="mdi mdi-menu"></i></span>
        </button>
      </div>
    </nav>

     <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link <?php if ($this->uri->segment(2)=='') {
                echo"text-primary";
              } ?>" style="color: black;" href="<?php echo site_url('UANGSAKU_admin'); ?>">
              <i class="menu-icon mdi mdi-home"></i>
              <span class="menu-title">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($this->uri->segment(2)=='sekolah') {
                echo"text-primary";
              } ?>" style="color: black;" href="<?php echo site_url('UANGSAKU_admin/sekolah'); ?>">
              <i class="menu-icon mdi mdi-school"></i>
              <span class="menu-title">Sekolah</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($this->uri->segment(2)=='orang_tua') {
                echo"text-primary";
              } ?>" style="color: black;" href="<?php echo site_url('UANGSAKU_admin/orang_tua'); ?>">
              <i class="menu-icon mdi mdi-account"></i>
              <span class="menu-title">Orang Tua</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($this->uri->segment(2)=='siswa') {
                echo"text-primary";
              } ?> <?php if ($this->uri->segment(2)=='list_siswa') {
                echo"text-primary";
              } ?>" style="color: black;" href="<?php echo site_url('UANGSAKU_admin/siswa'); ?>">
              <i class="menu-icon mdi mdi-chair-school"></i>
              <span class="menu-title">Siswa</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($this->uri->segment(2)=='keuangan') {
                echo"text-primary";
              } ?>" style="color: black;" href="<?php echo site_url('UANGSAKU_admin/keuangan'); ?>">
              <i class="menu-icon mdi mdi-credit-card-multiple"></i>
              <span class="menu-title">Keuangan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($this->uri->segment(2)=='feedback') {
                echo"text-primary";
              } ?>" style="color: black;" href="<?php echo site_url('UANGSAKU_admin/feedback'); ?>">
              <i class="menu-icon mdi mdi-star-outline"></i>
              <span class="menu-title">Feedback</span>
            </a>
          </li>
        </ul>
      </nav>