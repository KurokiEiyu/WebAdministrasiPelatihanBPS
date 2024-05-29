<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Anggaran</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-anggaran" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Nama Survei</th>
						<th>Program</th>
						<th>Kode Program</th>
						<th>Kegiatan</th>
						<th>Kode Kegiatan</th>
						<th>KRO</th>
						<th>RO</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
			  $sql = $koneksi->query("SELECT * from tb_anggaran");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $data['nama_survei']; ?>
						</td>
						<td>
							<?php echo $data['program']; ?>
						</td>
						<td>
							<?php echo $data['kode_program']; ?>
						</td>
						<td>
							<?php echo $data['kegiatan']; ?>
						</td>
						<td>
							<?php echo $data['kode_kegiatan']; ?>
						</td>
                        <td>
							<?php echo $data['kro']; ?>
						</td>
						<td>
							<?php echo $data['ro']; ?>
						</td>


						<td>
							<a href="?page=view-anggaran&kode=<?php echo $data['kode_program']; ?>" title="Detail"
							 class="btn btn-info btn-sm">
								<i class="fa fa-eye"></i>
							</a>
							</a>
							<a href="?page=edit-anggaran&kode=<?php echo $data['kode_program']; ?>" title="Ubah" class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=del-anggaran&kode=<?php echo $data['kode_program']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
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
	<!-- /.card-body -->