<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No 11</title>
    <link rel="stylesheet" href="css/no11.css">
</head>
<body>
    
    <form action="" method="post">
        <label for="">Masukan No Pegawai</label>
        <input type="number" name="number" class="number">
        <input type="submit" name="submit" class="submit">
 


</body>
</html>

<?php 

    if(isset($_POST['submit'])){
        $noP = $_POST['number'];
        if(strval($noP) < 11){
            echo "No pegawai tidak sesuai";
        }else{
            $noG = substr($noP, 0, 1);
            $tngl = substr($noP, 1, 2);
            $bln = substr($noP, 3, 2);
            $thn = substr($noP, 5, 4);
            $noU = substr($noP, 9, 2);
        
            if($bln == "01"){
                $bln = "januari";
            }elseif($bln == "02"){
                $bln = "Febuari";
            }elseif($bln == "03"){
                $bln = "Maret";
            }elseif($bln == "04"){
                $bln = "April";
            }elseif($bln == "05"){
                $bln = "Mei";
            }elseif($bln == "06"){
                $bln = "Juni";
            }elseif($bln == "07"){
                $bln = "Juli";
            }elseif($bln == "08"){
                $bln = "Agustus";
            }elseif($bln == "09"){
                $bln = "September";
            }elseif($bln == "10"){
                $bln = "Oktober";
            }elseif($bln == "11"){
                $bln = "November";
            }else{
                $bln = "Desember";
            }
            
            $TL = $tngl . " ". $bln . " ".  $thn;
        
            
        }
        ?>
        </form>
        <div class="hasil">
        <p>No Golongan =  <?=$noG ?></p>
        <br>
        <p>Tanggal Lahir =  <?=$TL ?></p>
        <br>
        <p>No Urutan =  <?=$noU ?></p>
        <br>   
        </div>
<!-- 11810200636 -->

   <?php } ?>

   

