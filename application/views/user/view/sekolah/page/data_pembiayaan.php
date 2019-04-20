	<div class="col s12 m10 l10" id="isi">
		<div class="col s3 m1 l1" id="TAMBAH-JENIS-PEMBAYARAN">
			<a class="waves-effect waves-light btn white" href="<?php echo site_url('SEKOLAH/tambah_data_pembiayaan') ?>"><i class="material-icons blue-text">add</i></a>
		</div>
		<div class="col s12 m9 l9">
			<div class="input-field col s9 m9 l9">
	          <input placeholder="Cari Jenis Pembayaran" id="key" type="text" class="validate" autocomplete="off" autofocus="on">
	        </div>
	          <a class="waves-effect waves-light btn white btn-cari-siswa"><i class="material-icons blue-text">search</i></a>
		</div>
		<div class="col s12 m12 l12">
			<div class="col s12 m12 l12">
				<h5 class="left">DATA JENIS PEMBIAYAAN</h5> 
				<div class="chip" style="margin-left: 10px;margin-top: 5px;" id="JML-JENIS-PEMBIAYAAN"><?php if ($jml == null) {
					echo '0 jenis pembiayaan';
				}else{ echo $jml.' jenis pembiayaan'; }?></div>
			</div>
			<?php foreach ($data as $d) :?>
			<div class="col s12 m4 l4">
				<div class="col s12 m12 l12" id="DATA-PEMBIAYAAN">
			    	<div class="card-panel" id="CARD-PEMBAYARAN-ANAK">
			    		<div class="row">
			    			<a href="<?php echo site_url('SEKOLAH/informasi_pembiayaan_siswa?id='.$d->ID_JENIS_PEMBIAYAAN) ?>">
				    			<div class="col s2 m2 l2 center" id="ICON-PEMBAYARAN-ANAK">
				    				<img src="<?php echo base_url('assets/img/app/icon/pembayaran.png') ?>" class="responsive-img">
				    			</div>
				    			<div class="col s10 m10 l10" id="JUDUL-PEMBAYARAN-ANAK">
				    				<h6 class="left yellow-text"><b><?php echo $d->NAMA_PEMBIAYAAN ?></b></h6><br>
				    				<h5 class="grey-text"><sup>Rp </sup><?php echo number_format($d->BIAYA) ?></h5>
				    			</div>
				    			<div class="col s12 m12 l12" id="INFO-PEMBAYARAN-ANAK">
				    				<small class="grey-text left">STATUS PEMBIAYAAN <b class=" yellow-text"><?php echo $d->STATUS_PEMBIAYAAN ?></b></small>
				    			</div>
			    			</a>
			    		</div>
			    	</div>
		    	</div>
			</div>
			<?php endforeach ?>
		</div>
	</div>
</div>