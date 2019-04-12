<div class="container">
	<div class="row">
		<div class="col s10 m4 l4 offset-s1 offset-m4 offset-l4">
			<div class="col s6 offset-s3">
                <img src="<?= base_url('assets/img/app/logo/logo_120.png') ?>" id="LOGO-DAFTAR">
            </div>
			<div id="FORM-DAFTAR-SEKOLAH">
				<div class="input-field col s12">
		          <input placeholder="Nama" id="NAMA_ORANGTUA" type="text" class="validate" autocomplete="off" autofocus="on">
		        </div>
		        <div class="input-field col s12">
		          <input placeholder="Email" id="EMAIL_ORANGTUA" type="email" class="validate" autocomplete="off" autofocus="on">
		        </div>
		        <div class="input-field col s12">
		          <input placeholder="NIK" id="NIK" type="number" class="validate" autocomplete="off">
		        </div>
		        <div class="input-field col s12">
		          <input placeholder="Password" id="PASSWORD_ORANGTUA" type="password" class="validate">
		        </div>
		        <div class="input-field col s12">
		          <input placeholder="Verifikasi Password" id="VERIFIKASI_PASSWORD_ORANGTUA" type="password" class="validate">
		        </div>
		        <div class="input-field col s12">
		          <button class="waves-effect waves-light btn yellow darken-2" id="BTN-DAFTAR">Daftar</button>
		        </div>
	        </div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$("#BTN-DAFTAR")click(function() {
		var nama = $("#NAMA_ORANGTUA").val();
		var email = $("#EMAIL_ORANGTUA").val();
		var nik = $("#NIK").val();
		var password = $("#PASSWORD_ORANGTUA").val();
		var vrf_pass = $("#VERIFIKASI_PASSWORD_ORANGTUA").val();

		if (password != vrf_pass) {
			$("#flash").css('display','block');
			$("#flash").text("PASSWORD TIDAK SAMA");
		}else{
			if (nik < 16) {
				$("#flash").css('display','block');
				$("#flash").text("NIK ANDA SALAH");
			}else{
				$.ajax({
						url  : '<?php echo site_url('UANGSAKU/proses_daftar_orangtua') ?>',
						type : 'post',
						data : {nama:nama,email:email,nik:nik,password:password,vrf_pass:vrf_pass},
						success:function(data){
							console.log(data);
						}
				});
			}
		}
	});
</script>