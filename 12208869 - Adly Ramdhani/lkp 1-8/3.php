<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jam = $_POST["jam"];
    $menit = $_POST["menit"];
    $detik = $_POST["detik"];

    
    if (!is_numeric($jam) || !is_numeric($menit) || !is_numeric($detik)) {
        echo "Input harus berupa angka.";
    } else {
        $totalDetik = ($jam * 3600) + ($menit * 60) + $detik;
        echo "Total detik: $totalDetik detik";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Konversi Waktu ke Detik</title>
</head>
<body>
    <h2>Konversi Jam-Menit-Detik ke Total Detik</h2>
    <form method="post" action="">
        <label>Jam: </label>
        <input type="text" name="jam">
        <br>
        <label>Menit: </label>
        <input type="text" name="menit">
        <br>
        <label>Detik: </label>
        <input type="text" name="detik">
        <br><br>
        <input type="submit" value="Konversi">
    </form>
</body>
</html>
