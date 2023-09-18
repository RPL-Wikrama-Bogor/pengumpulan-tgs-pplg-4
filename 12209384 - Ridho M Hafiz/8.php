<!DOCTYPE html>
<html>
<head>
    <title>Output Angka Satuan, Puluhan, dan Ratusan</title>
</head>
<body>
    <h1>Output Angka Satuan, Puluhan, dan Ratusan</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $bilangan = intval($_POST["bilangan"]);

        $satuan = $bilangan % 10;
        $puluhan = ($bilangan / 10) % 10;
        $ratusan = ($bilangan / 100) % 10;

        echo "<p>Bilangan: $bilangan</p>";
        echo "<p>Angka satuan: $satuan</p>";
        echo "<p>Angka puluhan: $puluhan</p>";
        echo "<p>Angka ratusan: $ratusan</p>";
    }
    ?>

    <form method="post">
        <label for="bilangan">Masukkan bilangan bulat:</label>
        <input type="number" name="bilangan" required>
        <input type="submit" value="Hitung">
    </form>
</body>
</html>
