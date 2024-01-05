<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>nisa cantik</h1>
    <form method="post" action="">
        Masukan suhu : <input type="number" name="suhu">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])) {

        $fahrenheit = $_POST['suhu'];
        $celcius = ($fahrenheit - 32) * 5/9;

        $cuaca = '';
        
        if($celcius > 30){
            echo "suhu $celcius panas ";

        }elseif ($celcius < 25){
           echo "suhu $celcius dingin";

        }else{
            echo "suhu $celcius normal";
        }
   
    }