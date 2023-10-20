<!DOCTYPE html>
<html>
<head>
    <title>Mencari Bilangan Terbesar</title>
</head>
<body>
    <h2>Mencari Bilangan Terbesar</h2>
    <form method="post" action="">
        Masukkan bilangan pertama: <input type="text" name="bilangan1">
        <br><br>
        Masukkan bilangan kedua: <input type="text" name="bilangan2">
        <br><br>
        Masukkan bilangan ketiga: <input type="text" name="bilangan3">
        <br><br>
        <input type="submit" name="cari" value="Cari Terbesar">
    </form>
    <?php
    if (isset($_POST['cari'])) {
        $bilangan1 = $_POST['bilangan1'];
        $bilangan2 = $_POST['bilangan2'];
        $bilangan3 = $_POST['bilangan3'];

        // Menemukan bilangan terbesar
        if ($bilangan1 >= $bilangan2 && $bilangan1 >= $bilangan3) {
            $terbesar = $bilangan1;
        } elseif ($bilangan2 >= $bilangan1 && $bilangan2 >= $bilangan3) {
            $terbesar = $bilangan2;
        } else {
            $terbesar = $bilangan3;
        }

        echo "Bilangan terbesar: $terbesar";
    }
    ?>
</body>
</html>  