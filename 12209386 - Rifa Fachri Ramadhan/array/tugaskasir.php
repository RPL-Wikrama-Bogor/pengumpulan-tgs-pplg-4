<?php
    $menu = [
       "nasigoreng" => ["nama" => "nasigoreng",
         "harga"=> 15000,
         "jenis"=> "makanan"

        ],
        "miegoreng"=> ["nama" => "miegoreng",
         "harga"=> 10000,
         "jenis"=> "makanan"

        ],
        "kwetiau"=> ["nama" => "kwetiau",
         "harga"=> 15000,
         "jenis"=> "makanan"

        ],
        "esjeruk"=> ["nama" => "esjeruk",
         "harga"=> 5000,
         "jenis"=> "minuman"

        ],
        "tehmanis" => ["nama" => "tehmanis",
         "harga"=> 5000,
         "jenis"=> "minuman"

        ]
    ];

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kasir</title>
    <link rel="stylesheet" href="css/kasir.css">
</head>
<body>
    <div class="container">
    <div class="main">
        <h1 class="judul">Daftar Menu</h1><br>
        <div class="daftar">
            <ol>
                <?php foreach($menu as $m) : ?>
                    <li>
                        Menu =  <?= $m['nama'];?> <br>
                        harga =  <?= $m['harga'];?><br>     
                    </li>

                <?php endforeach;?>
            </ol>
        </div>  
    </div>

    <div class="form">
        <form action="" method="post">
            <label for="">Pilih Makanan : </label>
            <select name="jenisMakanan" id="jenisMakanan">
                <?php foreach($menu as $key => $value) :
                    if($value['jenis' == 'makanan'])
                     ?>
                <option value="nasigoreng">Nasi Goreng</option>
                <option value="miegoreng">Mie Goreng</option>
                <option value="kwetiau">kwetiau</option>
                <?php endforeach; ?>
            </select>

            <br>

            <label for="">Jumlah Pembelian Makanan: </label>
            <input type="number" name="Jmakanan">

            <br>

            <label for="">Pilih minuman : </label>
            <select name="jenisMinuman" id="jenisMinuman">
                <option value="esjeruk">Es Jeruk</option>
                <option value="tehmanis">Teh Manis</option>
            </select>

            <br>

            <label for="">Jumlah Pembelian minuman : </label>
            <input type="number" name="Jminuman">

            <br>

            <input type="submit" name="submit" class="kirim">
        </form>
    </div>

    <div class="hasil">
<?php
    if($_POST):
        $Jmakanan = $_POST['Jmakanan'];
        $Jminuman = $_POST['Jminuman'];
        $jenisMakanan = $_POST['jenisMakanan'];
        $hargaMakanan = $menu[$jenisMakanan]['harga']; 
        $jenisMinuman = $_POST['jenisMinuman'];
        $hargaMinuman = $menu[$jenisMinuman]['harga'];
        $totalDsknMkn = 0;
        $totalDsknMnm = 0; 
        if(isset($_POST['submit']) ){
           $totalmakan = $hargaMakanan * $Jmakanan;
           $totalminum = $hargaMinuman * $Jminuman;

           if($Jmakanan < 5 ){
               $DsknMkn = null;
           }else{
             $DsknMkn = ($totalmakan * 10) / 100;
                $totalDsknMkn = $totalmakan - $DsknMkn;
           }
           if($Jminuman < 5){
                $DsknMnm = null;
           }else{
             $DsknMnm = ($totalminum * 10) / 100;
            $totalDsknMnm = $totalminum - $DsknMnm;
           }
        if($DsknMkn == null && $DsknMnm == null){
            $HT = $totalmakan + $totalminum;
        }else{
            $HT = $totalDsknMkn + $totalDsknMnm;
        }
        if($Jmakanan >= 5){
            $DsknMkn = "10 %";
        }else {
            $DsknMkn = "0";
        }
        if($Jminuman >= 5){
            $DsknMnm = "10 %";
        }else{
            $DsknMnm = "0";
        }
           
           ?>

           <h1 class="struk">Struk Pesanan</h1><br>
           =============================<br>
           <p><?=$jenisMakanan ?> = <?=$hargaMakanan ?> x <?=$Jmakanan ?></p><br>
           <p><?=$jenisMinuman ?> = <?=$hargaMinuman ?> x <?=$Jminuman ?></p><br>
           <p>Diskon Makanan = <?=$DsknMkn ?></p><br>
           <p>Diskon minuman = <?=$DsknMnm ?></p><br>
           <p>Total Harga = <?=$HT ?></p><br>
           =============================<br>



       <?php }?>
    <?php endif; ?>
    </div>
</div>

</body>
</html>

