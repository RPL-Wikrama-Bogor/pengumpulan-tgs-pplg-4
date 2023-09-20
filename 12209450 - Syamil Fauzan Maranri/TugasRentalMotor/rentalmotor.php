<?php
$nama = "";
$lamaWaktu = 0;
$jenis = "";
$harga = 0;
$total = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama_pelanggan"];
    $lamaWaktu = intval($_POST["lama_rental"]);
    $jenis = $_POST["jenis_motor"];

    switch ($jenis) {
        case "ZX-25R":
            $harga = 1000000;
            break;
        case "H2-R":
            $harga = 10000000;
            break;
        case "Vario":
            $harga = 70000;
            break;
        case "Scoopy":
            $harga = 50000;
            break;
        case "CBR-1000RR":
            $harga = 7000000;
            break;
        case "R1-M":
            $harga = 7500000;
            break;
        case "Ducati Panigale":
            $harga = 9000000;
            break;
        default:
            $harga = 0; 
    }

    if ($lamaWaktu > 2) {
        $total = $lamaWaktu * $harga * 0.95; 
    } else {
        $total = $lamaWaktu * $harga;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor Barokah</title>
</head>
<body>
    <h1>Form Rental Motor</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="nama_pelanggan">Nama pelanggan</label>
        <input type="text" name="nama_pelanggan" id="nama_pelanggan" required><br><br>
        
        <label for="lama_rental">Lama Waktu Rental (per hari)</label>
        <input type="number" name="lama_rental" id="lama_rental" required><br><br>
        
        <label for="jenis_motor">Jenis Motor</label>
        <select name="jenis_motor" id="jenis_motor" required>
            <option value="ZX-25R">ZX-25R</option>
            <option value="H2-R">H2-R</option>
            <option value="Vario">Vario</option>
            <option value="Scoopy">Scoopy</option>
            <option value="CBR-1000RR">CBR-1000RR</option>
            <option value="R1-M">R1-M</option>
            <option value="Ducati Panigale">Ducati Panigale</option>
        </select><br><br>

        <button type="submit">Hitung</button>
    </form>

    <?php
    if ($total > 0) {
        echo "<h2>$nama berstatus sebagai Member mendapatkan diskon 5%</h2>";
        echo "<p>Jenis motor yang dirental adalah $jenis Selama $lamaWaktu hari</p>";
        echo "<p>Harga Rental per harinya Rp " . number_format($harga, 0, ',', '.') . "</p>";
        echo "<p>Besar yang harus dibayarkan Rp " . number_format($total, 0, ',', '.') . "</p>";
    }
    ?>
</body>
</html>
