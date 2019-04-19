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
				<h5 class="left">Data Jenis Pembayaran</h5> 
				<div class="chip" style="margin-left: 10px;margin-top: 5px;" id="JML-JENIS-PEMBIAYAAN"><?php if ($jml == null) {
					echo '0 jenis pembiayaan';
				}else{ echo $jml.' jenis pembiayaan'; }?></div>
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
				    			<div class="col s2 m2 l2 center" id="ICON-PEMBAYARAN-ANAK">
				    				<img src="<?php echo base_url('assets/img/app/icon/pembayaran.png') ?>" class="responsive-img">
				    			</div>
				    			<div class="col s8" id="JUDUL-PEMBAYARAN-ANAK">
				    				<h6 class="left yellow-text"><b><?php echo $d->NAMA_PEMBIAYAAN ?></b></h6>
				    			</div>
				    			<div class="col s12 m12 l12" id="JENIS-PEMBAYARAN-ANAK">
				    				<h6 class="grey-text"><sup>Rp </sup><?php echo number_format($d->BIAYA) ?></h6>
				    			</div>
				    			<div class="col s12 m12 l12" id="INFO-PEMBAYARAN-ANAK">
				    				<small class="grey-text left">STATUS PEMBIAYAAN <?php echo $d->STATUS_PEMBIAYAAN ?></small>
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
<!-- <script>
$(document).ready(function(){
	$.ajax({
		url : '<?php echo site_url('UANGSAKU_Sekolah/get_data_jenis_pembiayaan') ?>',
		type :'post',
		dataType : 'json',
		success : function(data){
			var hasil = '';
			for (var i = 0; i < data.length; i++) {
				hasil +='<div class="card-panel" id="CARD-PEMBAYARAN-ANAK">'+
			    		"<a class='right dropdown-button' data-activates='DROPDOWN-OPSI' id='DROPDOWN-TABEL'>"+
						'<i class="material-icons">more_vert</i>'+
						'</a>'+
						"<ul id='DROPDOWN-OPSI' class='dropdown-content'>"
						'<li class="blue-text">'+
						'<a href="#EDIT" class="blue-text modal-trigger">'+
						'<i class="material-icons center">create</i>EDIT</a>'+
						'</li>'+
						'<li class="blue-text">'+
						'<a href="#!" class="blue-text modal-trigger">'+
						'<i class="material-icons center">delete</i>HAPUS</a>'+
						'</li>'+
						'<li class="blue-text">'+
						'<a href="<?php echo site_url('SEKOLAH/detail_data_pembiayaan') ?>" class="blue-text modal-trigger">'+
						'<i class="material-icons center">info</i>INFO</a>'+
						'</li>'+
						'</ul>'+
			    		'<div class="row">'+
			    		'<a href="<?php echo site_url('SEKOLAH/informasi_pembiayaan_siswa') ?>">'+
				    	'<div class="col s2 m2 l2 center" id="ICON-PEMBAYARAN-ANAK">'+
				    	'<img src="<?php echo base_url('assets/img/app/icon/pembayaran.png') ?>" class="responsive-img">'+
				    	'</div>'+
				    	'<div class="col s8" id="JUDUL-PEMBAYARAN-ANAK">'+
				    	'<h6 class="left yellow-text"><b>PEMBAYARAN SPP</b></h6>'+
				    	'</div>'+
				    	'<div class="col s12 m12 l12" id="JENIS-PEMBAYARAN-ANAK">'+
				    	'<h6 class="grey-text"><sup>Rp </sup>1.000.000</h6>'+
				    	'</div>'+
				    	'<div class="col s12 m12 l12" id="INFO-PEMBAYARAN-ANAK">'+
				    	'<small class="grey-text left">SMKN 1 Bawang</small>'+
				    	'</div>'+
			    		'</a>'+
			    		'</div>'+
			    		'</div>';
			}
			$("#DATA-PEMBIAYAAN").html(hasi);
		}
	});
});
</script> -->