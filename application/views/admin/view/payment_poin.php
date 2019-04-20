<div class="main-panel">
  <div class="content-wrapper"> 

    <div class="row center">
      <div class="col-12 grid-margin">
      <button type="button" class="btn btn-primary btn-lg btn-rounded" data-toggle="modal" data-target="#exampleModal" style="margin-bottom: 20px;"><i class="mdi mdi-library-plus"></i>Tambah Payment poin</button>
      <h1 class="display-3 text-primary">DAFTAR USER PAYMENT POIN</h1>
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
        <div id="ISI"></div>
      </div>
    </div>
  </div>
</div>

<!-- modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title text-primary" id="exampleModalLabel">Tambah Data PAYMENT POIN</h3>
        <small id="flash"></small>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="FORM-TAMBAH-PAYMENT-POIN">
        <div class="form-group">
          <label for="NAMA">NAMA</label>
          <input type="text" class="form-control" id="NAMA" placeholder="Enter NAMA" name="NAMA">
        </div>
        <div class="form-group">
          <label for="EMAIL">EMAIL</label>
          <input type="email" class="form-control" id="EMAIL" placeholder="Enter EMAIL" name="EMAIL">
        </div>
        <div class="form-group">
          <label for="ALAMAT">ALAMAT</label>
          <input type="text" class="form-control" id="ALAMAT" placeholder="Enter ALAMAT" name="ALAMAT">
        </div>
        <div class="form-group">
          <label for="PASSWORD">PASSWORD</label>
          <input type="password" class="form-control" id="PASSWORD" placeholder="PASSWORD" name="PASSWORD">
        </div>
      </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary" id="BTN-SIMPAN">Simpan</button>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function(){
    window.hapus_payment_poin = function(id) {
      $.ajax({
        url : '<?php echo site_url('UANGSAKU_admin/hapus_payment_poin') ?>',
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
    window.aktifkan_payment_poin = function(id){
      $.ajax({
        url : '<?php echo site_url('UANGSAKU_admin/aktifkan_payment_poin') ?>',
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
     window.nonaktifkan_payment_poin = function(id){
      $.ajax({
        url : '<?php echo site_url('UANGSAKU_admin/nonaktifkan_payment_poin') ?>',
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
<script>
$(document).ready(function() {
  $.ajax({
    url: '<?php echo site_url('UANGSAKU_admin/get_data_payment_poin') ?>',
    type : 'post',
    dataType : 'json',
    success : function(data){
      var hasil = '';
      for (var i = 0; i < data.length; i++) {
          hasil +="<div class='card'>"+
                  "<div class='card-body'>"+
                  "<div class='fluid-container'>"+
                  "<div class='row ticket-card mt-3 pb-2 mb-3'>"+
                  "<div class='col-md-1'>"+
                  "<img class='img-sm rounded-circle mb-4 mb-md-0' src='<?php echo site_url('assets/img/app/logo/logo_200.png') ?>' alt='profile image'>"+
                  "</div>"+
                  "<div class='ticket-details col-md-9'>"+
                  "<div class='d-flex'>"+
                  "<h4 class='text-dark font-weight-semibold mr-2 mb-0 no-wrap'>SMK Negeri 1 Bawang</h4>"+
                  "</div>"+
                  "<p class='text-gray ellipsis mb-2'>Email : "+data[i].EMAIL+"</p>"+
                  "<p class='text-gray ellipsis mb-2'>Alamat :"+data[i].ALAMAT+"</p>"+
                  "<p class='text-gray ellipsis mb-2' id='STATUS-AKUN"+data[i].ID_USER+"'>Status Akun : "+data[i].STATUS_USER+"</p>"+
                  "<div class='row text-gray d-md-flex d-none'>"+
                  "</div>"+
                  "</div>"+
                  "<div class='ticket-actions col-md-2'>"+
                  "<div class='btn-group dropdown'>"+
                  "<button type='button' class='btn btn-primary dropdown-toggle btn-sm' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Setting</button>"+
                  "<div class='dropdown-menu'>"+
                  "<button class='dropdown-item text-danger' onclick='hapus_payment_poin("+data[i].ID_USER+")' id='HAPUS-SEKOLAH' >"+
                    "<i class='mdi mdi-delete'></i>Hapus Sekolah</button>"+
                  "<a class='dropdown-item text-warning' onclick='nonaktifkan_payment_poin("+data[i].ID_USER+")'>"+
                    "<i class='mdi mdi-speaker-off fa-fw'></i>Nonaktifkan Akun</a>"+
                  "<a class='dropdown-item text-primary' onclick='aktifkan_payment_poin("+data[i].ID_USER+")'>"+
                    "<i class='mdi mdi-account fa-fw'></i>Aktifkan Akun</a>"+
                  "<div class='dropdown-divider'></div>"+
                  "</div>"+
                  "</div>"+
                  "</div>"+
                  "</div>"+
                  "</div>"+
                  "</div>"+
                  "</div>";
      }
      $("#ISI").html(hasil);
    }
  });
});
</script>
<script>
$(document).ready(function(){
  $("#BTN-SIMPAN").click(function(){
      var NAMA = $("#NAMA").val();
      var EMAIL = $("#EMAIL").val();
      var ALAMAT = $("#ALAMAT").val();
      var PASSWORD = $("#PASSWORD").val();
      if (NAMA == ''||EMAIL == ''||ALAMAT==''||PASSWORD=='') {
        $("#flash").attr('class','text-danger');
        $(this).text('isi semua form');
      }else{
        $.ajax({
            url:'<?php echo site_url('UANGSAKU_admin/proses_tambah_payment_poin') ?>',
            type:"post",
            data:{NAMA : NAMA, EMAIL : EMAIL,ALAMAT : ALAMAT, PASSWORD : ALAMAT},
            success: function(response){
              if (response == 1) {
                $("#flash").attr('class','text-danger');
                $(this).text('email atau nama sudah terdaftar');
              }else if (response == 2) {
                $("#flash").attr('class','text-danger');
                $(this).text('gagal tambah user payment poin');
              }
            }
        });
      }
  });
});
</script>