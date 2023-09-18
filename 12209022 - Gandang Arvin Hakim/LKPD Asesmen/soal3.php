<?php

$jam = 0;
$menit = 0;
$detik = 0;
$td = 0;

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Jam-Menit-Detik ke Total Detik</title>

</head>

<body>
    
     <form action="" method="post">

        <div style="display: flex;">
        <label for="menit">Jam: </label>
        <input type="number" id="jam" name="jam">
        </div>

        <div style="display: flex;">
        <label for="jam">Menit: </label>
        <input type="number" id="menit" name="menit">
        </div>

        <div style="display: flex;">
        <label for="detik">Detik: </label>
        <input type="number" id="detik" name="detik">
        </div>
        
        <br>

     <button type="submit" name="submit">Kirim</button>
   </form>

</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $jam = isset($_POST['jam']) ? $_POST['jam'] : 0;
    $menit = isset($_POST['menit']) ? $_POST['menit'] : 0;
    $detik = isset($_POST['detik']) ? $_POST['detik'] : 0;

    $td = ($jam * 3600) + ($menit * 60) + $detik;
    
    echo "Total detik: " . $td . " detik";

}
?>






