<div class="container">
	<div class="row">
		<div class="col s10 m4 l4 offset-s1 offset-m4 offset-l4">
			<div class="card-panel card-konfirmasi-email">
				<div id="KONFIRMASI-EMAIL">
					<small class="red-text" id="flash">tolong isi formnya</small>
			        <p>kami telah mengirim kode verifikasi ke email test@gmail.com</p>
			        <div class="input-field col s12">
			          <input placeholder="KODE" id="VERIFIKASI_EMAIL_MITRA" type="number" class="validate" required="on" autofocus="on">
			        </div>
			        <div class="input-field col s12 center">
			        	<button class="waves-effect waves-light btn blue lighten-1" id="btn-lanjutkan">Lanjutkan</button>
			          	<button class="waves-effect waves-light btn blue lighten-1" id="btn-kode" disabled>30</button>
			        </div>
		        </div>
		    </div>
		</div>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	timer();
	var seconds = 30;
	function timer(){
		var id;
		id = setInterval(function(){
			if (seconds < 1) {
				clearInterval(id);
				$("#btn-kode").text("Kirim ulang");
				$("#btn-kode").removeAttr('disabled');
			}else{
				var detik = --seconds;
				$("#btn-kode").text(detik);
			}
		},1000);
	}
});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#btn-lanjutkan").click(function(){
			var kode = $("#VERIFIKASI_EMAIL_MITRA").val();
			if (kode == '') {
				$("#flash").css("display","block");
			}else{
				$("#VERIFIKASI_EMAIL_MITRA").attr("disabled");
				console.log(kode);
			}
		});
	});
</script>