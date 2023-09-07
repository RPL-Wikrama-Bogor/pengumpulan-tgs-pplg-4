<!DOCTYPE html>
<html>

<head>
    <title>Cek Cuaca</title>
</head>

<body>
    <h2>Form Cek Cuaca</h2>
    <form method="post" action="">
        <label for="fahrenheit">Masukkan Temperatur (°F):</label>
        <input type="number" name="fahrenheit" required><br><br>

        <input type="submit" name="cek_cuaca" value="Cek Cuaca">
    </form>

    <?php
    if (isset($_POST['cek_cuaca'])) {
        $fahrenheit = $_POST['fahrenheit'];
        $celsius = ($fahrenheit - 32) * 5 / 9;

        if ($celsius > 30) {
            $cuaca = "Panas";
        } elseif ($celsius < 10) {
            $cuaca = "Dingin";
        } else {
            $cuaca = "Normal";
        }

        echo "<h3>Hasil Pengecekan Cuaca</h3>";
        echo "Temperatur dalam Fahrenheit: $fahrenheit °F<br>";
        echo "Temperatur dalam Celsius: $celsius °C<br>";
        echo "Cuaca: $cuaca";
    }
    ?>
</body>

</html>