<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from tb_rate_transport WHERE kode_rate='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
<div class="row">

	<div class="col-md-8">
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Detail Rate Transport</h3>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body p-0">
				<table class="table">
					<tbody>
						<tr>
							<td style="width: 150px">
								<b>Kode Rate</b>
							</td>
							<td>:
								<?php echo $data_cek['kode_rate']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Lokasi Kegiatan</b>
							</td>
							<td>:
								<?php echo $data_cek['lokasi_kegiatan']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Kabputen/Kota</b>
							</td>
							<td>:
								<?php echo $data_cek['kabupaten_kota']; ?>
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
								<b>Desa/Kelurahan</b>
							</td>
							<td>:
								<?php echo $data_cek['desa_kelurahan']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nilai</b>
							</td>
							<td>:
								<?php echo $data_cek['nilai']; ?>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="card-footer">
					<a href="?page=rate-transport" class="btn btn-warning">Kembali</a>

					<a href="./report/cetak-ratetransport.php?kode=<?php echo $data_cek['kode_rate']; ?>" target=" _blank"
					 title="Cetak Data Rate Transport" class="btn btn-primary">Print</a>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="card card-success">
			<div class="card-header">

				<h3 class="profile-username text-center">
					<?php echo $data_cek['kode_rate']; ?>
					-
					<?php echo $data_cek['lokasi_kegiatan']; ?>
				</h3>
			</div>
		</div>
	</div>

</div>