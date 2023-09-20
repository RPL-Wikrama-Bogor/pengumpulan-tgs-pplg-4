<html>
<head>
    <title> Nomor 02 </title>
    <style>
    body {
        background-color: silver;
    }

    .card {
        background-color: grey;
        border-radius: 15px;
        outline : auto;
        max-width: 100%;
        text-align: center;
        padding: 50px 90px;
        margin: 145px 400px;
    }
    input {
        border-radius: 15px;
        margin: 5px;
    }
    </style>
    <body>
        <div class="card">
        <form name="form1" method="POST">
            <h1>Masukkan Total Gram</h1>
        <input type="number" name="totalGram"></input><br><br>
        <input type="submit" name="gram" value="Submit"></input>
    </form>
    </body>
</head>
</html>


<?php
    if(isset($_POST['gram'])) {
        $g = $_REQUEST['totalGram'];


        $hj = $g / 100 * 500;
        $d = $hj * 5 / 100;
        $hsd = $hj - $d;


        echo "Harga Sebelum Diskon : $hj ribu rupiah </br>";
        echo "Diskon : $d ribu rupiah </br>";
        echo "Harga Setelah Diskon : $hsd ribu rupiah </br>";
    }
?>
</div>
