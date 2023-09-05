
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numbers = array();
    for ($i = 1; $i <= 10; $i++) {
        $number = $_POST["number$i"];
        array_push($numbers, $number);
    }

    $maxnilai = $numbers[0]; 

    foreach ($numbers as $nilai) {
        if ($nilai > $maxnilai) {
            $maxnilai = $nilai; 
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Temukan Bilangan Nilai</title>
</head>
<body>
    <h2>Masukkan 10 Nilai</h2>
    <form method="post" action="">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "Nilai ke-$i :  <input type='number' name='number$i'><br>";
        }
        ?>
        <br>
        <input type="submit" value="Temukan Nilai Terbesar">
    </form>

    <?php
    if (isset($maxnilai)) {
        echo "<h3>Nilai terbesar adalah: $maxnilai</h3>";
    }
    ?>
</body>
</html>
