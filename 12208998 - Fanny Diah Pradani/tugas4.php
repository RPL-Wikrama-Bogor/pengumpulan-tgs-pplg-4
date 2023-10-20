<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        background-color: #61677A;
    }

    .card {
        background-color: #D8D9DA;
        border-radius: 10px;
        max-width: 100%;
        text-align: center;
        padding: 50px 120px;
        margin: 100px 400px;
    }

    </style>

</head>

<body>
<div class="card">
    <h2>Input Data Karyawan</h2>
<form action="" method="POST">
<label for="nama">Nama Karyawan:</label>
<input type="text" id="nama" name="nama" required>
<br><br>
<label for="gaji">Gaji Karyawan:</label>
 <input type="number" id="gaji" name="gaji_pokok" required>
 <br><br>
 <input type="submit" value="Submit" name="hitung">
</form>

<?php 
if (isset($_POST["hitung"])) 
{
 $nama = $_POST["nama"]; $gaji_pokok = $_POST["gaji_pokok"];
 $tunj = 20 / 100 * $gaji_pokok; 
 $pjk = 15 / 100 * ($gaji_pokok + $tunj);
 $gaji_bersih = $gaji_pokok + $tunj - $pjk;echo "<h2>Hasil</h2>";
 echo "Nama: " . $nama . "<br>"; 
 echo "Tunjangan: Rp " . number_format($tunj, 0, ',', '.') . "<br>";
 echo "Pajak: Rp " . number_format($pjk, 0, ',', '.') . "<br>";
 echo "Gaji Bersih: Rp " . number_format($gaji_bersih, 0, ',', '.') . "<br>"; 
 }
 ?>
</div>
</body>
</html>