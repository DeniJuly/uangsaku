<div class="col s12 m12 l12" id="isi-sub">
	<div class="container">
		<div class="row">
			<div class="col s12 m10 l10 offset-m1 offset-l1" id="BUNGKUS-FORM">
				<div class="card-panel" id="CARD-FORM">
					<h5 class="grey-text">TAMBAH DATA PEMBIAYAAN</h5>
					<small class="red-text" id="flash-tambah" style="display: block;"></small>
					<div class="input-field col s12">
						<input id="NAMA" type="text" class="validate">
						<label for="NAMA">NAMA PEMBIAYAAN</label>
					</div>
					<div class="input-field col s12 m6 l6">
			        	<?php if ($this->session->userdata('TINGKAT_SEKOLAH') == 'smp/mts') :?>
			        		<select id="KELAS-SISWA">
						      	<option value="VII" >VII</option>
						      	<option value="VIII" >VIII</option>
						      	<option value="IX" >IX</option>
						    </select>
						<?php elseif ($this->session->userdata('TINGKAT_SEKOLAH') == 'sma/smk') :?>
							<select id="KELAS-SISWA">
						      	<option value="X" >X</option>
						      	<option value="XI" >XI</option>
						      	<option value="XII" >XII</option>
						    </select>
						<?php endif ?>
			        </div>
					<div class="input-field col s12 m6 l6">
					    <input id="BIAYA" type="number" class="validate">
					    <label for="BIAYA">TOTAL BIAYA</label>
					</div>

					<div class="input-field col s6">
					  	<h6 class="grey-text">MULAI</h6>
					    <input id="MULAI" type="date" class="validate">
					</div>

					<div class="input-field col s6">
					    <h6 class="grey-text">AKHIR</h6>
					  	<input id="AKHIR" type="date" class="validate">
					</div>

					<div class="input-field col s12">
					    <textarea id="deskripsi" class="materialize-textarea" id="DESKRIPSI" data-length="200"></textarea>
					    <label for="deskripsi">Deskripsi</label>
					</div>
					<div class="input-field col s12">
						<button id="BTN-SIMPAN-PEMBIAYAAN" class="btn yellow darken-2">SIMPAN</button>
						<button class="waves-effect waves-light btn" id="BTN-DISABLE" disabled style="margin-top: 0!important; width: 118px; border-radius: 25px; display: none;">
				            <img src="<?php echo base_url('assets\img\app\icon/loading.gif') ?>">
				        </button>
			    	</div>
				</div>
			</div>
		</div>

	</div>
</div>
<script>
$(document).ready(function(){
	$("#BTN-SIMPAN-PEMBIAYAAN").click(function () {
		$(this).hide();
		$("#BTN-DISABLE").css('display','block');
		var nama = $("#NAMA").val();
		var kelas = $("#KELAS-SISWA").val();
		var biaya = $("#BIAYA").val();
		var mulia = $("#MULAI").val();
		var akhir = $("#AKHIR").val();
		var deskripsi = $("#DESKRIPSI").val();

		if (nama == '' || kelas == '' || biaya == '' || mulia == '' || akhir == ''|| deskripsi == '') {
			$("#flash-tambah").text('isi semua kolom');
		}else{
			if (deskripsi.length > 200) {
				$("#flash-tambah").text('isi semua kolom');	
			}else{
				$.ajax({
					url : '<?php echo site_url('UANGSAKU_sekolah/proses_tambah_data_pembiayaan') ?>',
					type : 'post',
					data : {nama : nama,kelas : kelas, biaya : biaya, mulia : mulia, akhir : akhir, deskripsi : deskripsi},
					success : function(response){
						if (response == 1) {
							$("#flash-tambah").text('berhasil tambah data pembiayaan');
						}else if(response == 2){
							$("#flash-tambah").text('gagal tambah data pembiayaan');
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