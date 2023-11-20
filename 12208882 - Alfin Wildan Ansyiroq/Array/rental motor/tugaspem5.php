<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa Motor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #D0E7D2;
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url("down-arrow.png"); /* Ganti dengan ikon panah pilihan Anda */
            background-repeat: no-repeat;
            background-position: right center;
        }

        button[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <div style="display: flex;">
        <label for="nama">Masukkan Nama Anda:</label>
        <input type="text" min="0" name="nama" id="nama" autocomplete="off" required>
        </div>
        <div style="display: flex;">
        <label for="waktu">Lama Waktu Rental(per Hari):</label>
        <input type="number" min="0" name="waktu" id="waktu" required>
        </div>
        <div style="display: flex;">
        <label for="jenis">Jenis Motor:</label>
        <select name="jenis" required>
            <option hidden disabled selected>Pilih Jenis Motor</option>
            <option value="Scooter">Scooter</option>
            <option value="Aerox">Aerox</option>
            <option value="Vario">Vario</option>
        </select>
        </div>
        <button type="submit" name="sewa">Sewa Motor</button>
    </form>

    <?php
    require 'controller.php';
    $logic = new Pembelian();
    $logic->setHarga(75000,85000,82000);
    if(isset($_POST['sewa'])) {
        $logic->nama_pengguna = $_POST['nama'];
        $logic->lamaWaktu = $_POST['waktu'];
        $logic->jenisYangDipilih = $_POST['jenis'];

        $logic->cetakBukti();

    }
    ?>

</body>
</html>