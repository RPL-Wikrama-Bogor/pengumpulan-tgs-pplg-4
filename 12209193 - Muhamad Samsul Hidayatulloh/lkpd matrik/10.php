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
    border-radius: 8px;
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
  <h2>Hitung Grade Rata-rata</h2>
  <form method="post">
    <input type="number" name="pabp" placeholder="Nilai PABP" required>
    <input type="number" name="matematika" placeholder="Nilai Matematika" required>
    <input type="number" name="dpk" placeholder="Nilai DPK" required>
    <input type="submit" value="Hitung">
  </form> <br>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nilai_pabp = $_POST["pabp"];
    $nilai_matematika = $_POST["matematika"];
    $nilai_dpk = $_POST["dpk"];

    $rata_rata = ($nilai_pabp + $nilai_matematika + $nilai_dpk) / 3;

    echo "NIlai PABP : $nilai_pabp";
    echo "<br>";
    echo "Nilai Matematika : $nilai_matematika";
    echo "<br>";
    echo "Nilai DPK : $nilai_dpk";
    echo "<br>";
    echo "<p>Nilai Rata-rata: $rata_rata</p>";

    if ($rata_rata >= 80 && $rata_rata <= 100) {
      echo "<p>Grade: A</p>";
    } elseif ($rata_rata >= 75 && $rata_rata < 80) {
      echo "<p>Grade: B</p>";
    } elseif ($rata_rata >= 65 && $rata_rata < 75) {
      echo "<p>Grade: C</p>";
    } elseif ($rata_rata >= 45 && $rata_rata < 65) {
      echo "<p>Grade: D</p>";
    } elseif ($rata_rata >= 0 && $rata_rata < 45) {
      echo "<p>Grade: E</p>";
    } else {
      echo "<p>Grade: K</p>";
    }
  }
  ?>
</div>
</body>
</html>
