<html>
<head>
    <title>Nomor 1 </title>
    <style>
    body {
        background-color: #61677A;
    }

    .card {
        background-color: #D8D9DA;
        border-radius: 10px;
        max-width: 100%;
        text-align: center;
        padding: 50px 120px;
        margin: 100px 400px;
    }
    </style>
    <body>
        <div class="card">
        <form name="form1" method="POST">
            <label>Masukkan Total Gram</label>
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
        $hbs = $hj - $d;


        echo "Harga Sebelum Diskon : Rp $hj </br>";
        echo "Diskon : Rp $d </br>";
        echo "Harga Setelah Diskon : Rp $hbs </br>";
    }
?>
</div>