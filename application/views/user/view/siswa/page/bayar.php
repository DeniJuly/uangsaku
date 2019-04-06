<div class="col s12 m12 l12">
	<div class="container">
		<div class="row">
			<div class="col s12 m12 l12">
					
				<div class="col s12 m8 l8 offset-m2 offset-l2" id="BUNGKUS-BAYAR-KEBUTUHAN-SEKOLAH">
			        <div class="card-panel" id="CARD-BAYAR-KEBUTUHAN-SEKOLAH">
				        <!-- form -->
				        <div class="row">
				          <div class="col s12 m3 l3 center">
				            <img src="<?= base_url('assets/img/app/icon/pembayaran_100.png') ?>">
				          </div>
				          <div class="col s12 m9 l9" id="INFO-BAYAR-KEBUTUHAN-SEKOLAH">
				          	<h6 class="grey-text">PEMBAYARAN SPP | SMKN 1 Bawang</h6>
				          	<table>
				          		<tr>
				          			<td class="grey-text" id="JML-BAYAR">Jumlah Pembayaran : <sup>Rp </sup>1.000.000</td>
				          		</tr>
				          		<tr>
				          			<td class="grey-text" id="JML-TERBAYAR">Terbayar : <sup>Rp </sup>500.000</td>
				          		</tr>
				          	</table>
				          	<small class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus commodi eius dolorem temporibus maiores, tempora cupiditate mollitia nulla vero quam numquam dolorum. Voluptatum quod ducimus nesciunt alias ut nam nulla.</small>
				          </div>
				          <div class="input-field col s10 offset-s1">
				            <small class="red-text" id="flash">*isi semua colom</small>
				            <input placeholder="NISN" name="NISN" id="NISN" type="text" class="validate" autocomplete="off" required="on">
				          </div>

				          <div class="input-field col s10 offset-s1">
				            <input placeholder="NOMINA UANG" name="NOMINA" id="NOMINA" type="number" class="validate" required="on">
				          </div>

				          <div class="col s10 center offset-s1">
				            <button class="waves-effect waves-light btn blue" id="BAYAR">BAYAR</button>
				          </div>
				        </div>
				              <!-- end form -->
		            </div>
			    </div>	
					
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function() {
		$("#BAYAR").click(function(){
			var NISN = $("#NISN").val();
			var NOMINA = $("#NOMINA").val();

			if (NISN == '' || NOMINA == '') {
				$("#flash").css('display','block');
			}else{
				alert(NISN , NOMINA);
			}
		});
	});
</script>