<!DOCTYPE html>
<html>

<head>
    <title>Uraikan Bilangan Bulat</title>
</head>

<body>
    <h2>Form Uraikan Bilangan Bulat</h2>
    <form method="post" action="">
        <label for="bilangan">Masukkan Bilangan Bulat:</label>
        <input type="number" name="bilangan" required><br><br>

        <input type="submit" name="uraikan" value="Uraikan">
    </form>

    <?php
    if (isset($_POST['uraikan'])) {
        $bilangan = $_POST['bilangan'];
        $satuan = 0;
        $puluhan = 0;
        $ratusan = 0;

        $satuan = $bilangan % 10;
        $bilangan = (int) ($bilangan / 10);
        $puluhan = $bilangan % 10;
        $bilangan = (int) ($bilangan / 10);
        $ratusan = $bilangan;

        echo "<h3>Hasil Uraikan Bilangan Bulat</h3>";
        echo "Satuan: $satuan<br>";
        echo "Puluhan: $puluhan<br>";
        echo "Ratusan: $ratusan";
    }
    ?>
</body>

</html>