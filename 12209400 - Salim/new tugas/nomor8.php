<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input bilangan bulat</title>
</head>
<body>
    
        <form method="post" action="">
            Masukkan bilangan : <input type="text" name="bilangan"><br>
            <input type="submit" name="submit" value="submit">
        </form>

        <?php
         function milahBilangan($bill){
           
            $bil_satuan = $bill % 10;
            $bil_pul  = ($bill / 10) % 10; 
            $bil_ratus = ($bill / 100) % 10;

           
            echo "Bilangan satuan: $bil_satuan<br>";
            echo "Bilangan puluhan: $bil_pul<br>";
            echo "Bilangan ratusan: $bil_ratus<br>";

         }

         if (isset($_POST['submit'])){
            $bilangan = intval($_POST['bilangan']);

            if ($bilangan >= 0 && $bilangan <= 9999) {
                milahBilangan($bilangan);    
            }

            else {
                echo "Masukkan bilangan antara 0 hingga 9999";
            }

         }


        ?>

</body>
</html>