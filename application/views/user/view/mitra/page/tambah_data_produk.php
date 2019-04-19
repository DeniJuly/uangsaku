<div class="col s12 m12 l12" id="isi-sub">
	<div class="container">
		<div class="row">
			<div class="col s12 m10 l10 offset-m1 offset-l1" id="BUNGKUS-FORM">
				<div class="card-panel" id="CARD-FORM">
					<h5 class="grey-text">TAMBAH DATA PRODUK</h5>
					<small id="flash-tambah" style="display: block;"></small>

					<form id="FORM-PRODUK" method="post">
					<div class="input-field col s12">
						<input id="NAMA" type="text" class="validate" name="NAMA" style="margin-bottom: 0!important">
						<label for="NAMA">NAMA PRODUK</label>
					</div>
					<div class="input-field col s12 m6 l6">
			        	<input type="number" id="STOK" name="STOK" class="validate" style="margin-bottom: 0!important">
			        	<label for="STOK">STOK</label>
			        </div>
					<div class="input-field col s12 m6 l6">
					    <input id="HARGA" type="number" name="HARGA" class="validate" style="margin-bottom: 0!important">
					    <label for="HARGA">HARGA</label>
					    <small class="grey-text" style="font-size: 10px;" id="TEKS-HARGA"><sup>Rp </sup>0</small>
					</div>
					<div class="input-field col s12 m12 l12">
						<textarea class="materialize-textarea" name="DESKRIPSI" id="DESKRIPSI" data-length="200" style="margin-bottom: 0!important"></textarea>
					    <label for="deskripsi">DESKRIPSI</label>
					</div>
					<div class="input-field col s12">
					    <div class="file-field input-field">
					      <div class="btn btn-small">
					        <i class="material-icons">add_a_photo</i>
					        <input type="file" name="FOTO">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text">
					      </div>
					    </div>
					</div>
					<div class="input-field col s12">
						<button id="BTN-SIMPAN-PRODUK" class="btn yellow darken-2">SIMPAN</button>
						<button class="waves-effect waves-light btn" id="BTN-DISABLE" disabled style="margin-top: 0!important; width: 118px; border-radius: 25px; display: none;">
				            <img src="<?php echo base_url('assets\img\app\icon/loading.gif') ?>">
				        </button>
			    	</div>
			    	</form>

				</div>
			</div>
		</div>

	</div>
</div>
<script>
$(document).ready(function(){
	$("#HARGA").on('keyup',function(){
		var biaya = $(this).val();
		if (biaya == '') {
			$("#TEKS-HARGA").html("<sup>Rp </sup>0");	
		}else{
			var bilangan = biaya;

		    var reverse = bilangan.toString().split('').reverse().join(''),
		    ribuan  = reverse.match(/\d{1,3}/g);
		    ribuan  = ribuan.join('.').split('').reverse().join('');
		    $("#TEKS-HARGA").html("<sup>Rp </sup>"+ribuan);
		}
	});
})
</script>
<script>
$(document).ready(function(){
	$("#FORM-PRODUK").on('submit',function (e) {
		e.preventDefault();
		$.ajax({
			url : '<?php echo site_url('UANGSAKU_mitra/proses_tambah_data_produk') ?>',
			type : 'post',
			data:new FormData(this),
            processData:false,
            contentType:false,
            cache:false,
            async:false,
			success : function(response){
				if (response == 1) {
					$("#BTN-SIMPAN-PRODUK").show();
					$("#BTN-DISABLE").css('display','none');
					$("#flash-tambah").text('tolong isi semua form');
					$("#flash-tambah").attr('class','red-text');
				}else if(response == 2){
					$("#BTN-SIMPAN-PRODUK").show();
					$("#BTN-DISABLE").css('display','none');
					$("#flash-tambah").text('gagal tambah data produk');
					$("#flash-tambah").attr('class','red-text');
				}else if (response == 3) {
					$("#BTN-SIMPAN-PRODUK").show();
					$("#BTN-DISABLE").css('display','none');
					$("#flash-tambah").text('berhasil tambah data produk');
					$("#flash-tambah").attr('class','blue-text');
				}else if (response == 4) {
					$("#BTN-SIMPAN-PRODUK").show();
					$("#BTN-DISABLE").css('display','none');
					$("#flash-tambah").text('upload foto produk');
					$("#flash-tambah").attr('class','red-text');
				}else if (response == 5) {
					$("#BTN-SIMPAN-PRODUK").show();
					$("#BTN-DISABLE").css('display','none');
					$("#flash-tambah").text('produk sudah ada');
					$("#flash-tambah").attr('class','red-text');
				}
			}
		});
	});
});
</script>
<script>
$("#BTN-SIMPAN-PRODUK").click(function(){
	$(this).hide();
	$("#BTN-DISABLE").css('display','block');
});
</script>