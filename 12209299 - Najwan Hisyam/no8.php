<form action="" method="post">
    <label for=""> tentukan jarak :</label>
    <input type="number" name="jarak">
    <input type="submit" submit>
</form>

<?php

if(isset($_POST['submit'])) {
    $hasil = $_POST['jarak'] / 2;
    echo "waktu tempuhnya adalah $hasil detik";
}
?>