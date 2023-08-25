<?php
if(isset($_POST["waktu"])) {
    $waktu = $_POST["waktu"];
    
    function splitTime($time) {
        list($hour, $minute, $second) = explode(":", $time);
    
        $timeData = array(
            "jam" => (int)$hour,
            "menit" => (int)$minute,
            "detik" => (int)$second
        );
    
        return $timeData;
    }
    
    $splitWaktu = splitTime($waktu);
    
    echo "Jam: " . $splitWaktu["jam"] . "<br>";
    echo "Menit: " . $splitWaktu["menit"] . "<br>";
    echo "Detik: " . $splitWaktu["detik"];
}
?>
