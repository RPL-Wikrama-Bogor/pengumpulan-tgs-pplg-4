<!DOCTYPE html>
<html>
<head>
    <title>Ubah Jam, Menit, Detik ke Total Detik</title>
</head>
<body>
    <h1>Ubah Jam, Menit, Detik ke Total Detik</h1>
    <form method="post" action="">
        <label for="jam">Jam      :</label>
        <input type="number" name="jam" id="jam" required><br>
        <label for="menit">Menit:</label>
        <input type="number" name="menit" id="menit" required><br>
        <label for="detik">Detik:</label>
        <input type="number" name="detik" id="detik" required>
        <input type="submit" value="Konversi">
    </form>
    <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jam = $_POST["jam"];
        $menit = $_POST["menit"];
        $detik = $_POST["detik"];

        $total_detik = ($jam * 3600) + ($menit * 60) + $detik;

        echo "<h2>Hasil Konversi:</h2>";
        echo "<p>Total Detik: $total_detik detik</p>";
    }
    ?>
</body>
</html>
