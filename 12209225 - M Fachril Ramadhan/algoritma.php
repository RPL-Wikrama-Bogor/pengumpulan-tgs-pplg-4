
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Hasil Nilai Terbesar</h3>
    
</body>
</html>
<marquee>Yeayy berhasil</marquee>
<?php
function cariTerbesar($bil1, $bil2, $bil3) {
    if ($bil1 >= $bil2 && $bil1 >= $bil3) {
        return $bil1;
    } elseif ($bil2 >= $bil1 && $bil2 >= $bil3) {
        return $bil2;
    } else {
        return $bil3;
    }
}

$bilangan1 = 20;
$bilangan2 = 30;
$bilangan3 = 80;

$terbesar = cariTerbesar($bilangan1, $bilangan2, $bilangan3);
echo " adalah: " . $terbesar;
