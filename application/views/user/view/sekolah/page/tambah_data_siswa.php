<div class="col s12 m12 l12" id="isi-sub">
	<div class="container">
		<div class="row">
			<div class="col s12 m10 l10 offset-m1 offset-l1" id="BUNGKUS-FORM">
				<div class="card-panel" id="CARD-FORM">
					<h5 class="grey-text">TAMBAH DATA SISWA</h5>
					<small id="flash-tambah" style="display: block;"></small>
					<div class="input-field col s12">
			          <input placeholder="NISN" id="NISN-TAMBAH" type="number" class="validate">
			        </div>
			        <div class="input-field col s12">
			          <input placeholder="NAMA" id="NAMA-TAMBAH" type="text" class="validate">
			        </div>
			        <div class="input-field col s12">
			        	<?php if ($this->session->userdata('TINGKAT_SEKOLAH') == 'smp/mts') :?>
			        		<select id="KELAS-TAMBAH-SISWA">
						      	<option value="VII" >VII</option>
						      	<option value="VIII" >VIII</option>
						      	<option value="IX" >IX</option>
						    </select>
						<?php elseif ($this->session->userdata('TINGKAT_SEKOLAH') == 'sma/smk') :?>
							<select id="KELAS-TAMBAH-SISWA">
						      	<option value="X" >X</option>
						      	<option value="XI" >XI</option>
						      	<option value="XII" >XII</option>
						    </select>
						<?php endif ?>
			        </div>
			        <div class="col s12">
						<button id="BTN-TAMBAH-SISWA" class="btn yellow darken-2">SIMPAN</button>
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
		$("#BTN-TAMBAH-SISWA").click(function(){
			$(this).hide();
			$("#BTN-DISABLE").css('display','block');

			var nisn = $("#NISN-TAMBAH").val();
			var nama = $("#NAMA-TAMBAH").val();
			var kelas= $("#KELAS-TAMBAH-SISWA").val();
			if (nisn == '' || nama == '' || kelas == '') {
				$("#flash-TAMBAH").text('isi semua kolom');
				$("#BTN-TAMBAH-SISWA").show();
				$("#BTN-DISABLE").css('display','none');
			}else{
				$.ajax({
					url : '<?php echo site_url('UANGSAKU_Sekolah/proses_tambah_siswa') ?>',
					type :'post',
					data : {nisn : nisn, nama : nama, kelas : kelas},
					success : function(respone){
						if (respone == 1) {
							$("#flash-tambah").text('NISN sudah terdaftar');
							$("flash-tambah").attr('class','red-text');
							$("#BTN-TAMBAH-SISWA").show();
							$("#BTN-DISABLE").css('display','none');
						}else if(respone == 2){
							$("#flash-tambah").text('gagal tambah data siswa');
							$("flash-tambah").attr('class','red-text');
							$("#BTN-TAMBAH-SISWA").show();
							$("#BTN-DISABLE").css('display','none');
						}else if(respone == 3){
							$("#flash-tambah").text('berhasil tambah data siswa');
							$("flash-tambah").attr('class','blue-text');
							$("#BTN-TAMBAH-SISWA").show();
							$("#BTN-DISABLE").css('display','none');
						}
					}
				});
			}
		});
	});
</script>
<script>
	$(document).ready(function() {
    $('select').material_select();
  });
</script>