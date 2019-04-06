<!DOCTYPE html>
  <html>
    <head>

      <link href="<?php echo base_url('assets/css/icon.css')  ?> " rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/materialize.min.css') ?>"  media="screen,projection"/>
      <link rel="stylesheet" href="<?php echo base_url('assets/css/style_uangsaku.css') ?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/css/style_all.css') ?>">
      <link rel="shortcut icon" href="<?php echo base_url('assets/img/app/logo/logo_32.png') ?>">

      <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
      <script type="text/javascript" src="<?php echo base_url('assets/js/materialize.min.js') ?>"></script>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body id="body">

      <div class="navbar-fixed">
          <nav class="blue lighten-1">
            <div class="nav-wrapper">
              <div class="container">
                <div class="row">

                  <a href="#body" class="left page-control" id="LOGO-HEADER-LANDING-PAGE">
                    <img src="<?php echo base_url('assets/img/app/logo/logo_64.png') ?>" class="responsive-img">
                  </a>
                  <div class="left" id="JUDUL">
                    <h6 class="white-text"><?php echo $judul; ?></h6>
                  </div>
                  <?php if ($this->uri->segment(2) == null) : ?>
                  <ul id="nav-mobile" class="right hide-on-small-only">
                    <li><a href="#PENGERTIAN" class="page-control">TENTANG</a></li>
                    <li><a href="#FITUR" class="page-control">FITUR</a></li>
                    <li><a href="#DEVELOPER" class="page-control">DEVELOPER</a></li>
                    <li style="margin-top: 15px;">
                      <a href="<?php echo site_url('Login') ?>" class="center right btn white blue-text btn_login">Login</a>
                    </li>
                  </ul>
                  <?php endif ?>
                </div>
              </div>
            </div>
          </nav>
        </div>