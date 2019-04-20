<div class="col s12 m12 l12" id="isi-sub">
	<div class="container">
		<div class="row">
			<div class="col s12 m10 l10 offset-m1 offset-l1" id="BUNGKUS-FORM">
				<?php foreach ($data as $d):?>
				<div class="card-panel" id="CARD-FORM">
					<h5 class="grey-text">EDIT DATA PEMBIAYAAN</h5>
					<small id="flash-tambah" style="display: block;"></small>
					<div class="input-field col s12 m6 l6">
						<input value="<?php echo $d->NAMA_PEMBIAYAAN ?>"id="NAMA" type="text" class="validate" style="margin-bottom: 0!important">
						<label for="NAMA">NAMA PEMBIAYAAN</label>
					</div>
					<div class="input-field col s12 m6 l6">
					    <input value="<?php echo $d->BIAYA ?>" id="BIAYA" type="number" class="validate" style="margin-bottom: 0!important">
					    <label for="BIAYA">TOTAL BIAYA</label>
					    <small class="grey-text" style="font-size: 10px;" id="TEKS-TOTAL-BIAYA"><sup>Rp </sup>0</small>
					</div>
					<div class="input-field col s12">
					    <textarea class="materialize-textarea" id="DESKRIPSI" data-length="200" style="margin-bottom: 0!important"><?php echo $d->DESKRIPSI ?></textarea>
					    <label for="deskripsi">Deskripsi</label>
					</div>
					<div class="input-field col s12">
						<button id="BTN-SIMPAN-PEMBIAYAAN" class="btn yellow darken-2">SIMPAN</button>
						<button class="waves-effect waves-light btn" id="BTN-DISABLE" disabled style="margin-top: 0!important; width: 118px; border-radius: 25px; display: none;">
				            <img src="<?php echo base_url('assets\img\app\icon/loading.gif') ?>">
				        </button>
			    	</div>
				</div>
				<?php endforeach ?>
			</div>
		</div>

	</div>
</div>
<script>
$(document).ready(function(){
	$("#BIAYA").on('keyup',function(){
		var biaya = $(this).val();
		if (biaya == '') {
			$("#TEKS-TOTAL-BIAYA").html("<sup>Rp </sup>0");	
		}else{
			var bilangan = biaya;

		    var reverse = bilangan.toString().split('').reverse().join(''),
		    ribuan  = reverse.match(/\d{1,3}/g);
		    ribuan  = ribuan.join('.').split('').reverse().join('');
		    $("#TEKS-TOTAL-BIAYA").html("<sup>Rp </sup>"+ribuan);
		}
	});
})
</script>
<script>
$(document).ready(function(){
	$("#BTN-SIMPAN-PEMBIAYAAN").click(function () {
		$(this).hide();
		$("#BTN-DISABLE").css('display','block');
		var nama = $("#NAMA").val();
		var biaya = $("#BIAYA").val();
		var deskripsi = $("#DESKRIPSI").val();
		var id  = '<?php echo $this->input->get('id') ?>';
		if (nama == '' || biaya == '' || deskripsi == '') {
			$(this).show();
			$("#BTN-DISABLE").css('display','none');
			$("#flash-tambah").text('isi semua kolom');
			$("#flash-tambah").attr('class','red-text');
		}else{
			if (deskripsi.length > 200) {
				$("#BTN-SIMPAN-PEMBIAYAAN").show();
				$("#BTN-DISABLE").css('display','none');
				$("#flash-tambah").text('maksimal deskripsi 200 huruf');
				$("#flash-tambah").attr('class','red-text');
			}else{
				$.ajax({
					url : '<?php echo site_url('UANGSAKU_sekolah/proses_edit_data_pembiayaan') ?>',
					type : 'post',
					data : {nama : nama, biaya : biaya, deskripsi : deskripsi,id:id},
					success : function(response){
						if (response == 1) {
							$("#BTN-SIMPAN-PEMBIAYAAN").show();
							$("#BTN-DISABLE").css('display','none');
							$("#flash-tambah").text('berhasil edit data pembiayaan');
							$("#flash-tambah").attr('class','blue-text');
						}else if(response == 2){
							$("#BTN-SIMPAN-PEMBIAYAAN").show();
							$("#BTN-DISABLE").css('display','none');
							$("#flash-tambah").text('gagal edit data pembiayaan');
							$("#flash-tambah").attr('class','red-text');
						}else {
							$("#BTN-SIMPAN-PEMBIAYAAN").show();
							$("#BTN-DISABLE").css('display','none');
							$("#flash-tambah").text('gagal data pembiayaan');
							$("#flash-tambah").attr('class','red-text');
						}
					}
				});
			}
		}
	});
});
</script>