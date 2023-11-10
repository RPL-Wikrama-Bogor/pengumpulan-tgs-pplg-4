<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No 19</title>
    <link rel="stylesheet" href="css/no19.css">
</head>
<body>

<table>
    <form action="" method="post">
        <tr> 
            <td><label for="">Penjualan Tiket VIP = </label></td>
            <td><input type="number" name="vip"></td>
        </tr>
        <tr>
            <td><label for="">Penjualan Tiket Ekekutif = </label></td>
            <td><input type="number" name="eksekutif"></td>
        </tr>
        <tr> 
            <td><label for="">Penjualan Tiket Ekonomi = </label></td>
            <td><input type="number" name="ekonomi"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" class="submit"></td>
        </tr>
        
    </form>
</table>
<?php
    if($_POST) :
    
    
    $v = $_POST['vip'];
    $eks = $_POST['eksekutif'];
    $eko = $_POST['ekonomi'];

    if($v = null&& $eks=null&& $eko=null){
        die("Tolong isi kolom nya");
    }else{
         $EKONOMI = 50;
    $EKSEKUTIF = 50;
    $VIP = 50;

    if(isset($_POST['submit']) ){
        if($v){

            if($v >= 35){
                $KV = 25;
            }elseif($v <35 && $v >=20){
                $KV = 15;
            }else{
                $KV = 5;
            }
        }
        if($eks){
            if($eks >= 40){
                $KEKS =20;
            }elseif($eks < 40 && $eks >=20){
                $KEKS = 10;
            }else{
                $KEKS = 2;
            }
        }
        if($eko){ 
           $KEKO = 7;
        }

        $KS = $KV + $KEKS + $KEKO;
        $TT = $v + $eks + $eko;
    
   
?>

    <div class="hasil">
        <div class="keuntungan">
            <p>Keuntungan VIP <?= $KV ?>%</p>
            <br>
            <p>Keuntungan eksekutif <?= $KEKS ?>%</p>
            <br>
            <p>Keuntungan Ekonomi <?= $KEKO ?>%</p>
            <br>
            <p>Keuntungan Keseluruhan <?= $KS ?>%</p>
            <br>
        </div>
        <div class="tiket">
            <p>Penjualan Tiket VIP <?= $v ?></p>
            <br>
            <p>Penjualan Tiket eksekutif <?= $eks ?></p>
            <br>
            <p>Penjualan Tiket Ekonomi <?= $eko ?></p>
            <br>
        </div>
        
    </div>


    <?php } ?>
    <?php } ?>
<?php endif; ?>


</body>
</html>