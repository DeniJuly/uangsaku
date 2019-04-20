<div class="col s12 m12 l12" id="isi-sub">
	<div class="container">
	<div class="row">
	<?php foreach ($data as $d) :?>
		<div class="col s12 m12 l12" id="BUNGKUS-TENTANG-PROFILE">
			<div class="card-panel" style="height: 340px;">
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
				            <th>NPSN</th>
				            <td><?php echo $d->NPSN ?></td>
				          </tr>
				          <tr>
				            <th>TINGKAT SEKOLAH</th>
				            <td><?php echo $d->TINGKAT_SEKOLAH ?></td>
				          </tr>
				          <tr>
				          	<th>ALAMAT</th>
				          	<td><input value="<?php echo $d->ALAMAT ?>" id="ALAMAT" type="text" class="validate"></td>
				          </tr>
				        </tbody>
				      </table>
				</div>
			</div>
		</div>

		<div class="col s12 m12 l12" id="BUNGKUS-TENTANG-PROFILE">
			<div class="card-panel" style="height: 150px;">
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
				            <th class="w-50deg">EMAIL</th>
				            <td><?php echo $d->EMAIL ?></td>
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
		var alamat    = $("#ALAMAT").val();
		$.ajax({
			url : '<?php echo site_url('UANGSAKU_Sekolah/proses_edit_profile') ?>',
			type : 'post',
			data : {alamat : alamat},
			success : function(response){
				if (response == 1) {
					location.href="<?php echo site_url('SEKOLAH/Tentang') ?>";
				}else if (response == 2) {
					var $toastContent = $('<span>gagal edit profile</span>');
  					Materialize.toast($toastContent, 5000);
				}
			}
		});
	});
});
</script>