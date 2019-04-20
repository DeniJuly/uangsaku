<div class="col s12 m10 l10" id="isi">
	<div class="col s3 m1 l1" id="TAMBAH-JENIS-PEMBAYARAN">
		<a class="waves-effect waves-light btn white modal-trigger" href="#TAMBAH-TARIK-DANA"><i class="material-icons blue-text">add</i></a>
	</div>
	<div class="col s12 m9 l9">
		<div class="input-field col s9 m9 l9">
          <input placeholder="Cari Jenis Pembayaran" id="key" type="text" class="validate" autocomplete="off" autofocus="on">
        </div>
          <a class="waves-effect waves-light btn white btn-cari-siswa"><i class="material-icons blue-text">search</i></a>
	</div>
	<div class="col s12 m12 l12">
		<div class="col s12 m12 l12">
			<h5 class="left">DATA TARIK DANA</h5> 
			<div class="chip" style="margin-left: 10px;margin-top: 5px;" id="JML-JENIS-PEMBIAYAAN"><?php if ($jml == null) {
				echo '0 data tarik dana';
			}else{ echo $jml.' data tarik dana'; }?></div>
		</div>
		<?php foreach ($data as $d) :?>
		<div class="col s12 m4 l4">
			<div class="col s12 m12 l12" id="DATA-PEMBIAYAAN">
		    	<div class="card-panel" id="CARD-PEMBAYARAN-ANAK">
		    		<div class="row">
		    			<a href="<?php echo site_url('SEKOLAH/informasi_pembiayaan_siswa?id='.$d->ID_PENARIKAN_DANA_SEKOLAH) ?>">
			    			<div class="col s2 m2 l2 center" id="ICON-PEMBAYARAN-ANAK">
			    				<img src="<?php echo base_url('assets/img/app/icon/pembayaran.png') ?>" class="responsive-img">
			    			</div>
			    			<div class="col s10 m10 l10" id="JUDUL-PEMBAYARAN-ANAK" style="height: 70px;">
			    				<h5 class="grey-text"><sup>Rp </sup><?php echo number_format($d->TOTAL_PENARIKAN_DANA_SEKOLAH) ?></h5>
			    			</div>
			    			<div class="col s12 m12 l12" id="INFO-PEMBAYARAN-ANAK">
			    				<small class="grey-text left">STATUS PENARIKAN <b class=" yellow-text"><?php if ($d->STATUS_PENARIKAN_DANA_SEKOLAH == '111') {
			    					echo 'sudah di transfer';
			    				}else{
			    					echo 'sedang di proses';
			    				} ?></b></small>
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
<div id="TAMBAH-TARIK-DANA" class="modal">
    <div class="row">

        <div class="modal-content">
           	<h4 class="center">TARIK DANA PEMBAYARAN</h4>
           	<div id="flash-dana"></div>
            <!-- email -->
            <div class="input-field col s12 m12">
              <input placeholder="NOMINAL UANG" id="NOMINAL" type="number" class="validate" name="NOMINAL">
            </div>
            <button class="btn blue lighten-1 right" id="BTN-SIMPAN-TARIK-DANA">
                <i class="material-icons">send</i>
            </button>
            <button class="waves-effect waves-light btn right" id="BTN-DISABLE2" disabled style="display: none;">
				<img src="<?php echo base_url('assets\img\app\icon/loading.gif') ?>">
			</button>
        </div>

    </div>
</div>
<script>
$(document).ready(function(){
	$("#BTN-SIMPAN-TARIK-DANA").click(function(){
		$(this).hide();
		$("#BTN-DISABLE2").css('display','block');
		var nominal = $("#NOMINAL").val();
		if (nominal == '') {
			$("#BTN-SIMPAN-TARIK-DANA").show();
			$("#BTN-DISABLE2").css('display','none');
			$("#flash-dana").text('isi nominal uang');
			$("#flash-dana").attr('class','red-text');
		}else{
			$.ajax({
				url : '<?php echo site_url('UANGSAKU_sekolah/proses_tarik_dana') ?>',
				data : {nominal:nominal},
				type : 'post',
				success : function(response){
					if (response == 1) {
						$("#BTN-SIMPAN-TARIK-DANA").show();
						$("#BTN-DISABLE2").css('display','none');
						$("#flash-dana").text('tolong lengkapi profile rekening anda');
						$("#flash-dana").attr('class','red-text');
					}else if (response == 2) {
						$("#BTN-SIMPAN-TARIK-DANA").show();
						$("#BTN-DISABLE2").css('display','none');
						$("#flash-dana").text('isi nominal uang');
						$("#flash-dana").attr('class','red-text');
					}else if (response == 3){
						$("#BTN-SIMPAN-TARIK-DANA").show();
						$("#BTN-DISABLE2").css('display','none');
						$("#flash-dana").text('berhasil tambah data tarik dana');
						$("#flash-dana").attr('class','blue-text');
					}else if (response == 4) {
						$("#BTN-SIMPAN-TARIK-DANA").show();
						$("#BTN-DISABLE2").css('display','none');
						$("#flash-dana").text('gagal tambah data tarik dana');
						$("#flash-dana").attr('class','red-text');
					}
				}
			});
		}
	});
});
</script>
<script>
$(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
</script>