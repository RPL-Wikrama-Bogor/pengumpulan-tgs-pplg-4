<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lkpd 7</title>
</head>
<h1></h1>

<body>
    <center>

    <form action="#" method="post">
        <label for="total_gram"><h1>input gram</h1></label>
        <input type="number" name="total_gram"><br><br>
        <button name="submit">Submit</button> <br>
        
    </form>

</center>
</body>

</html>

<?php

if(isset($_POST['submit'])){
    
$total_gram = $_POST    ['total_gram'] ;

$harga_sebelum = 500 * $total_gram ;
$diskon = 5 * $harga_sebelum /100 ;
$harga_setelah = $harga_sebelum - $diskon;

echo "<br>";
echo "harga sebelum : ". number_format($harga_sebelum, 0); 
echo "<br>";
echo "diskon : " . number_format($diskon, 0); 
echo "<br>";
echo "harga setelah : " . number_format($harga_setelah, 0);





}
?>