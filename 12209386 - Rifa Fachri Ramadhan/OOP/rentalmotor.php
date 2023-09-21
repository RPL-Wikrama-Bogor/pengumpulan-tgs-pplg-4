<?php

class Motor {
    protected $scoopy,
              $beat,
              $vario,
              $nama,
              $jenis,
              $waktu;
    protected $members = [
        ['nama'=>'rifa',
         'member'=>0.05
        ],
        ['nama'=>'catur',
         'member'=>0.05
        ]
    ];


    public function setHargaS($Hscoopy){
        $this ->scoopy = $Hscoopy;
    }
    public function setHargaB($Hbeat){
        $this ->beat = $Hbeat;
    }
    public function setHargaV($Hvario){
        $this ->vario = $Hvario;
    }
    public function getHargaS(){
        $scoopy = $this->scoopy;
        return $scoopy;
    }
    public function getHargaB(){
        $beat = $this->beat;
        return $beat;
    }
    public function getHargaV(){
        $vario = $this->vario;
        return $vario;
    }
    
    public function setnama($nama){
        $this->nama = $nama;
        return $this->nama;
    }
    public function setwaktu($waktu){
        $this->waktu = $waktu;
        return $this->waktu;
    }
    public function setjenis($jenis){
        $this->jenis = $jenis;
        return $this->jenis;
    }

}



class Pinjam extends Motor{
    
    public function getstruk($tipe){

        $memberStatus = 0;
        foreach ($this->members as $member) {
            if ($member['nama'] === $this->nama) {
                $memberStatus = $member['member'];
                break;
            }
        }
        
        switch($tipe){
            case 'scoopy':
                $harga = $this->getHargaS();
                break;
            case 'beat':
                $harga = $this->getHargaB();
                break;
            case 'vario':
                $harga = $this->getHargaV();
                break;
            
        }
        $rental = $this->waktu * $harga;
        $diskon = $rental * $memberStatus;
        $setelah = $rental - $diskon;
        
        $pinjam = number_format($setelah, 3, '.', ',');
        return $pinjam;
    } 
}

$pinjam = new Pinjam();

$pinjam->setHargaS(100);
$pinjam->setHargaB(120);
$pinjam->setHargaV(150);

if(isset($_POST['submit']) ){
    $nama = $_POST['nama'];
    $tipe = $_POST['tipe'];
    $waktu = $_POST['waktu'];

    $pinjam->setnama($nama);
    $pinjam->setwaktu($waktu);
    $pinjam->setjenis($tipe);

    $harga = $pinjam->getstruk($tipe);

    echo "========================================== <br>";
    echo "nama peminjam = $nama <br>";
    echo "Meminjam = $tipe <br> Selama $waktu hari <br>";
    echo "harga yang harus dibayar = $harga <br>";
    echo "=========================================== <br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rental motor</title>
</head>
<body>
    
    <form action="" method="post">
        <label for="" >nama pengguna</label>
        <input type="text" name="nama"><br>
        <label for="" >Waktu penggunaan</label>
        <input type="number" name="waktu"><br>
        <select name="tipe" id="">
            <option value="scoopy">scoopy</option>
            <option value="beat">beat</option>
            <option value="vario">vario</option>
        </select>
        <input type="submit" name="submit" value="Pinjam">
    </form>

</body>
</html>