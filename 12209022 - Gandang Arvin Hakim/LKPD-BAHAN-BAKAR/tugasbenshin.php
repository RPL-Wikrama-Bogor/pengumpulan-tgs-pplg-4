<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan Bakar</title>
    <link rel="stylesheet" href=".css">
</head>
<body>
    <form action="" method="post">

        <div style="display: flex;">
            <label for="liter">Masukkan Jumlah Liter Pembelian Anda :</label>
            <input type="number" min= "0" name="liter" id="liter">
         </div>

         <div style="display: flex;">
         <label for="jenis">Pilih Jenis Bahan Bakar Anda :</label>
         <select name="jenis" required>
            <option value="SSuper">Shell Super</option>
            <option value="SVPower">Shell V-Power</option>
            <option value="SVPowerNitro">Shell V-Power Nitro</option>
         </select>
        </div>

        <button type="submit" name="beli">Beli Bahan Bakar</button>

        <br>

    <?php
    require 'sistem.php';
    $sistem = new Pembelian();
    $sistem->setHarga(10000,15000,18000,20000);
    if(isset($_POST['beli'])) {
        $sistem->jenisYangDipilih = ($_POST['jenis']);
        $sistem->totalLiter = ($_POST['liter']);
        $sistem->totalHarga();
        $sistem->cetakBukti();
    }
    ?>

    </form>

</body>
</html>