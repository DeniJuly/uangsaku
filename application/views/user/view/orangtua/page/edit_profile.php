<div class="col s12 m12 l12" id="isi-sub">
	<div class="container">
	<div class="row">
	<?php foreach ($data as $d) :?>
		<div class="col s12 m12 l12" id="BUNGKUS-TENTANG-PROFILE">
			<div class="card-panel" id="CARD-EDIT-PROFILE-INFO">
				<div class="col s12 m12 l12" id="JUDUL-TENTANG-PROFILE">
					<div class="col s2 m2 l1 center" id="ICON-MENU-PROFILE">
						<img src="<?= base_url('assets/img/app/icon/info_umum.png') ?>">
					</div>
					<div class="col s8 m8 l9" id="JUDUL-MENU-PROFILE">
						<h6>INFO UMUM</h6>
					</div>
				</div>
				<div class="col s12 m12 l12">
					<table>
				        <tbody id="INFO_UMUM">
				          <tr>
				            <th class="w-50deg">NAMA</th>
				            <td><?php echo $d->NAMA ?></td>
				          </tr>
				          <tr>
				            <th class="w-50deg">NISN ANAK</th>
				            <td><?php 
				            	if ($d->NISN == null) {
				            		echo '-';
				            	}else{ 
				            		echo $d->NISN;
				            	}; 
				            ?></td>
				          </tr>
				          <tr>
				            <th class="w-50deg">TANGGAL LAHIR</th>
				            <td><input value="<?php echo $d->TANGGAL_LAHIR ?>" id="TANGGAL-LAHIR" type="date" class="validate"></td>
				          </tr>
				          <tr>
				            <th class="w-50deg">JENIS KELAMIN</th>
				            <td>
				            	<div class="input-field col s12">
								    <select id="JENIS_KELAMIN">
								      <option value="" disabled <?php if ($d->JENIS_KELAMIN == null){echo 'selected';}?>>JENIS KELAMIN</option>
								      <option value="L" <?php if ($d->JENIS_KELAMIN == 'L'){echo 'selected';}?> >LAKI-LAKI</option>
								      <option value="P" <?php if ($d->JENIS_KELAMIN == 'P'){echo 'selected';}?>>PEREMPUAN</option>
								    </select>
								</div>
				            </td>
				          </tr>
				          <tr>
				          	<th class="w-50deg">ALAMAT</th>
				          	<td><input value="<?php echo $d->ALAMAT ?>" id="ALAMAT" type="text" class="validate"></td>
				          </tr>
				        </tbody>
				      </table>
				</div>
			</div>
		</div>

		<div class="col s12 m12 l12" id="BUNGKUS-TENTANG-PROFILE">
			<div class="card-panel" id="CARD-EDIT-PROFILE-KONTAK">
				<div class="col s12 m12 l12" id="JUDUL-TENTANG-PROFILE">
					<div class="col s2 m2 l1 center" id="ICON-MENU-PROFILE">
						<img src="<?= base_url('assets/img/app/icon/contact.png') ?>">
					</div>
					<div class="col s8 m8 l9" id="JUDUL-MENU-PROFILE">
						<h6>KONTAK</h6>
					</div>
				</div>
				<div class="col s12 m12 l12">
					<table>
				        <tbody id="KONTAK">
				          <tr>
				            <th class="w-50deg">EMAIL</th>
				            <td><?php echo $d->EMAIL ?></td>
				          </tr>
				          <tr>
				            <th class="w-50deg">NO TELEPON</th>
				            <td><input value="<?php echo $d->NO_TELP ?>" id="NO-TELP" type="number" class="validate"></td>
				          </tr>
				        </tbody>
				      </table>
				</div>
			</div>
		</div>

		<div class="col s12 m12 l12" id="BUNGKUS-TENTANG-PROFILE">
			<div class="card-panel" id="CARD-EDIT-PROFILE-PRIVASI">
				<div class="col s12 m12 l12" id="JUDUL-TENTANG-PROFILE">
					<div class="col s2 m2 l1 center" id="ICON-MENU-PROFILE">
						<img src="<?= base_url('assets/img/app/icon/privasi.png') ?>">
					</div>
					<div class="col s8 m8 l9" id="JUDUL-MENU-PROFILE">
						<h6>PRIVASI</h6>
						<small class="red-text" id="flash-privasi"></small>
					</div>
				</div>
				<div class="col s12 m12 l12">
					<table>
				        <tbody id="PRIVASI">
				          <tr>
				            <th class="w-50deg">NIK</th>
				            <td><input value="<?php echo $d->NIK_ORANG_TUA ?>" id="NIK" type="number" class="validate"></td>
				          </tr>
				        </tbody>
				      </table>
				</div>
			</div>
		</div>
	<?php endforeach ?>

	</div>
	</div>
</div>
<div class="fixed-action-btn">
    <a class="btn-floating blue lighten-1" id="BTN-EDIT-PROFILE">
      <i class="large material-icons">save</i>
    </a>
</div>
<script>
$(document).ready(function(){
	$("#BTN-EDIT-PROFILE").click(function(){
		var tgl_lahir = $("#TANGGAL-LAHIR").val();
		var alamat    = $("#ALAMAT").val();
		var no_telp   = $("#NO-TELP").val();
		var nik       = $("#NIK").val();
		var jenis_kelamin= $("#JENIS_KELAMIN").val();
		if (no_telp != '') {
			if (no_telp.length < 12) {
				$("#NO-TELP").focus();
				var $toastContent = $('<span>Periksa lagi Nomor telepon anda</span>');
	  			Materialize.toast($toastContent, 5000);
	  		}
		}
		if (nik != '') {
			if (nik.length < 16) {
				$("#NIK").focus();
				var $toastContent = $('<span>Periksa lagi NISN anda</span>');
	  			Materialize.toast($toastContent, 5000);
	  		}
	  	}
		$.ajax({
			url : '<?php echo site_url('UANGSAKU_orangtua/proses_edit_profile') ?>',
			type : 'post',
			data : {tgl_lahir : tgl_lahir,jenis_kelamin:jenis_kelamin,alamat : alamat, no_telp : no_telp, nik: nik},
			success : function(response){
				if (response == 1) {
					location.href="<?php echo site_url('ORANGTUA/Tentang') ?>";
				}else if (response == 2) {
					var $toastContent = $('<span>gagal edit profile</span>');
  					Materialize.toast($toastContent, 5000);
				}
			}
		});
	});
});
</script>
<script>
$(document).ready(function() {
    $('select').material_select();
  });
</script>