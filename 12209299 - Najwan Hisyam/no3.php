<!DOCTYPE html>
<html>
<head>
    <title>Konversi Jam, Menit, Detik ke Total Detik</title>
</head>
<body>
    <form method="post" action="">
        <label for="jam">Jam:</label>
        <input type="number" id="jam" name="jam" required><br>

        <label for="menit">Menit:</label>
        <input type="number" id="menit" name="menit" required><br>

        <label for="detik">Detik:</label>
        <input type="number" id="detik" name="detik" required><br>

        <button type="submit">Konversi</button>
    </form>

    <?php
    if ($_POST) {
        $jam = $_POST ['jam'];
        $menit = $_POST ['menit'];
        $detik = $_POST ['detik'];
        $td;


        if($td = $jam * 3600 +  $menit * 60 + $detik) {
            echo "$td detik";
        }
    }
    
    ?>
</body>
</html>
