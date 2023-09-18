<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hitung Berat Jeruk</h1>
    <form method="post" action="">
        Berat Jeruk: <input type="number" name="bj">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>

<?php

    if(isset($_POST['submit'])) {

        $totalGr = $_POST['bj'];

        $harga_sebelum = 500 * $totalGr;
        $diskon = 5 * $harga_sebelum / 100;
        $harga_setelah = $harga_sebelum - $diskon;

        echo "harga jeruk sebelum diskon $harga_sebelum <br>";
        echo "diskon yang didapat $diskon <br>";
        echo "harga setelah diskon $harga_setelah <br>";
    }

   