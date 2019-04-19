<div class="container">
  <div class="row">
    <div class="col s12 m4 l4 offset-m4 offset-l4">
      <div id="CARD-LOGIN">
        <!-- form -->
        <div class="row">
          <div class="col s6 m6 l6 offset-s3 offset-m3 offset-l3 center">
            <img src="<?= base_url('assets/img/app/logo/logo_120.png') ?>" id="LOGO-LOGIN">
          </div>
          <div class="input-field col s10 offset-s1">
            <small class="red-text" id="flash">*isi semua colom</small>
            <input placeholder="EMAIL" name="EMAIL" id="EMAIL" type="email" class="validate" autofocus="on" autocomplete="off" required="on">
          </div>

          <div class="input-field col s10 offset-s1">
            <input placeholder="PASSWORD" name="PASSWORD" id="PASSWORD" type="password" class="validate" required="on">
            <a id="view-pass">
              <i class="material-icons" id="icon-view-pass">visibility_off</i>
            </a>
          </div>

          <div class="col s10 center offset-s1" id="DIV-BTN-MASUK-LOGIN">
            <button class="waves-effect waves-light btn yellow darken-2" id="BTN-LOGIN">masuk</button>
            <button class="waves-effect waves-light btn" id="BTN-DISABLE" disabled style="margin-top: 0!important; width: 100%; border-radius: 25px; display: none;">
              <img src="<?php echo base_url('assets\img\app\icon/loading.gif') ?>">
            </button>
          </div>
        </div>
              <!-- end form -->
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="<?= base_url('assets/js/hide-show.js') ?>"></script>
<script>
  $("#BTN-LOGIN").click(function(){
    $(this).hide();
    $("#BTN-DISABLE").css('display','block');
    var EMAIL   = $("#EMAIL").val();
    var PASSWORD= $("#PASSWORD").val();
    if (EMAIL == '' || PASSWORD == '') {
      $("#BTN-DISABLE").css('display','none');
      $("#BTN-LOGIN").show();
      $("#flash").css('display','block');
    }else{
      $.ajax({
        url : '<?php echo site_url('UANGSAKU/proses_masuk') ?>',
        type : 'post',
        data : {EMAIL : EMAIL , PASS : PASSWORD},
        success : function(response){
          if (response == 1) {
            location.href= '<?php base_url() ?>'
          }else if (response == 2) {
            $("#BTN-DISABLE").css('display','none');
            $("#BTN-LOGIN").show();
            $("#flash").css('display','block');
            $("#flash").text('username atau password salah');
          }
        }
      });
    }
  });
</script>