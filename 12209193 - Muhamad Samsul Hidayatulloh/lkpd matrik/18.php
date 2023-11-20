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
  input[type="number"], input[type="text"] {
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
  <h2>Cari Juara Kelas</h2>
  <form method="post">
    <input type="text" name="nama" placeholder="Nama siswa" required>
    <input type="number" name="mtk" placeholder="Nilai Matematika" required>
    <input type="number" name="indo" placeholder="Nilai Bahasa Indonesia" required>
    <input type="number" name="ingg" placeholder="Nilai Bahasa Inggris" required>
    <input type="number" name="dpk" placeholder="Nilai DPK" required>
    <input type="number" name="agama" placeholder="Nilai Agama" required>
    <input type="number" name="kehadiran" placeholder="Kehadiran (%)" required>
    <input type="submit" value="Cari Juara">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mtk = $_POST["mtk"];
    $indo = $_POST["indo"];
    $ingg = $_POST["ingg"];
    $dpk = $_POST["dpk"];
    $agama = $_POST["agama"];
    $kehadiran = $_POST["kehadiran"];
    $nilai_total = $mtk + $indo + $ingg + $dpk + $agama;

    if ($kehadiran == 100 && $nilai_total >= 475) {
      echo "<p>Selamat kepada $nama, Anda adalah juara kelas!</p>";
    } else {
      echo "<p>Maaf, Anda belum memenuhi kriteria juara kelas.</p>";
    }
  }
  ?>
</div>
</body>
</html>
