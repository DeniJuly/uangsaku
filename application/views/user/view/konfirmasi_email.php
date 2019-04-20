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
      <script type="text/javascript" src="<?php echo base_url('assets/js/materialize_initialization.js') ?>"></script>

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
				<div class="col s10 m4 l4 offset-s1 offset-m4 offset-l4">
					<div class="card-panel card-konfirmasi-email">
						<div id="KONFIRMASI-EMAIL">
							<small class="red-text" id="flash">tolong isi formnya</small>
					        <p>kami telah mengirim kode verifikasi ke email <b id="AKUN-EMAIL"><?php echo $this->session->userdata('EMAIL') ?></b> <?php echo $this->session->userdata('KONFIRMASI_EMAIL') ?>
					        	<a class="modal-trigger" href="#ubah_email">ubah email</a>
					        </p>
					        <div class="input-field col s12">
					          <input placeholder="KODE VERFIKASI" id="VERIFIKASI_EMAIL_SEKOLAH" type="number" class="validate" required="on" autofocus="on">
					        </div>
					        <div class="input-field col s12 center">
					        	<button class="waves-effect waves-light btn yellow darken-3" id="BTN-KONFIRMASI" style="margin: auto;">KONFIRMASI</button>
					        	<button class="waves-effect waves-light btn" id="BTN-DISABLE" style="width: 152px!important;margin: auto; display: none;" disabled>
						          	<img src="<?php echo base_url('assets\img\app\icon/loading.gif') ?>">
						        </button>
					          	<button class="waves-effect waves-light btn blue lighten-1" id="btn-time" disabled style="width: 72px;">30</button>
					          	<button class="waves-effect waves-light btn blue lighten-1" id="btn-kode" style="display: none;margin:auto;margin-top: 5px;">KIRIM ULANG</button>
					          	<button class="waves-effect waves-light btn" id="BTN-DISABLE" style="width: 152px!important;margin: auto; display: none;" disabled>
					              <img src="<?php echo base_url('assets\img\app\icon/loading.gif') ?>">
					            </button>
					        </div>
				        </div>
				    </div>
				</div>
			</div>
		</div>
	</body>
</html>
<div id="ubah_email" class="modal">
    <div class="row">

        <div class="modal-content">
           	<h4 class="center">UBAH EMAIL</h4>
           	<div id="flash-email"></div>
            <!-- email -->
            <div class="input-field col s12 m12">
              <input placeholder="EMAIL" id="EMAIL-BARU" type="email" class="validate" name="EMAIL">
            </div>
            <button class="btn blue lighten-1 right" id="BTN-UBAH-EMAIL">
                <i class="material-icons">send</i>
            </button>
            <button class="waves-effect waves-light btn right" id="BTN-DISABLE2" disabled style="display: none;">
				<img src="<?php echo base_url('assets\img\app\icon/loading.gif') ?>">
			</button>

        </div>

    </div>
</div>
<script>
$(document).ready(function(){
	$("#BTN-KONFIRMASI").click(function(){
		$(this).hide();
		$("#BTN-DISABLE").css('display','block');
		var kode = $("#VERIFIKASI_EMAIL_SEKOLAH").val();
		if (kode == '') {
			$("#BTN-KONFIRMASI").show();
			$("#BTN-DISABLE").css('display','none');

			$("#flash").css('display','block');
			$("#flash").text('*tolong isikan kode verifikasi');
		}else{
			$.ajax({
				url  : '<?php echo site_url('UANGSAKU_email/proses_verifikasi_email') ?>',
				type : 'post',
				data : {kode:kode},
				success:function(response){
					if (response == 1) {
						location.href="<?php echo base_url() ?>";
					}else if(response == 2){
						$("#BTN-KONFIRMASI").show();
						$("#BTN-DISABLE").css('display','none');

						$("#flash").css('display','block');
						$("#flash").text('*kode verifikasi salah');
					}else if (response == 3) {
						$("#BTN-KONFIRMASI").show();
						$("#BTN-DISABLE").css('display','none');

						$("#flash").css('display','block');
						$("#flash").text('*gagal verifikasi email');
					}
				}
			});
		}
	});
});
</script>
<script type="text/javascript">
$(document).ready(function(){
	timer(30);
	function timer(seconds){
		var id;
		var det = seconds;
		id = setInterval(function(){
			if (det < 1) {
				clearInterval(id);
				$("#btn-time").hide();
				$("#btn-time").text('30');
				$("#btn-kode").css('display','block');
			}else{
				var detik = --det;
				$("#btn-time").text(detik);
			}
		},1000);
	}
	$("#btn-kode").click(function(){
		$(this).hide();
		$("#BTN-DISABLE").css('display','block');
		$.ajax({
			url : '<?php echo site_url('UANGSAKU_email/kirim_email') ?>',
			type : 'post',
			success : function(response){
				if (response == 1) {
					$("#BTN-DISABLE").css('display','none');
					$("#btn-time").show();
					$("#btn-kode").css('display','none');
					timer(30);
				}else if(response == 2){
					$("#flash").css('display','block');
					$("flash").text('gagal mengirim email');
				}
			}
		});
	});
});
</script>
<script>
$(document).ready(function(){
	$("#BTN-UBAH-EMAIL").click(function(){
		$(this).hide();
		$("#BTN-DISABLE2").css('display','block');
		var EMAIL = $("#EMAIL-BARU").val();
		if (EMAIL == '') {
			var flash = '';
			flash += '<div class="chip">tolong ketikan email anda<i class="close material-icons">close</i></div>';
			$("#flash-email").html(flash);
			$("#BTN-UBAH-EMAIL").show();
			$("#BTN-DISABLE2").css('display','none');
		}else{
			$.ajax({
				url: '<?php echo site_url('UANGSAKU_email/ubah_email') ?>',
				type : 'post',
				data : {EMAIL : EMAIL},
				success : function(response){
					if (response == 1) {
						var flash = '';
						flash += '<div class="chip">email anda berhasil diubah kami telah mengirim kode verifikasi baru<i class="close material-icons">close</i></div>';
						$("#flash-email").html(flash);
						$("#BTN-UBAH-EMAIL").show();
						$("#BTN-DISABLE2").css('display','none');
						$("#AKUN-EMAIL").text(EMAIL);
					}else if(response == 2){
						var flash = '';
						flash += '<div class="chip">email gagal diubah<i class="close material-icons">close</i></div>';
						$("#flash-email").html(flash);
						$("#BTN-UBAH-EMAIL").show();
						$("#BTN-DISABLE2").css('display','none');
					}else if(response == 3){
						var flash = '';
						flash += '<div class="chip">email sudah terdaftar<i class="close material-icons">close</i></div>';
						$("#flash-email").html(flash);
						$("#BTN-UBAH-EMAIL").show();
						$("#BTN-DISABLE2").css('display','none');
					}else{
						$("#BTN-UBAH-EMAIL").show();
						$("#BTN-DISABLE2").css('display','none');
					}
				}
			});
		}
	});
});
</script>