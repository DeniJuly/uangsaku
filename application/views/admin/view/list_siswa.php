<div class="main-panel">
  <div class="content-wrapper"> 

    <div class="row center">
      <div class="col-12 grid-margin">
      <h1 class="display-3 text-primary">Daftar Data siswa</h1>
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
        <h3 class="modal-title text-primary" id="exampleModalLabel">Tambah Data siswa</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Nama siswa</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama siswa">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">NPSN</label>
          <input type="number" class="form-control" id="exampleInputPassword1" placeholder="NPSN">
        </div>
      </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function(){
    window.hapus_siswa = function(id) {
      $.ajax({
        url : '<?php echo site_url('UANGSAKU_admin/hapus_siswa') ?>',
        data : {id_user : id},
        type : 'post',
        success : function(response){
          if (response == 1) {
            var flash = '';
            flash += '<div class="alert alert-primary alert-dismissible fade show" role="alert" id="bungkus-alert">'+
                     'berhasil hapus akun siswa'+
                     '<button type="button" class="close" data-dismiss="alert" aria-label="Close" id="close-flash">'+
                     '<span aria-hidden="true">&times;</span>'+
                     '</button>'+
                     '</div>';
            $("#flash").html(flash);
            $("#STATUS-AKUN"+id).text("Status Akun : online");
          }else if(response == 2){
            var flash = '';
            flash += '<div class="alert alert-warning alert-dismissible fade show" role="alert" id="bungkus-alert">'+
                     'gagal hapus akun siswa'+
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
    window.aktifkan_siswa = function(id){
      $.ajax({
        url : '<?php echo site_url('UANGSAKU_admin/aktifkan_siswa') ?>',
        data : {id_user : id},
        type : 'post',
        success : function(response){
          if (response == 1) {
            var flash = '';
            flash += '<div class="alert alert-primary alert-dismissible fade show" role="alert" id="bungkus-alert">'+
                     'berhasil mengaktifkan akun siswa'+
                     '<button type="button" class="close" data-dismiss="alert" aria-label="Close" id="close-flash">'+
                     '<span aria-hidden="true">&times;</span>'+
                     '</button>'+
                     '</div>';
            $("#flash").html(flash);
            $("#STATUS-AKUN"+id).text("Status Akun : online");
          }else if(response == 2){
            var flash = '';
            flash += '<div class="alert alert-warning alert-dismissible fade show" role="alert" id="bungkus-alert">'+
                     'gagal mengaktifkan akun siswa'+
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
     window.nonaktifkan_siswa = function(id){
      $.ajax({
        url : '<?php echo site_url('UANGSAKU_admin/nonaktifkan_siswa') ?>',
        data : {id_user : id},
        type : 'post',
        success : function(response){
          if (response == 1) {
            var flash = '';
            flash += '<div class="alert alert-primary alert-dismissible fade show" role="alert" id="bungkus-alert">'+
                     'berhasil menonaktifkan akun siswa'+
                     '<button type="button" class="close" data-dismiss="alert" aria-label="Close" id="close-flash">'+
                     '<span aria-hidden="true">&times;</span>'+
                     '</button>'+
                     '</div>';
            $("#flash").html(flash);
            $("#STATUS-AKUN"+id).text("Status Akun : online");
          }else if(response == 2){
            var flash = '';
            flash += '<div class="alert alert-warning alert-dismissible fade show" role="alert" id="bungkus-alert">'+
                     'gagal menonaktifkan akun siswa'+
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
    url: '<?php echo site_url('UANGSAKU_admin/get_data_siswa') ?>',
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
                  "<p class='text-gray ellipsis mb-2'>Nama : "+data[i].NAMA+"</p>"+
                  "<p class='text-gray ellipsis mb-2'>Email : "+data[i].EMAIL+"</p>"+
                  "<p class='text-gray ellipsis mb-2'>NIK Ortu : "+data[i].NIK_ORANG_TUA+" | NIK : "+data[i].NIK+"</p>"+
                  "<p class='text-gray ellipsis mb-2'>No. Telp :"+data[i].NO_TELP+"</p>"+
                  "<p class='text-gray ellipsis mb-2' id='STATUS-AKUN"+data[i].ID_USER+"'>Status Akun : "+data[i].STATUS_USER+"</p>"+
                  "<div class='row text-gray d-md-flex d-none'>"+
                  "</div>"+
                  "</div>"+
                  "<div class='ticket-actions col-md-2'>"+
                  "<div class='btn-group dropdown'>"+
                  "<button type='button' class='btn btn-primary dropdown-toggle btn-sm' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Setting</button>"+
                  "<div class='dropdown-menu'>"+
                  "<button class='dropdown-item text-danger' onclick='hapus_siswa("+data[i].ID_USER+")' id='HAPUS-siswa' >"+
                    "<i class='mdi mdi-delete'></i>Hapus siswa</button>"+
                  "<a class='dropdown-item text-warning' onclick='nonaktifkan_siswa("+data[i].ID_USER+")'>"+
                    "<i class='mdi mdi-speaker-off fa-fw'></i>Nonaktifkan Akun</a>"+
                  "<a class='dropdown-item text-primary' onclick='aktifkan_siswa("+data[i].ID_USER+")'>"+
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