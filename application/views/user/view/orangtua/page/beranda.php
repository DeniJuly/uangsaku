<div class="col s12 m10 l10" id="isi">
	<div class="container">
		
		<div class="col s12">

			<div class="card-panel grey-text" id="BUNGKUS-SALDO">
				<div class="col s8 l10 m10" id="BUNGKUS-JUDUL-SALDO">
					<div class="col s12 m12 l12" id="JUDUL-SALDO">
						<h6 class="left"><b>SALDO</b></h6><br>
					</div>
					<div class="col s12 m12 l12" id="SALDO">
						
					</div>
				</div>
				<div class="col s4 m2 l2">
					<img src="<?php echo base_url('assets/img/app/logo/logo_64.png') ?>" alt="" class="responsive-img">
				</div>

			</div>

			<div class="col s12 m12" id="MENU_FITUR">
				
			</div>			
		</div>

		<div class="col s12 m12 l12" id="BUNGKUS-TIPS-BERANDA">
			<p><h6 class="left">TIPS : </h6></p>
			
			<a href="<?= site_url('ORANGTUA/Topup') ?>" title="Tips Isi Saldo">
			<div class="col s12 m12 l12" id="TIPS-BERANDA">
				<div class="col s3 m2 l1 center" id="ICON-TIPS-BERANDA">
					<img src="<?= base_url('assets/img/app/logo/logo_64.png') ?>" class="responsive-img">
				</div>
				<div class="col s7 m8 l9" id="JUDUL-TIPS-BERANDA">
					<h6 class="left">ISI SALDO</h6><br>
					<small class="grey-text lighten-1 left">di paymen poin uangsaku</small>
				</div>
				<div class="col s2 m2 l1 center offset-l1" id="LINK-TIPS-BERANDA">
					
						<i class="material-icons">chevron_right</i>
					
				</div>
			</div>
			</a>
			
			<a href="<?= site_url('UangSaku/tips/tips_beli') ?>" title="Tips Beli Makanan">
			<div class="col s12 m12 l12" id="TIPS-BERANDA">
				<div class="col s3 m2 l1 center" id="ICON-TIPS-BERANDA">
					<img src="<?= base_url('assets/img/app/logo/logo_64.png') ?>" class="responsive-img">
				</div>
				<div class="col s7 m8 l9" id="JUDUL-TIPS-BERANDA">
					<h6 class="left">BELI MAKANAN</h6><br>
					<small class="grey-text lighten-1 left">Lebih praktis dan cepat</small>
				</div>
				<div class="col s2 m2 l1 center offset-l1" id="LINK-TIPS-BERANDA">
					
						<i class="material-icons">chevron_right</i>
					
				</div>
			</div>
			</a>

			<a href="<?= site_url('UangSaku/tips/tips_spp') ?>" title="Tips Bayar SPP Anak">
			<div class="col s12 m12 l12" id="TIPS-BERANDA">
				<div class="col s3 m2 l1 center" id="ICON-TIPS-BERANDA">
					<img src="<?= base_url('assets/img/app/logo/logo_64.png') ?>" class="responsive-img">
				</div>
				<div class="col s7 m8 l9" id="JUDUL-TIPS-BERANDA">
					<h6 class="left">Bayar SPP</h6><br>
					<small class="grey-text lighten-1 left">Bayar tanpa antri</small>
				</div>
				<div class="col s2 m2 l1 center offset-l1" id="LINK-TIPS-BERANDA">
					
						<i class="material-icons">chevron_right</i>
					
				</div>
			</div>
			</a>
		</div>

	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		// SALDO
		$.ajax({
			url : '<?php echo base_url();?>index.php/UANGSAKU_orangtua/show_profile',
			type : "post",
			dataType : 'json',
			success : function (data){
				var hasil = '';
				var i;
				var bilangan = data[0].TOTAL_SALDO_SISWA;
				var reserve = bilangan.toString().split('').reserve().join(''),
					ribuan = reserve.match(/\d{1,3}/g);
					ribuan = ribuan.join('.').split('').reserve().join('');
				for (i = 0 ; i < data.length ; i++) {
				if (data[i].ID_SISWA == '' || data[i].ID_SISWA == null) {
					hasil += '<p class="left">'+
					'<a href="<?php echo base_url('UANGSAKU_orangtua/profile') ?>">'+
					'Kaitkan Akun Anda Dengan Anak Anda Dulu!'+'</p>'+
					'</a>'
				}else{
					hasil += '<h5 class="left blue-text lighten-1"><sup>Rp. </sup>'+data[i].TOTAL_SALDO_SISWA+'</h5>'
				}
				$("#SALDO").html(hasil);
				}
			}
		})	

		// MENU FITUR
		$.ajax({
			url : '<?php echo base_url();?>index.php/UANGSAKU_orangtua/show_profile',
			type : "post",
			dataType : 'json',
			success : function (data){
				var hasil = '';
				var i;
				for (i = 0 ; i < data.length ; i++) {
				if (data[i].ID_SISWA != '') {
					hasil += '<div class="col s4 m2 l2  offset-m2 offset-l3">'+
					'<a href="<?= site_url('ORANGTUA/Anak') ?>" title="Pembayaran">'+
						'<div class="card-panel center">'+
							'<img src="<?php echo base_url('assets/img/app/icon/pembayaran.png') ?>" width="24px">'+
						'</div>'+
					'</a>'+
				'</div>'+
				'<div class="col s4 m2 l2">'+
					'<a href="<?= site_url('ORANGTUA/Anak') ?>" title="History Anak">'+
						'<div class="card-panel center">'+
							'<img src="<?php echo base_url('assets/img/app/icon/history.png') ?>" width="24px">'+
						'</div>'+
					'</a>'+
				'</div>'+
				'</div>'
				}
				$("#MENU_FITUR").html(hasil);
				}
			}
		})

	});
</script>