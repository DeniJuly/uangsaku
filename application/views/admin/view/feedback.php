<div class="main-panel">
  <div class="content-wrapper"> 

    <div class="row center">
      <div class="col-12 grid-margin">
      <h1 class="display-3 text-primary">Daftar Data feedback</h1>
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
        <h3 class="modal-title text-primary" id="exampleModalLabel">Tambah Data feedback</h3>
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
          <label for="exampleInputPassword1">Nama feedback</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama feedback">
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
    url: '<?php echo site_url('UANGSAKU_admin/get_data_feedback') ?>',
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
                  "<h4 class='text-dark font-weight-semibold mr-2 mb-0 no-wrap'>"+data[i].USERNAME+"</h4>"+
                  "</div>"+
                  "<p class='text-gray ellipsis mb-2'>ID_USER : "+data[i].ID_USER+"</p>"+
                  "<p class='text-gray ellipsis mb-2'>Nilai feedback : "+data[i].NILAI_FEEDBACK+"</p>"+
                  "<p class='text-gray ellipsis mb-2'>Deskripsi : "+data[i].DESKRIPSI_FEEDBACK+"</p>"+
                  "<div class='row text-gray d-md-flex d-none'>"+
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