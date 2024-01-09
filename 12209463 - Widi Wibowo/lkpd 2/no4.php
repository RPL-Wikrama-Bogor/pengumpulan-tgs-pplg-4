<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Gaji Karyawan</title>
</head>
<body>
    <h1>Kalkulator Gaji Karyawan</h1>
    <form method="post" action="">
        Nama Karyawan: <input type="text" name="nama"><br>
        Gaji Pokok: <input type="text" name="gaji_pokok"><br>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $gaji_pokok = floatval($_POST["gaji_pokok"]);

        $tunj = 0.2 * $gaji_pokok;
        $pjk = 0.15 * ($gaji_pokok + $tunj);
        $gaji_bersih = $gaji_pokok + $tunj - $pjk;

        echo "<h2>Hasil Perhitungan Gaji Karyawan</h2>";
        echo "Nama Karyawan: $nama<br>";
        echo "Tunjangan: $tunj<br>";
        echo "Pajak: $pjk<br>";
        echo "Gaji Bersih: $gaji_bersih";
    }
    ?>
</body>
</html>