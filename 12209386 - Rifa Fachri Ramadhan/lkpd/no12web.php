<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No 12</title>
    <link rel="stylesheet" href="css/no12.css">
</head>
<body>

    <form action="" method="post">
        <label for="">Masukan Jam</label>
        <input type="number" name="jam" class="jam">
        <br>
        <label for="">Masukan menit</label>
        <input type="number" name="menit" class="menit">
        <br>
        <label for="">Masukan detik</label>
        <input type="number" name="detik" class="detik">
        <br>
        <input type="submit" name="submit" class="submit">
    </form>
    <?php
        if(isset($_POST['submit'])){
        $hh = $_POST['jam'];
        $mm = $_POST['menit'];
        $ss = $_POST['detik'];

        $ss++;

        if($ss >=60){
            $mm =$mm + 01;
            $ss = 00;
        }
        if($mm >=60){
            $hh =$hh + 1;
            $mm = 00;
            $ss = 00;
        }
        if($hh >=24){
            $hh = 00;
            $mm = 00;
            $ss = 00;
        }
        $hasil = sprintf('%02d:%02d:%02d', $hh, $mm, $ss);
?>
    <div class="hasil">
        <p> <?= $hasil ?> </p>
    </div>

<?php
        }
        ?>




</body>
</html>