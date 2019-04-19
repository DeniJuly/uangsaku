<!DOCTYPE html>
  <html>
    <head>

      <link href="<?php echo base_url('assets/css/icon.css')  ?> " rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/materialize.min.css') ?>"  media="screen,projection"/>
      <link rel="stylesheet" href="<?php echo base_url('assets/css/style_all_ui_user.css') ?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/css/style_all.css') ?>">
      <link rel="shortcut icon" href="<?php echo base_url('assets/img/app/logo/logo_32.png') ?>">

      <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
      <script type="text/javascript" src="<?php echo base_url('assets/js/materialize.min.js') ?>"></script>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>UANGSAKU</title>
    </head>

    <body>
      <div class="container">
        <div class="row">
          <div class="col s12 m10 l10">
            <div class="col s12 m12 l12 offset-m1 offset-l1 center" style="margin-top: 10px;">
              <?php foreach ($data_jenis_pembiayaan as $d_j):?>
              <h5 class="grey-text"><b>SELAMAT</b></h5>
              <h6 class="grey-text">ANDA BERHASIL MELAKUKAN PEMBAYARAN <?php echo $d_j->NAMA_PEMBIAYAAN ?></h6>
              <?php endforeach ?>
              <img src="<?php echo base_url('assets/img/app/icon/verifed_256.png') ?>" class="responsive-img" width="200px" style="margin-top: 50px;">
              <?php foreach ($data as $d):?>
              <h6 class="grey-text"style="margin-top: 50px;">NOMINAL</h6>
              <h5 class="grey-text"><b><sup>Rp</sup><?php echo number_format($d->TOTAL_PEMBAYARAN) ?></b></h5>
              <?php endforeach ?>
              <p class="grey-text">KEMBALI KE <a href="<?php echo base_url() ?>">HALAMAN UTAMA</a></p>
            </div>
          </div>
        </div>
      </div>
    </body>
  </html>