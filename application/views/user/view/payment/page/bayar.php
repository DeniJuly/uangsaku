<div class="col s12 m12 l12" id="isi">
	<div class="container">
		<div class="row">
			<div class="col s12 m12 l12">
					
				<div class="col s12 m8 l8 offset-m2 offset-l2" id="BUNGKUS-BAYAR-KEBUTUHAN-SEKOLAH">
			        <div class="card-panel" id="CARD-BAYAR-KEBUTUHAN-SEKOLAH">
				        <!-- form -->
				        <?php foreach ($data as $d) :?>
				        <div class="row">
				          <div class="col s12 m3 l3 center">
				            <img src="<?= base_url('assets/img/app/icon/pembayaran.png') ?>">
				          </div>
				          <div class="col s12 m9 l9" id="INFO-BAYAR-KEBUTUHAN-SEKOLAH">
				          	<!-- <h6 class="grey-text"><?php echo $d->NAMA_PEMBIAYAAN ?></h6> -->
				          	<table>
				          		<tr>
				          			<td class="grey-text" id="JML-BAYAR">NAMA PEMBIAYAAN : <?php echo $d->NAMA_PEMBIAYAAN ?>
				          			</td>
				          		</tr>
				          		<tr>
				          			<td class="grey-text" id="JML-BAYAR">TOTAL TAGIHAN : <sup>Rp </sup><?php echo number_format($d->TOTAL_BIAYA); ?>
				          			</td>
				          		</tr>
				          		<tr>
				          			<td class="grey-text" id="JML-BAYAR">TERBAYAR : <sup>Rp </sup><?php echo number_format($d->TOTAL_TERBAYAR); ?>
				          			</td>
				          		</tr>
				          		<tr>
				          			<td class="grey-text" id="DESKRIPSI"><?php echo $d->DESKRIPSI ?></td>
				          		</tr>
				          	</table>
				          </div>
				          <div class="col s12 m12 l12">
				          	<h6 class="grey-text">METODE PEMBAYARAN</h6>
				          </div>

				          <div class="col s12 m12 l12"s style="border: 1px solid #eee;margin-top: 5px;">
				          	<div class="col s10 l11 m11">
				          		<h6 class="grey-text" style="margin-top: 9px;">PAYMANT POINT UANGSAKU</h6>
				          	</div>
				          	<div class="col s2 m1 l1">
				          		<a href="<?= site_url('SISWA/Bayar/Paymant_poin?id='.$this->input->get('id')) ?>" class="right">
									<i class="material-icons" style="margin-top: 5px;">chevron_right</i>
								</a>
				          	</div>
				          </div>

				          <div class="col s12 m12 l12"s style="border: 1px solid #eee;margin-top: 5px;">
				          	<div class="col s10 l11 m11">
				          		<h6 class="grey-text" style="margin-top: 9px;">SALDO UANGSAKU</h6>
				          	</div>
				          	<div class="col s2 m1 l1">
				          		<a href="<?= site_url('SISWA/Bayar/Saldo?id='.$this->input->get('id')) ?>" class="right">
									<i class="material-icons" style="margin-top: 5px;">chevron_right</i>
								</a>
				          	</div>
				          </div>

				        </div>
				    	<?php endforeach ?>
				              <!-- end form -->
		            </div>
			    </div>	
					
			</div>
		</div>
	</div>
</div>