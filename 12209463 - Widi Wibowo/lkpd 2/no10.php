<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil rata-rata grade nilai</title>
</head>
<body>
    
        <form method="post" action="">
            Masukkan nilai PABP : <input type="text" name="nilai_PABP"><br>
            Masukkan nilai DPK  : <input type= "text" name="nilai_DPK"><br>
            Masukkan nilai MTk  : <input type="text" name="nilai_MTK"><br>
            <input type="submit" name="submit" value="Rata-rata">
        </form>

        <?php
            if (isset($_POST['submit'])) {

            $Nil_PABP = intval($_POST['nilai_PABP']);
            $Nil_DPK  = intval($_POST['nilai_DPK']);
            $Nil_MTK  = intval ($_POST['nilai_MTK']);

            $Nil_rata = ( $Nil_PABP + $Nil_MTK + $Nil_DPK ) / 3;
 
            
        if ($Nil_rata >=80 && $Nil_rata <=100) {
                $grade = "A";
            } elseif ($Nil_rata >= 75) {
                $grade = "B";
            } elseif ($Nil_rata >= 65) {
                $grade = "C";
            } elseif ($Nil_rata  >= 45) {
                $grade = "D";
            } elseif ($Nil_rata  >= 0) {
                $grade = "E";
            } else {
                $grade = "K";
            }
                
                echo "Rata rata nilai: $Nil_rata<br>";
                echo "Grade = $grade<br>";

            }



        ?>

</body>
</html>