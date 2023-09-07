<!DOCTYPE html>
<html>
<head>
    <title>Cetak Informasi Pegawai</title>
</head>
<body>
    <h2>Masukkan Nomor Pegawai:</h2>
    <form method="post">
        <input type="text" name="nomor_pegawai" placeholder="Masukkan Nomor Pegawai" required>
        <input type="submit" name="submit" value="Cetak Informasi">
    </form>

    <?php
    
    if (isset($_POST['submit'])) {
        
        $nomorPegawai = $_POST['nomor_pegawai'];

       
        if (strlen($nomorPegawai) == 11) {
            
            $nomorGolongan = substr($nomorPegawai, 0, 1);
            $tanggal = substr($nomorPegawai, 1, 2);
            $bulan = substr($nomorPegawai, 3, 2);
            $tahun = substr($nomorPegawai, 5, 4);
            $nomorUrut = substr($nomorPegawai, 9, 2);

            
            $namaBulan = date("F", mktime(0, 0, 0, $bulan, 1));

            // Cetak informasi pegawai
            echo "<h2>Informasi Pegawai:</h2>";
            echo "Nomor Golongan: " . $nomorGolongan . "<br>";
            echo "Tanggal Lahir: " . $tanggal . " " . $namaBulan . " " . $tahun . "<br>";
            echo "Nomor Urut: " . $nomorUrut;
        } else {
            echo "<p>Nomor pegawai harus memiliki 11 karakter.</p>";
        }
    }
    ?>
</body>
</html>
