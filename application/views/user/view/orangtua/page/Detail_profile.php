<div class="col s12 m12 l12" id="isi-sub">
	<div class="container">
	<div class="row">

		<div class="col s12 m12 l12" id="BUNGKUS-TENTANG-PROFILE" style="margin-top: 20px;">
			<div class="card-panel" style="height:415px;">
				<div class="col s12 m12 l12" id="JUDUL-TENTANG-PROFILE" style="border-bottom: 1px solid #eee">
					<div class="col s2 m2 l1 center" id="ICON-MENU-PROFILE">
						<img src="<?= base_url('assets/img/app/icon/info_umum.png') ?>" style="height:35px;width: 35px;">
					</div>
					<div class="col s8 m8 l9" id="JUDUL-MENU-PROFILE">
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

		<div class="col s12 m12 l12" id="BUNGKUS-TENTANG-PROFILE" style="margin-top: 20px;">
			<div class="card-panel" style="height:200px;">
				<div class="col s12 m12 l12" id="JUDUL-TENTANG-PROFILE" style="border-bottom: 1px solid #eee">
					<div class="col s2 m2 l1 center" id="ICON-MENU-PROFILE">
						<img src="<?= base_url('assets/img/app/icon/contact.png') ?>" style="height:35px;width: 35px;">
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

		<div class="col s12 m12 l12" id="BUNGKUS-TENTANG-PROFILE" style="margin-top: 20px;">
			<div class="card-panel" style="height:130px;">
				<div class="col s12 m12 l12" id="JUDUL-TENTANG-PROFILE" style="border-bottom: 1px solid #eee">
					<div class="col s2 m2 l1 center" id="ICON-MENU-PROFILE">
						<img src="<?= base_url('assets/img/app/icon/privasi.png') ?>" style="height:35px;width: 35px;">
					</div>
					<div class="col s8 m8 l9" id="JUDUL-MENU-PROFILE">
						<h6>Data Pribadi</h6>
					</div>
				</div>
				<div class="col s12 m12 l12">
					<table>
				        <tbody id="DATA_PRIBADI">
				          
				        </tbody>
				      </table>
				</div>
			</div>
		</div>

	</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$.ajax({
			url : '<?php echo base_url();?>index.php/UANGSAKU_orangtua/show_profile',
			type : "post",
			dataType : 'json',
			success : function (data){
				var hasil = '';
				var i;
				for (i = 0 ; i < data.length ; i++) {
				hasil += '<tr>'+
				            '<th>NAMA</th>'+
				            '<td><?php echo $this->session->userdata('USERNAME'); ?></td>'+
				          '</tr>'+
				          '<tr>'+
				            '<th>NISN</th>'+
				            '<td>'+data[i].NISN+'</td>'+
				          '</tr>'+
				          '<tr>'+
				            '<th>TANGGAL LAHIR</th>'+
				            '<td>'+data[i].TANGGAL_LAHIR+'</td>'+
				          '</tr>'+
				          '<tr>'+
				            '<th>JENIS KELAMIN</th>'+
				            '<td>'+data[i].JENIS_KELAMIN+'</td>'+
				          '</tr>'+
				          '<tr>'+
				          	'<th>ALAMAT</th>'+
				          	'<td>'+data[i].ALAMAT+'</td>'+
				          '</tr>'+
				          '<tr>'+
				          	'<th>KELAS</th>'+
				          	'<td></td>'+
				          '</tr>';
				$("#INFO_UMUM").html(hasil);
				}
			}
		})	
	});
</script>

<script type="text/javascript">
	$(document).ready(function() {
		$.ajax({
			url : '<?php echo base_url();?>index.php/UANGSAKU_orangtua/show_profile',
			type : "post",
			dataType : 'json',
			success : function (data){
				var hasil = '';
				var i;
				for (i = 0 ; i < data.length ; i++) {
				hasil += '<tr>'+
				            '<th>EMAIL</th>'+
				            '<td><?php echo $this->session->userdata('EMAIL'); ?></td>'+
				          '</tr>'+
				          '<tr>'+
				            '<th>NO TELEPHON</th>'+
				            '<td>'+data[i].NO_TELP+'</td>'+
				          '</tr>';
				$("#KONTAK").html(hasil);
				}
			}
		})	
	});
</script>

<script type="text/javascript">
	$(document).ready(function() {
		$.ajax({
			url : '<?php echo base_url();?>index.php/UANGSAKU_orangtua/show_profile',
			type : "post",
			dataType : 'json',
			success : function (data){
				var hasil = '';
				var i;
				for (i = 0 ; i < data.length ; i++) {
				hasil += '<tr>'+
				            '<th>NIK</th>'+
				            '<td>'+data[i].NIK_ORANG_TUA+'</td>'+
				          '</tr>';
				$("#DATA_PRIBADI").html(hasil);
				}
			}
		})	
	});
</script>