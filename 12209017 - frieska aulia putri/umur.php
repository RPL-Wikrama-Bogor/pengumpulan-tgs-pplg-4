<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Umur</title>
</head>
<body>
<h1>Biodata Siswa</h1>
<table border="0">
    
    <?php
    $data = [
        [
            'nama' => "Frieska",
            'umur' => 18 ,
            'rayon' => "Cicurug 1",
            'rombel' => "PPLG XI-4",
            'nis' => 12209017,
        ],
        [
            'nama' => "Aulia",
            'umur' => 16 ,
            'rayon' => "Cicurug 3 ",
            'rombel' => "PPLG XI-3",
            'nis' => 12209117,
        ],
        [
        'nama' => "Nabila",
            'umur' => 17 ,
            'rayon' => "Ciawi 2",
            'rombel' => "DKV XI-1",
            'nis' => 12207896,
        ],
        [
            'nama' => "Salma",
            'umur' => 18 ,
            'rayon' => "Ciawi 4",
            'rombel' => "PPLG XI-4",
            'nis' => 12208953,
        ],
        [
            'nama' => "Paul",
            'umur' => 16 ,
            'rayon' => "Cibedug 2",
            'rombel' => "PPLG XI-4",
            'nis' => 12201456,
        ],
        [
            'nama' => "Rony",
            'umur' => 17,
            'rayon' => "Wikrama 5",
            'rombel' => "PPLG XI-7",
            'nis' => 12209870,
        ]
        ];
     

    foreach($data as $siswa){
        echo '<tr>';
       
        
        echo '</tr>';
    }
    ?>
</table><br>
    <form action="" method="GET">
        <table>
            <tr>
                <td>Umur siswa yang lebih dari 17 thn</td>
                <td>:</td>
                <td><input type="submit" name="umur"  value="Cari"></td>
            </tr>
            <tr>
                <td>Cari data diri siswa</td>
                <td>:</td>
                <td><input type="text" name="dataDiri" ></td>
                <td><input type="submit" name="cari" value="Cari"></td>
            </tr>
        </table>
        <?php
        if(isset($_GET['umur'])){
            echo '<h2>Umur siswa yang lebih dari 17thn</h2>';
            echo '<ul>';
            foreach($data as $siswa){
                if($siswa['umur'] > 17){
                    echo $siswa['nama'] . " berumur lebih dari 17 tahun".'<br>';
                }
            }
            echo '</ul>';
        }elseif(isset($_GET['dataDiri'])){
            $namaCari = $_GET['dataDiri'];
            echo '<h2>Data Siswa</h2>';
            echo '<ul>';
            foreach($data as $siswa){
                if(strtolower($siswa['nama']) == strtolower($namaCari)){
                    echo 'Nama: ' . $siswa['nama'] . ' <br> NIS: ' . $siswa['nis'] . '<br> Rombel: ' . $siswa['rombel'] . '<br> Rayon: ' . $siswa['rayon'] . '';
                }
            }
            echo '</ul>';
        }?>
    </form>
</body>
</html>
