<div class="col s12 m12 l12" id="isi-sub">
	<div class="container">
	<div class="row">

		<div class="col s12 m12 l12" id="BUNGKUS-TENTANG-PROFILE">
			<div class="card-panel" style="height: 330px">
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
			<div class="card-panel" style="height: 300px">
				<div class="col s12 m12 l12" id="JUDUL-TENTANG-PROFILE">
					<div class="col s3 m2 l1 center" id="ICON-MENU-PROFILE">
						<img src="<?= base_url('assets/img/app/icon/rekenign_28.png') ?>">
					</div>
					<div class="col s9 m10 l11" id="JUDUL-MENU-PROFILE">
						<h6>REKENING</h6>
					</div>
				</div>
				<div class="col s12 m12 l12">
					<table>
				        <tbody id="REKENING">
				        </tbody>
				      </table>
				</div>
			</div>
		</div>

	</div>
	</div>
</div>
<div class="fixed-action-btn">
    <a class="btn-floating blue lighten-1" href="<?php echo site_url('SEKOLAH/Edit_profile') ?>">
      <i class="large material-icons">mode_edit</i>
    </a>
</div>
<script>
$(document).ready(function(){
	$.ajax({
		url : '<?php echo site_url('UANGSAKU_Sekolah/get_data_all') ?>',
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
				             '<td>'+data[i].NPSN+'</td>'+
				             '</tr>'+
				             '<tr>'+
				             '<th class="w-50deg">TINGKAT SEKOLAH</th>'+
				             '<td>'+data[i].TINGKAT_SEKOLAH+'</td>'+
				             '</tr>'+
				             '<tr>'+
				          	 '<th class="w-50deg">ALAMAT</th>';
				          	 if (data[i].ALAMAT == null || data[i].ALAMAT == '') {
				info_umum += '<td>-</td>';
				          	}else{
				info_umum += '<td>'+data[i].ALAMAT+'</td>';
				          	}
				kontak +='<tr>'+
				         '<th class="w-50deg">EMAIL</th>'+
				         '<td>'+data[i].EMAIL+'</td>'+
				         '</tr>';

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
<script>
$(document).ready(function(){
	$.ajax({
		url : '<?php echo site_url('UANGSAKU_Sekolah/get_data_rekening') ?>',
		type : 'post',
		dataType : 'json',
		success : function(data){
			if (data.length == '') {
				$("#REKENING").html('<h5 class="blue-text center" style="margin-top:50px;">ANDA BELUM MENGISI PROFILE REKENING ANDA</h5>');
			}else{
				var rekening ='';
				for (var i = 0; i < data.length; i++) {
					rekening += '<tr>'+
					            '<th>NAMA BANK</th>'+
					            '<td>'+data[i].NAMA_BANK+'</td>'+
					            '</tr>'+
					            '<tr>'+
					            '<th>NAMA REKENING</th>'+
					            '<td>'+data[i].NAMA_REKENING+'</td>'+
					            '</tr>'+
					            '<tr>'+
					            '<th>NO REKENING</th>'+
					            '<td>'+data[i].NO_REKENING+'</td>'+
					            '</tr>'+
					            '<tr>'+
					            '<th>CABANG</th>'+
					            '<td>'+data[i].CABANG+'</td>'+
					            '</tr>';
				}
				$("#REKENING").html(rekening);
			}
		}
	});
});
</script>