<?php
include 'bbm.php';
$proses = new Beli;
$proses->SetHarga(17000,16000,17250,18000,19000);
if (isset($_POST['submit'])){
    $proses->jumlah= $_POST['liter'];
    $proses->jenis= $_POST['jenis'];

    $proses->cetakpembelian();
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan Bakar</title>
</head>
<body>
    <form action="" method="post">
    <table>
        <tr>
            <td>Masukkan jumlah liter</td>
            <td>:</td>
            <td>
                <input type="number" name="liter" id="liter">
            </td>
        </tr>
        <tr>
            <td>Pilih tipe bahan bakar</td>
            <td>:</td>
            <td>
                <select name="jenis" id="jenis_bahan_bakar">
                    <option Value="SSuper"> Shell Super</option>
                    <option Value="SVpower"> Shell V-Power</option>
                    <option Value="SVPowerDiesel"> Shell V-Power Diesel </option>
                    <option Value="SVPowerNitro"> Shell V-Power Nitro</option>
                </select>
            </td>
        </tr>
        <td><input type="submit" name="submit" value="Beli"></td>
    </table>
    </form>

</body>
</html>