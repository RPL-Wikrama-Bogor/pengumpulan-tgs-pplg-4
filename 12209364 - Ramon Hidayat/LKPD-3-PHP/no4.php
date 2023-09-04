
<?php

    $nama;
    $tunj;
    $pjk;
    $bersih;
    $pokok;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <form action="" method="post">
        <div style="display : flex">
            <label for="nama">Masukan Nama Karyawan</label>
            <input type="text" name="nama" id="nama"> 
        </div>

        <div style="display : flex">
            <label for="gaji">Masukan Gaji Pokok </label>
            <input type="number" name="gaji" id="gaji"> 
        </div>

        <button type="submit" name="submit">Submit!</button>
    </form>

    <?php

    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $pokok = $_POST['gaji'];

        $tunj = (20 * $pokok) / 100;
        $pjk = (15 * ($pokok + $tunj)) / 100;
        $bersih = $pokok + $tunj - $pjk;

        echo "Nama : ".$nama . "</br>";
        echo "Tunjagan : Rp. ".$tunj."</br>";
        echo "Pajak : Rp. ".$pjk."</br>";
        echo "Gaji Bersih : Rp. ".$bersih."</br>";
    }
    ?>

</body>
</html>