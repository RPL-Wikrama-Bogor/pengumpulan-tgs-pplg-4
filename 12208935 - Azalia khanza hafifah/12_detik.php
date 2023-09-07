<!DOCTYPE html>
<html>

<style>
    body {
        background-color: lightsteelblue;
    }

    .card {
        background-color: white;
        border-radius: 5px;
        max-width: 100%;
        text-align: center;
        padding: 50px 140px;
        margin: 125px 400px;
    }
    </style>

    <body>

    <div class="card">
        <h2>form input waktu</h2>
<form action="" method="POST">
<label for="detik">Detik:</label>
<input type="text" id="detik" name="detik" required>
<br><br>
 <input type="submit" value="Submit" name="hitung">
</form>


<?php
 if (isset($_POST["hitung"])) 
{
 $detik = $_POST["detik"];
 
 $j = floor ($detik / 3600); 
 $s = $detik % 3600;
 $m = floor ($s / 60);
 $d = $s % 60;
 $j = floor ($detik / 3600); 
 $s = $detik % 3600;
 $m = floor ($s / 60);
 $d = $s % 60;

 echo  $j . " jam ". $m . " menit ". $d. ' detik'; 
 }
 ?>
</div>
</body>
</html>