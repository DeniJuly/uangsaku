	<div class="col s12 m10 l10" id="isi">
		<div class="col s3 m1 l1" id="tambah-siswa">
			<a class="waves-effect waves-light btn modal-trigger white" href="#TAMBAH"><i class="material-icons blue-text">add</i></a>
		</div>
		<div class="col s12 m9 l9">
			<div class="input-field col s9 m9 l9">
	          <input placeholder="Cari Siswa" id="key" type="text" class="validate" autocomplete="off" autofocus="on">
	        </div>
	          <a class="waves-effect waves-light btn white btn-cari-siswa"><i class="material-icons blue-text">search</i></a>
		</div>
		<div class="col s12 m12 l12">
			<div class="col s12 m12 l12">
				<h5 class="left">Data Siswa</h5> 
				<div class="chip" style="margin-left: 10px;margin-top: 5px;">
				    100 siswa
				</div>
			</div>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th class="center">NO</th>
						<th>NIS</th>
						<th>Nama</th>
						<th class="center">Info</th>
						<th class="center">Opsi</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="center">1</td>
						<td >12111</td>
						<td>Deni</td>
						<td class="center">
							<a href="#INFO" class="admin-b btn orange modal-trigger"><i class="material-icons">info_outline</i></a>
						</td>
						<td class="center">
							<a href="#EDIT" class="admin-b btn cyan modal-trigger"><i class="material-icons">create</i></a>
							<a href="#hapus" class="admin-b btn red modal-trigger"><i class="material-icons">delete_forever</i></a>
						</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<th class="center">NO</th>
						<th>NIS</th>
						<th>Nama</th>
						<th class="center">Info</th>
						<th class="center">Opsi</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>
<!-- Modal edit -->
  <div id="EDIT" class="modal modal-fixed-footer">
  	<div class="modal-header">
  		<h5 class="center">Edit Data Siswa</h5>
  	</div>
    <div class="modal-content">
    	<div class="container">
	      	<div class="input-field col s12">
	          <input placeholder="NISN" id="NISN" type="number" class="validate">
	        </div>
	        <div class="input-field col s12">
	          <input placeholder="NAMA" id="NISN" type="number" class="validate">
	        </div>
	        <div class="input-field col s12">
	          <input placeholder="KELAS" id="NISN" type="number" class="validate">
	        </div>
        </div>
    </div>
    <div class="modal-footer">
      <a id="btn-simpan-siswa" class="waves-effect btn white blue-text">EDIT</a>
    </div>
  </div>
 <!-- Modal edit -->
  <div id="INFO" class="modal modal-fixed-footer" style="height: 57%!important">
  	<div class="modal-header">
  		<h5 class="center">Info Data Siswa</h5>
  	</div>
    <div class="modal-content">
    	<div class="container">
	      	<div class="input-field col s12">
	          <input placeholder="NISN" id="NISN" type="number" class="validate" disabled>
	        </div>
	        <div class="input-field col s12">
	          <input placeholder="NAMA" id="NISN" type="number" class="validate" disabled>
	        </div>
	        <div class="input-field col s12">
	          <input placeholder="KELAS" id="NISN" type="number" class="validate" disabled>
	        </div>
        </div>
    </div>
  </div>

<!-- Modal tambah -->
  <div id="TAMBAH" class="modal modal-fixed-footer">
  	<div class="modal-header">
  		<h5 class="center">Tambah Siswa</h5>
  	</div>
    <div class="modal-content">
    	<div class="container">
	      	<div class="input-field col s12">
	          <input placeholder="NISN" id="NISN" type="number" class="validate">
	        </div>
	        <div class="input-field col s12">
	          <input placeholder="NAMA" id="NISN" type="number" class="validate">
	        </div>
	        <div class="input-field col s12">
	          <input placeholder="KELAS" id="NISN" type="number" class="validate">
	        </div>
        </div>
    </div>
    <div class="modal-footer">
      <a id="btn-simpan-siswa" class="waves-effect btn white blue-text">SIMPAN</a>
    </div>
  </div>