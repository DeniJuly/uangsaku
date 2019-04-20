<div class="col s12 m12 l12" id="isi-sub">
	<div class="container">
		<div class="row">
			<?php foreach ($rekening as $r) :?>
			<div class="col s12 m10 l10 offset-m1 offset-l1" id="BUNGKUS-FORM">
				<div class="card-panel" id="CARD-FORM" style="height: 400px;">
					<h5 class="grey-text">DATA REKENING</h5>
					<small id="flash-tambah" style="display: block;"></small>
					<div  style="margin-top: 50px;">
					<div class="input-field col s6">
						<input id="NAMA_BANK" type="text" class="validate" value="<?php echo $r->NAMA_BANK ?>" style="margin-bottom: 0!important">
						<label for="NAMA_BANK">NAMA BANK</label>
					</div>
					<div class="input-field col s6">
						<input id="NAMA_REKENING" type="text" class="validate" value="<?php echo $r->NAMA_REKENING ?>" style="margin-bottom: 0!important">
						<label for="NAMA_REKENING">NAMA REKENING</label>
					</div>
					<div class="input-field col s6">
						<input id="NO_REKENING" type="number" class="validate" value="<?php echo $r->NO_REKENING ?>" style="margin-bottom: 0!important">
						<label for="NO_REKENING">NO REKENING</label>
					</div>
					<div class="input-field col s6">
						<input id="CABANG" type="text" class="validate" value="<?php echo $r->CABANG ?>" style="margin-bottom: 0!important">
						<label for="CABANG">CABANG</label>
					</div>
					<div class="input-field col s12">
						<button id="BTN-SIMPAN-REKENING" class="btn yellow darken-2">SIMPAN</button>
						<button class="waves-effect waves-light btn" id="BTN-DISABLE" disabled style="margin-top: 0!important; width: 118px; border-radius: 25px; display: none;">
				            <img src="<?php echo base_url('assets\img\app\icon/loading.gif') ?>">
				        </button>
			    	</div>
			    	</div>
				</div>
			</div>
			<?php endforeach ?>
		</div>

	</div>
</div>
<script>
$(document).ready(function(){
	$("#BTN-SIMPAN-REKENING").click(function () {
		$(this).hide();
		$("#BTN-DISABLE").css('display','block');
		var nama_bank = $("#NAMA_BANK").val();
		var nama_rekening = $("#NAMA_REKENING").val();
		var no_rekening = $("#NO_REKENING").val();
		var cabang = $("#CABANG").val();
		if (nama_bank == '' || nama_rekening == '' || no_rekening == '' || cabang == '') {
			$(this).show();
			$("#BTN-DISABLE").css('display','none');
			$("#flash-tambah").text('isi semua kolom');
			$("#flash-tambah").attr('class','red-text');
		}else{
			if (no_rekening.length > 16) {
				$("#BTN-SIMPAN-PEMBIAYAAN").show();
				$("#BTN-DISABLE").css('display','none');
				$("#flash-tambah").text('maksimal deskripsi 200 huruf');
				$("#flash-tambah").attr('class','red-text');
			}else{
				$.ajax({
					url : '<?php echo site_url('UANGSAKU_sekolah/proses_edit_data_rekening') ?>',
					type : 'post',
					data : {nama_bank : nama_bank,nama_rekening : nama_rekening, no_rekening : no_rekening, cabang : cabang},
					success : function(response){
						if (response == 1) {
							location.href='<?php echo site_url('SEKOLAH/Profile') ?>';
						}else if(response == 2){
							$("#BTN-SIMPAN-PEMBIAYAAN").show();
							$("#BTN-DISABLE").css('display','none');
							$("#flash-tambah").text('gagal edit rekening');
							$("#flash-tambah").attr('class','red-text');
						}
					}
				});
			}
		}
	});
});
</script>
<script>
	$(document).ready(function() {
    $('select').material_select();
  });
</script>