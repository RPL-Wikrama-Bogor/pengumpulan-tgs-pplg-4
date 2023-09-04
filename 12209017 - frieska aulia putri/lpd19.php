<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tiket</title>
<style>
  body {
    font-family: Arial, sans-serif;
    text-align: center;
    background-color: #F48484;
  }
   .card{
    background-color: #C08261;
        border-radius: 20px;
        max-width: 100%;
        text-align: center;
        padding: 50px 130px;
        margin: 125px 400px;
   }
  input[type="number"] {
    width: 100%;
    border-radius: 20px;
    padding: 5px;
    margin: 7px;
  }
  input[type="submit"] {
    padding: 10px 20px;
    margin:4px;
    border: none;
    cursor: pointer;
    border-radius: 10px;
  }
</style>
</head>
<body>
<div class="card">
     <h1>Penjualan Tiket</h1>
<form action="" method="POST">
<label for="vip">Tiket VIP:</label>
<input type="number" id="vip" name="Tiket VIP" required>
<br><br>
<label for="Eksekutif">Tiket Eksekutif:</label>
 <input type="number" id="eksekutif" name="Tiket Eksekutif" required>
 <br><br>
 <label for="Ekonomi">Tiket Ekonomi:</label>
 <input type="number" id="Ekonomi" name="Tiket ekonomi"required>
 <input type="submit" value="Hitung">

</form>
  </div>
</body>
</html>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tiket_vip = $_POST["vip"];
    $tiket_eksekutif = $_POST["eksekutif"];
    $tiket_ekonomi = $_POST["ekonomi"];

    $harga_vip = 100000;
    $harga_eksekutif = 75000;
    $harga_ekonomi = 50000;

    $total_tiket = $tiket_vip + $tiket_eksekutif + $tiket_ekonomi;

    $keuntungan_vip = 0;
    if ($tiket_vip >= 35) {
      $keuntungan_vip = $tiket_vip * $harga_vip * 0.25;
    } elseif ($tiket_vip >= 20) {
      $keuntungan_vip = $tiket_vip * $harga_vip * 0.15;
    } else {
      $keuntungan_vip = $tiket_vip * $harga_vip * 0.05;
    }

    $keuntungan_eksekutif = 0;
    if ($tiket_eksekutif >= 40) {
      $keuntungan_eksekutif = $tiket_eksekutif * $harga_eksekutif * 0.20;
    } elseif ($tiket_eksekutif >= 20) {
      $keuntungan_eksekutif = $tiket_eksekutif * $harga_eksekutif * 0.10;
    } else {
      $keuntungan_eksekutif = $tiket_eksekutif * $harga_eksekutif * 0.02;
    }

    $keuntungan_ekonomi = $tiket_ekonomi * $harga_ekonomi * 0.07;

    $total_keuntungan = $keuntungan_vip + $keuntungan_eksekutif + $keuntungan_ekonomi;

    echo "<p>Keuntungan Tiket VIP: $keuntungan_vip</p>";
    echo "<p>Keuntungan Tiket Eksekutif: $keuntungan_eksekutif</p>";
    echo "<p>Keuntungan Tiket Ekonomi: $keuntungan_ekonomi</p>";
    echo "<p>Total Keuntungan: $total_keuntungan</p>";
    echo "<p>Total Tiket VIP: $tiket_vip</p>";
    echo "<p>Total Tiket Eksekutif: $tiket_eksekutif</p>";
    echo "<p>Total Tiket Ekonomi: $tiket_ekonomi</p>";
    echo "<p>Total Tiket Keseluruhan: $total_tiket</p>";
  }
  ?>