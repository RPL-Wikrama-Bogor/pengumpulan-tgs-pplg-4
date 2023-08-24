<!DOCTYPE html>
<html>
<head>
    <title>Detik ke Jam Menit Detik</title>
</head>
<body>
    <h1>Detik ke Jam Menit Detik</h1>

    <form method="post" action="">
        <label for="total_detik">Masukkan Total Detik:</label>
        <input type="number" name="total_detik" id="total_detik" required>
        <button type="submit">mengkonversi</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $total_detik = $_POST["total_detik"];

        $jam = floor($total_detik / 3600);
        $sisa_detik = $total_detik % 3600;
        $menit = floor($sisa_detik / 60);
        $detik = $sisa_detik % 60;

        echo "<h2>Hasil Konversi:</h2>";
        echo "Total Detik: $total_detik detik<br>";
        echo "Jam: $jam jam<br>";
        echo "Menit: $menit menit<br>";
        echo "Detik: $detik detik<br>";
    }
    ?>
    
</body>
</html>