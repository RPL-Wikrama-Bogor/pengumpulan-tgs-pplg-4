<?php

$siswa = [
    [
        "nama"=> "Rifa",
        "nis"=> "12209386",
        "rombel"=> "PPLG XI-4",
        "rayon"=> "Cicurug 1",
        "umur"=> "16"
    ],
    [
        "nama"=> "Putri",
        "nis"=> "12109386",
        "rombel"=> "PPLG XI-2",
        "rayon"=> "Cicurug 3",
        "umur"=> "18"
    ],
    [
        "nama"=> "Komarudin",
        "nis"=> "1220878",
        "rombel"=> "PPLG XI-3",
        "rayon"=> "Cicurug 5",
        "umur"=> "19"
    ],
    [
        "nama"=> "Budi",
        "nis"=> "12209254",
        "rombel"=> "PPLG XI-1",
        "rayon"=> "Ciawi 1",
        "umur"=> "18"
    ]
];

$nama = null;
$umurFilter = isset($_GET['umurfilter']) ? $_GET['umurfilter'] : 0;
$siswa17 = [];

if ($umurFilter >= 17) {
    foreach ($siswa as $data) {
        if ($data['umur'] >= 17) {
            $siwa17[] = $data;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <ul>
        <li><label for="search"><a href="?umurfilter=17">cari yang sudah berusia 17 tahun</a></label></li><br>

            
        <form action="" method="post">
        <li><label for="search"> cari berdasarkan nama : </label></li> 
        <input type="text" name="search" id="search">
        <input type="submit" name="submit" placeholder="cari">
        </form>
    </ul>


    <?php   
    $hasil = [];
    if(isset($_POST['submit'])){
        $kw = $_POST['search'];

        foreach($siswa as $sw){
            if($sw['umur'] > 17){
                $hasil[] = $sw;
            }

            if(stripos($sw['nama'], $kw) !== false){
                $result[] = $sw;
            }
        }
        
        if(empty($result)){
            echo "Tidak ada nama tersebut";
        }else{
            foreach($result as $r){
            echo "Nama: " . $r['nama'] . ", NIS: " . $r['nis'] . ", Rayon = ". $r['rayon'] ." Rombel = " . $r['rombel'] . ", Umur = " . $r['umur'] ."<br>";
        }
        }
        
        
    }
echo "<br>" . "<br>" ."<br>";

    if (!empty($siwa17)) {
    foreach ($siwa17 as $siswa){
        echo $siswa['nama'] .  ",  umur = " . $siswa['umur'] . "<br>"; 
    }
}

    ?>
</body>
</html>