	<div class="col s12 m10 l10" id="isi">
		<div class="col s3 m1 l1" id="TAMBAH-JENIS-PRODUK">
			<a class="waves-effect waves-light btn white" href="<?php echo site_url('MITRA/tambah_data_produk') ?>"><i class="material-icons blue-text">add</i></a>
		</div>
		<div class="col s12 m9 l9">
			<div class="input-field col s9 m9 l9">
	          <input placeholder="Cari Jenis Pembayaran" id="key" type="text" class="validate" autocomplete="off" autofocus="on">
	        </div>
	          <a class="waves-effect waves-light btn white btn-cari-siswa"><i class="material-icons blue-text">search</i></a>
		</div>
		<div class="col s12 m12 l12">
			<div class="col s12 m12 l12">
				<h5 class="left">Data Produk</h5> 
				<div class="chip" style="margin-left: 10px;margin-top: 5px;" id="JML-JENIS-PEMBIAYAAN"><?php if ($jml == null) {
					echo '0 produk';
				}else{ echo $jml.' produk'; }?></div>
			</div>
			<?php foreach ($data as $d) :?>
			<div class="col s12 m4 l4">
				<div class="col s12 m12 l12" id="DATA-PEMBIAYAAN">
			    	<div class="card-panel" id="CARD-PEMBAYARAN-ANAK">
			    		<a class='right dropdown-button' data-activates='DROPDOWN-OPSI' id="DROPDOWN-TABEL">
							<i class="material-icons">more_vert</i>
						</a>
						<!-- Dropdown Structure -->
						  <ul id='DROPDOWN-OPSI' class='dropdown-content'>
						    <li class="blue-text">
						    	<a href="#EDIT" class="blue-text modal-trigger">
						    		<i class="material-icons center">create</i>EDIT
						    	</a>
						    </li>
						    <li class="blue-text">
						    	<a href="#!" class="blue-text modal-trigger">
						    		<i class="material-icons center">delete</i>HAPUS
						    	</a>
						    </li>
						  </ul>
			    		<div class="row">
			    			<a href="<?php echo site_url('SEKOLAH/informasi_pembiayaan_siswa') ?>">
				    			<div class="col s3 m3 l3 center" id="ICON-PEMBAYARAN-ANAK">
				    				<img src="<?php echo base_url('assets/img/user/mitra/produk/'.$d->FOTO) ?>" class="responsive-img">
				    			</div>
				    			<div class="col s7 m7 l7" id="JUDUL-PEMBAYARAN-ANAK">
				    				<h6 class="left yellow-text" style="margin: 0"><b><?php echo $d->NAMA_PRODUK ?></b></h6>
				    			</div>
				    			<div class="col s7 m7 l7" id="INFO-PRODUK">
				    				<p class="grey-text" style="margin: 0;font-size: 13px">HARGA : <b><?php echo number_format($d->HARGA_PRODUK) ?></b></p>
				    				<p class="grey-text" style="margin: 0;font-size: 13px">STOK : <?php echo $d->STOK; ?></p>
				    			</div>
				    			<div class="col s12 m12 l12" id="INFO-PEMBAYARAN-ANAK">
				    				<small class="grey-text left">TERJUAL <?php echo $d->TERJUAL; ?></small>
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