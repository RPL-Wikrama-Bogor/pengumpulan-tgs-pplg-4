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
  <h2>Analyze Bilangan</h2>
  <form method="post">
    <?php
    for ($i = 1; $i <= 20; $i++) {
      echo "<input type='number' name='bilangan[]' placeholder='Bilangan ke-$i' required><br>";
    }
    ?>
    <input type="submit" value="Hitung">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bilangan = $_POST["bilangan"];
    $jumlah_bilangan = count($bilangan);

    $terbesar = $bilangan[0];
    $terkecil = $bilangan[0];
    $total = 0;

    foreach ($bilangan as $nilai) {
      if ($nilai > $terbesar) {
        $terbesar = $nilai;
      }
      if ($nilai < $terkecil) {
        $terkecil = $nilai;
      }
      $total += $nilai;
    }

    $rata_rata = $total / $jumlah_bilangan;

    echo "<p>Bilangan Terbesar: $terbesar</p>";
    echo "<p>Bilangan Terkecil: $terkecil</p>";
    echo "<p>Rata-rata Bilangan: $rata_rata</p>";
  }
  ?>
</div>
</body>
</html>
