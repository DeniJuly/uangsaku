<div class="col s12 m10 l10" id="isi">
<div class="row">
    <form class="col s12 m6 l6">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">search</i>
          <input id="icon_prefix" type="text" class="validate" placeholder="Cari Barang">
        </div>
    </form>
  </div>
<div class="row">
    <div class="col s12 m12 l12">
      <div class="card white">
        <div class="card-content">
        	<table class="striped">
		        <thead>
		          <tr>	
				    
		            <th><input type="checkbox" class="filled-in" id="filled-in-box" />
				  <label for="filled-in-box"></label>Foto</th>
		            <th>Produk</th>
		            <th class="center"><i class="material-icons orange-text">star</i>Rating</th>
		            <th></th>
		          </tr>
		        </thead>

		        <tbody>
		          <tr>
		            <td>
		            	<input type="checkbox" class="filled-in" id="check" /><label for="check"></label>
		            	<img class="circle" src="<?php echo base_url('assets/img/user/coba.jpg') ?>" style="width: 80px; margin-left: 10px;">
		            </td>
		            <td>
			            <h5>UangSaku</h5>
			            <p>Stok 7(tersedia)</p>
			            <p>kode txoa7s2</p>
			            <p class="blue-text lighten-1">Rp. 700.000</p>
			        </td>
		            <td class="center">5</td>
		            <td>
		            <a class="modal-trigger" href="#modal1"><i class="material-icons blue-text tooltipped" data-position="top" data-delay="50" data-tooltip="edit produk">edit</i></a>&nbsp;
		            <a href=""><i class="material-icons red-text tooltipped" data-position="top" data-delay="50" data-tooltip="hapus produk">delete</i></a>
		            </td>
		          </tr>
		        </tbody>
		    </table>
        </div>
      </div>
    </div>
</div>
</div>
  <!-- Modal -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Edit Data Produk</h4>
      <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          	<input placeholder="Nama Produk" id="Nama" type="text" class="validate">
          	<label for="Nama">Nama Produk</label>
        </div>
        <div class="input-field col s6">
        	<input placeholder="Harga" id="Harga" type="number" class="validate">
          	<label for="Harga">Harga</label>
        </div>
        <div class="input-field col s4">
        	<input placeholder="Stok" id="Stok" type="number" class="validate">
          	<label for="Stok">Stok</label>
        </div>
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" placeholder="Deskripsi Barang"></textarea>
          <label for="textarea1">Deskripsi Barang</label>
        </div>
     </div>
     </form>
    </div>
    <div class="modal-footer">
    	<a href="#!" class="modal-close waves-effect"><button class="waves-effect waves-light btn-flat" id="btn-daftar">Batal</button></a>
      <button class="waves-effect waves-light btn blue lighten-1" id="btn-daftar">Simpan</button>
    </div>
  </div>