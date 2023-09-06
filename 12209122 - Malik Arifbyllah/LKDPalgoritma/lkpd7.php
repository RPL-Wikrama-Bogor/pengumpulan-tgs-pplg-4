<?php
//preparation
    $total_gram;
    $harga_sebelum;
    $diskon;
    $harga_setelah;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harga Diskon</title>
</head>
<!-- input -->
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
            padding: 40px;
            background-color: #CEDEBD;
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
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            background-color: #94A684;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #AEC3AE;
        }

        .output {
            margin-top: 20px;
            padding: 10px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
    <form action="" method="post">
            <label for="total">Total gram :</label>
            <input type="number" name="total" id="total">
        </div>
        <button type="submit" name="submit">Kirim!</button>
    </form>
</body>
</html>

<?php
    //proses
    if (isset($_POST['submit'])) {
        $total_gram = $_POST['total'];
        $harga_sebelum = 5 * $total_gram;
        $diskon = 5 * $harga_sebelum / 100;
        $harga_setelah = $harga_sebelum - $diskon;
    //output
        echo "<br>harga sebelum: " . $harga_sebelum . "<br>","<br>diskon: " . $diskon . "<br>",
        "<br>harga setelah: " . $harga_setelah . "<br>";
    }
?>