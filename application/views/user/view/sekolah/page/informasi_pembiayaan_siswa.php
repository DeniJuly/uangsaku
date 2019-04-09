<div class="col s12 m12 l12" id="isi-sub">
	<div class="container">
	<div class="row">

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
						<th>NAMA</th>
						<th>KELAS</th>
						<th>KETERANGAN</th>
						<th>OPSI</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="center">1</td>
						<td>12111</td>
						<td>Deni</td>
						<td>10</td>
						<td>Belum lunas</td>
						<td>
							<a class='right dropdown-button' data-activates='DROPDOWN-OPSI' id="DROPDOWN-TABEL">
								<i class="material-icons">more_vert</i>
							</a>
							<!-- Dropdown Structure -->
							  <ul id='DROPDOWN-OPSI' class='dropdown-content'>
							    <li class="blue-text">
							    	<a href="<?php echo site_url('SEKOLAH/detail_data_pembiayaan') ?>" class="blue-text modal-trigger">INGATKAN</a>
							    </li>
							  </ul>
						</td>
					</tr>
					<tr>
						<td class="center">1</td>
						<td >12111</td>
						<td>Deni</td>
						<td>11</td>
						<td>Belum lunas</td>
						<td>
							<a class='right dropdown-button' data-activates='DROPDOWN-OPSI' id="DROPDOWN-TABEL">
								<i class="material-icons">more_vert</i>
							</a>
							<!-- Dropdown Structure -->
							  <ul id='DROPDOWN-OPSI' class='dropdown-content'>
							    <li class="blue-text">
							    	<a href="<?php echo site_url('SEKOLAH/detail_data_pembiayaan') ?>" class="blue-text modal-trigger">INGATKAN</a>
							    </li>
							  </ul>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	</div>
	</div>
</div>