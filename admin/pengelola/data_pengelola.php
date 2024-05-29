<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Pengelola</h3>
	</div>
	<!-- /.card-header Kepala-->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-kepala" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Kepala</th>
						<th>NIP Kepala</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
			  $sql = $koneksi->query("SELECT * from tb_kepala");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $data['kepala']; ?>
						</td>
						<td>
							<?php echo $data['nip_kepala']; ?>
						</td>

						<td>
							</a>
							<a href="?page=edit-kepala&kode=<?php echo $data['nip_kepala']; ?>" title="Ubah" class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=del-kepala&kode=<?php echo $data['nip_kepala']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
							 title="Hapus" class="btn btn-danger btn-sm">
								<i class="fa fa-trash"></i>
						</td>
					</tr>

					<?php
              }
            ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body Kepala -->

	<!-- /.card-body PPK -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-ppk" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>PPK</th>
						<th>NIP PPK</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
			  $sql = $koneksi->query("SELECT * from tb_ppk");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $data['ppk']; ?>
						</td>
						<td>
							<?php echo $data['nip_ppk']; ?>
						</td>

						<td>
							</a>
							<a href="?page=edit-ppk&kode=<?php echo $data['nip_ppk']; ?>" title="Ubah" class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=del-ppk&kode=<?php echo $data['nip_ppk']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
							 title="Hapus" class="btn btn-danger btn-sm">
								<i class="fa fa-trash"></i>
						</td>
					</tr>

					<?php
              }
            ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body PPK -->


	<!-- /.card-body Bendahara -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-bendahara" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Bendahara</th>
						<th>NIP Bendahara</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
			  $sql = $koneksi->query("SELECT * from tb_bendahara");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $data['bendahara']; ?>
						</td>
						<td>
							<?php echo $data['nip_bendahara']; ?>
						</td>

						<td>
							</a>
							<a href="?page=edit-bendahara&kode=<?php echo $data['nip_bendahara']; ?>" title="Ubah" class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=del-bendahara&kode=<?php echo $data['nip_bendahara']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
							 title="Hapus" class="btn btn-danger btn-sm">
								<i class="fa fa-trash"></i>
						</td>
					</tr>

					<?php
              }
            ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body Bendahara -->

	<!-- /.card-body Kasubag Umum -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-kasubag-umum" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Kasubag Umum</th>
						<th>NIP Kasubag Umum</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
			  $sql = $koneksi->query("SELECT * from tb_kasubag_umum");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $data['kasubag_umum']; ?>
						</td>
						<td>
							<?php echo $data['nip_kasubag_umum']; ?>
						</td>

						<td>
							</a>
							<a href="?page=edit-kasubag-umum&kode=<?php echo $data['nip_kasubag_umum']; ?>" title="Ubah" class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=del-kasubag-umum&kode=<?php echo $data['nip_kasubag_umum']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
							 title="Hapus" class="btn btn-danger btn-sm">
								<i class="fa fa-trash"></i>
						</td>
					</tr>

					<?php
              }
            ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body Kasubag Umum -->