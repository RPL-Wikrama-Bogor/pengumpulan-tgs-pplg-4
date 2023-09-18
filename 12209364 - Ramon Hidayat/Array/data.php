<?php
$data = [
    [
        'name' => 'Ramon Hidayat',
        'nis' => 12209364,
        'rayon' => 'Cisarua 1',
        'namapj' => 'Dede Mulyana',
        'umur' => 16
    ],
    [
        'name' => 'samsul',
        'nis' => 12209365,
        'rayon' => 'Cisarua 1',
        'namapj' => 'Dede Mulyana',
        'umur' => 16
    ],
    [
        'name' => 'ardila',
        'nis' => 12209366,
        'rayon' => 'Cisarua 1',
        'namapj' => ' Dede Mulyana',
        'umur' => 16
    ],
    [
        'name' => 'nazir',
        'nis' => 12209309,
        'rayon' => 'Cisarua 3',
        'namapj' => ' Rizal',
        'umur' => 17
    ],
    [
        'name' => 'Fema',
        'nis' => 11907154,
        'rayon' => 'Cicurug 3',
        'namapj' => 'Mem Mala',
        'umur' => 18
    ],
    [
        'name' => 'Desta Restiani Anwar',
        'nis' => 12208960,
        'rayon' => 'Ciawi 1',
        'namapj' => 'Juliana Mansyur',
        'umur' => 16
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pencarian Data Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>

<body>
<div class="container">
    <h1>Pencarian Data Siswa</h1>

    <form action="" method="post">
        <div class="form-group">
            <label for="nama">Nama</label> <!--tidak efektif kalo pake nama kalo di real time-->
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="form-group">
            <label for="umur">Umur</label>
            <select name="umur" id="umur" class="form-control">
                <option value="">Pilih umur</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
            </select>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Cari</button>
    </form>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th>NIS</th>
            <th>Rayon</th>
            <th>Penanggung Jawab</th>
            <th>Umur</th>
        </tr>
        </thead>
        <tbody>
        <?php

        if (isset($_POST["submit"])) {
            $nama = $_POST["nama"];
            $umur = $_POST["umur"];
            $found = false;
            $filter = [];

            foreach ($data as $item) {
                if ($item["name"] === $nama || $item["umur"] == $umur) {
                    $filter[] = $item;
                    $found = true;
                }
            }
        }
        if (isset($_POST["submit"])) {
            if ($found) {
                foreach ($filter as $item) {
                    echo "<tr>  
                                <td>{$item["name"]}</td>
                                <td>{$item["nis"]}</td>
                                <td>{$item["rayon"]}</td>
                                <td>{$item["namapj"]}</td>
                                <td>{$item["umur"]}</td>
                            </tr>";
                }
            } else {
                echo "<tr>
                            <td colspan='5'>Data tidak ditemukan</td>
                        </tr>";
            }
        }
        ?>
        </tbody>
    </table>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>