<?php
//preparation
    $tunj;
    $pjk;
    $gaji_bersih;
    $gaji_pokok;
    $nama = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #AEC3AE;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
            width: 90%;
            padding: 15px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        .output {
            margin-top: 20px;
            padding: 10px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
<form action="" method="post">
            <label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama">
        </div>
            <label for="gaji-pokok">Gaji pokok :</label>
            <input type="number" name="gaji-pokok" id="gaji-pokok">
        </div>
        <button type="submit" name="submit">Kirim!</button>
    </form>
</body>
</html>

<!-- proses -->

<?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $gaji_pokok = $_POST['gaji-pokok'];

        $tunj = (20 * $gaji_pokok) / 100;
        $pjk = (15 * ($gaji_pokok + $tunj)) / 100;
        $gaji_bersih = $gaji_pokok + $tunj - $pjk;

        //output

        echo "<br>Nama: " . $nama . "<br>","<br>Tunj: " . $tunj . "<br>",
        "<br>Pjk: " . $pjk . "<br>","<br>Gaji bersih: " . $gaji_bersih . "<br>" ;
    }
?>