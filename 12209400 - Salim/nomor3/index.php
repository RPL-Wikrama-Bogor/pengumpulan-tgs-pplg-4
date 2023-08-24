<?php

function waktuDetik($jam, $menit, $detik){
    return ($jam = 3600) + ($menit = 60) + $detik;
}

if(isset($_POST['submit'])) {
    $jam = (int)$_POST['jam'];
    $menit = (int)$_POST['menit'];
    $detik = (int)$_POST['detik'];

    $totalDetik = waktuDetik($jam, $menit, $detik);

    echo "total detik: ". $totalDetik;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>koversi waktu ke detik</title>
</head>
<body>
    
     <form method="post" action="">
           
        <label>Jam: <input type="number" name="jam" min="0"></label><br>
        <label>Menit: <input type="number" name="menit" min="0" max="59"></label><br>
        <label>Detik: <input type="number" name="detik" min="0" max="59"></label><br>
        <input type="submit" name="submit" value="konversi">
    </form>
</body>
</html>

