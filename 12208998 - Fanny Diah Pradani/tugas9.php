<!DOCTYPE html>
<html>

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
    <h2>Input Cuaca</h2>
<form action="" method="POST">
<label for="suhu">Suhu:</label>
<input type="text" id="suhu" name="suhu" required placeholder="Fahrenheit">
<br><br>
 <input type="submit" value="Submit" name="hitung"><br><br>
</form>

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
 ?>
 </div>
</body>
</html>