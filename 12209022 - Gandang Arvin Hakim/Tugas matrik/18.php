<!DOCTYPE html>
<html>
<head>
<style>
  body {
    font-family: Arial, sans-serif;
    text-align: center;
  }

  h2{
    color:#176B87;
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
    background-color: #176B87;
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
  <h2>Mencari Sang Juara Kelas</h2>
  <form method="post">
    <input type="text" name="nama" placeholder="Nama siswa" required>
    <input type="number" name="mtk" placeholder="nilai Matematika" required>
    <input type="number" name="indo" placeholder="nilai Bahasa Indonesia" required>
    <input type="number" name="ing" placeholder="nilai Bahasa inggris" required>
    <input type="number" name="dpk" placeholder="nilai DPK" required>
    <input type="number" name="agama" placeholder="nilai Agama" required>
    <input type="number" name="kehadiran" placeholder="Kehadiran (%)" required>
    <input type="submit" value="Cari Juara">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mtk = $_POST["mtk"];
    $indo = $_POST["indo"];
    $ing = $_POST["ing"];
    $dpk = $_POST["dpk"];
    $agama = $_POST["agama"];
    $kehadiran = $_POST["kehadiran"];
    $nilai_total = $mtk + $indo + $ing + $dpk + $agama;

    if ($kehadiran == 100 && $nilai_total >= 475) {
      echo "<p>Selamat kepada $nama, Kamu Berhasil Mendapatkan Juara Kelas!</p>";
    } else {
      echo "<p>Maaf, Anda Gagal Untuk Menjadi Juara Kelas.</p>";
    }
  }
  ?>
</div>
</body>
</html>
