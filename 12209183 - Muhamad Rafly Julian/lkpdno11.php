<!DOCTYPE html>
<html>
<head>
    <title>Cetak Nomor Pegawai</title>
</head>
<body>
    <h1>Cetak Nomor Pegawai</h1>
    <form method="post">
        <label for="nomor_pegawai">Masukkan nomor pegawai (gddmmyyyynn):</label>
        <input type="text" id="nomor_pegawai" name="nomor_pegawai" required>
        <input type="submit" value="Cetak">
    </form>

    <?php
    // Fungsi untuk mengonversi angka bulan menjadi nama bulan dalam Bahasa Indonesia
    function konversiBulan($mm) {
        $bulan = ["JANUARI", "FEBRUARI", "MARET", "APRIL", "MEI", "JUNI", "JULI", "AGUSTUS", "SEPTEMBER", "OKTOBER", "NOVEMBER", "DESEMBER"];
        $nomor_pegawai = $_POST["nomor_pegawai"];

    }

    // Memeriksa apakah data nomor pegawai sudah dikirimkan dari formulir
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nomor_pegawai = $_POST["nomor_pegawai"];

        // Ambil komponen-komponen dari nomor pegawai
        $g = $nomor_pegawai[0];
        $dd = substr($nomor_pegawai, 1, 2);
        $mm = substr($nomor_pegawai, 3, 2);
        $yyyy = substr($nomor_pegawai, 5, 4);
        $nn = substr($nomor_pegawai, 9);

        // Konversi bulan menjadi nama bulan
        $nama_bulan = konversiBulan($mm);

        // Cetak hasil
        echo "<h2>Hasil:</h2>";
        echo "Nomor Golongan: " . $g . "<br>";
        echo "Tanggal Lahir: " . $dd . " " . $nama_bulan . " " . $yyyy . "<br>";
        echo "Nomor Urut: " . $nn . "<br>";
    }
    ?>
</body>
</html>
