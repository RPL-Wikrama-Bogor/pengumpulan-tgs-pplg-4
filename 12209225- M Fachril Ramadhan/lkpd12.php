<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>waktu ditambah 1</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .card {
            background-color: #EEEEEE;
            border-radius: 10px;
            padding: 20px;
            width: 300px;
            text-align: center;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }
        .card h4 {
            color: black;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-control {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn {
            background-color: black;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #135a73;
        }
        
    </style>
</head>
<body>
    <div class="card">
        <h4>Masukkan waktu</h4>
        <form method="post" action="">
            <div class="form-group">
                <label for="">jam</label>
                <input type="number" name="j" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            <div class="form-group">
                <label for="">menit</label>
                <input type="number" name="m" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            <div class="form-group">
                <label for="">detik</label>
                <input type="number" name="d" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn">Submit</button>
            </div>
        </form>
    
    <?php

    if (isset($_POST['submit'])) {
    $hh = $_POST['j'];
    $mm = $_POST['m'];
    $ss = $_POST['d'];

    $ss = $ss + 1;

    if($ss >= 60){
        $mm = $mm + 1;
        $ss = 00;
    }

    if($mm >= 60){
        $hh = $hh + 1;
        $mm = 0;
        $ss = 0;
    }

    if($hh >= 24){
        $hh = 00;
        $mm = 00;
        $ss = 00;
    }

    echo "Jam :" .$hh;
    echo "<br/>";
    echo "Menit :" .$mm;
    echo "<br/>";
    echo "Detik :" .$ss;
    echo "<br/>";

}
?>
</div>
</body>
</html>