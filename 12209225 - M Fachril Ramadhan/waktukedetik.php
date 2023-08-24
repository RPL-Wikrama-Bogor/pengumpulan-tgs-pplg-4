<?php

function waktuKeDetik($jam, $menit, $detik) {
    return ($jam * 3600) + ($menit * 60) + $detik;
}

if(isset($_POST['submit'])) {
    $jam = (int)$_POST['jam'];
    $menit = (int)$_POST['menit'];
    $detik = (int)$_POST['detik'];

    $totalDetik = waktuKeDetik($jam, $menit, $detik);

    echo "Total detik: " . $totalDetik;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Konversi Waktu ke Detik</title>
</head>
<body>
    <form method="post" action="">
        <label>Jam: <input type="number" name="jam" min="0"></label><br>
        <label>Menit: <input type="number" name="menit" min="0" max="59"></label><br>
        <label>Detik: <input type="number" name="detik" min="0" max="59"></label><br>
        <input type="submit" name="submit" value="Konversi">
    </form>
</body>
</html>