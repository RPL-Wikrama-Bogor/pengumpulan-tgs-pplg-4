<?php
//preparation
    $suhu_fahrenheit;
    $suhu_celcius;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>suhu</title>
</head>
<!-- proses -->
<body>
    <form action="" method="post">
        <div style="display: flex;">
            <label for="fahren">Suhu fahrenheit :</label>
            <input type="number" name="fahrein" id="fahren">
        </div>
        <button type="submit" name="submit">Kirim!</button>
    </form>
</body>
</html>
<?php
    if (isset($_POST['submit'])) {
        $suhu_fahrenheit = $_POST['fahrein'];
        $suhu_celcius = floor ($suhu_fahrenheit / 33.8);

        //output

        if ($suhu_celcius > 300) {
            echo "suhu: " . $suhu_celcius . "cc panas";
        }
        else if ($suhu_celcius < 250) {
            echo "suhu: " . $suhu_celcius . "cc dingin";
        }
        else {
            echo "suhu: " . $suhu_celcius . "cc normal";
        }
    }
?>