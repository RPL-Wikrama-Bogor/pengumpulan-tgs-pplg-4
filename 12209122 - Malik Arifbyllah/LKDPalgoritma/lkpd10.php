<?php
$pabp;
$mtk;
$dpk;
$rata;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grade Siswa</title>
</head>
<body>
  <style>
    body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            background: #B9B4C7;
            padding: 60px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            display: block;
            background-color: #352F44;
            color: #fff;
            border: none;
            padding: 10px 20px;
            margin-top: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #B9B4C7;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }
  </style>
  <!-- input -->
  <form method="POST" action="#">
      <label for="NilaiPABP">Nilai PABP</label>
      <input type="text" name="pabp" id="pabp">
    <br>
      <label for="NIlaiMTK">Nilai MTK</label>
      <input type="text" name="mtk" id="mtk">
    <br>
      <label for="NilaiDPK">Nilai DPK</label>
      <input type="text" name="dpk" id="dpk">
    <br>
    <input type="submit" value="Submit" name="submit">
  </form>

  <?php
  //proses
  if (isset($_POST['submit'])) {
    $pabp = $_POST['pabp'];
    $mtk = $_POST['mtk'];
    $dpk = $_POST['dpk'];
    $rata;
    $rata = ($pabp + $mtk + $dpk) / 3;

    //output

    if($rata <= 100 && $rata >= 80){
      echo "<h1>Grade A</h1>";
    }
    elseif($rata <= 80 && $rata >= 75){
      echo "<h1>Grade B</h1>";
    }
    elseif($rata <= 75 && $rata >= 65){
      echo "<h1>Grade C</h1>";
    }
    elseif($rata <= 65 && $rata >= 45){
      echo "<h1>Grade D</h1>";
    }
    elseif($rata <= 45 && $rata >= 0){
      echo "<h1>Grade E</h1>";
    }
    else{
      echo "<h1>Angka tiadk memenuhi persyaratan</h1>";
    }
  }
  ?>
</body>
</html>