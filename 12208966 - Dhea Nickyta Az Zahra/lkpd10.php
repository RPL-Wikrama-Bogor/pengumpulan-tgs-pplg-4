<!DOCTYPE html>
<html>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Nomor 05</title>
<style>
    body {
        background-color: silver;
    }

    .card {
        background-color: grey;
        border-radius: 15px;
        outline: auto;
        max-width: 100%;
        text-align: center;
        padding: 50px 140px;
        margin: 125px 400px;
    }
    input {
        border-radius: 15px;
        margin: 5px;
    }
    </style>

  <body>
    <div class="card">
    <h2>Input Nilai siswa</h2>
<form action="" method="POST">
<label for="pai">PAIBP:</label>
<input type="text" id="pai" name="pai" required>
<br><br>
<label for="mtk">Matematika:</label>
<input type="text" id="mtk" name="mtk" required>
<br><br>
<label for="dpk">DPK:</label>
<input type="text" id="dpk" name="dpk" required>
<br><br>

 <input type="submit" value="Submit" name="hitung"><br><br>
</form>

<?php 
if (isset($_POST["hitung"])) 
{
 $a = $_POST["pai"]; 
 $b = $_POST["mtk"];
 $c = $_POST["dpk"];
 $n = ($a+$b+$c)/3;

 if ($n >= 80 && $n <= 100 ) {
    echo "Grade A";
  } elseif ($n >= 75 && $n < 80 ) {
    echo "Grade B";
  } elseif ($n >= 65 && $n < 75 ) {
    echo "Grade C";
  }elseif ($n >= 45 && $n < 65 ) {
    echo "Grade D";
  }elseif ($n >= 0 && $n < 45 ) {
    echo "Grade E";
  }else {
    echo "Grade K";
  ;}
 }
 ?>
 </div>
</body>
</html>