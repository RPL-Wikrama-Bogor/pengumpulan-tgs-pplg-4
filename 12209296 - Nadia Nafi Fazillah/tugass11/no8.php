<!DOCTYPE html>
<html>

<style>
    body {
        background-color: #D4E2D4;
    }

    .card {
        background-color: #FAF3F0;
        border-radius: 5px;
        max-width: 100%;
        text-align: center;
        padding: 70px 140px;
        margin: 230px 400px;
    }
    </style>

    <body>
    <div class="card">
        <h2>Form Input Angka</h2>
<form action="" method="POST">
<label for="angka">Masukkan Angka : </label>
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

 echo   $rb. " Ribuan ".$rt . " Ratusan ". $p. ' Puluhan '. $s. ' Satuan '; 
 }
 ?>
</body>
</html>
</div>