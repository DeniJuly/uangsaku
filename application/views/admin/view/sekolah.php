<div class="main-panel">
  <div class="content-wrapper"> 

    <div class="row center">
      <div class="col-12 grid-margin">
      <button type="button" class="btn btn-primary btn-lg btn-rounded" data-toggle="modal" data-target="#exampleModal" style="margin-bottom: 20px;"><i class="mdi mdi-library-plus"></i>Tambah Sekolah</button> <h1 class="display-3 text-primary">Daftar Sekolah Terdaftar</h1>
        <form>
        <div class="col col-4 right">
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Search</label>
            <div class="col-sm-10">
              <input type="search" class="form-control" id="inputPassword" placeholder='search' autocomplete="off" autofocus>
            </div>
          </div>
          </div>
        </form>
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
      <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Nama Sekolah</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Sekolah">
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
$(document).ready(function() {
  $.ajax({
    url: '<?php echo site_url('UANGSAKU_admin/get_data_sekolah') ?>',
    type : 'post',
    success : function(response){
      var hasil = '';
      for (var i = 0; i < response.length; i++) {
          hasil +="<div class='card'>"+
                  "<div class='card-body'>"+
                    "<div class='fluid-container'>"+
                      "<div class='row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3'>"+
                        "<div class='col-md-1'>"+
                          "<img class='img-sm rounded-circle mb-4 mb-md-0' src='<?php echo site_url('assets/img/app/logo/logo_200.png') ?>' alt='profile image'>"+
                        "</div>"+
                        "<div class='ticket-details col-md-9'>"+
                          "<div class='d-flex'>"+
                            "<h4 class='text-dark font-weight-semibold mr-2 mb-0 no-wrap'>SMK Negeri 1 Bawang</h4>"+
                          "</div>"+
                          "<p class='text-gray ellipsis mb-2'>Email : "+response[i].EMAIL+"</p>"+
                          "<p class='text-gray ellipsis mb-2'>NPSN : "+response[i].NPSN+"</p>"+
                          "<p class='text-gray ellipsis mb-2'>Alamat :"+response[i].ALAMAT"</p>"+
                          "<p class='text-gray ellipsis mb-2'>Status Akun : "+response[i].+"</p>"+
                          <div class="row text-gray d-md-flex d-none">
                            <div class="col-4 d-flex">
                              <small class="mb-0 mr-2 text-muted text-muted">Jumlah Siswa :</small>
                              <small class="Last-responded mr-2 mb-0 text-muted text-muted">2000</small>
                            </div>
                          </div>
                        </div>
                        <div class="ticket-actions col-md-2">
                          <div class="btn-group dropdown">
                            <button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Setting
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item text-danger" href="#" onclick="confirm('Hapus Data Sekolah? Ini akan menghapus semua data termasuk data siswa.');">
                                <i class="mdi mdi-delete"></i>Hapus Sekolah</a>
                              <a class="dropdown-item text-warning" href="#" onclick="confirm('Menonaktifkan Akun akan membuat user terkait tidak dapat melakukakan apapun !');">
                                <i class="mdi mdi-speaker-off fa-fw"></i>Nonaktifkan Akun</a>
                              <a class="dropdown-item text-primary" href="#" onclick="confirm('Menonaktifkan Akun akan membuat user terkait tidak dapat melakukakan apapun !');">
                                <i class="mdi mdi-account fa-fw"></i>Aktifkan Akun</a>
                              <div class="dropdown-divider"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
      }
    }
  });
});
</script>