<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lkpd 4</title>
</head>
<body><center>
    <h1>Gaji Karyawan</h1>
    <form action="#" method="post">
        <label for="nama">
            <input type="text" name="nama"><br><br>
            <label for="gaji">
                <input type="number" name="gaji"><br>
                <br>
                <button>Submit</button> <br>
            </form>
        </center>
</body>
</html>

<?php

if(isset($_POST['gaji'])){
$gajihpokok = $_POST['gaji'];
$nama = $_POST['nama'];


$tunjangan = (20 * $gajihpokok)/100;
$pajak =( 15 *($gajihpokok + $tunjangan))/100;
$gajber = $gajihpokok + $tunjangan - $pajak;
echo $nama . "<br>";
echo $gajber . "Ini gajih bersih" . "<br>";
echo $pajak . "Ini pajak" . "<br>";
echo $tunjangan . "Ini tunjangan";
}
?>
