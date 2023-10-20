<!DOCTYPE html>
<html>
<head>
    <title>Penentuan Cuaca</title>
</head>
<body>
    <h1>Penentuan Cuaca</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $suhu_fahrenheit = floatval($_POST["suhu_fahrenheit"]);


        $suhu_celsius = ($suhu_fahrenheit - 32) * 5/9;

        if ($suhu_celsius > 30) {
            $cuaca = "panas";
        } elseif ($suhu_celsius < 10) {
            $cuaca = "dingin";
        } else {
            $cuaca = "normal";
        }

        echo "<p>Suhu dalam Fahrenheit: $suhu_fahrenheit °F</p>";
        echo "<p>Suhu dalam Celsius: $suhu_celsius °C</p>";
        echo "<p>Kondisi cuaca: $cuaca</p>";
    }
    ?>

    <form method="post">
        <label for="suhu_fahrenheit">Masukkan suhu dalam Fahrenheit:</label>
        <input type="number" name="suhu_fahrenheit" step="0.01" required>
        <input type="submit" value="Hitung">
    </form>
</body>
</html>
