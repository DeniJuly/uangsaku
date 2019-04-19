<div class="col s12 m10 l10" id="isi">
	<div class="container" id="BODY">
		<div class="row">

			<div class="col s8 m4 l4 right" id="BUNGKUS-ADD-ANAK">
				<div class="input-field col s12">
				    <select>
				      <option value="" disabled selected>UANGSAKU</option>
				    </select>
				</div>
			</div>

		    <div class="col s12">
			    <ul class="tabs">
			    	<li class="tab col s12"><a class="active" href="#PEMBAYARAN-ANAK">PEMBAYARAN</a></li>
			    </ul>
		    </div>
		    <!-- PEMBAYARAN -->
		    <div id="PEMBAYARAN-ANAK" class="col s12 m12 l12">
		    	<div class="row">

		    		<div class="col s12 m6 l6">
		    			<a href="<?php echo site_url('ORANGTUA/Bayar') ?>">
			    			<div class="card-panel" id="CARD-PEMBAYARAN-ANAK">
			    				<div class="row">
			    					<div class="col s2 m2 l2 center" id="ICON-PEMBAYARAN-ANAK">
			    						<img src="<?php echo base_url('assets/img/app/icon/pembayaran.png') ?>" class="responsive-img">
			    					</div>
			    					<div class="col s8" id="JUDUL-PEMBAYARAN-ANAK">
			    						<h6 class="left yellow-text"><b>PEMBAYARAN SPP</b></h6>
			    					</div>
			    					<div class="col s12 m12 l12" id="JENIS-PEMBAYARAN-ANAK">
			    						<h6 class="grey-text"><sup>Rp </sup>1.000.000</h6>
			    					</div>
			    					<div class="col s12 m12 l12" id="INFO-PEMBAYARAN-ANAK">
			    						<small class="grey-text left">SMKN 1 Bawang</small>
			    						<small class="grey-text right">TERBAYAR: <sup>Rp </sup>200.000</small>
			    					</div>
			    				</div>
			    			</div>
		    			</a>
		    		</div>

		    		<div class="col s12 m6 l6">
		    			<a href="">
			    			<div class="card-panel" id="CARD-PEMBAYARAN-ANAK">
			    				<div class="row">
			    					<div class="col s2 m2 l2 center" id="ICON-PEMBAYARAN-ANAK">
			    						<img src="<?php echo base_url('assets/img/app/icon/pembayaran.png') ?>" class="responsive-img">
			    					</div>
			    					<div class="col s8" id="JUDUL-PEMBAYARAN-ANAK">
			    						<h6 class="left yellow-text"><b>PEMBAYARAN DAFTAR UALANG</b></h6>
			    					</div>
			    					<div class="col s12 m12 l12" id="JENIS-PEMBAYARAN-ANAK">
			    						<h6 class="grey-text"><sup>Rp </sup>1.000.000</h6>
			    					</div>
			    					<div class="col s12 m12 l12" id="INFO-PEMBAYARAN-ANAK">
			    						<small class="grey-text left">SMKN 1 Bawang</small>
			    						<small class="grey-text right">TERBAYAR: <sup>Rp </sup>500.000</small>
			    					</div>
			    				</div>
			    			</div>
		    			</a>
		    		</div>

		    	</div>
		    </div>
		    <!-- END PEMBAYARAN -->
		 </div>
	 </div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		// SALDO
		$.ajax({
			url : '<?php echo base_url();?>index.php/UANGSAKU_orangtua/show_riwayat',
			type : "post",
			dataType : 'json',
			success : function (data){
				var hasil = '';
				var i;
				for (i = 0 ; i < data.length ; i++) {
				if (data[i].STATUS_PEMBAYARAN == 'lunas') {
					html += 
				}
				$("#SHOW_HISTORY").html(hasil);
				}
			}
		})
	});
</script>