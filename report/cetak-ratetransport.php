<?php
	include "../inc/koneksi.php";
	
	$kode = $_GET['kode'];

	$sql_cek = "SELECT * FROM tb_profil";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
	{
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>CETAK DATA</title>
</head>

<body>
	<center>

		<h2>
			<?php echo $data_cek['nama_profil']; ?>
		</h2>
		<h3>
			<?php echo $data_cek['alamat']; ?>
			<hr / size="2px" color="black">

			<?php
			}

			$sql_tampil = "select * from tb_rate_transport where kode_rate='$kode'";
			$query_tampil = mysqli_query($koneksi, $sql_tampil);
			$no=1;
			while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
		?>
	</center>

	<center>
		<h4>
			<u>DATA</u>
		</h4>
	</center>

	<table border="1" cellspacing="0" style="width: 90%" align="center">
		<tbody>
			<tr>
				<td>Lokasi Kegiatan</td>
				<td>:</td>
				<td>
					<?php echo $data['lokasi_kegiatan']; ?>
				</td>
			</tr>
			<tr>
				<td>Kabupaten/Kota</td>
				<td>:</td>
				<td>
					<?php echo $data['kabupaten_kota']; ?>
				</td>
			</tr>
			<tr>
				<td>Kecamatan</td>
				<td>:</td>
				<td>
					<?php echo $data['kecamatan']; ?>
				</td>
			</tr>
			<tr>
				<td>Desa/Kelurahan</td>
				<td>:</td>
				<td>
					<?php echo $data['desa_kelurahan']; ?>
				</td>
			</tr>
			<tr>
				<td>Nilai</td>
				<td>:</td>
				<td>
					<?php echo $data['nilai']; ?>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>


	<script>
		window.print();
	</script>

</body>

</html>