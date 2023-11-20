<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Harga Buah Jeruk</title>
</head>
<body>
    <h1>Kalkulator Harga Buah Jeruk</h1>
    <form method="post" action="">
        Berat Buah (gram): <input type="text" name="berat"><br>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $berat_buah = floatval($_POST["berat"]);

        $harga_sebelum_diskon = ($berat_buah / 100) * 500;
        $diskon = $harga_sebelum_diskon * 0.05;
        $total_harga_setelah_diskon = $harga_sebelum_diskon - $diskon;

        echo "<h2>Hasil Perhitungan Harga Buah Jeruk</h2>";
        echo "Harga Sebelum Diskon: " . number_format($harga_sebelum_diskon, 2) . " rupiah<br>";
        echo "Diskon: " . number_format($diskon, 2) . " rupiah<br>";
        echo "Total Harga Setelah Diskon: " . number_format($total_harga_setelah_diskon, 2) . " rupiah";
    }
    ?>
</body>
</html>