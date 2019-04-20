<div class="col s12 m12 l12" id="isi">
	<div class="container">
		<div class="row">
			
			<div class="s12 m12 l12">
				<?php foreach ($data as $d):?>
				<div class="col s12 m12 l12" style="border: 1px solid #eee;margin-top: 10px;">
					<div class="col s6 m6 l6">
						<h6 class="grey-text">SALDO UANGSAKU</h6>
					</div>
					<div class="col s6 m6 l6">
						<h6 class="grey-text right">Rp <?php echo number_format($d->TOTAL_SALDO_SISWA); ?></h6>
					</div>
				</div>

				<div class="col s12 m12 l12" style="border: 1px solid #eee;margin-top: 10px;">
					<div class="col s12 m12 l12" style="border-bottom: 1px solid #eee">
						<h6 class="grey-text"><?php echo $d->NAMA_PEMBIAYAAN ?></h6>
					</div>
					<div class="col s10 m10 l10 offset-s1 offset-m1 offset-l1">
						<div class="col s12 m6 l6">
							<p class="grey-text">TOTAL BIAYA</p>
							<h4 class="blue-text center"><?php echo number_format($d->TOTAL_BIAYA) ?></h4>
						</div>
						<div class="col s12 m6 l6">
							<p class="grey-text">SUDAH TERBAYAR</p>
							<h4 class="blue-text center"><?php echo number_format($d->TOTAL_TERBAYAR) ?></h4>
						</div>
					</div>
				</div>

				<div class="col s12 m12 l12">
					<h6 class="grey-text">BAYAR KEBUTUHAN SEKOLAH</h6>
				</div>

				<div class="col s12 m12 l12" style="border: 1px solid #eee;margin-top: 10px;padding: 10px;">
					<div class="col s12 m12 l12">
						<small id="flash-bayar"></small>
					</div>
					<div class="input-field col s12 m8 l8">
			          <input placeholder="NOMINA UANG" id="NOMINA" type="number" class="validate">
			          <small class="grey-text" style="font-size: 10px;" id="nomina-bayar"><sup>Rp </sup>0</small>
			        </div>
			        <div class="col s12 m4 l4" style="margin-top: 10px;padding-top: 10px">
						<a class="btn yellow darken-3" style="width: 100%;border-radius: 25px;" id="BTN-BAYAR" <?php if ($d->TOTAL_BIAYA-$d->TOTAL_TERBAYAR == 0) {
							echo 'disabled';
						} ?>>BAYAR</a>
						<button class="waves-effect waves-light btn" id="BTN-DISABLE" disabled style="margin-top: 0!important; width: 100%; border-radius: 25px; display: none;">
			              <img src="<?php echo base_url('assets\img\app\icon/loading.gif') ?>">
			            </button>
					</div>
				</div>
				<?php endforeach ?>

			</div>

		</div>
	</div>
</div>
<?php foreach ($data as $d):?>
<script>
$(document).ready(function(){
	$("#NOMINA").on('keyup',function(){
		var biaya = $(this).val();
		if (biaya == '') {
			$("#nomina-bayar").html("<sup>Rp </sup>0");	
		}else{
			var bilangan = biaya;

		    var reverse = bilangan.toString().split('').reverse().join(''),
		    ribuan  = reverse.match(/\d{1,3}/g);
		    ribuan  = ribuan.join('.').split('').reverse().join('');
		    $("#nomina-bayar").html("<sup>Rp </sup>"+ribuan);
		}
	});
})
</script>
<script>
$(document).ready(function(){
	$("#NOMINA").on('keyup',function(){
		$("#flash-bayar").css('display','none');
		var nomina = parseInt($("#NOMINA").val());
		var saldo  = parseInt('<?php echo $d->TOTAL_SALDO_SISWA ?>');
		var total_biaya = '<?php echo $d->TOTAL_BIAYA ?>';
		var total_terbayar = '<?php echo $d->TOTAL_TERBAYAR ?>';
		if (nomina > saldo) {
			$("#flash-bayar").css('display','block');
			$("#flash-bayar").text('maaf saldo anda tidak mencukupi');
			$("#flash-bayar").attr('class','red-text');
		}if (nomina > total_biaya-total_terbayar) {
				$("#flash-bayar").css('display','block');
				$("#flash-bayar").text('nomina pembayaran anda terlalu banyak');
				$("#flash-bayar").attr('class','red-text');	
		}
	});
});
</script>
<script>
$(document).ready(function(){
	$("#BTN-BAYAR").click(function(){
		$(this).hide();
		$("#BTN-DISABLE").css('display','block');
		$("#flash-bayar").css('display','none');

		var nomina = parseInt($("#NOMINA").val());
		var saldo  = parseInt('<?php echo $d->TOTAL_SALDO_SISWA ?>');
		var id_tagihan = '<?php echo $this->input->get("id") ?>';
		var total_biaya = '<?php echo $d->TOTAL_BIAYA ?>';
		nama_pembiayaan = '<?php echo $d->NAMA_PEMBIAYAAN ?>';
		var total_terbayar = '<?php echo $d->TOTAL_TERBAYAR ?>';
		if (nomina > saldo) {
			$("#BTN-BAYAR").show();
			$("#BTN-DISABLE").css('display','none');

			$("#flash-bayar").css('display','block');
			$("#flash-bayar").text('maaf saldo anda tidak mencukupi');
			$("#flash-bayar").attr('class','red-text');
		}else{
			if (nomina > total_biaya-total_terbayar) {
				$("#BTN-BAYAR").show();
				$("#BTN-DISABLE").css('display','none');

				$("#flash-bayar").css('display','block');
				$("#flash-bayar").text('nomina pembayaran anda terlalu banyak');
				$("#flash-bayar").attr('class','red-text');	
			}else{
				$.ajax({
					url : '<?php echo site_url('UANGSAKU_Siswa/proses_bayar_saldo') ?>',
					type : 'post',
					data : {nomina:nomina,id_tagihan:id_tagihan,nama_pembiayaan:nama_pembiayaan},
					dataType : 'json',
					success : function(response){
						console.log();
						if (response['STATUS'] == 'sukses') {
							location.href="<?php echo site_url('SISWA/Bayar_sukses?id_tagihan=') ?>"+response['ID_PEMBAYARAN']+'&'+'id_jenis_pembiayaan='+<?php echo $d->ID_JENIS_PEMBIAYAAN ?>;
						}else if (response['STATUS'] == 'gagal') {
							$("#BTN-BAYAR").show();
							$("#BTN-DISABLE").css('display','none');

							$("#flash-bayar").css('display','block');
							$("#flash-bayar").text('pembayaran gagal');
							$("#flash-bayar").attr('class','red-text');
						}
					}
				});
			}
		}
	});
});
</script>
<?php endforeach ?>