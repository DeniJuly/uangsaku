	<div class="col s12 m10 l10" id="isi">
		<div class="col s3 m1 l1" id="tambah-siswa">
			<a class="waves-effect waves-light btn modal-trigger white" href="<?php echo site_url('UANGSAKU_sekolah/Tambah_data_siswa') ?>"><i class="material-icons blue-text">add</i></a>
		</div>
		<div class="col s12 m9 l9">
			<div class="input-field col s9 m9 l9">
	          <input placeholder="Cari Siswa" id="key" type="text" class="validate" autocomplete="off" autofocus="on">
	        </div>
	          <a class="waves-effect waves-light btn white btn-cari-siswa" id="BTN-CARI-SISWA"><i class="material-icons blue-text">search</i></a>
		</div>
		<div class="col s12 m12 l12">
			<div class="col s12 m12 l12">
				<h5 class="left">Data Siswa</h5> 
				<div class="chip" style="margin-left: 10px;margin-top: 5px;" id="JML-DATA-SISWA"></div>
				<div id="flash-siswa" class="right" style="width: max-content"></div>
			</div>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th class="center">NO</th>
						<th>NIS</th>
						<th>NAMA</th>
						<th>KELAS</th>
						<th class="center">OPSI</th>
					</tr>
				</thead>
				<tbody id="DATA-SISWA">
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		$.ajax({
			url : '<?php echo site_url('UANGSAKU_sekolah/get_data_siswa') ?>',
			type : 'post',
			dataType : 'json',
			success : function(data){
				var hasil = '';
				var no 	  = 0;
				var base = '<?php echo site_url('UANGSAKU_sekolah/Edit_siswa/') ?>';
				for (var i = 0; i < data.length; i++) {
					no++;
					hasil +='<tr>'+
							'<td class="center">'+no+'</td>'+
							'<td>'+data[i].NISN+'</td>'+
							'<td>'+data[i].NAMA+'</td>'+
							'<td>'+data[i].KELAS+'</td>'+
							'<td class="center" id="OPSI">'+
							'<a class="btn-floating btn-small waves-effect waves-light blue lighten-1" href="'+base+data[i].ID_SISWA+'">'+
							'<i class="material-icons">create</i>'+
							'</a>'+
							'<a class="btn-floating btn-small waves-effect waves-light red" onclick="hapus_data('+data[i].ID_SISWA+')">'+
							'<i class="material-icons">delete</i>'+
							'</a>'+
							'</td>'+
							'</tr>';
				}
				$("#JML-DATA-SISWA").text(data.length);
				$("#DATA-SISWA").html(hasil);
			}
		});
	});
</script>
<script>
$(document).ready(function(){
	window.hapus_data = function(id){
		$.ajax({
			url : '<?php echo site_url('UANGSAKU_sekolah/hapus_data_siswa') ?>',
			data : {id:id},
			type : 'post',
			success : function(respone){
				if (respone == 1) {
					var flash  = '<div class="chip">data berhasil dihapus';
    					flash += '<i class="close material-icons">close</i>';
  						flash += '</div>';
  					$("#flash-siswa").html(flash);
				}else{
					var flash  = '<div class="chip">data gagal dihapus';
    					flash += '<i class="close material-icons">close</i>';
  						flash += '</div>';
  					$("#flash-siswa").html(flash);
				}
			}
		});
	}
});
</script>
<script>
$(document).ready(function(){
	$("#BTN-CARI-SISWA").click(function(){
		var key = $("#key").val();
		if (key != '') {
			$.ajax({
				url : '<?php echo site_url('UANGSAKU_sekolah/cari_siswa') ?>',
				type : 'post',
				data : {key : key},
				dataType : 'json',
				success : function(data){
					var hasil = '';
					var no 	  = 0;
					var base = '<?php echo site_url('UANGSAKU_sekolah/Edit_siswa/') ?>';
					for (var i = 0; i < data.length; i++) {
						no++;
						hasil +='<tr>'+
								'<td class="center">'+no+'</td>'+
								'<td>'+data[i].NISN+'</td>'+
								'<td>'+data[i].NAMA+'</td>'+
								'<td>'+data[i].KELAS+'</td>'+
								'<td class="center" id="OPSI">'+
								'<a class="btn-floating btn-small waves-effect waves-light blue lighten-1" href="'+base+data[i].ID_SISWA+'">'+
								'<i class="material-icons">create</i>'+
								'</a>'+
								'<a class="btn-floating btn-small waves-effect waves-light red" onclick="hapus_data('+data[i].ID_SISWA+')">'+
								'<i class="material-icons">delete</i>'+
								'</a>'+
								'</td>'+
								'</tr>';
					}
					$("#JML-DATA-SISWA").text(data.length);
					$("#DATA-SISWA").html(hasil);
				}
			});
		}
	});
});
</script>