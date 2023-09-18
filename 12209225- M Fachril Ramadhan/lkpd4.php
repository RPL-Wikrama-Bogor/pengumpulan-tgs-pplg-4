<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pegawai</title>
</head>
<body>
    <h1>Masukkan Nomor Pegawai</h1>
    <form method="post" action="">
        Nama Pegawai: <input type="text" name="nP">
        Gaji pokok: <input type="number" name="gp">
        <input type="submit" value="Cetak Informasi" name="submit">
    </form>

    <?php

        if(isset($_POST['submit'])) {

            $nama = $_POST['nP'];
            $gp = $_POST['gp'];

            $tunj = 0.2 * $gp;
            $pjk = 0.15 * ($gp + $tunj);
            $gb = $gp + $tunj - $pjk;

            echo "<h3>Hasil perhitungan</h3>";
            echo "Nama Karyawan : $nama<br>";
            echo "Tunjangan : Rp $tunj<br>";
            echo "Pajak : Rp $pjk<br>";
            echo "Gaji Bersih : Rp $gb";
        }

     ?>
</body>
</html>