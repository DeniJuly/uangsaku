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

<script>
$(document).ready(function() {
	$.ajax({
		url : '<?php echo site_url('UANGSAKU_orangtua/saldo') ?>',
		type : 'post',
		dataType : 'json',
		success : function(data){
			if (data.length == '') {
				$("#SALDO").html('<h6 class="blue-text">Kaitkan akun Anak Anda</h6>');
			}else{
				var bilangan = data[0].TOTAL_SALDO_SISWA;

		        var reverse = bilangan.toString().split('').reverse().join(''),
		        ribuan  = reverse.match(/\d{1,3}/g);
		        ribuan  = ribuan.join('.').split('').reverse().join('');
		        var saldo = '<sup>Rp</sup>'+ribuan;
		        $("#SALDO").html(saldo);
	    	}
		}
	});
});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		// MENU FITUR
		$.ajax({
			url : '<?php echo base_url();?>index.php/UANGSAKU_orangtua/get_data',
			type : "post",
			dataType : 'json',
			success : function (data){
				
			}
		});
	});
</script>