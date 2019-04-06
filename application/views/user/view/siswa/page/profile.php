	<div class="col s12 m10 l10" id="isi">

		<div class="navbar" style="height: 200px;padding-top: 20px;">
			<div class="center">
				<div class="row">
					<div class="col s6 m2 l2 offset-s3 offset-m5 offset-l5 center">
						<div class="circle" style="height: 150px;width: 150px;overflow: hidden;margin: auto;">
						<img src="<?php echo base_url('assets/img/user/coba.jpg') ?>" id="foto-profil" alt="foto-profil" class="responsive-img" width="100%">
						</div>
					</div>
				</div>
		    	<h5 id="NAMA-KAMU" class="center">UANGSAKU</h5>
			</div>
		</div>

		<div class="container " style="margin-top: 60px;border: 1px solid #eee;padding: 50px 0px;border-radius: 5px;margin-bottom: 20px;height: max-content;">
			<div class="row">
				<div class="col s10 m10 l10 offset-s1 offset-m1 offset-l1">
					<h6 class="left red-text" id="flash"></h6>
					<a id="UBAH" class="right" style="cursor: pointer;display: block;">
						<h6>UBAH</h6>
					</a>
					<a id="SIMPAN" class="right" style="cursor: pointer;display: none;">
						<h6>SIMPAN</h6>
					</a>
				</div>
				<div class="input-field col s10 offset-s1">
				  <small>NIS</small><br>
				  <input value="" id="nis" type="text" disabled>
				</div>

				<div class="input-field col s10 offset-s1">
				  <small>Nama</small><br>
				  <input value="" id="nama" type="text" disabled autocomplete="off">
				</div>

				<div class="input-field col s10 offset-s1">
				  <small>No Telephon</small><br>
				  <input value="" id="telp" type="text" disabled autocomplete="off">
				</div>

			  	<div class="col s10 m10 l10 offset-s1 offset-m1 offset-l1 tips" style="border: 1px solid #eee;height: 45px;">
					<div class="col s10 m10 l10" style="padding-top: 6px;">
						<h6 id="TEXT-PIN">AMANKAN AKUN ANDA</h6>
					</div>
					<div class="col s2 m2 l1 center offset-l1" style="padding-top: 9px;">
						<a href="#PIN" class="modal-trigger" style="cursor: pointer;">
							<i class="material-icons">chevron_right</i>
						</a>
					</div>
				</div>
				<div class="col s10 m10 l10 offset-s1 offset-m1 offset-l1 tips" style="border: 1px solid #eee;height: 45px;">
					<div class="col s10 m10 l10" style="padding-top: 6px;">
						<h6 id="TEXT-PIN">UBAH FOTO PROFILE</h6>
					</div>
					<div class="col s2 m2 l1 center offset-l1" style="padding-top: 9px;">
						<a href="#EDIT-FOTO" class="modal-trigger">
							<i class="material-icons">chevron_right</i>
						</a>
					</div>
				</div>
				<a href="<?= site_url('UangSaku/logout') ?>">
			  	<div class="col s10 m10 l10 offset-s1 offset-m1 offset-l1 tips" style="border: 1px solid #eee;height: 45px;padding-top: 5px;">
					<h6 class="center">KELUAR</h6>
				</div>
				</a>
		  	</div>
		</div>
		<!-- MODAL FOTO PROFILE -->
		<div id="EDIT-FOTO" class="modal">
		    <div class="modal-content">
			    <h6>EDIT FOTO PROFILE</h6>
			    <input type="text" id="FOTO" name="FOTO">
		    </div>
			<div class="modal-footer">
			    <button type="submit" id="SIMPAN-FOTO" class="modal-action modal-close waves-effect waves-green btn-flat" >SIMPAN</button>
			</div>
		</div>
		<!-- MODAL PIN -->
		<div id="PIN" class="modal">
		    <div class="modal-content">
			    <h6 class="center">MASUKAN PIN</h6>
			    <div class="row">
			        <div class="input-field col s8 offset-s2">
			          <input type="text" id="pincode-input" class="PIN"><br>
			        </div>
			        <div class="input-field col s8 offset-s2">
			          <input type="text" id="pincode-input2" class="PIN2"><br>
			        </div>
		    	</div>
		    </div>
			<div class="modal-footer">
			    <button id="SIMPAN-PIN" class="modal-action modal-close waves-effect waves-green btn-flat" >SIMPAN</button>
			</div>
		</div>

	</div>
</div>
<script>
	$(document).ready(function () {
		$("#UBAH").click(function(){
			$(this).css("display","none");
			$("#SIMPAN").css("display","block");
			$("#nama").prop("disabled",false);
			$("#telp").prop("disabled",false);
		});
		$("#SIMPAN").click(function(){
			$("#flash").hide();
			$("#nama").prop("disabled",true);
			$("#telp").prop("disabled",true);
			$("#UBAH").css("display","block");
			$("#SIMPAN").css("display","none");
		});
	});
</script>