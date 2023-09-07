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
            background-color: #f0f0f0;
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
        }
        
        form {
            text-align: center;
        }
        
        label, input, button {
            display: block;
            margin: 10px auto;
        }
    </style>
    <title>Analisis Angka</title>
</head>
<body>
    <div class="container">
        <h1>Analisis Angka</h1>
        <?php
        if(isset($_POST['number'])) {
            $bilangan = $_POST['number'];
            $satuan = $bilangan % 10;
            $puluhan = floor(($bilangan % 100) / 10);
            $ratusan = floor(($bilangan % 1000) / 100);

            echo "<p>Angka: $bilangan</p>";
            echo "<p>Satuan: $satuan</p>";
            echo "<p>Puluhan: $puluhan</p>";
            echo "<p>Ratusan: $ratusan</p>";
        }
        ?>
        <form method="post">
            <label for="number">Masukkan Bilangan Bulat:</label>
            <input type="number" id="number" name="number" required>
            <button type="submit">Analisis</button>
        </form>
    </div>
</body>
</html>
