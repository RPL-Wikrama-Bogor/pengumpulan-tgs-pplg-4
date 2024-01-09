<!DOCTYPE html>
<html>
<head>
<style>
  body {
    font-family: Arial, sans-serif;
    text-align: center;
  }
  #container {
    margin: 100px auto;
    width: 300px;
  }
  input[type="number"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
  }
  input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    border-radius: 10px;
  }
</style>
</head>
<body>
<div id="container">
  <h2>Hitung Penghasilan Penjualan Tiket</h2>
  <form method="post">
    <input type="number" name="vip" placeholder="Tiket VIP terjual" required>
    <input type="number" name="eksekutif" placeholder="Tiket Eksekutif terjual" required>
    <input type="number" name="ekonomi" placeholder="Tiket Ekonomi terjual" required>
    <input type="submit" value="Hitung">
  </form>

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
</div>
</body>
</html>
