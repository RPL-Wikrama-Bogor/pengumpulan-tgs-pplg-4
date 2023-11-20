<!DOCTYPE html>
<html>
<head>
    <title>Informasi Pegawai</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .card {
            background-color: #EEEEEE;
            border-radius: 10px;
            padding: 20px;
            width: 300px;
            text-align: center;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }
        .card h4 {
            color: #176B87;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-control {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn {
            background-color: #176B87;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #135a73;
        }
        
    </style>
</head>
<body>

<div class="card">
    <h4>Masukkan Nomor Pegawai</h4>
    <form method="post" action="">
        <div class="form-group">
            <input type="number" name="nP" class="form-control" aria-describedby="passwordHelpInline">
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn">Submit</button>
        </div>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $nP = $_POST["nP"];
        $pesan = "Nomor Pegawai harus memiliki panjang 11 digit.";

        if (strlen($nP) == 11) {
            $bulan = date('F', mktime(0, 0, 0, substr($nP, 3, 2), 1));

            echo "<h4>Informasi Pegawai:</h4>";
            echo "Nomor Golongan: " . substr($nP, 0, 1) . "<br>";
            echo "Tanggal Lahir: " . substr($nP, 1, 2) . " " . $bulan . " " . substr($nP, 5, 4) . "<br>";
            echo "Nomor Urut: " . substr($nP, 9, 2);
        } else {
            echo  "<script>alert('$pesan');</script>";
        }
    }
    ?>
</div>

</body>
</html>
