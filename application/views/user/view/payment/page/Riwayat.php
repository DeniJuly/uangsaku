<div class="col s12 m10 l10" id="isi">
	<div class="row">

		    <!-- PEMBAYARAN -->
		    <div id="PEMBAYARAN-ANAK" class="col s12 m12 l12">
		    	<div class="row">
				<?php foreach ($data as $d) :?>
		    		<div class="col s12 m6 l6">
		    			<a href="<?php echo site_url('SISWA/Detail_riwayat?id='.$d->ID_PEMBAYARAN) ?>">
			    			<div class="card-panel" id="CARD-HISTORY-KEUANGAN-ANAK">
			    				<div class="row">
			    					<div class="col s2 m2 l2 center" id="ICON-HISTORY-KEUANGAN-ANAK">
			    						<img src="<?php echo base_url('assets/img/app/icon/pembayaran.png') ?>" class="responsive-img">
			    					</div>
			    					<div class="col s8" id="JUDUL-HISTORY-KEUANGAN-ANAK">
			    						<h6 class="left yellow-text"><b><?php echo $d->PRODUK ?></b></h6>
			    					</div>
			    					<div class="col s8" id="UANG-HISTORY-KEUANGAN-ANAK">
			    						<h5 class="grey-text" style="margin:0"><sup>Rp </sup><?php echo number_format($d->TOTAL_PEMBAYARAN) ?></h5>
			    					</div>
			    					<div class="col s12 m12 l12" id="INFO-HISTORY-KEUANGAN-ANAK">
			    						<small class="grey-text right"><?php echo $d->TGL_PEMBAYARAN ?></small>
			    					</div>
			    				</div>
			    			</div>
		    			</a>
		    		</div>
		    	<?php endforeach ?>
		    	</div>
		    </div>
		    <!-- END PEMBAYARAN -->
		    
	 </div>
</div>