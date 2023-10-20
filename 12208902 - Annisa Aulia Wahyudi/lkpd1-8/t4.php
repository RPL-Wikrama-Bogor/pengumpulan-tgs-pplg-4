<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jmd</title>
</head>
<body>
    <form action="" method="post">
        <label>Menentukan waktu (jam menit detik):</label><br><br>
        detik <br><input type="number" name="d"><br>
        <br><input type="submit" value="submit" name="submit" >
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])) {
        $d = $_POST["d"];

        $jam = floor($d / 3600);
        $sd = $d % 3600;
        $menit = floor($sd / 60);
        $detik = $sd % 60;


        echo "$jam jam $menit menit $detik detik";
    }
