<div class="container">
	<div class="row">
		<div class="col s10 m4 l4 offset-s1 offset-m4 offset-l4">
			<div class="col s6 offset-s3">
                <img src="<?= base_url('assets/img/app/logo/logo_120.png') ?>" id="LOGO-DAFTAR">
            </div>
			<div id="FORM-DAFTAR-SEKOLAH">
				<div class="input-field col s12">
				<small id="flash" class="red-text"></small>
		          <input placeholder="Nama" id="NAMA_ORANGTUA" type="text" class="validate" autocomplete="off" autofocus="on" name="nama" requiredS>
		        </div>
		        <div class="input-field col s12">
		          <input placeholder="Email" id="EMAIL_ORANGTUA" type="email" class="validate" autocomplete="off" autofocus="on" name="email" required>
		        </div>
		        <div class="input-field col s12">
		          <input placeholder="NIK" id="NIK" type="number" class="validate" autocomplete="off" name="nik">
		        </div>
		        <div class="input-field col s12">
		          <input placeholder="Password" id="PASSWORD_ORANGTUA" type="password" class="validate" name="password" required>
		        </div>
		        <div class="input-field col s12">
		          <input placeholder="Verifikasi Password" id="VERIFIKASI_PASSWORD_ORANGTUA" type="password" class="validate" required>
		        </div>
		        <div class="input-field col s12">
		          <button class="waves-effect waves-light btn yellow darken-2" id="BTN-DAFTAR">Daftar</button>
		          <button class="waves-effect waves-light btn" id="BTN-DISABLE" disabled style="width: 100%; border-radius: 25px;display: none;">
		          	<img src="<?php echo base_url('assets\img\app\icon/loading.gif') ?>">
		          </button>
		        </div>
	        </div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#BTN-DAFTAR').click(function(){
			$(this).hide();
			$("#BTN-DISABLE").css('display','block');
			$("#flash").css('display','none');
			var nama   = $("#NAMA_ORANGTUA").val();
			var email  = $("#EMAIL_ORANGTUA").val();
			var nik   = $("#NIK").val();
			var pass   = $("#PASSWORD_ORANGTUA").val();
			var v_pass = $("#VERIFIKASI_PASSWORD_ORANGTUA").val();

			if (nama == '' || email == '' || nik == '' || pass == '' || v_pass == '') {
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
				if (nik.length < 16) {
					$("#BTN-DISABLE").css('display','none');
					$("#BTN-DAFTAR").show();

					$("#flash").css('display','block');
					$("#flash").text("tolong periksa lagi NIK Anda");
				}else{
					$.ajax({
						url  : '<?php echo site_url('UANGSAKU/proses_daftar_orangtua') ?>',
						type : 'post',
						data : {nama:nama,email:email,nik:nik,pass:pass,v_pass:v_pass},
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
								$("#flash").text('nik sudah terdaftar');

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
	});
	
</script>