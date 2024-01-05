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
            margin: 0 auto;
            width: 50%;
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

        .result {
            margin-top: 20px;
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Rental Motor</h1>
        <?php

        $customerName = "";
        $selectedMotor = null;
        $rentalHours = 0;
        $totalCost = 0;
        $isMember = false; 

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $customerName = isset($_POST["customer_name"]) ? $_POST["customer_name"] : "";
            $motor = isset($_POST["motor"]) ? $_POST["motor"] : "";
            $rentalHours = isset($_POST["rental_hours"]) ? intval($_POST["rental_hours"]) : 0;
            $isMember = isset($_POST["is_member"]) ? true : false; 

            if ($motor === "Honda Scoopy") {
                $selectedMotor = new stdClass();
                $selectedMotor->getMotorName = "Honda Scoopy";
                $selectedMotor->getRentalRate = 10;
            } elseif ($motor === "Yamaha NMAX") {
                $selectedMotor = new stdClass();
                $selectedMotor->getMotorName = "Yamaha NMAX";
                $selectedMotor->getRentalRate = 12;
            }

            $totalCost = $selectedMotor->getRentalRate * $rentalHours;

            if ($isMember) {
                $totalCost *= 0.9;  
            }
        }
        ?>
        <form method="POST" action="">
            <label for="customer_name">Nama Pelanggan:</label>
            <input type="text" name="customer_name" id="customer_name" value="<?php echo $customerName; ?>"><br>

            <label for="motor">Pilih Motor:</label>
            <select name="motor" id="motor">
                <option value="Honda Scoopy" <?php if ($selectedMotor && $selectedMotor->getMotorName === "Honda Scoopy") echo "selected"; ?>>Honda Scoopy</option>
                <option value="Yamaha NMAX" <?php if ($selectedMotor && $selectedMotor->getMotorName === "Yamaha NMAX") echo "selected"; ?>>Yamaha NMAX</option>
            </select><br>

            <label for="rental_hours">Waktu Sewa (jam):</label>
            <input type="number" name="rental_hours" id="rental_hours" value="<?php echo $rentalHours; ?>"><br>

            <label for="is_member">Pelanggan Member:</label>
            <input type="checkbox" name="is_member" id="is_member" <?php if ($isMember) echo "checked"; ?>><br>

            <input type="submit" value="Hitung Biaya">
        </form>

        <?php if ($selectedMotor && $rentalHours > 0) : ?>
            <div class="result">
                <h2>Informasi Rental</h2>
                <p>Nama Pelanggan: <?php echo $customerName; ?></p>
                <p>Motor yang Dipilih: <?php echo $selectedMotor->getMotorName; ?></p>
                <p>Waktu Sewa (jam): <?php echo $rentalHours; ?></p>
                <p>Biaya Sewa: $<?php echo $selectedMotor->getRentalRate; ?> per jam</p>
                <p>Status Member: <?php echo $isMember ? "Ya" : "Tidak"; ?></p>
                <p>Total Biaya: $<?php echo number_format($totalCost, 2); ?></p>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>
