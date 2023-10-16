<?php
//preparation
    $bilangan;
    $satuan;
    $puluhan;
    $ratusan;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilangan bulat</title>
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
            padding: 50px;
            background-color: #ffffff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #9EB384;
            border-radius: 5px;
        }

        button[type="submit"] {
            background-color: #5C8374;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #CEDEBD;
        }

        .output {
            margin : 5px 0;
            text-align: center;
            margin-top: 20px;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
    <!-- input -->
    <form action="" method="post">
            <label for="bil">Bilangan :</label>
            <input type="number" name="bil" id="bil">
        </div>
        <button type="submit" name="submit">Kirim!</button>
    </form>
</body>
</html>

<?php
    //proses
    if (isset($_POST['submit'])) {
        $bilangan = $_POST['bil'];

        $satuan = $bilangan % 10;
        $puluhan = ( $bilangan / 10) % 10;
        $ratusan = ( $bilangan / 100) % 10;
    //output
        echo "<br>satuan: " . $satuan . "<br>","<br>puluhan: " . $puluhan . "<br>",
        "<br>ratusan: " . $ratusan . "<br>";
    }