<!DOCTYPE html>
<html>
<head>
    <title>Cari Bilangan Terbesar</title>
</head>
<body>
    <form method="post" action="">
        <label for="bilanganA">Bilangan A:</label>
        <input type="number" id="bilanganA" name="bilanganA" required><br>

        <label for="bilanganB">Bilangan B:</label>
        <input type="number" id="bilanganB" name="bilanganB" required><br>

        <label for="bilanganC">Bilangan C:</label>
        <input type="number" id="bilanganC" name="bilanganC" required><br>

        <button type="submit">Cari Bilangan Terbesar</button>
    </form>

    <?php
    function findLargest($a, $b, $c) {
        if ($a >= $b && $a >= $c) {
            return $a;
        } elseif ($b >= $a && $b >= $c) {
            return $b;
        } else {
            return $c;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = (int) $_POST["bilanganA"];
        $b = (int) $_POST["bilanganB"];
        $c = (int) $_POST["bilanganC"];

        $largest = findLargest($a, $b, $c);
        echo "Bilangan terbesar adalah: " . $largest;
    }
    ?>
</body>
</html>
<?php

// function findLargest($a, $b, $c) {
//     if ($a >= $b && $a >= $c) {
//         return $a;
//     } elseif ($b >= $a && $b >= $c) {
//         return $b;
//     } else {
//         return $c;
//     }
// }

// $a = 50;
// $b = 40;
// $c = 60;

// $largest = findLargest($a, $b, $c);
// echo "Bilangan terbesar adalah: " . $largest;
?>
