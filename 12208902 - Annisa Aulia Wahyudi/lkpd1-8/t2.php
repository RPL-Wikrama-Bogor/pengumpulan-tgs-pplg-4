<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nilai terbesar</title>
</head>
<body>
    <form action="" method="post">
        <label>Masukkan Nilai:</label><br>
        a <br><input type="number" name="a"><br>
        b <br><input type="number" name="b"><br>
        c <br><input type="number" name="c"><br>
        <br><input type="submit" value="submit" name="submit" >
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])) {
        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];

        if ( $a > $b && $a > $c ) {
            echo"nilai terbesar adalah " .$a ;
        } elseif ( $b > $a && $b > $c ) {
            echo "nilai terbesa adalah " .$b;
        } else {
            echo "nilai terbesar adalah " .$c;
        } 
    }




