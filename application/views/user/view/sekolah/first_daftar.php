<div class="container">
	<div class="row">
		<div class="col s10 m4 l4 offset-s1 offset-m4 offset-l4">
			<div class="col s6 offset-s3">
                <img src="<?= base_url('assets/img/app/logo/logo_120.png') ?>" id="LOGO-DAFTAR">
            </div>
			<div id="FORM-DAFTAR-SEKOLAH">
				<div class="input-field col s12">
		          <input placeholder="Nama Sekolah" id="NAMA_SEKOLAH" type="text" class="validate" autocomplete="off" autofocus="on" required>
		        </div>
		        <div class="input-field col s12">
		          <input placeholder="Email" id="EMAIL_SEKOLAH" type="email" class="validate" autocomplete="off" autofocus="on" required>
		          <label for="EMAIL_SEKOLAH" data-error="salah" data-success="right"></label>
		        </div>
		        <div class="input-field col s12">
		          <input placeholder="NPSN" id="NPSN" type="text" class="validate" autocomplete="off" required>
		        </div>
		        <div class="input-field col s12">
		          <input placeholder="Password" id="PASSWORD_SEKOLAH" type="password" class="validate" required>
		        </div>
		        <div class="input-field col s12">
		          <input placeholder="Verifikasi Password" id="VERIFIKASI_PASSWORD_SEKOLAH" type="password" class="validate" required>
		        </div>
		        <div class="input-field col s12">
		          <small id="flash" class="red-text"></small>
		          <button class="waves-effect waves-light btn yellow darken-2" id="BTN-DAFTAR">Daftar</button>
		        </div>
	        </div>
		</div>
	</div>
</div>
<script>
	$("#BTN-DAFTAR").click(function(){
		var nama   = $("#NAMA_SEKOLAH").val();
		var email  = $("#EMAIL_SEKOLAH").val();
		var npsn   = $("#NPSN").val();
		var pass   = $("#PASSWORD_SEKOLAH").val();
		var v_pass = $("#VERIFIKASI_PASSWORD_SEKOLAH").val();

		if (nama == '' || email == '' || npsn == '' || pass == '' || v_pass == '') {
			$("#flash").css('display','block');
			$("#flash").text("tolong isi semua form");
		}else{
			if (pass != v_pass) {
				$("#flash").css('display','block');
				$("#flash").text("password tidak sama");
			}else{
				if (npsn.length < 8) {
					$("#flash").css('display','block');
					$("#flash").text("panjang minimal npsn 10");
				}else{
					$.ajax({
						url  : '<?php echo site_url('UANGSAKU/proses_daftar_sekolah') ?>',
						type : 'post',
						data : {nama:nama,email:email,npsn:npsn,pass:pass,v_pass:v_pass},
						success:function(response){
							if (response == 1) {
								$("#flash").css('display','block');
								$("#flash").text('email sudah terdaftar');
							}else{
								$("#flash").css('display','block');
								$("#flash").text(response);
							}
						}
					});
				}
			}
		}
	});
</script>