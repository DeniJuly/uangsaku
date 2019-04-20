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
				        <tbody>
				          <tr>
				            <th>NAMA</th>
				            <td><?php echo $d->NAMA ?></td>
				          </tr>
				          <tr>
				            <th>NISN</th>
				            <td><?php echo $d->NISN ?></td>
				          </tr>
				          <tr>
				            <th>TANGGAL LAHIR</th>
				            <td><input value="<?php echo $d->TANGGAL_LAHIR ?>" id="TANGGAL-LAHIR" type="date" class="validate"></td>
				          </tr>
				          <tr>
				            <th>JENIS KELAMIN</th>
				            <td><?php if ($d->JENIS_KELAMIN == 'L') {
				            	echo 'LAKI-LAKI';
				            	}else{
				            		echo 'PEREMPUAN';
				            	} ?></td>
				          </tr>
				          <tr>
				          	<th>ALAMAT</th>
				          	<td><input value="<?php echo $d->ALAMAT ?>" id="ALAMAT" type="text" class="validate"></td>
				          </tr>
				          <tr>
				          	<th>KELAS</th>
				          	<td><?php echo $d->KELAS ?></td>
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
				        <tbody>
				          <tr>
				            <th>EMAIL</th>
				            <td><?php echo $d->EMAIL ?></td>
				          </tr>
				          <tr>
				            <th>NO TELEPON</th>
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
				        <tbody>
				          <tr>
				            <th>NIK</th>
				            <td><input value="<?php echo $d->NIK ?>" id="NIK" type="number" class="validate"></td>
				          </tr>
				          <tr>
				            <th>NIK ORANG TUA</th>
				            <td><?php if ($d->NIK_ORANG_TUA == null) {
				            	echo'-';
				            }else{
				            	echo $d->NIK_ORANG_TUA;
				            } ?></td>
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
			url : '<?php echo site_url('UANGSAKU_Siswa/proses_edit_profile') ?>',
			type : 'post',
			data : {tgl_lahir : tgl_lahir,alamat : alamat, no_telp : no_telp, nik: nik},
			success : function(response){
				if (response == 1) {
					location.href="<?php echo site_url('SISWA/Tentang') ?>";
				}else if (response == 2) {
					var $toastContent = $('<span>gagal edit profile</span>');
  					Materialize.toast($toastContent, 5000);
				}
			}
		});
	});
});
</script>