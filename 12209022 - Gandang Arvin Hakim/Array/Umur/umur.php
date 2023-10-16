<?php
    $siswa = [
        [
            "nama" => "Rudi",
            "nis" => "12209897",
            "rombel" => "PPLG XI-8",
            "rayon" => "Tajur 10",
            "umur" => "16"
        ],
        [
            "nama" => "Yanto",
            "nis" => "12209432",
            "rombel" => "PPLG XI-9",
            "rayon" => "Cicurug 12",
            "umur" => "16"
        ],
        [
            "nama" => "Haris",
            "nis" => "12209763",
            "rombel" => "PPLG XI-11",
            "rayon" => "Cicurug 11",
            "umur" => "18"
        ],
        [
            "nama" => "Jenal",
            "nis" => "12209623",
            "rombel" => "TJKT XI-1",
            "rayon" => "Cisarua 8",
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
                <label for="nama">Cari berdasarkan nama:</label>
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