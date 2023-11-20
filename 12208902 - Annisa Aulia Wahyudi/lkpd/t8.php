<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Mencari bilangan satuan puluhan ratusan</h1>
    <form method="post" action="">
        Masukan Bilangan : <input type="number" name="bil">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>

<?php

    if(isset($_POST['submit'])) {

        $bil = $_POST['bil'];

        $satuan = $bil % 10;
        $puluhan = ($bil % 100) / 10;
        $ratusan = ($bil % 1000) / 100;

        $ratusan = intval($ratusan);
        $puluhan = intval($puluhan);

        echo $ratusan. " ratusan<br>";
        echo $puluhan. " puluhan<br>";
        echo $satuan. " satuan<br>";
        
    }