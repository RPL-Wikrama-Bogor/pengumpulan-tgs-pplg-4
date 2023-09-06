<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Harga Jeruk</title>
</head>
<body>
    <h1>Kalkulator Harga Jeruk</h1>
    <form method="post">
        <label for="berat_jeruk">Berat Jeruk (gram):</label>
        <input type="number" name="berat_jeruk" required><br>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $berat_jeruk = $_POST["berat_jeruk"];
        $harga_per_100_gram = 500;

        $sebelum_diskon = ($berat_jeruk / 100) * $harga_per_100_gram;

        $diskon = 0.05 * $sebelum_diskon;

        $setelah_diskon = $sebelum_diskon - $diskon;

        echo "<h2>Hasil Perhitungan:</h2>";
        echo "Total Harga Sebelum Diskon: " . number_format($sebelum_diskon, 0, ',', '.') . " rupiah<br>";
        echo "Diskon: " . number_format($diskon, 0, ',', '.') . " rupiah<br>";
        echo "Total Harga Setelah Diskon: " . number_format($setelah_diskon, 0, ',', '.') . " rupiah<br>";
    }
    ?>
</body>
</html>
