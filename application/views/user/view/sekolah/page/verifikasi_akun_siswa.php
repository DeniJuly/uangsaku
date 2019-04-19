	<div class="col s12 m10 l10" id="isi">
		<div class="col s12 m9 l9">
			<div class="input-field col s9 m9 l9">
	          <input placeholder="Cari Siswa" id="key" type="text" class="validate" autocomplete="off" autofocus="on">
	        </div>
	          <a class="waves-effect waves-light btn white btn-cari-siswa"><i class="material-icons blue-text">search</i></a>
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
			url : '<?php echo site_url('UANGSAKU_sekolah/get_data_verifikasi_siswa') ?>',
			type : 'post',
			dataType : 'json',
			success : function(data){
				var hasil = '';
				var no 	  = 0;
				for (var i = 0; i < data.length; i++) {
					no++;
					hasil +='<tr>'+
							'<td class="center">'+no+'</td>'+
							'<td>'+data[i].NISN+'</td>'+
							'<td>'+data[i].NAMA+'</td>'+
							'<td>'+data[i].KELAS+'</td>'+
							'<td class="center" id="OPSI">';
							if (data[i].STATUS_USER == 'offline') {
					hasil +='<a class="btn-floating btn-small waves-effect waves-light blue lighten-1" id="verifed" onclick="verifed('+data[i].ID_USER+')">'+
							'<img src="<?php echo base_url('assets/img/app/icon/verifed.png') ?>">'+
							'</a>';
							}else{
					hasil +='<a class="btn-floating btn-small waves-effect waves-light red" id="verifed" onclick="not_verifed('+data[i].ID_USER+')">'+
							'<img src="<?php echo base_url('assets/img/app/icon/not_verifed.png') ?>">'+
							'</a>';
							}
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
		window.verifed = function (id){
			$.ajax({
				url : '<?php echo site_url('UANGSAKU_sekolah/proses_verifikasi') ?>',
				type : 'post',
				data : {id:id},
				success : function(response){
					if (response == 1) {
						var flash  = '<div class="chip">akun berhasil diaktifkan';
	    					flash += '<i class="close material-icons">close</i>';
	  						flash += '</div>';
	  					$("#flash-siswa").html(flash);
					}else{
						var flash  = '<div class="chip">akun gagal diaktifkan';
	    					flash += '<i class="close material-icons">close</i>';
	  						flash += '</div>';
	  					$("#flash-siswa").html(flash);
					}
				}
			});
		}
		window.not_verifed = function(id){
			$.ajax({
				url : '<?php echo site_url('UANGSAKU_sekolah/proses_not_verifikasi') ?>',
				type : 'post',
				data : {id:id},
				success : function(response){
					if (response == 1) {
						var flash  = '<div class="chip">akun berhasil diaktifkan';
	    					flash += '<i class="close material-icons">close</i>';
	  						flash += '</div>';
	  					$("#flash-siswa").html(flash);
					}else{
						var flash  = '<div class="chip">akun gagal diaktifkan';
	    					flash += '<i class="close material-icons">close</i>';
	  						flash += '</div>';
	  					$("#flash-siswa").html(flash);
					}
				}
			});
		}
	});
</script>