<div class="col s12 m12 l12" id="isi">
	<div class="container">
		<div class="row">
			
			<div class="s12 m12 l12">
				<?php foreach ($data as $d):?>
				<div class="col s12 m12 l12" style="border: 1px solid #eee;margin-top: 10px;">
					<div class="col s6 m6 l6">
						<h6 class="grey-text">TOTAL PEMBAYARAN</h6>
					</div>
					<div class="col s6 m6 l6">
						<h6 class="grey-text right">Rp <?php echo number_format($d->TOTAL_TAGIHAN,2,',','.'); ?></h6>
					</div>
				</div>

				<div class="col s12 m12 l12" style="border: 1px solid #eee;margin-top: 10px;">
					<div class="col s12 m12 l12" style="border-bottom: 1px solid #eee">
						<h6 class="grey-text">PAYMANT POIN</h6>
					</div>
					<div class="col s10 m10 l10 offset-s1 offset-m1 offset-l1">
						<p class="grey-text">KODE PEMBAYARAN</p>
						<h4 class="blue-text"><?php echo $d->KODE_TAGIHAN ?></h4>
					</div>
				</div>

				<div class="col s12 m12 l12">
					<h6 class="grey-text">MOHON IKUTI LANGKAH BERIKUT</h6>
				</div>

				<div class="col s12 m12 l12" style="border: 1px solid #eee;margin-top: 10px;">
					<ol class="grey-text">
						<li>Sampakai paymant poin UANGSAKU untuk melakukan pembayaran</li>
						<li>Tunjukan kode pembayaran kepada paymant poin UANGSAKU</li>
						<li>Setelah pembayaran berhasil Anda akan mendapatkan bukti pembayaran sebagai jaminan apabila diperlukan verifikasi lebih lanjut</li>
					</ol>
				</div>
				<div class="col s12 m6 l6 offset-m3 offset-l3" style="margin-top: 10px;">
					<a href="<?php echo site_url('SISWA/Bayar?id='.$this->input->get('id')) ?>" class="btn blue lighten-1" style="width: 100%;border-radius: 25px;">OK!</a>
				</div>
				<?php endforeach ?>

			</div>

		</div>
	</div>
</div>