
<form method="post">
    <label for="" >Masukan Jam</label>
    <input type="number" name="jam">
    <label for="" >Masukan menit</label>
    <input type="number" name="menit">
    <label for="" >Masukan detik</label>
    <input type="number" name="detik">
    <input type="submit" name="hasil">
</form>


<?php
if($_POST){
    $jam = $_POST['jam'];
    $menit = $_POST['menit'];
    $detik = $_POST['detik'];

    $hasil = ($jam * 3600) + ($menit * 60) + $detik;
    echo "Total Detiknya = " . $hasil;

}