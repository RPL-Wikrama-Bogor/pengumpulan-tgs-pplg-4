<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan Bakar</title>
</head>
<body>
    <center>
        <h1>Bensin</h1>
        <form action="" method="post">
        <table>
            <tr>
                <td>Masukkan Jumlah Liter</td>
                <td>:</td>
                <td>
                    <input type="member" min="0" name="liter" id="liter" required>
                </td>
            </tr>
            <tr>
                <td>Pilih Tipe Bahan Bakar</td>
                <td>:</td>
                <td>
                    <select name="jenis">
                        <option value="SSuper">Shell Super</option>
                        <option value="SVPower">Shell V-Power</option>
                        <option value="SVPowerDiesel">Shell V-Diesel</option>
                        <option value="SVPowerNitro">Shell V-Power Nitro</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                <button type="submit" name="beli">Beli</button>
                </td>
            </tr>
        </table>
        </form>
    </center>
</body>
</html>

<?php
    require 'prosesBB.php';
    $proses = new Pembelian();
    $proses->setHarga(12000,15000,19000,24000);
    if(isset($_POST['beli'])) {
        $proses->jenisYangDipilih = ($_POST['jenis']);
        $proses->totalLiter = ($_POST['liter']);
        $proses->totalHarga();
        $proses->cetakBukti();
    }
?>
