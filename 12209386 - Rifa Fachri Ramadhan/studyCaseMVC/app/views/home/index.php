<div class="container">
    <h1>Selamat Datang !</h1>
    <hr>
    <h3>Inventaris Alat Pembelajaran</h3>
    <br>
    <strong>Peraturan Peminjaman</strong>
    <ol>
        <li>Menemui Petugas Inventaris ketika akan meminjam dan mengembalikan barang</li>
        <li>Lama waktu peminjaman hanya 2 hari</li>
        <li>Menyerahkan kartu identitas ketika melakukan peminjaman sebagai jaminan</li>
    </ol>    

    <?php
         $indonesiaTimeZone = new DateTimeZone('Asia/Jakarta');

$now = new DateTime('now', $indonesiaTimeZone);

$localTime = $now->format('Y-m-d H:i:s');

echo "Local time in Indonesia (WIB): " . $localTime;
    ?>
</div>