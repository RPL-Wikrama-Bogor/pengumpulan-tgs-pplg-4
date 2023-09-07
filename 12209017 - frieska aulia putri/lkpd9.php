<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>suhu</title>
<style>
    body {
        background-color:#867070;
    }

    .card {
        background-color:#E4D0D0;
        border-radius: 25px;
        max-width: 100%;
        text-align: center;
        padding: 50px 130px;
        margin: 125px 400px;
    }
    input{
      border-radius: 25px;
      width:85%;
      margin:7px;
      padding:4px;
    }
    </style>

  <body>

  <div class="card">
  <h1>Keadaan Cuaca</h1>
<form action="" method="POST">
<label for="suhu">Suhu:</label>
<input type="text" id="suhu" name="suhu" required placeholder=>
<br><br>
 <input type="submit" value="Submit" name="hitung"><br><br>
</form>
   </div>
   </body>
</html>
<?php 
if (isset($_POST["hitung"])) {
 $suhu = $_POST["suhu"];

 $c = ($suhu-32)*5/9;
 if ($c > '300' ) {
    echo "cuaca panas";
  } elseif ($c < '250' ) {
    echo "cuaca dingin";
  } else {
    echo "cuaca normal";}
 }