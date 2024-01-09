<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nilai terbesar</title>
</head>
<body>
    <form action="" method="post">
        <label>Menentukan waktu (detik):</label><br>
        jam <br><input type="number" name="j"><br>
        menit <br><input type="number" name="m"><br>
        detik <br><input type="number" name="d"><br>
        <br><input type="submit" value="submit" name="submit" >
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])) {
        $j = $_POST["j"];
        $m = $_POST["m"];
        $d = $_POST["d"];

        $hd = $j * 3600 + $m * 60 + $d;
        echo "jumlah detik adalah " .$hd;
    }