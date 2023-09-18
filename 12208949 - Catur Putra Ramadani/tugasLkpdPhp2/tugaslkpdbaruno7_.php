<!DOCTYPE html>
<html>

<head>
    <title>Hitung Harga Buah Jeruk</title>
</head>

<body>
    <h2>Form Hitung Harga Buah Jeruk</h2>
    <form method="post" action="">
        <label for="berat">Berat Buah (gram):</label>
        <input type="number" name="berat" required><br><br>

        <input type="submit" name="hitung" value="Hitung Harga">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $berat = $_POST['berat'];
        $harga_per_kg = 500;
        $diskon = 0.05;

        $total_sebelum_diskon = ($berat / 1000) * $harga_per_kg;

        $jumlah_diskon = $total_sebelum_diskon * $diskon;

        $total_setelah_diskon = $total_sebelum_diskon - $jumlah_diskon;

        echo "<h3>Hasil Perhitungan Harga Buah Jeruk</h3>";
        echo "Total Harga Sebelum Diskon: " . number_format($total_sebelum_diskon) . " rupiah<br>";
        echo "Diskon (5%): " . number_format($jumlah_diskon) . " rupiah<br>";
        echo "Total Harga Setelah Diskon: " . number_format($total_setelah_diskon) . " rupiah";
    }
    ?>
</body>

</html>