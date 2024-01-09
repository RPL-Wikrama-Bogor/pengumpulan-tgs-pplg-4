<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #C3EDC0;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h3 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        label {
            font-weight: bold;
        }

        input[type="number"], select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-top: 5px;
        }
        /* Tambahkan style ini di dalam tag <style> di dalam <head> Anda */

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .container div {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-bottom: 10px;
        }

        input[type="number"], select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-top: 5px;
        }


        button[type="submit"] {
            background-color: #35A29F;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin-top: 10px;
        }

        button[type="submit"]:hover {
            background-color: #E9FFC2;
        }
    </style>
    <div class="container">
        <h3>Form Pengisian</h3>
    <form action="" method="post">
        <div style="display: flex;">
            <label for="liter">Masukkan Jumlah Liter  :</label>
            <input type="number" min= "0" name="liter" id="liter">
         </div>
         <div style="display: flex;">
         <label for="jenis">Pilih Jenis Bahan Bakar :</label>
         <select name="jenis" required>
            <option value="SSuper">Shell Super</option>
            <option value="SVPower">Shell V-Power</option>
            <option value="SVPowerNitro">Shell V-Power Nitro</option>
         </select>
        </div>
        <button type="submit" name="beli">Beli Bahan Bakar</button>
    </form>

    <?php
    require 'logic.php';
    $logic = new Pembelian();
    $logic->setHarga(10000,15000,18000,20000);
    if(isset($_POST['beli'])) {
        $logic->jenisYangDipilih = ($_POST['jenis']);
        $logic->totalLiter = ($_POST['liter']);
        $logic->totalHarga();
        $logic->cetakBukti();
    }
    ?>
</body>
</html>