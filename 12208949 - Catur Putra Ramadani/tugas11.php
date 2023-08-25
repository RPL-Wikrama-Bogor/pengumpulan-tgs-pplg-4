<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <style>
        body {
            padding: 300px;
            background-image: linear-gradient(to bottom right, rgb(120, 59, 139), rgb(92, 138, 237), rgb(127, 193, 250));
            background-repeat: no-repeat;
            background-size: cover;
        }

        #feedback-form {
            width: 280px;
            margin: 0 auto;
            background-color: #F6F4EB;
            padding: 25px;
            box-shadow: 1px 4px 10px 1px #aaa;
            font-family: sans-serif;
            border-radius: 15px;
        }

        #feedback-form * {
            box-sizing: border-box;
        }

        h2 {
            color: #141E46;
        }

        .input {
            border-radius: 50px;
            border-color: #B9B4C7;
            box-shadow: inset 1px 1px 4px #FFD5E7;
            -moz-box-shadow: inset 1px 1px 4px #FFD5E7;
            -webkit-box-shadow: inset 1px 1px 4px #FFD5E7;
        }

        .btn {
            background-color: #A084E8;
            border-radius: 25px;
            border-color: #A084E8;
        }
    </style>
    <form action="" method="post">
        <div id="feedback-form">
            <h2 class="header">Kode Pegawai </h2>
            <div>
                <form>
                    <input class="input" type="number" name="pegawai" placeholder=""></input>
                    <button class="btn" id="myButton" type="submit" value="Submit" name="submit">Input</button>
                </form>
                <?php
                $pegawai;
                $golongan;
                $tanggal;
                $bulan;
                $tahun;
                $urutan;
                $tanggal_lahir;

                if (isset($_POST['submit'])) {
                    $pegawai = $_POST['pegawai'];

                    $golongan = substr($pegawai, 0, 1);
                    $tanggal = substr($pegawai, 1, 2);
                    $bulan = substr($pegawai, 3, 2);
                    $tahun = substr($pegawai, 5, 4);
                    $urutan = substr($pegawai, 9, 2);

                    if ($pegawai < 11) {
                        echo "<br>";
                        echo "no pegawai tidak sesuai";
                    } else if ($bulan == "01") {
                        $bulan = " januari ";
                    } else if ($bulan == "02") {
                        $bulan = " februari ";
                    } else if ($bulan == "03") {
                        $bulan = " maret ";
                    } else if ($bulan == "04") {
                        $bulan = "april ";
                    } else if ($bulan == "05") {
                        $bulan = " mei ";
                    } else if ($bulan == "06") {
                        $bulan = " juni ";
                    } else if ($bulan == "07") {
                        $bulan = "juli ";
                    } else if ($bulan == "08") {
                        $bulan = " agustus ";
                    } else if ($bulan == "09") {
                        $bulan = " september ";
                    } else if ($bulan == "10") {
                        $bulan = " oktober ";
                    } else if ($bulan == "11") {
                        $bulan = " november ";
                    } else ($bulan = "desember");

                    $tanggal_lahir = $tanggal . $bulan . $tahun;
                    echo "<br>";

                    echo " No Golongan " . $golongan;
                    echo "<br>";
                    echo "Tanggal Lahir " . $tanggal_lahir;
                    echo "<br>";
                    echo "No Urutann " . $urutan;
                    echo "<br>";
                }


                ?>

</body>

</html>