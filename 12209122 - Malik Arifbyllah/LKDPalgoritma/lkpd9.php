<?php
//preparation
    $suhu_fahrenheit;
    $suhu_celcius;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>suhu</title>
</head>
<!-- proses -->
<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            background: #94A684;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            display: block;
            background-color: #7EAA92;
            color: #fff;
            border: none;
            padding: 10px 20px;
            margin-top: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #9EB384;
        }

        .output {
            margin-top: 20px;
            font-weight: bold;
        }

        /* Define your own styling for different temperature conditions here */
        .panas {
            color: red;
        }

        .dingin {
            color: blue;
        }

        .normal {
            color: green;
        }
    </style>
    <form action="" method="post">
        <div style="display: flex;">
            <label for="fahren">Suhu fahrenheit :</label>
            <input type="number" name="fahrein" id="fahren">
        </div>
        <button type="submit" name="submit">Kirim!</button>
    </form>
</body>
</html>
<?php
    if (isset($_POST['submit'])) {
        $suhu_fahrenheit = $_POST['fahrein'];
        $suhu_celcius = floor ($suhu_fahrenheit / 33.8);

        //output

        if ($suhu_celcius > 300) {
            echo "suhu: " . $suhu_celcius . "cc panas";
        }
        else if ($suhu_celcius < 250) {
            echo "suhu: " . $suhu_celcius . "cc dingin";
        }
        else {
            echo "suhu: " . $suhu_celcius . "cc normal";
        }
    }
?>