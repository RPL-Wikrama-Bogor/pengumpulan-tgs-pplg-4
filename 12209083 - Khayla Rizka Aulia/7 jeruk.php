<html>
    <head>
        <title>Nomor 1 </title>
        <body>
            <form name="form1" method="POST">
                <label>Masukkan Total Gram</label>
                <input type="number" name="totalGram"></input><br><br>
                <input type="submit" name="gram" value="Submit"></input>
            </form>
        </body>
    </head>
</html>


<?php
    if(isset($_POST['gram'])) {
        $g = $_REQUEST['totalGram'];


        $hj = $g / 100 * 500;
        $d = $hj * 5 / 100;
        $hb = $hj - $d;


        echo "Harga Sebelum Diskon : Rp $hj </br>";
        echo "Diskon : Rp $d </br>";
        echo "Harga Setelah Diskon : Rp $hb </br>";
    }

?>
