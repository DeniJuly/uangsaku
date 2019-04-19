<div class="col s12 m12 l12" id="isi-sub">
	<div class="container">
	<div class="row">

		<div class="col s12 m12 l12" id="BUNGKUS-TENTANG-PROFILE">
			<div class="card-panel" id="CARD-TENTANG-PROFILE-INFO">
				<div class="col s12 m12 l12" id="JUDUL-TENTANG-PROFILE">
					<div class="col s3 m2 l1 center" id="ICON-MENU-PROFILE">
						<img src="<?= base_url('assets/img/app/icon/info_umum.png') ?>">
					</div>
					<div class="col s9 m10 l11" id="JUDUL-MENU-PROFILE">
						<h6>INFO UMUM</h6>
					</div>
				</div>
				<div class="col s12 m12 l12">
					<table>
				        <tbody id="INFO_UMUM">
				        </tbody>
				      </table>
				</div>
			</div>
		</div>

		<div class="col s12 m12 l12" id="BUNGKUS-TENTANG-PROFILE">
			<div class="card-panel" id="CARD-TENTANG-PROFILE-KONTAK">
				<div class="col s12 m12 l12" id="JUDUL-TENTANG-PROFILE">
					<div class="col s3 m2 l1 center" id="ICON-MENU-PROFILE">
						<img src="<?= base_url('assets/img/app/icon/contact.png') ?>">
					</div>
					<div class="col s8 m8 l9" id="JUDUL-MENU-PROFILE">
						<h6>KONTAK</h6>
					</div>
				</div>
				<div class="col s12 m12 l12">
					<table>
				        <tbody id="KONTAK">
				        </tbody>
				      </table>
				</div>
			</div>
		</div>

		<div class="col s12 m12 l12" id="BUNGKUS-TENTANG-PROFILE">
			<div class="card-panel" id="CARD-TENTANG-PROFILE-PRIVASI">
				<div class="col s12 m12 l12" id="JUDUL-TENTANG-PROFILE">
					<div class="col s3 m2 l1 center" id="ICON-MENU-PROFILE">
						<img src="<?= base_url('assets/img/app/icon/privasi.png') ?>">
					</div>
					<div class="col s8 m8 l9" id="JUDUL-MENU-PROFILE">
						<h6>PRIVASI</h6>
					</div>
				</div>
				<div class="col s12 m12 l12">
					<table>
				        <tbody id="PRIVASI">
				        </tbody>
				      </table>
				</div>
			</div>
		</div>

	</div>
	</div>
</div>
<div class="fixed-action-btn">
    <a class="btn-floating blue lighten-1" href="<?php echo site_url('SISWA/Edit_profile') ?>">
      <i class="large material-icons">mode_edit</i>
    </a>
</div>
<script>
$(document).ready(function(){
	$.ajax({
		url : '<?php echo site_url('UANGSAKU_Siswa/get_data_all') ?>',
		type : 'post',
		dataType : 'json',
		success : function(data){
			var info_umum = '';
			var kontak = '';
			var privasi = '';
			for (var i = 0; i < data.length; i++) {
				info_umum += '<tr>'+
				             '<th class="w-50deg">NAMA</th>'+
				             '<td>'+data[i].NAMA+'</td>'+
				             '</tr>'+
				             '<tr>'+
				             '<th class="w-50deg">NISN</th>'+
				             '<td>'+data[i].NISN+'</td>'+
				             '</tr>'+
				             '<tr>'+
				             '<th class="w-50deg">TANGGAL LAHIR</th>';
				             if (data[i].TANGGAL_LAHIR == null || data[i].TANGGAL_LAHIR == '0000-00-00') {
				info_umum += '<td>-</td>';
							 }else{
				info_umum += '<td>'+data[i].TANGGAL_LAHIR+'</td>';
							 };
				info_umum += '</tr>'+
				             '<tr>'+
				             '<th class="w-50deg">JENIS KELAMIN</th>';
				             if (data[i].JENIS_KELAMIN == 'L' || data[i].JENIS_KELAMIN == '') {
				info_umum += '<td>LAKI-LAKI</td>';
							 }else{
				info_umum += '<td>PEREMPUAN</td>';
							 }
				info_umum += '</tr>'+
				             '<tr>'+
				          	 '<th class="w-50deg">ALAMAT</th>';
				          	 if (data[i].ALAMAT == null || data[i].ALAMAT == '') {
				info_umum += '<td>-</td>';
				          	}else{
				info_umum += '<td>'+data[i].ALAMAT+'</td>';
				          	}
				info_umum += '</tr>'+
				             '<tr>'+
				          	 '<th class="w-50deg">KELAS</th>'+
				          	 '<td>'+data[i].KELAS+'</td>'+
				             '</tr>';
				kontak +='<tr>'+
				         '<th class="w-50deg">EMAIL</th>'+
				         '<td>'+data[i].EMAIL+'</td>'+
				         '</tr>'+
				         '<tr>'+
				         '<th class="w-50deg">NO TELEPHON</th>';
				         if (data[i].NO_TELP == null || data[i].NO_TELP == '') {
				kontak += '<td>-</td>';
						 }else{
				kontak += '<td>'+data[i].NO_TELP+'</td>';
						 }
				kontak += '</tr>';

				privasi += '<tr>'+
				           '<th class="w-50deg">NIK</th>';
				        if (data[i].NIK == null || data[i].NIK == '') {
				privasi += '<td>-</td>';
				        }else{
				privasi += '<td>'+data[i].NIK+'</td>';
				        }
				privasi += '</tr>';
			}
			$("#INFO_UMUM").html(info_umum);
			$("#KONTAK").html(kontak);
			$("#PRIVASI").html(privasi);
		}
	});
});
</script>