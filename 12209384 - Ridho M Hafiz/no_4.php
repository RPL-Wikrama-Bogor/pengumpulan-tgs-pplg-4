<!DOCTYPE html>
<html>
<head>
    
    <title>ubah Detik ke Jam, Menit, Detik</title>
</head>
<body>
    <h2>Ubah Detik ke Jam, Menit, Detik</h2>
    <form method="post" action="">
        <label>Masukkan jumlah detik: </label>
        <input type="number" name="detik" required>
        <input type="submit" value="Konversi">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $detik = $_POST["detik"];

        $jam = floor($detik / 3600);
        $sisa_detik = $detik % 3600;
        $menit = floor($sisa_detik / 60);
        $detik_sisa = $sisa_detik % 60;

        echo "<h3>Hasil Konversi:</h3>";
        echo "<table border='1'>";
        echo "<tr><th>Jam</th><th>Menit</th><th>Detik</th></tr>";
        echo "<tr><td>$jam</td><td>$menit</td><td>$detik_sisa</td></tr>";
        echo "</table>";
    }
    ?>
</body>
</html>
