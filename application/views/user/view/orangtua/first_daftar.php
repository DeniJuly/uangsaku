<div class="container">
	<div class="row">
		<div class="col s10 m4 l4 offset-s1 offset-m4 offset-l4">
			<div class="col s6 offset-s3">
                <img src="<?= base_url('assets/img/app/logo/logo_120.png') ?>" id="LOGO-DAFTAR">
            </div>
			<form id="FORM-DAFTAR-SEKOLAH">
				<div class="input-field col s12">
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
		        </div>
	        </form>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#FORM-DAFTAR-SEKOLAH').submit(function(e){
		    e.preventDefault();
		         $.ajax({
		             url:'<?php echo base_url();?>index.php/UANGSAKU/proses_daftar_orangtua',
		             type:"post",
		             data:new FormData(this),
		             processData:false,
		             contentType:false,
		             cache:false,
		             async:false,
		              success: function(data){
		              	if (data='berhasil') {
		              		location.href = 'konfirmasi_email_orangtua';
		              	}else{
		              		print('gagal');
		              	}
		           }
		         });
		    });
	});
	
</script>