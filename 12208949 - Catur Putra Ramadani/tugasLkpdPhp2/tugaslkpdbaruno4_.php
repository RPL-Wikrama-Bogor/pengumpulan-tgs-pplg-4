<!DOCTYPE html>
<html>

<head>
    <title>Hitung Gaji Karyawan</title>
    
</head>

<body>
    <h2>Form Hitung Gaji Karyawan</h2>
    <form method="post" action="">
        <label for="nama">Nama Karyawan:</label>
        <input type="text" name="nama" required><br><br>

        <label for="gaji_pokok">Gaji Pokok:</label>
        <input type="number" name="gaji_pokok" required><br><br>

        <input type="submit" name="hitung" value="Hitung Gaji">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $nama = $_POST['nama'];
        $gaji_pokok = $_POST['gaji_pokok'];

        $tunj = 0.2 * $gaji_pokok;
        $pjk = 0.15 * ($gaji_pokok + $tunj);

        $gaji_bersih = $gaji_pokok + $tunj - $pjk;

        echo "<h3>Hasil Perhitungan Gaji</h3>";
        echo "Nama Karyawan: $nama<br>";
        echo "Besar Tunjangan: $tunj<br>";
        echo "Pajak: $pjk<br>";
        echo "Gaji Bersih: $gaji_bersih";
    }
    ?>
</body>

</html>