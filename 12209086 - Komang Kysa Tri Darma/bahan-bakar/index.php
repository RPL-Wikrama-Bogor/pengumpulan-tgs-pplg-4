<?php
include 'bensin.php';
$beli = new Beli();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jenis = $_POST["jenis"];
    $jumlah = intval($_POST["jumlah"]);

    $beli = new Beli();

    if ($jenis === "super") {
        $beli->super = true;
    } elseif ($jenis === "vPower") {
        $beli->vPower = true;
    } elseif ($jenis === "vPowerDiesel") {
        $beli->vPowerDiesel = true;
    } elseif ($jenis === "vPowerDitro") {
        $beli->vPowerDitro = true;
    }

    $beli->getJumlah($jumlah);

    // Menghitung total dan menampilkan hasilnya
    $total = $beli->hitungTotal();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pembelian Bahan Bakar</title>
</head>
<body>
    <div class="container" style="display: flex; justify-content:center; align-items:center; flex-direction:column;">
        <h1>Formulir Pembelian Bahan Bakar</h1>
        <form method="post" action=""> <!-- Ganti 'proses.php' dengan nama berkas PHP yang sesuai -->
            <label for="jenis">Jenis Bahan Bakar:</label>
            <select name="jenis" id="jenis" style="margin-bottom:0.5rem;">
                <option value="super">Super</option>
                <option value="vPower">vPower</option>
                <option value="vPowerDiesel">vPower Diesel</option>
                <option value="vPowerDitro">vPower Ditro</option>
            </select>
            <br>
            <label for="jumlah">Jumlah (liter):</label>
            <input type="number" name="jumlah" id="jumlah" style="margin-bottom:0.5rem;" required>
            <br>
            <input type="submit" value="Hitung Total" name="submit" style="margin-bottom: 2rem;">

            <div class="container-result" style="border: 1px solid black; width:25rem; height:60px; text-align:center;">
                    <?php if (isset($total)) {
                    echo "<p>$total</p>";
                    } ?>
            </div>
        </form>
    </div>
</body>
</html>