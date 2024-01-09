<?php

    $bil;
    $satuan;
    $puluhan;
    $ratusan;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
    <form action="" method="post">
        <div style="display: flex;">
            <label for="bilangan">Masukan angka : </label>
            <input type="number" name="bilangan" id="bilangan">
        </div>
        <button type="submit" name="submit">Submit!</button>
    </form>

    <?php

    if(isset($_POST['submit'])){
        $bil = $_POST['bilangan'];

        $satuan = $bil % 10;
        // Implicit conversion from float to int loses precision
        $puluhan = ($bil / 10) % 10;
        $ratusan = floor($bil / 100);
        $ribu = floor($bil/1000);
        if($ratusan >= 10){
            $ratusan = floor( $ratusan %= 10);
        }

        echo "Satuan : ".$satuan." || puluhanan : ".$puluhan." || Ratusan : ".$ratusan." || Ribuan : ".$ribu;
    }

    ?>

</body>
</html>
