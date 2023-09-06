<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Gaji Karyawan</title>
</head>
<body>
    <h1>Kalkulator Gaji Karyawan</h1>
    <form method="post">
        <label for="nama">Nama Karyawan:</label>
        <input type="text" name="nama" required><br>
        <label for="gaji_pokok">Gaji Pokok:</label>
        <input type="number" name="gaji_pokok" required><br>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $gaji_pokok = $_POST["gaji_pokok"];

        $tunj = 0.2 * $gaji_pokok;

        $pjk = 0.15 * ($gaji_pokok + $tunj);
 
        $gaji_bersih = $gaji_pokok + $tunj - $pjk;

        echo "<h2>Hasil Perhitungan:</h2>";
        echo "Nama Karyawan: " . $nama . "<br>";
        echo "Tunjangan: " . $tunj . "<br>";
        echo "Pajak: " . $pjk . "<br>";
        echo "Gaji Bersih: " . $gaji_bersih . "<br>";
    }
    ?>
</body>
</html>
