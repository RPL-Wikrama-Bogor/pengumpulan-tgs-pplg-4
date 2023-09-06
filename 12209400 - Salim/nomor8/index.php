<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Waktu Tempuh</title>
</head>
<body>
    <h1>Kalkulator Waktu Tempuh</h1>
    
    <form method="post">
        <label for="jarak">Jarak (meter):</label>
        <input type="number" name="jarak" required>
        
        <br>
        
        <label for="kecepatan">Kecepatan (m/s):</label>
        <input type="number" name="kecepatan" required>
        
        <br><br>
        
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jarak = $_POST['jarak'];
        $kecepatan = $_POST['kecepatan'];
        
        $detik_dibutuhkan = $jarak / $kecepatan;
        echo "Dibutuhkan waktu " . $detik_dibutuhkan . " detik untuk mencapai jarak " . $jarak . " meter dengan kecepatan " . $kecepatan . " m/s.";
    }
    ?>
</body>
</html>

