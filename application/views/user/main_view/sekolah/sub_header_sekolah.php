<!DOCTYPE html>
  <html>
    <head>

      <link href="<?php echo base_url('assets/css/icon.css')  ?> " rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/materialize.min.css') ?>"  media="screen,projection"/>
      <link rel="stylesheet" href="<?php echo base_url('assets/css/style_all_ui_user.css') ?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/css/style_uangsaku_sekolah.css') ?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/css/style_all.css') ?>">
      <link rel="shortcut icon" href="<?php echo base_url('assets/img/app/logo/logo_32.png') ?>">

      <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
      <script type="text/javascript" src="<?php echo base_url('assets/js/materialize.min.js') ?>"></script>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title><?php echo $judul ?></title>
    </head>

    <body>
      <div class="navbar-fixed">
          <nav class="blue lighten-1">
            <div class="nav-wrapper">
              <div class="container">
                <div class="row">
                  <a href="javascript:window.history.go(-1);" class="brand-logo left" id="LINK-KEMBALI">
                    <i class="material-icons white-text" id="ICON-LINK-KEMBALI">chevron_left</i>
                  </a>
                  <div id="HEADER-UANGSAKU-JUDUL">
                    <h6 class="white-text"><?php echo $judul ?></h6>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>