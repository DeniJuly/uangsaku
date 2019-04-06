<!DOCTYPE html>
  <html>
    <head>

      <link href="<?php echo base_url('assets/css/icon.css') ?> " rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/materialize.min.css') ?>"  media="screen,projection"/>
      <link rel="stylesheet" href="<?php echo base_url('assets/css/style_uangsaku_sekolah.css') ?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/css/style_all.css') ?>">
      <link rel="shortcut icon" href="<?php echo base_url('assets/img/app/icon/logo_32.png') ?>">

      <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
      <script type="text/javascript" src="<?php echo base_url('assets/js/materialize.min.js') ?>"></script>
      <script type="text/javascript" src="<?php echo base_url('assets/js/materialize_initialization.js') ?>"></script>
      <script type="text/javascript" src="<?php echo base_url('assets/js/slider.js') ?>"></script>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style type="text/css">
        .rating > span:hover:before {
   content: "\2605";
   position: absolute;
}
.rating {
  unicode-bidi: bidi-override;
  direction: rtl;
}
.rating > span:hover:before,
.rating > span:hover ~ span:before {
   content: "\2605";
   position: absolute;
}
.rating {
  unicode-bidi: bidi-override;
  direction: rtl;
}
.rating > span {
  display: inline-block;
  position: relative;
  width: 1.1em;
}
.rating > span:hover:before,
.rating > span:hover ~ span:before {
   content: "\2605";
   position: absolute;
}
      </style>
      <title><?php echo $judul; ?></title>
    </head>

    <body>

      <nav class="white" id="nav-navbar">
        <div class="nav-wrapper">
          <a href="#" data-activates="mobile-demo" class="grey-text button-collapse"><i class="material-icons">menu</i></a>
          <a class="big-side-nav left hide-on-small-only grey-text circle" id="btn-big-side-nav-small"><i class="center material-icons">menu</i></a>
          <a class="big-side-nav left hide-on-small-only grey-text circle" id="btn-big-side-nav-big"><i class="center material-icons">menu</i></a>
          <a href="#" class="brand-logo navbar-logo hide-on-small-only"><img src="<?= base_url('assets/img/app/icon/logo_120.png') ?>" style="width: 65px;"></a>

          <ul class="right" id="ul-navbar">
            <li><a href="<?php echo site_url('UANGSAKU/profile_orang_tua') ?>"><img class="circle" src="<?php echo base_url('assets/img/user/coba.jpg') ?>"></a></li>
          </ul>

          <ul id="mobile-demo" class="side-nav">
            <li class="judul">
              <p class="blue-text">UANGSAKU</p>
            </li>
            <li><a href="<?php echo site_url('UANGSAKU_Sekolah/Profile') ?>"><i class="material-icons">person</i>Profile</a></li>
            <li><a href="<?php echo site_url('UANGSAKU_Sekolah') ?>"><i class="material-icons">monetization_on</i>Pembayaran</a></li>
            <li><a href="#!"><i class="material-icons">verified_user</i>Verifikasi</a></li>
            <li><a href="<?php echo site_url('UANGSAKU_Sekolah/siswa') ?>"><i class="material-icons">school</i>SISWA</a></li>
          </ul>
        </div>
      </nav>

      <div class="row" style="height: 89.5%">
        <div class="hide-on-small-only col m2 l2" id="side-navbar">
          <ul id="ul-side-navbar">

            <li id="li-side-navbar">
              <a href="<?php echo site_url('UANGSAKU/beranda_orang_tua') ?>" id="link-side-navbar" class="<?php if ($this->uri->segment(2)=='beranda_orang_tua') {
                echo"active-side-navbar";
              } ?>">
                <i class="material-icons">home</i>
                <label id="label-side-navbar">Home</label>
              </a>
            </li>

            <li id="li-side-navbar">
              <a href="<?php echo site_url('UANGSAKU/profile_orang_tua') ?>" id="link-side-navbar" class="<?php if ($this->uri->segment(2)=='profile_orang_tua') {
                echo"active-side-navbar";
              } ?>">
                <i class="material-icons">person</i>
                <label id="label-side-navbar">Profile</label>
              </a>
            </li>

            <li id="li-side-navbar2">
              <a href="<?php echo site_url('UANGSAKU/bayar') ?>" id="link-side-navbar2" class="<?php if ($this->uri->segment(2)=='bayar') {
                echo"active-side-navbar";
              } ?>">
                <i class="material-icons">monetization_on</i>
                <label id="label-side-navbar2">Pembayaran</label>
              </a>
            </li>

            <li id="li-side-navbar3">
              <a href="" id="link-side-navbar3" class="<?php if ($this->uri->segment(2)=='tambah') {
                echo"active-side-navbar";
              } ?>">
                <i class="material-icons">add</i>
                <label id="label-side-navbar3">Tambah Anak</label>
              </a>
            </li>

            <li id="li-side-navbar4">
              <a href="<?php echo site_url('UANGSAKU/history_orang_tua') ?>" id="link-side-navbar3" class="<?php if ($this->uri->segment(2)=='history_orang_tua') {
                echo"active-side-navbar";
              } ?>">
                <i class="material-icons">history</i>
                <label id="label-side-navbar4">History Anak</label>
              </a>
            </li>
          </ul>
        </div>
<script>
  $(document).ready(function(){
    $("#btn-big-side-nav-small").click(function(){
        $(this).css("display","none");
        $("#btn-big-side-nav-big").css("display","block");
        $("#side-navbar").removeClass("m2 l2");
        $("#side-navbar").addClass("m1 l1");
        $("#isi").removeClass("m10 l10");
        $("#isi").addClass("m11 l11");

        $("#li-side-navbar").addClass("li-side-navbar-small");
        $("#li-side-navbar2").addClass("li-side-navbar-small");
        $("#li-side-navbar3").addClass("li-side-navbar-small");
        $("#li-side-navbar4").addClass("li-side-navbar-small");

        $("#label-side-navbar").hide();
        $("#label-side-navbar2").hide();
        $("#label-side-navbar3").hide();
        $("#label-side-navbar4").hide();

        $("#link-side-navbar").css("padding-left","0");
        $("#link-side-navbar2").css("padding-left","0");
        $("#link-side-navbar3").css("padding-left","0");
        $("#link-side-navbar4").css("padding-left","0");
    });
    $("#btn-big-side-nav-big").click(function(){
        $(this).css("display","none");
        $("#btn-big-side-nav-small").css("display","block");
        $("#side-navbar").removeClass("m1 l1");
        $("#side-navbar").addClass("m2 l2");
        $("#isi").removeClass("m11 l11");
        $("#isi").addClass("m10 l10");

        $("#li-side-navbar").removeClass("li-side-navbar-small");
        $("#li-side-navbar2").removeClass("li-side-navbar-small");
        $("#li-side-navbar3").removeClass("li-side-navbar-small");
        $("#li-side-navbar4").removeClass("li-side-navbar-small");

        $("#label-side-navbar").show();
        $("#label-side-navbar2").show();
        $("#label-side-navbar3").show();
        $("#label-side-navbar4").show();

        $("#link-side-navbar").css("padding-left","25px");
        $("#link-side-navbar2").css("padding-left","25px");
        $("#link-side-navbar3").css("padding-left","25px");
        $("#link-side-navbar4").css("padding-left","25px");
    });
  });
</script>