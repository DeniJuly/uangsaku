<div class="col s12 m12 l12" id="isi-sub">
	<div class="container">
		<div class="row">
			<div class="col s12 m10 l10 offset-m1 offset-l1" id="BUNGKUS-FORM">
				<div class="card-panel" id="CARD-FORM">
					<h5 class="grey-text">EDIT DATA SISWA</h5>
					<small class="red-text" id="flash-edit"></small>
					<?php foreach ($data as $d) :?>
					<div class="input-field col s12">
			          <input value="<?php echo $d->NISN ?>" id="NISN-EDIT" type="number" class="validate">
			        </div>
			        <div class="input-field col s12">
			          <input value="<?php echo $d->NAMA ?>" id="NAMA-EDIT" type="text" class="validate">
			        </div>
			        <div class="input-field col s12">
			        	<?php if ($this->session->userdata('TINGKAT_SEKOLAH') == 'smp/mts') :?>
			        		<select id="KELAS-EDIT-SISWA">
						      	<option value="VII" <?php if ($d->KELAS == 'VII') {echo "selected";} ?>>VII</option>
						      	<option value="VIII" <?php if ($d->KELAS == 'VIII') {echo "selected";} ?>>VIII</option>
						      	<option value="IX" <?php if ($d->KELAS == 'IX') {echo "selected";} ?>>IX</option>
						    </select>
						<?php elseif ($this->session->userdata('TINGKAT_SEKOLAH') == 'sma/smk') :?>
							<select id="KELAS-EDIT-SISWA">
						      	<option value="X" <?php if ($d->KELAS == 'X') {echo "selected";} ?>>X</option>
						      	<option value="XI" <?php if ($d->KELAS == 'XI') {echo "selected";} ?>>XI</option>
						      	<option value="XII" <?php if ($d->KELAS == 'XII') {echo "selected";} ?>>XII</option>
						    </select>
						<?php endif ?>
			        </div>
			        <div class="col s12">
						<button id="BTN-EDIT-SISWA" class="btn yellow darken-2">SIMPAN</button>
						<button class="waves-effect waves-light btn" id="BTN-DISABLE" disabled style="margin-top: 0!important; width: 118px; border-radius: 25px; display: none;">
			              <img src="<?php echo base_url('assets\img\app\icon/loading.gif') ?>">
			            </button>
		        	</div>
				<?php endforeach ?>
				</div>
			</div>
		</div>

	</div>
</div>
<script>
	$(document).ready(function(){
		$("#BTN-EDIT-SISWA").click(function(){
			$(this).hide();
			$("#BTN-DISABLE").css('display','block');

			var nisn = $("#NISN-EDIT").val();
			var nama = $("#NAMA-EDIT").val();
			var kelas= $("#KELAS-EDIT-SISWA").val();
			var id   = '<?php echo $this->uri->segment(3) ?>';
			if (nisn == '' || nama == '' || kelas == '') {
				$("#flash-edit").text('isi semua kolom');
				$("#BTN-EDIT-SISWA").show();
				$("#BTN-DISABLE").css('display','none');
			}else{
				$.ajax({
					url : '<?php echo site_url('UANGSAKU_Sekolah/proses_edit_siswa') ?>',
					type :'post',
					data : {nisn : nisn, nama : nama, kelas : kelas,id:id},
					success : function(respone){
						if (respone == 1) {
							location.href="<?php echo site_url('SEKOLAH/Siswa') ?>";
						}else if(respone == 2){
							$("#flash-edit").text('gagal edit data siswa');
							$("#BTN-EDIT-SISWA").show();
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