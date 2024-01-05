
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lkpd 8</title>
</head>

<body>
    <h3>menentukan bilangan bulat</h3>
    <form action="" method="post">
        <table>
            <tr>
                Input Bilangan Bulat :
                <td><input type="number" name="bilangan"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>

</body>

</html>

<?php

if (isset($_POST['submit'])) {
    $bilangan = $_POST['bilangan'];

    $ratusan = floor(($bilangan / 100) % 10);
    $puluhan = floor(($bilangan / 10) % 10);
    $satuan = $bilangan % 10;

    echo "<br>";
    echo "Ratusan: $ratusan <br>";
    echo "Puluhan: $puluhan <br>";
    echo "Satuan: $satuan";
}
?>
