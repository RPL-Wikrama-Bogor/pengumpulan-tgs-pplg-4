<form action="" method="post">
    <label for="">Masukan Total detik</label>
    <input type="number" name="td">
    <input type="submit" name="submit">
</form>

<?php
$jam = 0;
$menit = 0;
$detik = 0;

if(isset($_POST['submit'])){
    if(isset($_POST['td'])) { // Memeriksa apakah $_POST['td'] sudah diatur
        $total_detik = $_POST['td'];

        for ($i = 0; $total_detik >= 3600; $i++) {
            $total_detik -= 3600;
            $jam++;
        }

        for ($i=0; $total_detik >= 60; $i++) {
            $total_detik -= 60;
            $menit++;
        }

        $detik = $total_detik;

        echo "$jam jam, $menit menit, $detik detik";
    }
}
?>
