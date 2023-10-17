<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            padding: 200px;
            background-color: #f0f0f0; /* Change this to your desired background color */
            background-repeat: no-repeat;
            background-size: cover;
        }

        #feedback-form {
            width: 100%; 
            max-width: 400px; 
            margin: 0 auto;
            background-color: white;
            padding: 25px;
            box-shadow: 1px 4px 10px 1px #aaa;
            font-family: sans-serif;
            border-radius: 15px;
        }

        #feedback-form * {
            box-sizing: border-box;
        }

        #feedback-form [type="submit"]{
            width: 70px;
            height:25px;
            margin-right: 330px;
            border-radius: 5px;
            background-color: #007bff;
            font-family: sans-serif;
        }

        #feedback-form [type="number"]{
            width: 400px;
            height: 40px;
            border-radius: 5px;
            font-family: sans-serif;
        }

        @media (max-width: 768px) {
            #feedback-form {
                padding: 15px;
            }
        }
    </style>
</head>
<center>
<body>
    <div id="feedback-form">
        <h2 class="header">Input</h2>
        <form action="" method="post">
            <input type="number" name="pegawai" placeholder="Enter Pegawai Number"></input><br><br>
            <input type="submit" value="Submit" name="submit">
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

                if ($pegawai < 11){
                    echo "no pegawai tidak sesuai";
                } else if($bulan == "01"){
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
        
                $tanggal_lahir = $tanggal. $bulan. $tahun;
                echo "<br>";
        
                echo " No golongan " . $golongan; 
                echo "<br>";
                echo "Tanggal lahir " . $tanggal_lahir;
                echo "<br>";
                echo "No urutann " . $urutan;
                echo "<br>";
            }
        
        
        ?>
    </div>
        </center>
</body>
</html>
