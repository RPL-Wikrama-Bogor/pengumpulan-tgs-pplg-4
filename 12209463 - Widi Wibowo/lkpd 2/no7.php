<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Harga Jeruk</title>
</head>
<body>
    <h1>Kalkulator Harga Jeruk</h1>
    
    <form method="post" action="">
        <label for="berat_jeruk">Masukkan berat jeruk (gram): </label>
        <input type="text" id="berat_jeruk" name="berat_jeruk" required>
        <br><br>
        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    if(isset($_POST['hitung'])){
        $berat_jeruk_gram = floatval($_POST['berat_jeruk']);

        // Konversi berat jeruk ke harga per 100 gram (500 rupiah per 100 gram)
        $harga_per_100_gram = 500;
        $harga_sebelum_diskon = ($berat_jeruk_gram / 100) * $harga_per_100_gram;

        // Menghitung diskon (5% dari harga sebelum diskon)
        $diskon = 0.05 * $harga_sebelum_diskon;

        // Menghitung total harga setelah diskon
        $total_harga_setelah_diskon = $harga_sebelum_diskon - $diskon;

        // Menampilkan hasil
        echo "<br><br>";
        echo "Total harga sebelum diskon: " . number_format($harga_sebelum_diskon, 2) . " rupiah<br>";
        echo "Diskon (5%): " . number_format($diskon, 2) . " rupiah<br>";
        echo "Total harga setelah diskon: " . number_format($total_harga_setelah_diskon, 2) . " rupiah";
    }
    ?>
</body>
</html>
