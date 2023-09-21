<!DOCTYPE html>
<html>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Nomor 03</title>
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
        <h2>Form Input Angka</h2>
<form action="" method="POST">
<label for="angka">masukkan Angka:</label>
<input type="text" id="angka" name="angka" required>
<br><br>
 <input type="submit" value="Submit" name="hitung"><br><br>
</form>

<?php 
if (isset($_POST["hitung"])) {
 $a = $_POST["angka"];
 $rb = floor ($a / 1000) % $a;
 $rt = floor ($a / 100) % 10;
 $p = floor ($a / 10) % 10; 
 $s = $a % 10;

 echo   $rb. " ribuan ".$rt . " ratusan ". $p. ' puluhan '. $s. ' satuan '; 
 }
 ?>
</body>
</html>
</div>