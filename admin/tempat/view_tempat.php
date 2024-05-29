<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from tb_tempat WHERE kode_tempat='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
<div class="row">

	<div class="col-md-8">
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Detail Tempat</h3>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body p-0">
				<table class="table">
					<tbody>
						<tr>
							<td style="width: 150px">
								<b>Kode Tempat</b>
							</td>
							<td>:
								<?php echo $data_cek['kode_tempat']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Tempat</b>
							</td>
							<td>:
								<?php echo $data_cek['tempat']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Alamat</b>
							</td>
							<td>:
								<?php echo $data_cek['alamat']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Desa/Kelurahan</b>
							</td>
							<td>:
								<?php echo $data_cek['desa_kelurahan']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Kecamatan</b>
							</td>
							<td>:
								<?php echo $data_cek['kecamatan']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Kabupaten/Kota</b>
							</td>
							<td>:
								<?php echo $data_cek['kabupaten_kota']; ?>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="card-footer">
					<a href="?page=tempat" class="btn btn-warning">Kembali</a>

					<a href="./report/cetak-tempat.php?kode=<?php echo $data_cek['kode_tempat']; ?>" target=" _blank"
					 title="Cetak Data Tempat" class="btn btn-primary">Print</a>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="card card-success">
			<div class="card-header">

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body">

				<h3 class="profile-username text-center">
					<?php echo $data_cek['kode_tempat']; ?>
					-
					<?php echo $data_cek['tempat']; ?>
				</h3>
			</div>
		</div>
	</div>

</div>