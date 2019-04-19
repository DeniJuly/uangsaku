<div class="col s12 m10 l10" id="isi">
	<div class="row">

		    <!-- PEMBAYARAN -->
		    <div id="PEMBAYARAN-ANAK" class="col s12 m12 l12">
		    	<div class="row" id="DATA-TAGIHAN">
					<?php foreach ($data as $d) :?>
					<div class="col s12 m4 l4">
						<div class="col s12 m12 l12" id="DATA-PEMBIAYAAN">
					    	<div class="card-panel" id="CARD-PEMBAYARAN-ANAK">
					    		<div class="row">
					    			<a href="<?php echo site_url('SISWA/Bayar?id='.$d->ID_TAGIHAN) ?>">
						    			<div class="col s2 m2 l2 center" id="ICON-PEMBAYARAN-ANAK">
						    				<img src="<?php echo base_url('assets/img/app/icon/pembayaran.png') ?>" class="responsive-img">
						    			</div>
						    			<div class="col s8" id="JUDUL-PEMBAYARAN-ANAK">
						    				<h6 class="left yellow-text"><b><?php echo $d->NAMA_PEMBIAYAAN ?></b></h6>
						    			</div>
						    			<div class="col s12 m12 l12" id="JENIS-PEMBAYARAN-ANAK">
						    				<h6 class="grey-text"><sup>Rp </sup><?php echo $hasil_rupiah = number_format($d->TOTAL_BIAYA,2,',','.');   ?></h6>
						    			</div>
						    			<div class="col s12 m12 l12" id="INFO-PEMBAYARAN-ANAK">
						    				<small class="grey-text right">TERBAYAR : <sup>Rp </sup><?php echo number_format($d->TOTAL_TERBAYAR) ?></small>
						    			</div>
					    			</a>
					    		</div>
					    	</div>
				    	</div>
				    </div>
			    	<?php endforeach ?>

		    	</div>
		    </div>
		    <!-- END PEMBAYARAN -->
		  
	 </div>
</div>
<!-- <script>
$(document).ready(function(){
	$.ajax({
		url : '<?php echo site_url('UANGSAKU_Siswa/get_data_pembiayaan') ?>',
		type : 'post',
		dataType : 'json',
		success : function(data){
			var hasil = '';
			for (var i = 0; i < data.length; i++) {
				hasil += '<div class="col s12 m6 l6">';
				hasil += '<a href="<?php echo site_url('SISWA/Bayar') ?>">';
			    hasil += '<div class="card-panel" id="CARD-PEMBAYARAN-ANAK">';
			    		 '<div class="row">'+
			    		 '<div class="col s2 m2 l2 center" id="ICON-PEMBAYARAN-ANAK">'+
			    		 '<img src="<?php echo base_url('assets/img/app/icon/pembayaran.png') ?>" class="responsive-img">'+
			    		 '</div>'+
			    		 '<div class="col s8" id="JUDUL-PEMBAYARAN-ANAK">'+
			    		 '<h6 class="left yellow-text"><b>'+data[i].NAMA_PEMBIAYAAN+'</b></h6>'+
			    		 '</div>'+
			    	 	 '<div class="col s12 m12 l12" id="JENIS-PEMBAYARAN-ANAK">'=+
			    		 '<h6 class="grey-text"><sup>Rp </sup>'+data[i].TOTAL_BIAYA+'</h6>'+
			    		 '</div>'+
			    		 '<div class="col s12 m12 l12" id="INFO-PEMBAYARAN-ANAK">'+
			    		 '<small class="grey-text left">SMKN 1 Bawang</small>'+
			    	     '<small class="grey-text right">TERBAYAR: <sup>Rp </sup>200.000</small>'+
			    		 '</div>'+
			    		 '</div>'+
			    		 '</div>'+
		    			 '</a>'+
		    		     '</div>';
			}
			$("#DATA-TAGIHAN").html(hasil);
		}
	});
});
</script> -->