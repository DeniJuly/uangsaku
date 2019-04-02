<div class="container">
	<div class="row">
		<div class="col s10 m4 l4 offset-s1 offset-m4 offset-l4">
			<div class="card-panel card-daftar-sekolah">
				<div id="FORM-DAFTAR-SEKOLAH">
			        <div class="input-field col s12">
			          <input placeholder="Parent Code" id="VERIFIKASI_EMAIL_SEKOLAH" type="number" class="validate" required="on" autofocus="on">
			        </div>
			        <div class="input-field col s12 center">
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
				$("#btn-kode").text("Next");
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
		$("#VERIFIKASI_EMAIL_SEKOLAH").on("keyup",function(){
			var kode = $(this).val();
			if (kode.length == 4) {
				$(this).attr("disabled");
				if (kode == 1234) {
					alert('benar');
				}else{
					alert('salah');
				}
			}
		});
	});
</script>