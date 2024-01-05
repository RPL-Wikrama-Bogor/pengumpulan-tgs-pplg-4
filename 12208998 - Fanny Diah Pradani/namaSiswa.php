<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <div class="card">
<h1>Data Siswa</h1>
<table border="0">
    
    <?php
    $data = [
        [
            "nama" => "lea",
            "nis" => "12208889",
            "rombel" => "PPLG XI-6",
            "rayon" => "Cicurug 6",
            "umur" => 18,
        ],
        [
            "nama" => "feita",
            "nis" => "12208989",
            "rombel" => "PPLG XI-1",
            "rayon" => "Cisarua 6",
            "umur" => 20,
        ],
        [
            "nama" => "friska",
            "nis" => "12207890",
            "rombel" => "PPLG XI-5",
            "rayon" => "Tajur 3",
            "umur" => 13,
        ],
        [
            "nama" => "putri",
            "nis" => "12207898",
            "rombel" => "PPLG XI-3",
            "rayon" => "Tajur 6",
            "umur" => 10,
        ],
    ];

    foreach($data as $siswa){
        
    }
    ?>
</table>
    <form action="" method="GET">
       
            
                <p>Umur siswa yang lebih dari 17th : <input type="submit" name="umur"  value="Cari"></p>
            
            
                <p>Cari data diri siswa :</p>
                <td><input type="text" name="dataDiri" ></td>
                <td><input type="submit" name="cari" value="Cari"></td>
           
        
        <?php
        if(isset($_GET['umur'])){
            echo '<h3>Umur siswa yang lebih dari 17th</h3>';
            echo '<ul>';
            foreach($data as $siswa){
                if($siswa['umur'] > 17){
                    echo $siswa['nama'] . " berumur lebih dari 17 tahun".'<br>' ;
                }
            }
            
        
            echo '</ul>';
        }elseif(isset($_GET['dataDiri'])){
            $namaCari = $_GET['dataDiri'];
            echo '<h3>Data Diri Siswa</h3>';
            echo '<ul>';
            foreach($data as $siswa){
                if(strtolower($siswa['nama']) == strtolower($namaCari)){
                    echo 'Nama: ' . $siswa['nama'] . ' <br> NIS: ' . $siswa['nis'] . '<br> Rombel: ' . $siswa['rombel'] . '<br> Rayon: ' . $siswa['rayon'] . '';
                } 
            }
            echo '</ul>';
        }?>
    </form>
    </div>

    <style>
        .card{
            background-color: #D8D9DA;
        border-radius: 10px;
        max-width: 100%;
        text-align: center;
        padding: 50px 120px;
        margin: 100px 400px;
    }
        
    </style>
</body>
</html>