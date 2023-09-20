<?php

class Motor{
    protected $scoopy,
              $beat,
              $vario,
              $pajak;


    public function gethargaS()
    {
        $this->scoopy = 100;
        return $this->scoopy;
    }
    public function gethargaB()
    {
        $this->beat = 120;
        return $this->beat;

    }
    public function gethargaV()
    {
        $this->vario = 150;
        return $this->vario;

    }
    public function gethargaP()
    {
        $this->pajak = 10;
        return $this->pajak;

    }

    
   
}
class Pinjam extends Motor{

    public function setharga($tipe, $waktu){
        $harga = 0;
        $pajak = $this->gethargaP();
        $scoopy = $this->gethargaS();
        $beat = $this->gethargaB();
        $vario = $this->gethargaV();
        
        switch($tipe){
            case 'scoopy':
                $harga = $scoopy;
                break;
            case 'beat':
                $harga = $beat;
                break;
            case 'vario':
                $harga = $vario;
                break;
        }
       
        $total = $harga * $waktu; 
        $sebelum = $total + $pajak;
        $uang = number_format($sebelum, 3, '.');
        return $uang;
    }
    
}

if(isset($_POST['submit']) ){
    $waktu = $_POST['waktu'];
    $tipe = $_POST['tipe'];
    $nama = $_POST['nama'];
    $pinjam = new Pinjam();

    $total = $pinjam->setharga($tipe, $waktu);

    echo "========================================== <br>";
    echo "nama peminjam = $nama <br>";
    echo "Meminjam = $tipe <br> Selama $waktu hari <br>";
    echo "harga yang harus dibayar = $total <br>";
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
        <input type="submit" name="submit" placeholder="Pinjam">
    </form>

</body>
</html>