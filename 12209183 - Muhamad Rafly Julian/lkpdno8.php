<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilangan Bulat</title>
</head>
<body>
    <form method= "post" action="">
        Masukan Bilangan Bulat: <input type="text" name="bilangan">
        <input type="submit" value= "submit">
    </form>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $bilangan = isset($_POST["bilangan"]) ? (int)$_POST["bilangan"] : 0;
    $satuan = $bilangan % 10;
    $puluhan = ($bilangan / 10) % 10;
    $ratusan = ($bilangan / 100) % 10;

    echo "satuan: $satuan <br>";
    echo "puluhan: $puluhan <br>";
    echo "ratusan: $ratusan <br>";
}

?>

</body>
</html>