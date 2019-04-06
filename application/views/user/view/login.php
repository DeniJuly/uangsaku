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
                    <input placeholder="EMAIL" name="EMAIL" id="EMAIL" type="email" class="validate" autocomplete="off" required="on">
                  </div>

                  <div class="input-field col s10 offset-s1">
                    <input placeholder="PASSWORD" name="PASSWORD" id="PASSWORD" type="password" class="validate" required="on">
                    <a id="view-pass">
                      <i class="material-icons" id="icon-view-pass">visibility_off</i>
                    </a>
                  </div>

                  <div class="col s10 center offset-s1" id="DIV-BTN-MASUK-LOGIN">
                    <button class="waves-effect waves-light btn blue" id="masuk">masuk</button><br>
                  </div>
                <div class="col s10 offset-s1" style="margin-top: 5px;">
                </div>
              </div>
              <!-- end form -->
            </div>
          </div>
        </div>
      </div>
<script type="text/javascript" src="<?= base_url('assets/js/hide-show.js') ?>"></script>