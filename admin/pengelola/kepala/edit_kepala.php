<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_kepala WHERE nip_kepala='".$_GET['kode']."'";
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
				<label class="col-sm-2 col-form-label">Kepala</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="kepala" name="kepala" value="<?php echo $data_cek['kepala']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIP Kepala</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nip_kepala" name="nip_kepala" value="<?php echo $data_cek['nip_kepala']; ?>"
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

        $sql_ubah = "UPDATE tb_kepala SET
			kepala='".$_POST['kepala']."'
            WHERE nip_kepala='".$_POST['nip_kepala']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);

		$sql_ubah = "UPDATE tb_kepala SET
			kepala='".$_POST['kepala']."'
            WHERE nip_kepala='".$_POST['nip_kepala']."'";
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

