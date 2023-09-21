<!DOCTYPE html>
<html>
<head>
<style>
  body {
    font-family: Arial, sans-serif;
    text-align: center;
  }
  #container {
    margin: 100px auto;
    width: 300px;
  }
  input[type="number"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 8px;
  }
  input[type="submit"] {
    background-color: #176B87;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    border-radius: 8px;
  }

  h1 {
    color:#176B87;
  }
</style>
</head>
<body>
<div id="container">
  <h1>Cek Cuaca</h1>
  <form method="post">
    <input type="number" name="temperature" placeholder="Masukkan suhu (°F)" required>
    <input type="submit" value="Cek">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $temperature_fahrenheit = $_POST["temperature"];
    $temperature_celsius = ($temperature_fahrenheit - 32) * 5/9;

    if ($temperature_celsius > 30) {
      echo "<p>Hasil: Panas</p>";
    } elseif ($temperature_celsius < 10) {
      echo "<p>Hasil: Dingin</p>";
    } else {
      echo "<p>Hasil: Normal</p>";
    }
  }
  ?>
</div>
</body>
</html>
