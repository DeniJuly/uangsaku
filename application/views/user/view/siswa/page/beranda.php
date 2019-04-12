<div class="col s12 m10 l10" id="isi">
	<div class="container">
		
		<div class="col s12">

			<div class="card-panel grey-text" id="BUNGKUS-SALDO">
				<div class="col s8 l10 m10" id="BUNGKUS-JUDUL-SALDO">
					<div class="col s12 m12 l12" id="JUDUL-SALDO">
						<h6 class="left"><b>SALDO</b></h6><br>
					</div>
					<div class="col s12 m12 l12">
						<h5 id="SALDO" class="left"><sup>Rp</sup>10.000</h5>
					</div>
				</div>
				<div class="col s4 m2 l2">
					<img src="<?php echo base_url('assets/img/app/logo/logo_64.png') ?>" alt="" class="responsive-img">
				</div>

			</div>

			<div class="col s12 m12">

				<!-- JIKA SUDAH TERKAIT -->
				<div class="col s5 m2 l2 offset-m2 offset-l3">
					<a href="<?= site_url('SISWA/Pembayaran') ?>">
						<div class="card-panel center">
							<img src="<?php echo base_url('assets/img/app/icon/pembayaran.png') ?>" width="24px">
						</div>
					</a>
				</div>
				<div class="col s5 m2 l2 offset-s2 offset-l2 m2">
					<a href="<?= site_url('SISWA/Beli') ?>">
						<div class="card-panel center">
							<img src="<?php echo base_url('assets/img/app/icon/pembelian.png') ?>" width="24px">
						</div>
					</a>
				</div>

				<!-- JIKA BELUM TERKAIT -->
				<!-- <div class="col s4 m2 l2 offset-s4 offset-m5 offset-l5">
					<a href="<?= site_url('UangSaku/spp') ?>">
						<div class="card-panel center">
							<img src="<?php echo base_url('assets/img/app/icon/pembelian.png') ?>" width="24px">
						</div>
					</a>
				</div> -->

			</div>			
		</div>

		<div class="col s12 m12 l12" id="BUNGKUS-TIPS-BERANDA">
			<p><h6 class="left">TIPS</h6></p>

			<div class="col s12 m12 l12"id="TIPS-BERANDA">
				<div class="col s3 m2 l1 center" id="ICON-TIPS-BERANDA">
					<img src="<?= base_url('assets/img/app/logo/logo_64.png') ?>" class="responsive-img">
				</div>
				<div class="col s7 m8 l9" id="JUDUL-TIPS-BERANDA">
					<h6 class="left">ISI SALDO</h6><br>
					<small class="grey-text lighten-1 left">di paymen poin uangsaku</small>
				</div>
				<div class="col s2 m2 l1 center offset-l1" id="LINK-TIPS-BERANDA">
					<a href="<?= site_url('SISWA/Topup') ?>">
						<i class="material-icons">chevron_right</i>
					</a>
				</div>
			</div>

			<div class="col s12 m12 l12"id="TIPS-BERANDA">
				<div class="col s3 m2 l1 center" id="ICON-TIPS-BERANDA">
					<img src="<?= base_url('assets/img/app/logo/logo_64.png') ?>" class="responsive-img">
				</div>
				<div class="col s7 m8 l9" id="JUDUL-TIPS-BERANDA">
					<h6 class="left">BELI MAKANAN</h6><br>
					<small class="grey-text lighten-1 left">Lebih praktis dan cepat</small>
				</div>
				<div class="col s2 m2 l1 center offset-l1" id="LINK-TIPS-BERANDA">
					<a href="<?= site_url('UangSaku/tips/tips_beli') ?>">
						<i class="material-icons">chevron_right</i>
					</a>
				</div>
			</div>

			<div class="col s12 m12 l12" id="TIPS-BERANDA">
				<div class="col s3 m2 l1 center" id="ICON-TIPS-BERANDA">
					<img src="<?= base_url('assets/img/app/logo/logo_64.png') ?>" class="responsive-img">
				</div>
				<div class="col s7 m8 l9" id="JUDUL-TIPS-BERANDA">
					<h6 class="left">Bayar SPP</h6><br>
					<small class="grey-text lighten-1 left">Bayar tanpa antri</small>
				</div>
				<div class="col s2 m2 l1 center offset-l1" id="LINK-TIPS-BERANDA">
					<a href="<?= site_url('UangSaku/tips/tips_spp') ?>">
						<i class="material-icons">chevron_right</i>
					</a>
				</div>
			</div>

		</div>

	</div>
</div>