<!DOCTYPE html>
  <html>
    <head>

      <link href="<?php echo base_url('assets/css/icon.css')  ?> " rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/materialize.min.css') ?>"  media="screen,projection"/>
      <!-- <link rel="stylesheet" href="<?php echo base_url('assets/css/style_uangsaku_sekolah.css') ?>"> -->
      <link rel="stylesheet" href="<?php echo base_url('assets/css/style_all.css') ?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/css/style_all_ui_user.css') ?>">
      <link rel="shortcut icon" href="<?php echo base_url('assets/img/app/logo/logo_32.png') ?>">

      <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
      <script type="text/javascript" src="<?php echo base_url('assets/js/materialize.min.js') ?>"></script>
      <script type="text/javascript" src="<?php echo base_url('assets/js/materialize_initialization.js') ?>"></script>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title><?php echo $judul; ?></title>
    </head>

    <body>

    <nav class="white" id="nav-navbar">
        <div class="nav-wrapper">
          <a href="#" data-activates="mobile-demo" class="grey-text button-collapse"><i class="material-icons">menu</i></a>
          <a class="big-side-nav left hide-on-med-and-down grey-text circle" id="btn-big-side-nav-small"><i class="center material-icons">menu</i></a>
          <a class="big-side-nav left hide-on-med-and-down grey-text circle" id="btn-big-side-nav-big"><i class="center material-icons">menu</i></a>
          <a href="#" class="brand-logo navbar-logo hide-on-med-and-down">
            <img src="<?php echo base_url('assets/img/app/logo/logo_64.png') ?>" class="responsive-img">
          </a>

          <ul class="right" id="ul-navbar">
            <li>
              <a href="<?php echo site_url('ORANGTUA/Profile') ?>">
                <img class="circle" id="FOTO-PROFILE-HEADER">
              </a>
            </li>
          </ul>

          <ul id="mobile-demo" class="side-nav">
            <li class="judul">
              <p class="blue-text">UANGSAKU</p>
            </li>
            <li>
              <a href="<?php echo site_url('ORANGTUA') ?>">
              <img src="<?php echo base_url('assets/img/app/icon/beranda.png') ?>" class="icon-navbar responsive-img left">BERANDA</a>
            </li>
            <li>
              <a href="<?php echo site_url('ORANGTUA/Profile') ?>">
              <img src="<?php echo base_url('assets/img/app/icon/profile.png') ?>" class="icon-navbar responsive-img left">PROFILE</a>
            </li>
            <li>
              <a href="<?php echo site_url('ORANGTUA/Anak') ?>">
              <img src="<?php echo base_url('assets/img/app/icon/anak.png') ?>" class="icon-navbar responsive-img left">ANAK</a>
            </li>
            <li>
              <a href="<?php echo site_url('ORANGTUA/Beli') ?>">
              <img src="<?php echo base_url('assets/img/app/icon/beli.png') ?>" class="icon-navbar responsive-img left">BELI</a>
            </li>
            <li>
              <a href="<?php echo site_url('ORANGTUA/Riwayat') ?>">
                <img src="<?php echo base_url('assets/img/app/icon/Riwayat.png') ?>" class="icon-navbar responsive-img left">RIWAYAT</a>
            </li>
            <li>
              <a href="<?php echo site_url('UANGSAKU_orangtua/keluar') ?>">
                <img src="<?php echo base_url('assets/img/app/icon/logout.png') ?>" class="icon-navbar responsive-img left">KELUAR</a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="row" style="height: 89.5%">
        <div class="hide-on-med-and-down col m2 l2" id="side-navbar">
          <ul id="ul-side-navbar">

            <li id="li-side-navbar">
              <a href="<?php echo site_url('ORANGTUA') ?>" id="link-side-navbar" class="<?php if ($this->uri->segment(2)=='') {
                echo"active-side-navbar";
              } ?>">
                <img src="<?php echo base_url('assets/img/app/icon/beranda.png') ?>" class="responsive-img icon-side-navbar">
                <label id="label-side-navbar">BERANDA</label>
              </a>
            </li>

            <li id="li-side-navbar2">
              <a href="<?php echo site_url('ORANGTUA/Profile') ?>" id="link-side-navbar2" class="<?php if ($this->uri->segment(2)=='Profile') {
                echo"active-side-navbar";
              } ?>">
                <img src="<?php echo base_url('assets/img/app/icon/profile.png') ?>" class="responsive-img icon-side-navbar">
                <label id="label-side-navbar2">PROFILE</label>
              </a>
            </li>

            <li id="li-side-navbar3">
              <a href="<?php echo site_url('ORANGTUA/Anak') ?>" id="link-side-navbar3" class="<?php if ($this->uri->segment(2)=='Anak') {
                echo"active-side-navbar";
              } ?>">
                <img src="<?php echo base_url('assets/img/app/icon/anak.png') ?>" class="responsive-img icon-side-navbar">
                <label id="label-side-navbar3">ANAK</label>
              </a>
            </li>

            <li id="li-side-navbar4">
              <a href="<?php echo site_url('ORANGTUA/Beli') ?>" id="link-side-navbar4" class="<?php if ($this->uri->segment(2)=='Beli') {
                echo"active-side-navbar";
              } ?>">
                <img src="<?php echo base_url('assets/img/app/icon/beli.png') ?>" class="responsive-img icon-side-navbar">
                <label id="label-side-navbar4">BELI</label>
              </a>
            </li>

            <li id="li-side-navbar5">
              <a href="<?php echo site_url('ORANGTUA/Riwayat') ?>" id="link-side-navbar5" class="<?php if ($this->uri->segment(2)=='Riwayat') {
                echo"active-side-navbar";
              } ?>">
                <img src="<?php echo base_url('assets/img/app/icon/riwayat.png') ?>" class="responsive-img icon-side-navbar">
                <label id="label-side-navbar5">RIWAYAT</label>
              </a>
            </li>

            <li id="li-side-navbar6">
              <a href="<?php echo site_url('UANGSAKU_orangtua/keluar') ?>" id="link-side-navbar6" class="<?php if ($this->uri->segment(2)=='Keluar') {
                echo"active-side-navbar";
              } ?>">
                <img src="<?php echo base_url('assets/img/app/icon/logout.png') ?>" class="responsive-img icon-side-navbar">
                <label id="label-side-navbar6">KELUAR</label>
              </a>
            </li>

          </ul>
        </div>
