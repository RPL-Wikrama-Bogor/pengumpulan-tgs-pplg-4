<?php 
$i = [1,2,3];
$Siswa = [
    [
        "Nama" => "Awan",
        "Nis" => "12209150", 
        "Rombel" => "PPLG XI-4",
        "Rayon" => "Ciawi 4",
        "Umur" => 17
    ],
    [
        "Nama" => "Nida",
        "Nis" => "12209150", 
        "Rombel" => "PPLG XI-1",
        "Rayon" => "Ciawi 1",
        "Umur" => 15
    ],
    [
        "Nama" => "Nisa",
        "Nis" => "12209150", 
        "Rombel" => "PPLG XI-2",
        "Rayon" => "Ciawi 2",
        "Umur" => 20
    ],
    [
        "Nama" => "Hisyam",
        "Nis" => "12209150", 
        "Rombel" => "PPLG XI-5",
        "Rayon" => "Ciawi 10",
        "Umur" => 18
    ],
    [
        "Nama" => "Qais",
        "Nis" => "12209150", 
        "Rombel" => "PPLG XI-3",
        "Rayon" => "Ciawi 1",
        "Umur" => 12
    ],
]

?>

<p><a href="?run_php=1">Cari yang sudah berusia lebih dari 17 tahun</a></p>
<form action="" method="post">
    <p>Cari berdasarkan nama : </p>
    <input type="text" name="nama">
    <input type="submit" name="submit">
</form>


<?php 
if (isset($_GET['run_php'])) {
    $index = 1;
    foreach($Siswa as $item) {
        if ($item["Umur"] >= 17) {
            Echo $index;
            echo ". " . $item["Nama"] . " : " . $item["Umur"] . "<br>";
            $index++;
        }
    }
    echo "<br>";
}

if(isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    foreach($Siswa as $item) {
        if($item["Nama"] == $nama) {
            echo  "1. " . $item["Nama"];
            echo ":" .$item["Umur"];
            echo ":" . $item["Nis"];
            echo ":" . $item["Rombel"];
            echo ":" . $item["Rayon"];
        }
    }
}
?>