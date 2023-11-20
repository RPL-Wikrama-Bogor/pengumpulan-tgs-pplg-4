<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <option value="SVPowerDiesel">Shell V-Power Diesel</option>
            <option value="SVPowerNitro">Shell V-Power Nitro</option>
         </select>
        </div>
        <button type="submit" name="beli">Beli Bahan Bakar</button>
    </form>

    <?php
    require 'logic.php';
    $logic = new Pembelian();
    $logic->setHarga(15420,16130,18310,16510);
    if(isset($_POST['beli'])) {
        $logic->jenisYangDipilih = ($_POST['jenis']);
        $logic->totalLiter = ($_POST['liter']);
        $logic->totalHarga();
        $logic->cetakBukti();
    }
    ?>
</body>
</html>