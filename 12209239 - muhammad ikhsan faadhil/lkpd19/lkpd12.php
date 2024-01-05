<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }
        
        .form-style-3 label {
            display: block;
            margin-bottom: 10px;
        }
        
        .form-style-3 input[type="number"] {
            width: 380px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        .form-style-3 input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
        .output-container {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form action="" method="post" class="form-style-3">
            <h2>Input Waktu</h2>
            <label for="field1"><span>jam <span class="required">*</span></span><input type="number" class="input-field" name="hh" value="" /></label>
            <label for="field2"><span>menit <span class="required">*</span></span><input type="number" class="input-field" name="mm" value="" /></label>
            <label for="field3"><span>detik <span class="required">*</span></span><input type="number" class="input-field" name="ss" value="" /></label>
            <input type="submit" value="Submit" name="submit">
        </form>
        <?php
            if($_POST){
                $hh = $_POST['hh'];
                $mm = $_POST['mm'];
                $ss = $_POST['ss'];

                $ss = $ss + 1;

                if($ss >= 60){
                    $mm++ && $ss = 0;

                    if($mm >= 60){
                        $hh++ && $mm = 0 && $ss = 0;
                    }
                    else if($hh >= 24){
                        $hh = 0;
                        $mm = 0;
                        $ss = 0;
                    }
                }

                $formattedTime = "$hh:$mm:$ss";
            }
        ?>
        <div class="output-container">
            <?php
                if(isset($formattedTime)){
                    echo "Waktu saat di input : $hh:$mm:$ss"; 
                    echo "<br>";
                    echo "Waktu setelah penambahan 1 detik: $formattedTime";
                }
            ?>
        </div>
    </div>
</body>
</html>
