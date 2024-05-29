<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Rate Transport</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-rate-transport" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Lokasi Kegiatan</th>
						<th>Kabupaten/Kota</th>
						<th>Kecamatan</th>
						<th>Desa/Kelurahan</th>
                        <th>Nilai</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
			  $sql = $koneksi->query("SELECT * from tb_rate_transport");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $data['lokasi_kegiatan']; ?>
						</td>
						<td>
							<?php echo $data['kabupaten_kota']; ?>
						</td>
						<td>
							<?php echo $data['kecamatan']; ?>
						</td>
						<td>
							<?php echo $data['desa_kelurahan']; ?>
						</td>
                        <td>
							<?php echo $data['nilai']; ?>
						</td>


						<td>
							<a href="?page=view-rate-transport&kode=<?php echo $data['kode_rate']; ?>" title="Detail"
							 class="btn btn-info btn-sm">
								<i class="fa fa-eye"></i>
							</a>
							</a>
							<a href="?page=edit-rate-transport&kode=<?php echo $data['kode_rate']; ?>" title="Ubah" class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=del-rate-transport&kode=<?php echo $data['kode_rate']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
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