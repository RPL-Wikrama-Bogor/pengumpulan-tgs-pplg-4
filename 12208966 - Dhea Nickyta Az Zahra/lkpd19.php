<!DOCTYPE html>
<html>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Nomor 06</title>
<head>
<style>
  body {
    background-color : silver;
    font-family: Arial, sans-serif;
    text-align: center;
  }
  .card {
    background-color: grey;
        border-radius: 15px;
        outline : auto;
        max-width: 100%;
        text-align: center;
        padding: 50px 90px;
        margin: 145px 400px;
  }
  input[type="number"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 15px;
  }
  input[type="submit"] {
    background-color: red;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    border-radius: 15px;
  }
</style>
</head>
<body>
<div class="card">
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

    echo "<p>Keuntungan Tiket VIP: Rp $keuntungan_vip</p>";
    echo "<p>Keuntungan Tiket Eksekutif: Rp $keuntungan_eksekutif</p>";
    echo "<p>Keuntungan Tiket Ekonomi: Rp $keuntungan_ekonomi</p>";
    echo "<p>Total Keuntungan: Rp $total_keuntungan</p>";
    echo "<p>Total Tiket VIP: $tiket_vip</p>";
    echo "<p>Total Tiket Eksekutif: $tiket_eksekutif</p>";
    echo "<p>Total Tiket Ekonomi: $tiket_ekonomi</p>";
    echo "<p>Total Tiket Keseluruhan: $total_tiket</p>";
  }
  ?>
</div>
</body>
</html>