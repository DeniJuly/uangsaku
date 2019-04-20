<div class="container">
	<div class="row">
		<div class="col s10 m4 l4 offset-s1 offset-m4 offset-l4">
			<div class="col s6 offset-s3">
                <img src="<?= base_url('assets/img/app/logo/logo_120.png') ?>" id="LOGO-DAFTAR">
                
            </div>
			<div id="FORM-DAFTAR-SEKOLAH">
				<div class="input-field col s12">
				<small id="flash" class="red-text"></small>
		          <input placeholder="Nama" id="NAMA" type="text" class="validate" autocomplete="off" autofocus="on" name="nama">
		        </div>
		        <div class="input-field col s12">
		          <input placeholder="Email" id="EMAIL_MITRA" type="email" class="validate" autocomplete="off" autofocus="on" name="email">
		        </div>
		        <div class="input-field col s12">
		          <input placeholder="Password" id="PASSWORD_MITRA" type="password" class="validate" name="password">
		        </div>
		        <div class="input-field col s12">
		          <input placeholder="Verifikasi Password" id="VERIFIKASI_PASSWORD_MITRA" type="password" class="validate">
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
			var nama   = $("#NAMA").val();
			var email  = $("#EMAIL_MITRA").val();
			var pass   = $("#PASSWORD_MITRA").val();
			var v_pass = $("#VERIFIKASI_PASSWORD_MITRA").val();

			if (nama == '' || email == '' || pass == '' || v_pass == '') {
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
				$.ajax({
					url  : '<?php echo site_url('UANGSAKU/proses_daftar_mitra') ?>',
					type : 'post',
					data : {nama:nama,email:email,pass:pass,v_pass:v_pass},
					success:function(response){
						if (response == 1) {

							$("#BTN-DISABLE").css('display','none');
							$("#BTN-DAFTAR").show();

							$("#flash").css('display','block');
							$("#flash").text('email atau nama sudah terdaftar');

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
		         
		});
	});
	
</script>