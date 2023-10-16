<!DOCTYPE html>
<html>
<head>
    <title>Konversi Detik ke Waktu</title>
</head>
<body>
    <h2>Konversi Detik ke Jam-Menit-Detik</h2>
    <form method="post" action="">
        Masukkan total detik: <input type="text" name="detik_input">
        <input type="submit" name="konversi" value="Konversi">
    </form>
    
    <?php
    function detik_ke_waktu($total_detik) {
        $jam = floor($total_detik / 3600);
        $sisa_detik = $total_detik % 3600;
        $menit = floor($sisa_detik / 60);
        $detik = $sisa_detik % 60;
        return sprintf("%02d:%02d:%02d", $jam, $menit, $detik);
    }

    if (isset($_POST['konversi'])) {
        $detik_input = $_POST['detik_input'];
        
        if (is_numeric($detik_input) && $detik_input >= 0) {
            $waktu = detik_ke_waktu($detik_input);
            echo "Waktu: $waktu";
        } else {
            echo "Masukkan total detik yang valid (bilangan bulat positif).";
        }
    }
    ?>
</body>
</html>
