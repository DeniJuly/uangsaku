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
      <title>UANGSAKU</title>
    </head>

    <body>
      	<div class="navbar-fixed">
          <nav class="blue lighten-1">
            <div class="nav-wrapper">
              
            </div>
          </nav>
        </div>
		<div class="container">
			<div class="row">
				<div class="col s12 m122 l12 center">
					<img src="<?php echo base_url('assets/img/app/logo/logo_300.png') ?>">
					<h5 class="center"><b>TERIMAKASIH TELAH MENDAFTAR DI UANGSAKU</b></h5>
					<?php if ($this->session->userdata('JENIS_USER')=='sekolah'):?>
						<h5 class="center"><b>KAMI SENDANG MENGECEK DATA AKUN ANDA</b></h5>
					<?php elseif ($this->session->userdata('JENIS_USER')=='siswa'):?>
						<h5 class="center"><b>SEKOLAH ANDA SEDANG MENGECEK DATA AKUN ANDA</b></h5>
					<?php elseif ($this->session->userdata('JENIS_USER')=='orangtua') :?>
						<h5 class="center"><b>SEKOLAH ANAK ANDA SEDANG MENGECEK DATA AKUN ANDA</b></h5>
					<?php elseif ($this->session->userdata('JENIS_USER')=='orangtua') :?>
						<h5 class="center"><b>SEKOLAH YANG BERKERJASAMA DENGAN ANDA SEDANG MENGECEK DATA AKUN ANDA</b></h5>
					<?php endif ?>
					<a href="<?php echo site_url('UANGSAKU_offline/keluar') ?>" class="btn yellow darken-3">KELUAR</a>
				</div>
			</div>
		</div>
	</body>
	</html>