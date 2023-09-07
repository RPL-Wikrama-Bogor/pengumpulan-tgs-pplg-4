<!DOCTYPE html>
<html>

<style>
    body {
        background-color: #61677A;
    }

    .card {
        background-color: #D8D9DA;
        border-radius: 10px;
        max-width: 100%;
        text-align: center;
        padding: 50px 120px;
        margin: 100px 400px;
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
