<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bilangan</title>
<style>
    body {
        background-color:#C7E9B0;
    }

    .card {
        background-color:#B3C99C;
        border-radius: 20px;
        max-width: 100%;
        text-align: center;
        padding: 50px 140px;
        margin: 125px 400px;
    }
    input{
        border-radius: 15px;
        margin:7px;
        width:70%;
        padding:3px;
    }

    </style>

    <body>
    <div class="card">
       <h1>Form Angka</h1>
<form action="" method="POST">
<label for="angka">Input Bilangan:</label>
<input type="text" id="angka" name="angka" required>
<br><br>
 <input type="submit" value="Submit" name="hitung"><br><br>
</form>
    </div>
    </body>
</html>

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