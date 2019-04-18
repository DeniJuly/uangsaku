<div class="col s12 m10 l10" id="isi" style="padding: 0">
	<div class="col s12 m12 l12">
		
	<div class="col s12 m8 l8 offset-m2 offset-l2">
		<div class="col s8 m4 l4 offset-s2 offset-m4 offset-l4 center" id="DIV-FOTO-PROFILE">
			<div class="circle center z-depth-1" id="CIRCLE-FOTO-PROFIL">
				<img src="<?php echo base_url('assets/img/app/developer/deni.jpg') ?>" width="100%" class="responsive-img">
			</div>
		</div>
		<div class="col s8 m4 l4 offset-s2 offset-m4 offset-l4 center">
			<h6 class="grey-text" id="NAMA-PROFILE"></h6>
			<h6 class="grey-text" id="PARENT-CODE-PROFILE"><b></b></h6>
		</div>

		<div class="col s12 m12 l12" id="MENU-PROFILE">
			<div class="col s2 m2 l1 center" id="ICON-MENU-PROFILE">
				<img src="<?= base_url('assets/img/app/icon/my_profile.png') ?>" class="responsive-img">
			</div>
			<div class="col s8 m8 l9" id="JUDUL-MENU-PROFILE">
				<h6>TENTANG KAMU</h6>
			</div>
			<div class="col s2 m2 l1 center offset-l1" id="LINK-MENU-PROFILE">
				<a href="<?= site_url('SISWA/Tentang') ?>">
					<i class="material-icons">chevron_right</i>
				</a>
			</div>
		</div>

		<div class="col s12 m12 l12" id="MENU-PROFILE">
			<div class="col s2 m2 l1 center" id="ICON-MENU-PROFILE">
				<img src="<?= base_url('assets/img/app/icon/logout.png') ?>" class="responsive-img">
			</div>
			<div class="col s8 m8 l9" id="JUDUL-MENU-PROFILE">
				<h6>KELUAR</h6>
			</div>
			<div class="col s2 m2 l1 center offset-l1" id="LINK-MENU-PROFILE">
				<a href="<?= site_url('SISWA/Topup') ?>">
					<i class="material-icons">chevron_right</i>
				</a>
			</div>
		</div>

	</div>

	</div>
</div>
<script>
	$(document).ready(function(){
		$.ajax({
			url : '<?php echo site_url('UANGSAKU_siswa/get_data_all') ?>',
			type : 'post',
			dataType : 'json',
			success : function(data){
				$("#NAMA-PROFILE").html('<b>'+data[0].NAMA+'</b>');
				$("#PARENT-CODE-PROFILE").text('parent code : '+data[0].PARENT_CODE);
			}
		});
	});
</script>