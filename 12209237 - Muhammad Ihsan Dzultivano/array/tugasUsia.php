<?php
    $siswa = [
        [
            "nama" => "Ihsan",
            "nis" => "12209237",
            "rombel" => "PPLG XI-4",
            "rayon" => "Ciawi 5",
            "umur" => "16"
        ],
        [
            "nama" => "Fathur",
            "nis" => "12209100",
            "rombel" => "PPLG XI-2",
            "rayon" => "Cisarua 3",
            "umur" => "16"
        ],
        [
            "nama" => "Syamil",
            "nis" => "12209450",
            "rombel" => "PPLG XI-4",
            "rayon" => "Ciawi 5",
            "umur" => "18"
        ],
        [
            "nama" => "Gandang",
            "nis" => "12209022",
            "rombel" => "PPLG XI-4",
            "rayon" => "Wikrama 1",
            "umur" => "17"
        ],
    ]


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Umur</title>
</head>
<body>
    <form action="" method="post">
        <ul>
            <li>
                <a href="?SIII">cari yang sudah berusia lebih dari 17 tahun</a>
            </li>
            <li>
                <label for="nama">Cari berdasarkan nama: </label>
                <input type="text" id="nama" name="nama">
                <button type="submit" name="submit">Kirim</button>
            </li>
        </ul>
    </form>
</body>
</html>

<!-- Untuk mencari siswa yang sudah berusia lebih dati 17 tahun  -->
<?php
        if(isset($_GET['SIII'])) {
            foreach ($siswa as $usia){
                if($usia['umur']>=17){
                    echo "Nama: ".$usia['nama'].", Umur: ".$usia['umur']."<br>";
                }
            }
        }
        ?>
        <!-- Untuk mencari berdasarkan nama -->
        <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        foreach($siswa as $key => $orang){
            if ($nama == $orang['nama']) {
                echo "nama : $nama <br>";
                echo "nis : ".$orang['nis'] . "<br>";
                echo "rombel : ".$orang['rombel'] . "<br>";
                echo "rayon : ".$orang['rayon'] . "<br>";
                echo "umur : ".$orang['umur'] . "<br>";
              
            
        }
    }
}
?>