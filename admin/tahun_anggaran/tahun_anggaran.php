<!DOCTYPE html>
<html>
<head>
    <title>Tahun Anggaran</title>
</head>
<body>
    <h1>Pilih Tahun Anggaran</h1>
    <form action="" method="post">
        <label for="tahun">Tahun Anggaran:</label>
        <select name="tahun" id="tahun">
            <?php
            $tahunAwal = 2020;
            $tahunAkhir = 2025;

            for ($tahun = $tahunAwal; $tahun <= $tahunAkhir; $tahun++) {
                $selected = '';
                if (isset($_POST['tahun']) && $_POST['tahun'] == $tahun) {
                    $selected = 'selected';
                }
                echo "<option value='$tahun' $selected>$tahun</option>";
            }
            ?>
        </select>
        <br><br>
        <input type="submit" value="Cari">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["tahun"])) {
        $tahunAnggaran = $_POST["tahun"];
        echo "<h2>Anggaran untuk Tahun $tahunAnggaran</h2>";
        // Lakukan tindakan atau proses lain sesuai dengan tahun anggaran yang dipilih
    }
    ?>
</body>
</html>