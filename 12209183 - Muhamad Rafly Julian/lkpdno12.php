<!DOCTYPE html>
<html>
<head>
    <title>Penambahan 1 Detik ke Data Waktu</title>
</head>
<body>
    <h1>Penambahan 1 Detik ke Data Waktu</h1>
    <form method="post">
        <label for="waktu">Masukkan data waktu (hh:mm:ss):</label>
        <input type="text" id="waktu" name="waktu" required>
        <input type="submit" value="Tambah 1 Detik">
    </form>

    <?php
    // Fungsi untuk menambah 1 detik ke data waktu
    function tambahSatuDetik($waktu) {
        $waktuArray = explode(":", $waktu);
        $jam = (int)$waktuArray[0];
        $menit = (int)$waktuArray[1];
        $detik = (int)$waktuArray[2];

        $detik += 1;

        if ($detik >= 60) {
            $detik = 0;
            $menit += 1;
        }

        if ($menit >= 60) {
            $menit = 0;
            $jam += 1;
        }

        if ($jam >= 24) {
            $jam = 0;
        }

        return sprintf("%02d:%02d:%02d", $jam, $menit, $detik);
    }

    // Memeriksa apakah data waktu sudah dikirimkan dari formulir
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $data_waktu = $_POST["waktu"];
        $waktu_setelah_ditambah = tambahSatuDetik($data_waktu);
        echo "<h2>Data Waktu Setelah Ditambah 1 Detik:</h2>";
        echo $waktu_setelah_ditambah;
    }
    ?>
</body>
</html>
