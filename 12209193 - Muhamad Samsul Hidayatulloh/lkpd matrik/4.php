<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Gaji Karyawan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        h2 {
            text-align: center;
            margin-top: 50px;
        }

        form {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px #aaa;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
            width: 470px;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        button[type="submit"] {
            padding: 10px 20px;
            background: #333;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Kalkulator Gaji Karyawan</h2>
        <form method="post" action="">
            <label for="nama">Nama Karyawan: </label>
            <input type="text" name="nama" required><br>
            
            <label for="gaji_pokok">Gaji Pokok: </label>
            <input type="number" name="gaji_pokok" required><br>
            
            <button type="submit">Hitung Gaji</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST['nama'];
            $gaji_pokok = floatval($_POST['gaji_pokok']);

            function hitungGaji($nama, $gaji_pokok) {
                $tunj = 0.2 * $gaji_pokok;
                $pjk = 0.15 * ($gaji_pokok + $tunj);
                $gaji_bersih = $gaji_pokok + $tunj - $pjk;

                echo "<center>";
                echo "<h3>Hasil Perhitungan Gaji</h3>";
                echo "Nama Karyawan: " . $nama . "<br>";
                echo "Tunjangan: " . $tunj . "<br>";
                echo "Pajak: " . $pjk . "<br>";
                echo "Gaji Bersih: " . $gaji_bersih . "<br>";
                echo "</center>";
            }

            hitungGaji($nama, $gaji_pokok);
        }
        ?>
    </div>
</body>
</html>
