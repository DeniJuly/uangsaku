<div class="col s12 m10 l10" id="isi">
<div class="row">
    <div class="col s12 m12 l12">
      <div class="card white">
        <div class="card-content">
        	<div class="row">
				<div class="col s12 m4 l4">
					<h4>Profile Mitra</h4>
				    <div class="card grey lighten-4 z-depth-0">
				        <div class="card-content black-text">
				        	<div class="center">
					        	<img class="circle" src="<?php echo base_url('assets/img/user/coba.jpg') ?>" style="width: 200px;">
					        	<i class="material-icons orange-text">star star star star star</i>
					        	<p class="grey-text darken-1">Merupakan Mitra UangSaku dari SMK Negeri 1 Bawang</p>
				        	</div>
				        </div>
				    </div>
				</div>
				<div class="col s12 m6 l6">
				    <div class="card white lighten-4 z-depth-0">
				        <div class="card-content black-text">
				        	<div>
					        	<div class="input-field col s12">
					        		<p class="black-text">Nama</p>
						        	<input placeholder="Nama" id="nama" type="text" class="validate" disabled>
						        </div>
						        <div class="input-field col s12">
					        		<p class="black-text">Email</p>
						        	<input placeholder="Email" id="email" type="email" class="validate" disabled>
						        </div>
						        <div class="input-field col s12">
					        		<p class="black-text">Alamat</p>
						        	<input placeholder="Alamat" id="alamat" type="text" class="validate" disabled>
						        </div>
						        <button class="waves-effect waves-light btn blue lighten-1" id="flash"></button>
						        <button class="waves-effect waves-light btn blue lighten-1" id="ubah">Ubah Profile</button>
						        <button class="waves-effect waves-light btn blue lighten-1" id="simpan" style="display: none;">Simpan</button>
				        	</div>
				        </div>
				    </div>
				</div>
			</div>
        </div>
      </div>
    </div>
</div>
</div>

<script>
	$(document).ready(function () {
		$("#ubah").click(function(){
			$(this).css("display","none");
			$("#simpan").css("display","block");
			$("#nama").prop("disabled",false);
			$("#email").prop("disabled",false);
			$("#alamat").prop("disabled",false);
		});
		$("#simpan").click(function(){
			$("#flash").hide();
			$("#nama").prop("disabled",true);
			$("#email").prop("disabled",true)
			$("#alamat").prop("disabled",true);
			$("#ubah").css("display","block");
			$("#simpan").css("display","none");
		});
	});
</script>