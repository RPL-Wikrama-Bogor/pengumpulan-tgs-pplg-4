<?php
$siswa = [

    [
        "nama" => "Samsul",
        "nis" => "12209193",
        "rombel" => "PPLG XI-4",
        "rayon" => "Cisarua 1",
        "umur" => "16",
    ],

    [
        "nama" => "Adly",
        "nis" => "12208869",
        "rombel" => "PPLG XI-4",
        "rayon" => "Cicurug 3",
        "umur" => "16",
    ],

    [
        "nama" => "Marcello",
        "nis" => "12209424",
        "rombel" => "PPLG XI-2",
        "rayon" => "Wikrama 4",
        "umur" => "17",
    ],

    [
        "nama" => "Komang",
        "nis" => "12202846",
        "rombel" => "PPLG XI-4",
        "rayon" => "Cicurug 4",
        "umur" => "18",
    ],

    [
        "nama" => "Catur",
        "nis" => "12202873",
        "rombel" => "PPLG XI-4",
        "rayon" => "Cisarua 5",
        "umur" => "17",
    ],

    [
        "nama" => "Ramon",
        "nis" => "12202989",
        "rombel" => "PPLG XI-4",
        "rayon" => "Cisarua 1",
        "umur" => "19",
    ],
];

// Opsi 1: Menampilkan data yang berumur 17 ke atas
if (isset($_GET['opsi']) && $_GET['opsi'] == 'opsi1') {
    echo "<h2>Data Siswa yang Berumur 17 Tahun ke atas</h2>";
    echo "<ul>";
    foreach ($siswa as $data) {
        if (intval($data['umur']) >= 17) {
            echo "<li>Nama: " . $data['nama'] . "<br>NIS: " . $data['nis'] . "<br>Rombel: " . $data['rombel'] . "<br>Rayon: " . $data['rayon'] . "<br>Umur: " . $data['umur'] . " tahun</li><hr>";
        }
    }
    echo "</ul>";
}

// Opsi 2: Menampilkan data berdasarkan nama yang dicari
if (isset($_GET['opsi']) && $_GET['opsi'] == 'opsi2') {
    if (isset($_GET['cari_nama'])) {
        $nama_dicari = $_GET['cari_nama'];
        echo "<h2>Data Siswa dengan Nama: $nama_dicari</h2>";
        echo "<ul>";
        foreach ($siswa as $data) {
            if (strcasecmp($data['nama'], $nama_dicari) === 0) {
                echo "<li>Nama: " . $data['nama'] . "<br>NIS: " . $data['nis'] . "<br>Rombel: " . $data['rombel'] . "<br>Rayon: " . $data['rayon'] . "<br>Umur: " . $data['umur'] . " tahun</li>";
            }
        }
        echo "</ul>";
    } else {
        echo "Silakan masukkan nama yang ingin dicari.";
    }
}
?>

<!-- Form untuk memilih opsi -->
<form action="" method="GET">
    <label for="opsi">Pilih Opsi:</label>
    <select name="opsi" id="opsi">
        <option value="opsi1">Tampilkan data yang berumur 17 ke atas</option>
        <option value="opsi2">Tampilkan data berdasarkan nama</option>
    </select>
    <input type="submit" value="Submit">
</form>

<!-- Form untuk mencari nama jika opsi 2 yang dipilih -->
<?php if (isset($_GET['opsi']) && $_GET['opsi'] == 'opsi2') { ?>
    <form action="" method="GET">
        <label for="cari_nama">Cari Nama:</label>
        <input type="text" name="cari_nama" id="cari_nama">
        <input type="submit" value="Cari">
    </form>
<?php } ?>