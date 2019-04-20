<div class="col s12 m10 l10" id="isi" style="padding: 0">
	<div class="col s12 m12 l12">
		
	<div class="col s12 m8 l8 offset-m2 offset-l2">
		<div class="col s8 m4 l4 offset-s2 offset-m4 offset-l4 center" id="DIV-FOTO-PROFILE">
			<div class="circle center z-depth-1" id="CIRCLE-FOTO-PROFIL">
				<a href="#EDIT-FOTO" class="btn-floating waves-effect waves-light z-depth-0 grey lighten-1 modal-trigger" id="BTN-EDIT-FOTO-PROFILE">
					<i class="material-icons">create</i>
				</a>
				<img src="" width="100%" class="responsive-img" id="FOTO-PROFILE">
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
				$("#FOTO-PROFILE").attr('src','<?php echo base_url("assets/img/user/siswa/foto-profile/") ?>'+data[0].FOTO);
			}
		});
	});
</script>
<!-- Modal Structure -->
<div id="EDIT-FOTO" class="modal">
    <div class="modal-content">
      <h5>EDIT FOTO PROFILE</h5>
      <small id="flash-edit-profile"></small>
      	<form id="FORM-FOTO-PROFILE">
	    <div class="file-field input-field">
	      <div class="btn btn-small">
	        <i class="material-icons">add_a_photo</i>
	        <input type="file" name="FOTO">
	      </div>
	      <div class="file-path-wrapper">
	        <input class="file-path validate" type="text">
	      </div>
	    </div>
      
    </div>
    <div class="modal-footer">
    	<button class="btn blue lighten-1 right" id="BTN-UBAH-FOTO-PROFILE">
            <i class="material-icons">send</i>
        </button>
        <button class="waves-effect waves-light btn right" id="BTN-DISABLE2" disabled style="display: none;">
			<img src="<?php echo base_url('assets\img\app\icon/loading.gif') ?>">
		</button>
		</form>
	</div>
</div>

<script>
$(document).ready(function(){
	$('#FORM-FOTO-PROFILE').submit(function(e){
        e.preventDefault(); 
        var foto = new FormData(this);
        $("#BTN-UBAH-FOTO-PROFILE").hide();
		$("#BTN-DISABLE2").css('display','block');
        $.ajax({
            url:'<?php echo site_url('UANGSAKU_siswa/ubah_foto_profile') ?>',
            type:"post",
            data:foto,
            processData:false,
            contentType:false,
            cache:false,
            async:false,
            success: function(response){
            	if (response == 1) {
            		$("#BTN-UBAH-FOTO-PROFILE").show();
            		$("#BTN-DISABLE2").css('display','none');

            		$("#flash-edit-profile").attr('class','blue-text');
                	$("#flash-edit-profile").text('berhasil ganti foto profile');
            	}else if(response == 2){
            		$("#BTN-UBAH-FOTO-PROFILE").show();
            		$("#BTN-DISABLE2").css('display','none');

            		$("#flash-edit-profile").attr('class','rad-text');
            		$("#flash-edit-profile").text('gagal ganti foto profile');
            	}
            }
        });
    });
});
</script>