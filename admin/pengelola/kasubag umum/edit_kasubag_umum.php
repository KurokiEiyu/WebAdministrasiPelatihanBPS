<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_kasubag_umum WHERE nip_kasubag_umum='".$_GET['kode']."'";
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
				<label class="col-sm-2 col-form-label">Kasubag Umum</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="kasubag_umum" name="kasubag_umum" value="<?php echo $data_cek['kasubag_umum']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIP Kasubag Umum</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nip_kasubag_umum" name="nip_kasubag_umum" value="<?php echo $data_cek['nip_kasubag_umum']; ?>"
					/>
				</div>
			</div>
		</div>

		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-pengelola" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
	
if (isset ($_POST['Ubah'])){

        $sql_ubah = "UPDATE tb_kasubag_umum SET
			kasubag_umum='".$_POST['kasubag_umum']."'
            WHERE nip_kasubag_umum='".$_POST['nip_kasubag_umum']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);

		$sql_ubah = "UPDATE tb_kasubag_umum SET
			kasubag_umum='".$_POST['kasubag_umum']."'
            WHERE nip_kasubag_umum='".$_POST['nip_kasubag_umum']."'";
	$query_ubah = mysqli_query($koneksi, $sql_ubah);

    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-pengelola';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-pengelola';
            }
        })</script>";
    }
}

