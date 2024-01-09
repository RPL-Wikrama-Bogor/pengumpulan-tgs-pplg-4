<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor Kuy</title>
</head>
<body>
    <center>
        <table>
            <h1>Rental Motor</h1>
            <form action="" method="post">
                <tr>
                    <td>Nama Pelanggan: </td>
                    <td>
                        <input type="text" name="nama" required>
                    </td>
                </tr>
                <tr>
                    <td>Lama Waktu Rental (per hari):</td>
                    <td>
                        <input type="number" name="rental" required>
                    </td>
                </tr>
                <tr>
                    <td>Pilih Tipe Motor: </td>
                    <td>
                        <select name="jenis" required>
                            <option value="matic">Vario 160</option>
                            <option value="kopling">CVO Road Glide</option>
                            <option value="sport">Ducati Panigale</option>
                            <option value="matic">BMW C 400 GT</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Hitung" name="kirim"></td>
                </tr>
            </form>
        </table>
        <br>
        <br>
    </center>
</body>
</html>

<?php
    include 'prosesRental.php';
    $proses = new Beli();
    $proses->setHarga(80000, 120000, 200000, 150000);
    if (isset($_POST['kirim'])) {
        $proses->namaPelanggan= strtolower($_POST['nama']);
        $proses->jumlah = $_POST['rental'];
        $proses->jenis = $_POST['jenis'];
        $proses->hargaMember();
        $proses->cetakPembelian();
    }
?>

