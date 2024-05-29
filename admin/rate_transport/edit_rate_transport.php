<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_rate_transport WHERE kode_rate='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kode Rate</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="kode_rate" name="kode_rate" value="<?php echo $data_cek['kode_rate']; ?>"
					 readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Lokasi Kegiatan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="lokasi_kegiatan" name="lokasi_kegiatan" value="<?php echo $data_cek['lokasi_kegiatan']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kabupaten/Kota</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="kabupaten_kota" name="kabupaten_kota" value="<?php echo $data_cek['kabupaten_kota']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kecamatan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?php echo $data_cek['kecamatan']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Desa/Kelurahan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="desa_kelurahan" name="desa_kelurahan" value="<?php echo $data_cek['desa_kelurahan']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nilai</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nilai" name="nilai" value="<?php echo $data_cek['nilai']; ?>"
					/>
				</div>
			</div>
		</div>

		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=rate-transport" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

if (isset ($_POST['Ubah'])){

        $sql_ubah = "UPDATE tb_rate_transport SET
			lokasi_kegiatan='".$_POST['lokasi_kegiatan']."',
			kabupaten_kota='".$_POST['kabupaten_kota']."',
			kecamatan='".$_POST['kecamatan']."',
			desa_kelurahan='".$_POST['desa_kelurahan']."',
			nilai='".$_POST['nilai']."'		
            WHERE kode_rate='".$_POST['kode_rate']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);

		$sql_ubah = "UPDATE tb_rate_transport SET
			lokasi_kegiatan='".$_POST['lokasi_kegiatan']."',
			kabupaten_kota='".$_POST['kabupaten_kota']."',
			kecamatan='".$_POST['kecamatan']."',
			desa_kelurahan='".$_POST['desa_kelurahan']."',
			nilai='".$_POST['nilai']."'		
			WHERE kode_rate='".$_POST['kode_rate']."'";
		$query_ubah = mysqli_query($koneksi, $sql_ubah);

    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=rate-transport';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=rate-transport';
            }
        })</script>";
    }
}
