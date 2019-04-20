<div class="col s12 m12 l12" id="isi-sub">
	<div class="container">
	<div class="row">

	<div class="col s12 m12 l12">
		<div class="col s12 m12 l12" style="margin-top: 30px;">

			<?php foreach ($data_jenis_pembiayaan as $j ):?>
			<a href="<?php echo site_url('SEKOLAH/edit_pembiayaan?id='.$j->ID_JENIS_PEMBIAYAAN) ?>" class="waves-effect waves-light btn white btn-cari-siswa">
				<i class="material-icons blue-text">create</i>
			</a>
			<a id="BTN_HAPUS_PEMBIAYAAN" class="waves-effect waves-light btn white btn-cari-siswa">
				<i class="material-icons red-text">delete</i>
			</a>
			<?php if ($j->STATUS_PEMBIAYAAN == 'online') :?>
			<a class="waves-effect waves-light btn white red-text btn-cari-siswa" id="BTN-NONAKTIFKAN" style="width: 145px;">NONAKTIFKAN</a>
			<?php else: ?>
			<a class="waves-effect waves-light btn white blue-text btn-cari-siswa" id="BTN-AKTIFKAN" style="width: 145px;">AKTIFKAN</a>
			<?php endif ?>
			<small id="flash"></small>
			<div class="col s12 m12 l12" style="margin-top: 30px;">
				<h5 class="left"><?php echo $j->NAMA_PEMBIAYAAN ?></h5> 
				<div class="chip" style="margin-left: 10px;margin-top: 5px;" id="JML-JENIS-PEMBIAYAAN"><?php if ($jml == null) {
					echo '0 siswa';
				}else{ echo $jml.' siswa'; }?></div>
				<?php foreach ($pendapatan as $pen):?>
				<div class="chip">Rp <?php echo number_format($pen->TOTAL_TERBAYAR) ?></div>
				<?php endforeach ?>
			</div>
			<?php endforeach ?>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th class="center">NO</th>
						<th>NISN</th>
						<th>NAMA</th>
						<th>KELAS</th>
						<th>TERBAYAR</th>
					</tr>
				</thead>
				<tbody id="DATA-PEMBIAYAAN">
					<?php $no = 0;
					foreach ($data as $d ):
						$no++?>
					<input id="id_jenis_pembiayaan" type="hidden" value="<?php echo $d->ID_JENIS_PEMBIAYAAN ?>">
					<tr>
						<td class="center"><?php echo $no ?></td>
						<td><?php echo $d->NISN ?></td>
						<td><?php echo $d->NAMA_SISWA ?></td>
						<td><?php echo $d->KELAS_SISWA ?></td>
						<td><?php echo number_format($d->TOTAL_TERBAYAR) ?></td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>

	</div>
	</div>
</div>
<script>
$(document).ready(function(){
	$("#BTN_CARI").click(function(){

		var id = $("#id_jenis_pembiayaan").val();
		var key = $("#key").val();
		if (key != '') {
			$(this).hide();
			$("#BTN-DISABLE").css('display','block');

			$.ajax({
				url: '<?php echo site_url('UANGSAKU_sekolah/cari_pembiayaan') ?>',
				data : {key : key,id:id},
				dataType : 'json',
				type : 'post',
				success : function(data){
					$("#BTN_CARI").show();
					$("#BTN-DISABLE").css('display','none');
					if (data.length != 0) {
						var pembiayaan = '';
						var no = 0;
						for (var i = 0; i < data.length; i++) {
							no++;
							pembiayaan +='<tr>'+
										 '<td class="center">'+no+'</td>'+
										 '<td>'+data[i].NISN+'</td>'+
										 '<td>'+data[i].NAMA_SISWA+'</td>'+
										 '<td>'+data[i].KELAS_SISWA+'</td>'+
										 '<td>'+data[i].TOTAL_TERBAYAR+'</td>'+
										 '</tr>';
						}
						$("#DATA-PEMBIAYAAN").html(pembiayaan);
					}
				}
			});
		}
	});
});
</script>
<script>
$(document).ready(function(){
	$("#BTN_HAPUS_PEMBIAYAAN").click(function(){
		var id = '<?php echo $this->input->get('id') ?>';
		if (id!='') {
			$.ajax({
				url : '<?php echo site_url('UANGSAKU_sekolah/hapus_pembiayaan') ?>',
				type : 'post',
				data : {id:id},
				success : function(response){
					if (response == 1) {
						location.href='<?php echo site_url('SEKOLAH/Pembayaran') ?>';
					}else if (response == 2) {
						$("#flash").text('gagal hapus pembiayaan');
					}
				}
			});
		}
	});
});
</script>
<script>
$(document).ready(function(){
	$("#BTN-AKTIFKAN").click(function(){
		var id = '<?php echo $this->input->get('id') ?>';
		if (id != '') {
			$.ajax({
				url : '<?php echo site_url('UANGSAKU_sekolah/aktifkan_pembiayaan') ?>',
				type : 'post',
				data : {id:id},
				success : function(response){
					if (response == 1) {
						location.reload(true);
					}else if (response == 2) {}{
						$("#flash").text('gagal aktifkan pembiayaan');
					}
				}
			});
		}
	});
});
</script>
<script>
$(document).ready(function(){
	$("#BTN-NONAKTIFKAN").click(function(){
		var id = '<?php echo $this->input->get('id') ?>';
		if (id != '') {
			$.ajax({
				url : '<?php echo site_url('UANGSAKU_sekolah/nonaktifkan_pembiayaan') ?>',
				type : 'post',
				data : {id:id},
				success : function(response){
					if (response == 1) {
						location.reload(true);
					}else if (response == 2) {}{
						$("#flash").text('gagal nonaktifkan pembiayaan');
					}
				}
			});
		}
	});
});
</script>