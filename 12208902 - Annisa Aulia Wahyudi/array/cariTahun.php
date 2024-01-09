<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Umur</title>
</head>
<body>
    <form method="post">
        <ul>
            <li><a href="?umur=17">Cari yang sudah berusia >= 17 tahun</a></li>
            <li>
                <label for="cari_nama">Cari berdasarkan nama: </label>
                <input type="text" name="cari_nama" id="cari_nama">
                <input type="submit" name="submit" value="CARI">
            </li>
        </ul>
    </form>

    <?php
    $siswa = [
        [
            "nama" => "Fema",
            "nis" => "11907154",
            "rombel" => "PPLG XI-2",
            "rayon" => "Cicurug 3",
            "umur" => "18"
        ],
        [
            "nama" => "Ghina",
            "nis" => "11907155",
            "rombel" => "PPLG XI-2",
            "rayon" => "Ciawi 1",
            "umur" => "16"
        ],
        [
            "nama" => "Annisa",
            "nis" => "12208902",
            "rombel" => "PPLG XI-4",
            "rayon" => "Ciawi 4",
            "umur" => "17"
        ],
        [
            "nama" => "Giblar",
            "nis" => "12209030",
            "rombel" => "PPLG XI-5",
            "rayon" => "Cisarua 4",
            "umur" => "17"
        ],
    ];

    if (isset($_POST['submit'])) {
        $cari_nama = $_POST['cari_nama'];
        $hasil_pencarian = [];

        foreach ($siswa as $data) {
            if (stristr($data['nama'], $cari_nama) !== false) {
                $hasil_pencarian[] = $data;
            }
        }

        if (count($hasil_pencarian) > 0) {
            echo '<h2>Hasil Pencarian</h2>';
            echo '<ul>';
            foreach ($hasil_pencarian as $siswa) {
                echo '<li>';
                echo 'Nama: ' . $siswa['nama'] . '<br>';
                echo 'NIS: ' . $siswa['nis'] . '<br>';
                echo 'Rombel: ' . $siswa['rombel'] . '<br>';
                echo 'Rayon: ' . $siswa['rayon'] . '<br>';
                echo 'Umur: ' . $siswa['umur'] . '<br>';
                echo '</li>';
            }
            echo '</ul>';
        } else {
            echo '<h2>Hasil Pencarian</h2>';
            echo '<p>Nama tidak ditemukan.</p>';
        }
    } elseif (isset($_GET['umur']) && $_GET['umur'] == 17) {
        $hasil_pencarian = [];

        foreach ($siswa as $data) {
            if ($data['umur'] >= 17) {
                $hasil_pencarian[] = $data;
            }
        }

        if (count($hasil_pencarian) > 0) {
            echo '<h2>Hasil Pencarian</h2>';
            echo '<ul>';
            foreach ($hasil_pencarian as $siswa) {
                echo '<li>';
                echo 'Nama: ' . $siswa['nama'] . '<br>';
                echo 'NIS: ' . $siswa['nis'] . '<br>';
                echo 'Rombel: ' . $siswa['rombel'] . '<br>';
                echo 'Rayon: ' . $siswa['rayon'] . '<br>';
                echo 'Umur: ' . $siswa['umur'] . '<br>';
                echo '</li>';
            }
            echo '</ul>';
        } else {
            echo '<h2>Hasil Pencarian</h2>';
            echo '<p>Data siswa dengan umur >= 17 tahun tidak ditemukan.</p>';
        }
    }
    ?>
</body>
</html>
