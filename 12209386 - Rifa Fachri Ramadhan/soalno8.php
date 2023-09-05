<form action="" method="post">
    <label for="">Tentukan Jarak</label>
    <input type="number" name="jarak">
    <input type="submit" name="submit">
</form>

<?php

if(isset($_POST['submit']) ){
    $hasil = $_POST['jarak'] / 2;
    echo "waktu tempuhnya adalah $hasil detik";   
}
?>