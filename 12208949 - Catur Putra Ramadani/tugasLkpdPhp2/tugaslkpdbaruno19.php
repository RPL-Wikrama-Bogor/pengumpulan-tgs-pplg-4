<!DOCTYPE html>
<html>

<head>
    <title>Hitung Penghasilan Penjualan Tiket</title>
    <style>
        /* Tampilan default untuk semua lebar layar */
        body {
            margin: 30px 0 0;
            font-family: 'Source Sans Pro', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: linear-gradient(to bottom right, rgb(120, 59, 139), rgb(92, 138, 237), rgb(127, 193, 250));
            background-repeat: no-repeat;
            background-size: cover;
            padding: 170px;
        }

        .container {
            padding: 0;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(8, 1fr);
            margin: 5px 15px;
            gap: 20px;
            position: relative;
        }

        .card {
            width: 100%;
            height: auto;
            grid-column: span 8;
            margin: 10px 0;
            border-radius: 15px;
            position: relative;
            box-shadow: 0 10px 10px rgba(0, 0, 0, .1);
            background-color: #fff;
            margin: 0 auto;
            padding: 25px;
        }

        h2 {
            color: #141E46;
            text-align: center;
            margin-bottom: 50px;
        }

        .input {
            border-radius: 50px;
            border-color: #B9B4C7;
            box-shadow: inset 1px 1px 4px #FFD5E7;
            -moz-box-shadow: inset 1px 1px 4px #FFD5E7;
            -webkit-box-shadow: inset 1px 1px 4px #FFD5E7;
            width: 100%;
        }

        .button {
            position: relative;
            padding: 10px 22px;
            border-radius: 6px;
            border: none;
            color: #fff;
            cursor: pointer;
            background-color: #7d2ae8;

        }



        @media (max-width: 768px) {
            body {
                padding: 100px;
                height: 100vh;

            }
        }


        @media (max-width: 480px) {
            body {
                padding: 50px;
                height: 100vh;
                background-repeat: no-repeat;
                background-size: cover;
                margin-left: -50px;

            }

            .container {
                grid-template-columns: repeat(1, 1fr);
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">

            <h2>Form Hitung Penghasilan Penjualan Tiket</h2>
            <div class="forms">
                <form method="post" action="">
                    <label for="tiket_vip">Jumlah Tiket VIP Terjual:</label><br><br>
                    <input class="input" type="number" name="tiket_vip" required><br><br>

                    <label for="tiket_eksekutif">Jumlah Tiket Eksekutif Terjual:</label><br><br>
                    <input class="input" type="number" name="tiket_eksekutif" required><br><br>

                    <label for="tiket_ekonomi">Jumlah Tiket Ekonomi Terjual:</label><br><br>
                    <input class="input" type="number" name="tiket_ekonomi" required><br><br>

                    <button class="button " type="submit" name="hitung" value="Hitung Penghasilan"> Hitung</button>
                </form>

                <?php
                if (isset($_POST['hitung'])) {
                    $tiket_vip = $_POST['tiket_vip'];
                    $tiket_eksekutif = $_POST['tiket_eksekutif'];
                    $tiket_ekonomi = $_POST['tiket_ekonomi'];

                    // Menghitung keuntungan per kelas
                    $keuntungan_vip = 0;
                    if ($tiket_vip >= 35) {
                        $keuntungan_vip = 0.25;
                    } elseif ($tiket_vip >= 20) {
                        $keuntungan_vip = 0.15;
                    } else {
                        $keuntungan_vip = 0.05;
                    }

                    $keuntungan_eksekutif = 0;
                    if ($tiket_eksekutif >= 40) {
                        $keuntungan_eksekutif = 0.20;
                    } elseif ($tiket_eksekutif >= 20) {
                        $keuntungan_eksekutif = 0.10;
                    } else {
                        $keuntungan_eksekutif = 0.02;
                    }

                    $keuntungan_ekonomi = 0.07;

                    // Menghitung total tiket dan keuntungan keseluruhan
                    $total_tiket = $tiket_vip + $tiket_eksekutif + $tiket_ekonomi;
                    $keuntungan_keseluruhan = ($tiket_vip * $keuntungan_vip) + ($tiket_eksekutif * $keuntungan_eksekutif) + ($tiket_ekonomi * $keuntungan_ekonomi);

                    echo "<h3>Hasil Perhitungan Penghasilan Penjualan Tiket</h3>";
                    echo "Tiket VIP Terjual: $tiket_vip<br>";
                    echo "Keuntungan Tiket VIP: " . ($keuntungan_vip * 100) . "%<br><br>";
                    echo "Tiket Eksekutif Terjual: $tiket_eksekutif<br>";
                    echo "Keuntungan Tiket Eksekutif: " . ($keuntungan_eksekutif * 100) . "%<br><br>";
                    echo "Tiket Ekonomi Terjual: $tiket_ekonomi<br>";
                    echo "Keuntungan Tiket Ekonomi: " . ($keuntungan_ekonomi * 100) . "%<br><br>";
                    echo "Total Tiket Terjual: $total_tiket<br>";
                    echo "Keuntungan Keseluruhan: " . ($keuntungan_keseluruhan * 100) . "%<br><br>";
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>