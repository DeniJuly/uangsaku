<div class="container">
	<div class="row">
		<div class="col s10 m4 l4 offset-s1 offset-m4 offset-l4">
			<div class="col s6 offset-s3">
                <img src="<?= base_url('assets/img/app/logo/logo_120.png') ?>" id="LOGO-DAFTAR">
            </div>
			<div id="FORM-DAFTAR-SEKOLAH">
				<div class="input-field col s12">
				<small id="flash" class="red-text"></small>
		          <input placeholder="Nama" id="NAMA_SISWA" type="text" class="validate" autocomplete="off" autofocus="on">
		        </div>
		        <div class="input-field col s12">
		          <input placeholder="Email" id="EMAIL_SISWA" type="email" class="validate" autocomplete="off" autofocus="on">
		        </div>
		        <div class="input-field col s12">
		          <input placeholder="NISN" id="NISN" type="number" class="validate" autocomplete="off">
		        </div>
		        <div class="input-field col s12">
		          <input placeholder="Password" id="PASSWORD_SISWA" type="password" class="validate">
		        </div>
		        <div class="input-field col s12">
		          <input placeholder="Verifikasi Password" id="VERIFIKASI_PASSWORD_SISWA" type="password" class="validate">
		        </div>
		        <div class="input-field col s12">
		          <button class="waves-effect waves-light btn yellow darken-2" id="BTN-DAFTAR">Daftar</button>
		          <button class="waves-effect waves-light btn" id="BTN-DISABLE" disabled>
		          	<img src="<?php echo base_url('assets\img\app\icon/loading.gif') ?>">
		          </button>
		        </div>
	        </div>
		</div>
	</div>
</div>
<script>
$("#BTN-DAFTAR").click(function(){
	$(this).hide();
	$("#BTN-DISABLE").css('display','block');
	$("#flash").css('display','none');
	var nama   = $("#NAMA_SISWA").val();
	var email  = $("#EMAIL_SISWA").val();
	var nisn   = $("#NISN").val();
	var pass   = $("#PASSWORD_SISWA").val();
	var v_pass = $("#VERIFIKASI_PASSWORD_SISWA").val();

	if (nama == '' || email == '' || nisn == '' || pass == '' || v_pass == '') {
		$("#BTN-DISABLE").css('display','none');
		$("#BTN-DAFTAR").show();

		$("#flash").css('display','block');
		$("#flash").text("tolong isi semua form");
		$("#BTN-DAFTAR").attr('disabled');
	}else{
		$("#BTN-DAFTAR").attr('disabled');
			if (pass != v_pass) {
				$("#BTN-DISABLE").css('display','none');
				$("#BTN-DAFTAR").show();

				$("#flash").css('display','block');
				$("#flash").text("password tidak sama");
			}else{
				if (nisn.length < 10) {
					$("#BTN-DISABLE").css('display','none');
					$("#BTN-DAFTAR").show();

					$("#flash").css('display','block');
					$("#flash").text("tolong periksa lagi NISN Anda");
				}else{
					$.ajax({
						url  : '<?php echo site_url('UANGSAKU/proses_daftar_siswa') ?>',
						type : 'post',
						data : {nama:nama,email:email,nisn:nisn,pass:pass,v_pass:v_pass},
						success:function(response){
							if (response == 1) {

								$("#BTN-DISABLE").css('display','none');
								$("#BTN-DAFTAR").show();

								$("#flash").css('display','block');
								$("#flash").text('email sudah terdaftar');

							}else if(response == 2){

								$("#BTN-DISABLE").css('display','none');
								$("#BTN-DAFTAR").show();

								$("#flash").css('display','block');
								$("#flash").text('nisn anda belum didaftarkan oleh sekolah anda');

							}else if(response == 3 || response == 5){

								$("#BTN-DISABLE").css('display','none');
								$("#BTN-DAFTAR").show();
								
								$("#flash").css('display','block');
								$("#flash").text('gagal daftar');

							}else if(response == 4){
								location.href="<?= site_url('konfirmasi_email') ?>";
							}
						}
					});
				}
			}
		}
	});
</script>