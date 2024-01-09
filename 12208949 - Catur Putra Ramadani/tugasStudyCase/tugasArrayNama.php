<?php
$data = [
    [
        "nama" => "Harry Potter",
        "umur" => 18,
        "nis" => 934,
        "rombel" => "Gryffindor",
        "rayon" => "London"
    ],
    [
        "nama" => "Harmonie Granger",
        "umur" => 17,
        "nis" => 123,
        "rombel" => "Gryffindor",
        "rayon" => "France"
    ],
    [
        "nama" => "Ron Weasley",
        "umur" => 17,
        "nis" => 456,
        "rombel" => "Gryffindor",
        "rayon" => "London"
    ],
    [
        "nama" => "Luna Lovegood",
        "umur" => 17,
        "nis" => 789,
        "rombel" => "Ravenclaw",
        "rayon" => "USA"
    ],
    [
        "nama" => "Artur",
        "umur" => 16,
        "nis" => 12208949,
        "rombel" => "Cisarua 5",
        "rayon" => "Cisarua 5"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>

<body>
    <a href="<?php echo $_SERVER['PHP_SELF'] . '?show=true'; ?>">Cari data yang sudah berusia lebih dari 17</a>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="nama">Cari berdasarkan Nama:</label>
        <input type="text" id="nama" name="nama">
        <input type="submit" value="Cari">
    </form>

    <?php
    if (isset($_GET['show']) && $_GET['show'] == 'true') {
        echo '<h2>Data dengan Umur >= 17</h2>';
        echo '<ul>';
        foreach ($data as $item) {
            if ($item['umur'] >= 17) {
                echo '<li>';
                echo  $item['nama'] . ', ' . $item['umur'];
                echo '</li>';
            }
        }
        echo '</ul>';
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nama'])) {
        $searchResults = [];
        $nama = $_POST['nama'];
        foreach ($data as $item) {
            if (stripos($item['nama'], $nama) !== false) {
                $searchResults[] = $item;
            }
        }

        echo '<h2>Hasil Pencarian</h2>';
        echo '<ul>';
        foreach ($searchResults as $item) {
            echo '<li>';
            echo 'Nama: ' . $item['nama'] . ', Umur: ' . $item['umur'] . ' , Nis: ' . $item["nis"] . ' , Rombel: ' . $item["rombel"] . ' , Rayon: ' . $item["rayon"];
            echo '</li>';
        }
        echo '</ul>';
    }
    ?>
</body>

</html>