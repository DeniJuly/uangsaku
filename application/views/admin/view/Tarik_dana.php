<div class="main-panel">
  <div class="content-wrapper"> 

    <div class="row center">
      <div class="col-12 grid-margin">
      <h1 class="display-3 text-primary">Daftar Penarikan Dana Sekolah</h1>
        <div class="row">
        <div class="col col-4 right">
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Search</label>
            <div class="col-sm-10">
              <input type="search" class="form-control" id="inputPassword" placeholder='search' autocomplete="off" autofocus>
            </div>
          </div>
          </div>
          <div id="flash" class="col-sm-12 col-md-6 col-lg-6"></div>
        </div>
        <div id="ISI">
          <div class='card'>
            <?php foreach ($data as $d):?>
                  <div class='card-body'>
                  <div class='fluid-container'>
                  <div class='row ticket-card mt-3 pb-2 mb-3'>
                  <div class='col-md-1'>
                  <img class='img-sm rounded-circle mb-4 mb-md-0' src='<?php echo site_url('assets/img/app/logo/logo_200.png') ?>' alt='profile image'>
                  </div>
                  <div class='ticket-details col-md-9'>
                  <div class='d-flex'>
                  <h4 class='text-dark font-weight-semibold mr-2 mb-0 no-wrap'></h4>
                  </div>
                  <p class='text-gray ellipsis mb-2'>Email : <?php echo $d->EMAIL ?></p>
                  <p class='text-gray ellipsis mb-2'>NO REKENING : <?php echo $d->NO_REKENING ?> </p>
                  <p class='text-gray ellipsis mb-2'>TOTAL PENARIKAN : Rp <?php echo number_format($d->TOTAL_PENARIKAN_DANA_SEKOLAH) ?></p>
                  <p class='text-gray ellipsis mb-2' id='STATUS-AKUN'>Status Penarikan : <?php if ($d->STATUS_PENARIKAN_DANA_SEKOLAH == '111') {
                    echo 'sudah di taransfer';
                  }else{
                    echo 'dalam proses';
                  } ?></p>
                  <div class='row text-gray d-md-flex d-none'>
                  </div>
                  </div>
                  <div class='ticket-actions col-md-2'>
                  <div class='btn-group dropdown'>
                  <button type='button' class='btn btn-primary dropdown-toggle btn-sm' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Setting</button>
                  <div class='dropdown-menu'>
                  <button class='dropdown-item text-danger' onclick='hapus_sekolah(data[i].ID_USER)' id='HAPUS-SEKOLAH' >
                    <i class='mdi mdi-delete'></i>Hapus Sekolah</button>
                  <a class='dropdown-item text-primary' data-toggle="modal" data-target="#exampleModal" >
                    <i class='mdi mdi-account fa-fw'></i>UPLOAD BUKTI</a>
                  <div class='dropdown-divider'></div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
            <?php endforeach ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title text-primary" id="exampleModalLabel">Tambah Data Sekolah</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="FOTO-BUKTI" method="post">
        <div class="form-group">
          <label for="exampleInputPassword1">BUKTI TRANSAKSI</label>
          <input type="file" class="form-control" id="foto" name="foto" placeholder="NPSN">
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="BTN-UPLOAD-BUKTI">Simpan</button>
      </form>
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
  $("#FOTO-BUKTI").submit(function(e){
    e.preventDefault();
    $.ajax({
      url:'<?php echo site_url('UANGSAKU_admin/proses_upload_bukti') ?>',
      type:"post",
      data:new FormData(this),
      processData:false,
      contentType:false,
      cache:false,
      async:false,
      success: function(response){
        if (response == 1) {
          var flash = '';
            flash += '<div class="alert alert-primary alert-dismissible fade show" role="alert" id="bungkus-alert">'+
                     'berhasil upload bukti transaksi'+
                     '<button type="button" class="close" data-dismiss="alert" aria-label="Close" id="close-flash">'+
                     '<span aria-hidden="true">&times;</span>'+
                     '</button>'+
                     '</div>';
            $("#flash").html(flash);
        }else if (response == 2) {
          var flash = '';
            flash += '<div class="alert alert-primary alert-dismissible fade show" role="alert" id="bungkus-alert">'+
                     'gagal upload bukti transaksi'+
                     '<button type="button" class="close" data-dismiss="alert" aria-label="Close" id="close-flash">'+
                     '<span aria-hidden="true">&times;</span>'+
                     '</button>'+
                     '</div>';
            $("#flash").html(flash);
        }
      }
    });
  });
});
</script>
<script>
  $(document).ready(function(){
    window.hapus_sekolah = function(id) {
      $.ajax({
        url : '<?php echo site_url('UANGSAKU_admin/hapus_sekolah') ?>',
        data : {id_user : id},
        type : 'post',
        success : function(response){
          if (response == 1) {
            var flash = '';
            flash += '<div class="alert alert-primary alert-dismissible fade show" role="alert" id="bungkus-alert">'+
                     'berhasil hapus akun sekolah'+
                     '<button type="button" class="close" data-dismiss="alert" aria-label="Close" id="close-flash">'+
                     '<span aria-hidden="true">&times;</span>'+
                     '</button>'+
                     '</div>';
            $("#flash").html(flash);
            $("#STATUS-AKUN"+id).text("Status Akun : online");
          }else if(response == 2){
            var flash = '';
            flash += '<div class="alert alert-warning alert-dismissible fade show" role="alert" id="bungkus-alert">'+
                     'gagal hapus akun sekolah'+
                     '<button type="button" class="close" data-dismiss="alert" aria-label="Close" id="close-flash">'+
                     '<span aria-hidden="true">&times;</span>'+
                     '</button>'+
                     '</div>';
            $("#flash").html(flash);
            $("#flash").css('display','block');
          }
        }
      });
    }
    window.aktifkan_sekolah = function(id){
      $.ajax({
        url : '<?php echo site_url('UANGSAKU_admin/aktifkan_sekolah') ?>',
        data : {id_user : id},
        type : 'post',
        success : function(response){
          if (response == 1) {
            var flash = '';
            flash += '<div class="alert alert-primary alert-dismissible fade show" role="alert" id="bungkus-alert">'+
                     'berhasil mengaktifkan akun sekolah'+
                     '<button type="button" class="close" data-dismiss="alert" aria-label="Close" id="close-flash">'+
                     '<span aria-hidden="true">&times;</span>'+
                     '</button>'+
                     '</div>';
            $("#flash").html(flash);
            $("#STATUS-AKUN"+id).text("Status Akun : online");
          }else if(response == 2){
            var flash = '';
            flash += '<div class="alert alert-warning alert-dismissible fade show" role="alert" id="bungkus-alert">'+
                     'gagal mengaktifkan akun sekolah'+
                     '<button type="button" class="close" data-dismiss="alert" aria-label="Close" id="close-flash">'+
                     '<span aria-hidden="true">&times;</span>'+
                     '</button>'+
                     '</div>';
            $("#flash").html(flash);
            $("#flash").css('display','block');
          }
        }
      });
    }
     window.nonaktifkan_sekolah = function(id){
      $.ajax({
        url : '<?php echo site_url('UANGSAKU_admin/nonaktifkan_sekolah') ?>',
        data : {id_user : id},
        type : 'post',
        success : function(response){
          if (response == 1) {
            var flash = '';
            flash += '<div class="alert alert-primary alert-dismissible fade show" role="alert" id="bungkus-alert">'+
                     'berhasil menonaktifkan akun sekolah'+
                     '<button type="button" class="close" data-dismiss="alert" aria-label="Close" id="close-flash">'+
                     '<span aria-hidden="true">&times;</span>'+
                     '</button>'+
                     '</div>';
            $("#flash").html(flash);
            $("#STATUS-AKUN"+id).text("Status Akun : online");
          }else if(response == 2){
            var flash = '';
            flash += '<div class="alert alert-warning alert-dismissible fade show" role="alert" id="bungkus-alert">'+
                     'gagal menonaktifkan akun sekolah'+
                     '<button type="button" class="close" data-dismiss="alert" aria-label="Close" id="close-flash">'+
                     '<span aria-hidden="true">&times;</span>'+
                     '</button>'+
                     '</div>';
            $("#flash").html(flash);
            $("#flash").css('display','block');
          }
        }
      });
    }
  });
</script>