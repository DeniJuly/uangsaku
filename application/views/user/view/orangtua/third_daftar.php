<div class="container">
	<div class="row">
		<div class="col s10 m4 l4 offset-s1 offset-m4 offset-l4">
			<div class="card-panel card-daftar-sekolah">
				<div id="FORM-DAFTAR-SEKOLAH">
			        <div class="input-field col s12">
			          <h6>Parent code :</h6>
			         <input placeholder="Parent Code" id="parent_code" type="number" class="validate" autocomplete="off" autofocus="on">
			        </div>
			        <div class="input-field col s12 center">
			          <button class="center waves-effect waves-light btn blue lighten-1" id="btn-lanjut">Lanjutkan</button>
			        </div>
		        </div>
	        </div>
		</div>
	</div>
</div>
<script>
        $(document).ready(function() {
            $('#parent_code').pincodeInput({hidedigits:false,complete:function(value, e, errorElement){
                
                $("#pincode-callback").html("This is the 'complete' callback firing. Current value: " + value);
                
                // check the code
                if(value!=5){
                    $(errorElement).html("The code is not correct. Should be '1234'");
                }else{
                    alert('code is correct!');
                }
                
            }});
</script>