<script>
  $(document).ready(function(){
    $.ajax({
      url : '<?php echo base_url();?>index.php/UANGSAKU_orangtua/get_data',
      type : "post",
      dataType : 'json',
      success : function (data){
        
      
      }
    });

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
        $("#li-side-navbar5").addClass("li-side-navbar-small");

        $("#label-side-navbar").hide();
        $("#label-side-navbar2").hide();
        $("#label-side-navbar3").hide();
        $("#label-side-navbar4").hide();
        $("#label-side-navbar5").hide();

        $("#link-side-navbar").css("padding-left","0");
        $("#link-side-navbar2").css("padding-left","0");
        $("#link-side-navbar3").css("padding-left","0");
        $("#link-side-navbar4").css("padding-left","0");
        $("#link-side-navbar5").css("padding-left","0");
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
        $("#li-side-navbar5").removeClass("li-side-navbar-small");

        $("#label-side-navbar").show();
        $("#label-side-navbar2").show();
        $("#label-side-navbar3").show();
        $("#label-side-navbar4").show();
        $("#label-side-navbar5").show();

        $("#link-side-navbar").css("padding-left","25px");
        $("#link-side-navbar2").css("padding-left","25px");
        $("#link-side-navbar3").css("padding-left","25px");
        $("#link-side-navbar4").css("padding-left","25px");
        $("#link-side-navbar5").css("padding-left","25px");
    });
  });
</script>