<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JERUK </title>
    <style>
    body {
        background-color:#FFC6AC;
    }

    .card {
        background-color:#FCBAAD;
        border-radius: 20px;
        max-width: 100%;
        text-align: center;
        padding: 50px 140px;
        margin: 125px 400px;
    }
    input[type="number"]{
        border-radius: 15px;
        width:90%;
        margin:6px;
        padding:2px;
    }
    input[type="submit"] {
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    border-radius: 10px;
  }
    </style>
    <body>
        <div class="card">
            <h1>Total Jeruk Yang Dibeli</h1>
        <form name="form1" method="POST">
            <label>Input Total Gram:</label>
        <input type="number" name="totalGram"></input><br><br>
        <input type="submit" name="gram" value="Submit"></input>
    </form>
        </div>
    </body>
</head>
</html>


<?php
    if(isset($_POST['gram'])) {
        $g = $_REQUEST['totalGram'];


        $hj = $g / 100 * 500;
        $d = $hj * 5 / 100;
        $hbs = $hj - $d;


        echo "Harga Sebelum Diskon : Rp $hj </br>";
        echo "Diskon : Rp $d </br>";
        echo "Harga Setelah Diskon : Rp $hbs </br>";
    }
?>