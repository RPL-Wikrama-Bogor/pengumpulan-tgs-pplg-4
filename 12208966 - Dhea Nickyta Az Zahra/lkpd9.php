<!DOCTYPE html>
<html>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Nomor 04</title>
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
    <h2>Input Cuaca</h2>
<form action="" method="POST">
<label for="suhu">Suhu:</label>
<input type="text" id="suhu" name="suhu" required placeholder="Fahrenheit">
<br><br>
 <input type="submit" value="Submit" name="hitung"><br><br>
</form>

<?php 
if (isset($_POST["hitung"])) {
 $suhu = $_POST["suhu"];

 $c = ($suhu-32)*5/9;
 if ($c > '300' ) {
    echo "cuaca panas";
  } elseif ($c < '250' ) {
    echo "cuaca dingin";
  } else {
    echo "cuaca normal";}
 }
 ?>
 </div>
</body>
</html>