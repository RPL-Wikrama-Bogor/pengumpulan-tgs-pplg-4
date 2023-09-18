<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    bilangan 1:
    <input type="number" name="bil1" id="">
    <br>
    bilangan 2:
    <input type="number" name="bil2" id="">
    <br>
    bilangan 3:
    <input type="number" name="bil3" id="">
    <br>
    <button type="submit" name="submit"
    value="submit">KIRIM</button>
</body>
</html>
<?php



$bil1 = 1;
$bil2 = 2;
$bil3 = 3;


  $max = $bil1;
  if ($bil2 > $max) {
    $max = $bil2;
  }
  if ($bil3 > $max) {
    $max = $bil3;
  }

  echo"bilangan max: ". $max;

?>