<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }
        
        h1 {
            text-align: center;
            color: #176B87;
        }
        
        form {
            text-align: center;
        }
        
        label, input, button {
            display: block;
            margin: 10px auto;
            color: #176B87;
        }
    </style>
    <title>Perhitungan Harga Jeruk</title>
</head>
<body>
    <div class="container">
        <h1>Perhitungan Harga Jeruk</h1>
        <?php
        $harga_100gram = 500;
        $diskon = 0.05;

        if(isset($_POST['weight'])) {
            $berat = $_POST['weight'];
            $total_harga_awal = ($berat / 100) * $harga_100gram;
            $total_diskon = $total_harga_awal * $diskon;
            $total_harga_setelah_diskon = $total_harga_awal - $total_diskon;

            echo "<p>Berat Jeruk: $berat gram</p>";
            echo "<p>Total Harga Sebelum Diskon: " . number_format($total_harga_awal, 2) . " rupiah</p>";
            echo "<p>Diskon (5%): " . number_format($total_diskon, 2) . " rupiah</p>";
            echo "<p>Total Harga Setelah Diskon: " . number_format($total_harga_setelah_diskon, 2) . " rupiah</p>";
        }
        ?>
        <form method="post">
            <label for="weight">Berat Jeruk (gram):</label>
            <input type="number" id="weight" name="weight" required>
            <button type="submit">Hitung</button>
        </form>
    </div>
</body>
</html>
