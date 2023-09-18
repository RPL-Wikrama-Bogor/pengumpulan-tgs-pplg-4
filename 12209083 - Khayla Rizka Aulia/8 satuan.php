<!DOCTYPE html><html><body><h2>Form Input Angka</h2>
<form action="" method="POST">
<label for="angka">Angka:</label>
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