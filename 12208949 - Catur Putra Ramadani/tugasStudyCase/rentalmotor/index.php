<!DOCTYPE html>
<html>

<head>
    <title>Rental Motor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f7f7f7;
        }

        h1 {
            margin-top: 0;
        }

        form {
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        select,
        input[type="number"],
        input[type="text"],
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .output-box {
            background-color: #f7f7f7;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Rental Motor</h1>
        <form method="post">
            <label for="namaPelanggan">Nama Pelanggan:</label>
            <input type="text" name="namaPelanggan" required style="width: 95%;"><br><br>

            <label for="lamaRental">Lama Waktu Rental Perhari :</label>
            <input type="number" name="lamaRental" required style="width: 95%;"><br><br>

            <label for="jenisMotor">Jenis Motor:</label>
            <select name="jenisMotor">
                <option value="Ducati">Ducati</option>
                <option value="Nmax">Nmax</option>
                <option value="Ninja">Ninja</option>
            </select><br><br>

            <button type="submit" name="submit">Submit</button>
        </form>
    </div>

    <?php
    // if (isset($_POST['submit'])) {
    //     require_once 'controller.php';

    //     $namaPelanggan = $_POST['namaPelanggan'];
    //     $lamaRental = (int)$_POST['lamaRental'];
    //     $jenisMotor = $_POST['jenisMotor'];

    //     // Daftar member yang sudah terdaftar
    //     // $daftarMember = ['budi', 'nindi', 'nadin', 'roni', 'harry'];

    //     // Tentukan status member berdasarkan apakah nama ada dalam daftar member
    //     // $isMember = in_array($namaPelanggan, $daftarMember);


    ?>
    <?php
    $isMember = false; // Inisialisasi dengan nilai default
    if (isset($_POST['submit'])) {
        require_once 'controller.php';

        $namaPelanggan = $_POST['namaPelanggan'];
        $lamaRental = (int)$_POST['lamaRental'];
        $jenisMotor = $_POST['jenisMotor'];

        $rentalMotor = new RentalMotor($namaPelanggan, $lamaRental, $jenisMotor, $isMember);
        echo "<h2>Detail Peminjaman</h2>";
        $rentalMotor->tampilkanDetailPeminjaman();
    }

    ?>


</body>

</html>