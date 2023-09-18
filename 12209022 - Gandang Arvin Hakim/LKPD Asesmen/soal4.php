<?php

$jam;
$menit;
$detik;
$hasil ="";

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Total Detik ke bentuk jam-menit-detik</title>

</head>

<body>
    
     <form action="" method="post">
        <div style="display: flex;">
        <label for="td">Masukkan Total Detik: </label>
        <input type="Number" id="td" name="td">
        </div>
     <button type="submit" name="submit">Kirim</button>
   </form>

</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $td = $_POST['td'];

    if ($td >= 3600) {
        $jam = floor($td/3600);
        $td -= ($jam*3600);
        $hasil .= $jam . "jam";
    }
    else {
        echo "0 jam";
    }

    if ($td >= 60) {
        $menit = floor($td/60);
        $td -= ($menit*60);
        $hasil .= $menit . "menit";
    }
    else {
        echo "0 menit";
    }

    $detik = $td;
    $hasil .= $detik . " detik ";
    echo $hasil;


    // floor = membulatkan ke bawah


}
?>