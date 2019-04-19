<div class="col s12 m10 l10" id="isi" style="padding: 0">
	<div class="col s12 m12 l12">
		
	<div class="col s12 m8 l8 offset-m2 offset-l2">
		<div class="col s8 m4 l4 offset-s2 offset-m4 offset-l4 center" id="DIV-FOTO-PROFILE" style="margin-top: 50px">
			<div class="circle center z-depth-1" id="CIRCLE-FOTO-PROFIL" style="overflow: hidden;height: 150px;width: 150px;margin: auto;border: 6px solid #FFC107;">
				<img src="<?php echo base_url('assets/img/app/developer/risqi.jpeg') ?>" width="100%" class="responsive-img">
			</div>
		</div>
		<div class="col s8 m4 l4 offset-s2 offset-m4 offset-l4 center">
			<h6 class="grey-text"><b><?php echo $this->session->userdata('USERNAME'); ?> | <?php echo $this->session->userdata('EMAIL'); ?></b></h6>
		</div>
		
		<a href="<?= site_url('ORANGTUA/Tentang') ?>">
		<div class="col s12 m12 l12" id="MENU-PROFILE" style="border-bottom: 1px solid #eee">
			<div class="col s3 m2 l1 center" id="ICON-MENU-PROFILE">
				<img src="<?= base_url('assets/img/app/icon/my_profile.png') ?>" class="responsive-img" style="height: 34px;width:34px;margin-top: 11px;margin-bottom: 4px;">
			</div>
			<div class="col s7 m8 l9" id="JUDUL-MENU-PROFILE" style="padding-top: 15px;">
				<h6>TENTANG KAMU</h6>
			</div>
			<div class="col s2 m2 l1 center offset-l1" id="LINK-MENU-PROFILE" style="padding-top: 15px;">
				
					<i class="material-icons">chevron_right</i>
				
			</div>
		</div>
		</a>

		<a class="modal-trigger" href="#kaitkan_anak">
		<div class="col s12 m12 l12" id="MENU-PROFILE" style="border-bottom: 1px solid #eee">
			<div class="col s3 m2 l1 center" id="ICON-MENU-PROFILE">
				<img src="<?= base_url('assets/img/app/icon/anak.png') ?>" class="responsive-img" style="height: 34px;width:34px;margin-top: 11px;margin-bottom: 4px;">
			</div>
			<div class="col s7 m8 l9" id="JUDUL-MENU-PROFILE" style="padding-top: 15px;">
				<h6>KAITKAN AKUN ANAK</h6>
			</div>
			<div class="col s2 m2 l1 center offset-l1" id="LINK-MENU-PROFILE" style="padding-top: 15px;">
				
					<i class="material-icons">chevron_right</i>
				
			</div>
		</div>
		</a>

		<a href="<?php echo site_url('UANGSAKU_orangtua/del_session') ?>">
		<div class="col s12 m12 l12" id="MENU-PROFILE" style="border-bottom: 1px solid #eee">
			<div class="col s3 m2 l1 center" id="ICON-MENU-PROFILE">
				<img src="<?= base_url('assets/img/app/icon/logout.png') ?>" class="responsive-img" style="height: 34px;width:34px;margin-top: 11px;margin-bottom: 4px;">
			</div>
			<div class="col s7 m8 l9" id="JUDUL-MENU-PROFILE" style="padding-top: 15px;">
				<h6>KELUAR</h6>
			</div>
			<div class="col s2 m2 l1 center offset-l1" id="LINK-MENU-PROFILE" style="padding-top: 15px;">
				
					<i class="material-icons">chevron_right</i>
				
			</div>
		</div>
		</a>
	</div>

	</div>
</div>

<div id="kaitkan_anak" class="modal">
    <div class="row">

          <div class="modal-content">
           	<h4 class="center">Kaitkan Akun Dengan Anak</h4>

            <!-- penulis -->
            <div class="input-field col s12 m12">
              <input placeholder="Parent Code" id="CODE" type="number" class="validate" name="CODE">
            </div>
            <button class="btn blue lighten-1 right" id="BTN-UBAH-EMAIL">
                <i class="material-icons">send</i>
            </button>
            <button class="waves-effect waves-light btn right" id="BTN-DISABLE2" disabled style="display: none;">
				<img src="<?php echo base_url('assets\img\app\icon/loading.gif') ?>">
			</button>

          </div>

        </div>
      </div>