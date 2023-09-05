<!DOCTYPE html>
<html>
<head>
    <title>Cek Cuaca</title>
</head>
<body>
    <h1>Cek Cuaca</h1>
    <form method="post" action="">
        Masukkan suhu dalam Fahrenheit: <input type="text" name="suhu"><br>
        <input type="submit" value="Cek">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $suhu_fahrenheit = floatval($_POST["suhu"]);
        $suhu_celcius = ($suhu_fahrenheit - 32) * 5 / 9;

        if ($suhu_celcius > 30) {
            echo "Cuaca Panas";
        } elseif ($suhu_celcius < 10) {
            echo "Cuaca Dingin";
        } else {
            echo "Cuaca Normal";
        }
    }
    ?>
</body>
</html>
