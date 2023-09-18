<?php
$siswa = [
    [
        "nama" => "jaemin",
        "nis" => "13082000",
        "rombel" => "nct dream",
        "rayon" => "NCT",
        "umur" => "15",
    ],
    [
        "nama" => "mark",
        "nis" => "03081999",
        "rombel" => "nct u",
        "rayon" => "NCT",
        "umur" => "19",

    ],
    [
        "nama" => "jeno",
        "nis" => "12345678",
        "rombel" => "nct dream",
        "rayon" => "NCT",
        "umur" => "16",
    ],
    [
        "nama" => "haechan",
        "nis" => "10293847",
        "rombel" => "nct 127",
        "rayon" => "NCT",
        "umur" => "16",
    ],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Array</title>
</head>
<body>
    
<form method="post">
        
            <li>
                <label for="nama">Cari berdasarkan nama:</label>
                <input type="text" name="nama" id="nama">
                <button type="submit" name="submit">Search</button>
            </li>
            <li>
                <a href="?UmurYangLebihDari15=1">Cari yang sudah berusia lebih dari 15Thn</a> 
            </li>
      
    </form>

</body>
</html>
</body>
</html>
<?php
    function UmurYangLebihDari15($siswa) {
    $hasil = [];
    foreach ($siswa as $data){
    if ($data['umur'] > 15) {
        $hasil[] = $data;
    }
}
    return $hasil;
}
    if (isset($_GET['UmurYangLebihDari15']) && ($_GET['UmurYangLebihDari15'] == 1)) {
        $hasil = UmurYangLebihDari15($siswa);
    }

    function carisiswaberdasarkannama($siswa, $nama) {
        $hasil = [];
        foreach ($siswa as $data){
            if (strtolower($data['nama']) == strtolower($nama)) {
                //untuk meratakan huruf tidak kapital
                $hasil[] =$data;
            }
    }
    return $hasil;
}

if (isset($_POST['submit'])){
    $namacari = $_POST['nama'];
    if (!empty($namacari)) {
        $hasil=carisiswaberdasarkannama($siswa, $namacari);
    } else {
        $hasil=[];
    }
}
if (isset($hasil)) : ?>
    <h2>Hasil Pencarian:</h2>
    <ul>
        <?php foreach ($hasil as $siswa) : ?>
            <li>
                Nama: <?php echo $siswa['nama']; ?><br>
                Umur: <?php echo $siswa['umur']; ?><br>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; 
?>
</body>
</html>