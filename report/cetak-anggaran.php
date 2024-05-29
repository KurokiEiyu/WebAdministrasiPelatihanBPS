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

			$sql_tampil = "select * from tb_anggaran where kode_program='$kode'";
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
				<td>Nama Survei</td>
				<td>:</td>
				<td>
					<?php echo $data['nama_survei']; ?>
				</td>
			</tr>
			<tr>
				<td>Program</td>
				<td>:</td>
				<td>
					<?php echo $data['program']; ?>
				</td>
			</tr>
			<tr>
				<td>Kode Program</td>
				<td>:</td>
				<td>
					<?php echo $data['kode_program']; ?>
				</td>
			</tr>
			<tr>
				<td>Kegiatan</td>
				<td>:</td>
				<td>
					<?php echo $data['kegiatan']; ?>
				</td>
			</tr>
			<tr>
				<td>Kode Kegiatan</td>
				<td>:</td>
				<td>
					<?php echo $data['kode_kegiatan']; ?>
				</td>
			</tr>
			<tr>
				<td>KRO</td>
				<td>:</td>
				<td>
					<?php echo $data['kro']; ?>
				</td>
			</tr>
			<tr>
				<td>RO</td>
				<td>:</td>
				<td>
					<?php echo $data['ro']; ?>
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