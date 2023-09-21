<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lkpd 9</title>
</head>

<body>

        <form method="post" action="">
            <table>
                <tr>
                    <td>suhu (fahrenheit) </td>
                    <td><input type="text" name="suhu_fahrenheit" id="suhu"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Submit" name="submit">
                </tr>
            </table>
        </form>


</body>

</html> 
<?php

if (isset($_POST['submit'])) {
    $suhu_fahrenheit = $_POST['suhu_fahrenheit'];
    $suhu_celcius = ($suhu_fahrenheit- 32 ) * 5/9  ;

    echo "<br>";
    echo "Suhu fahrenheit hari ini adalah " . $suhu_fahrenheit . "F  <br> " ;
    echo "suhu celcius " . $suhu_celcius  ." C" ;

    echo "<br>";
    echo "<br>";
    if ($suhu_celcius > 30) {
        echo "Panas";
    } elseif ($suhu_celcius > 25) {
        echo "Normal";
    } else {
        echo "dingin";
    }
}

?>