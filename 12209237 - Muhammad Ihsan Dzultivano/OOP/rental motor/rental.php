<?php

$nama = "";
$lamaWaktu = 0;
$jenis = "";
$harga = 0;
$total = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama_pelanggan"];
    $lamaWaktu = intval($_POST["lama_rental"]);
    $jenis = $_POST["jenis_motor"];

    switch ($jenis) {
        case "Kawasaki Z1000 Sugomi":
            $harga = 1000000;
            break;
        case "Kawasaki ZX-6 R":
            $harga = 2500000;
            break;
        case "Yamaha R25":
            $harga = 500000;
            break;
        case "Kawasaki Ninja 250 Karbu":
            $harga = 200000;
            break;
        case "Honda CBR 250 RR/Baby RR":
            $harga = 430000;
            break;
        case "Yamaha XMAX":
            $harga = 500000;
            break;
        case "Yamaha Aerox 155":
            $harga = 300000;
            break;
        default:
            $harga = 0;
    }

    if ($lamaWaktu > 2) {
        $total = $lamaWaktu * $harga * 0.95;
    } else {
        $total = $lamaWaktu * $harga;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor Jullman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        body {
            background: url(bc.jpg) no-repeat;
            background-size: cover;
        }

        h1 {
            text-align: center;
            color: #ffff;
            font-family: Arial;
        }

        form {
            color: #ffff;
        }

        .card {
            margin-top: 50px;
            background-color: rgba(0, 0, 0, 0.5) !important;
            padding: 20px;
        }

        img {
            border-radius: 80px;
            border: solid white;
            margin-left: 110px;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: white;
        }

        table,
        th,
        td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        h2{
            color: #ffff;
            text-align: center;
        }
        .profil{
            width: 100px;
            margin: center;
        }
    </style>
</head>

<body>
    <h1>Formulir Rental Motor Kang Jull</h1>
    <br><br><br>
    <div class="d-flex justify-content-center">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <h1>Rental Motor Kang Jull</h1>
                    <br>
                    <label for="nama_pelanggan">Nama pelanggan</label>
                    <input type="text" name="nama_pelanggan" id="nama_pelanggan" required><br><br>

                    <label for="lama_rental">Lama Waktu Rental (per hari)</label>
                    <input type="number" name="lama_rental" id="lama_rental" required><br><br>

                    <label for="jenis_motor">Nama Motor</label>
                    <select name="jenis_motor" id="jenis_motor" required>
                        <option value="Kawasaki Z1000 Sugomi">Kawasaki Z1000 Sugomi</option>
                        <option value="Kawasaki ZX-4 R">Kawasaki ZX-4 R</option>
                        <option value="Yamaha R25">Yamaha R25</option>
                        <option value="Kawasaki Ninja 250 Karbu">Kawasaki Ninja 250 Karbu</option>
                        <option value="Honda CBR 250 RR/Baby RR">Honda CBR 250 RR/Baby RR</option>
                        <option value="Yamaha XMAX">Yamaha XMAX</option>
                        <option value="Yamaha Aerox 155">Yamaha Aerox 155</option>
                    </select><br><br>

                    <button type="submit" class="btn btn-primary">Hitung</button>
                </form>
            </div>
        </div>
    </div>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if ($total > 0 && $lamaWaktu <= 2) {
                        echo "<table>";
                        echo "<tr><th>Jenis Motor</th><th>Lama Rental (hari)</th><th>Harga Rental per Hari</th><th>Total Harga</th></tr>";
                        echo "<tr><td>$jenis</td><td>$lamaWaktu</td><td>Rp " . number_format($harga, 0, ',', '.') . "</td><td>Rp " . number_format($total, 0, ',', '.') . "</td></tr>";
                        echo "</table>";
                    } else {
                        echo "<h2>$nama berstatus sebagai Member mendapatkan diskon 5%</h2>";
                        echo "<table>";
                        echo "<tr><th>Jenis Motor</th><th>Lama Rental (hari)</th><th>Harga Rental per Hari</th><th>Total Harga</th></tr>";
                        echo "<tr><td>$jenis</td><td>$lamaWaktu</td><td>Rp " . number_format($harga, 0, ',', '.') . "</td><td>Rp " . number_format($total, 0, ',', '.') . "</td></tr>";
                        echo "</table>";
                    }
                }
                ?>
</body>

</html>
