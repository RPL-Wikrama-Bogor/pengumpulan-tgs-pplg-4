<?php 


class Shell{
    public $ppn = 10,
           $shellS = 15420,
           $shellVP = 16130,
           $shellVPD = 18310,
           $shellVPN = 16510;

        public function getPPN() {
            $ppn =$this->ppn;
            return $ppn;
        }
    
        public function getShellS() {
            $shellS = $this->shellS;
            return $shellS;
        }
    
        public function getShellVP() {
            $shellVP =$this->shellVP;
            return $shellVP;
        }
    
        public function getShellVPD() {
            $shellVPD =$this->shellVPD;
            return $shellVPD;
        }
    
        public function getShellVPN() {
            $shellVPN =$this->shellVPN;
            return $shellVPN;
            
        }
        
}

class Beli extends Shell{
    
    public function setharga($tipe, $jumlah){
            $HPL = 0;
            $jumlah = $jumlah;
            switch ($tipe){
                case 'shellS':
                    $HPL = $this->getShellS();
                    break;
                case 'shellVP':
                    $HPL = $this->getShellVP();
                    break;
                case 'shellVPD':
                    $HPL = $this->getShellVPD();
                    break;
                case 'shellVPN':
                    $HPL = $this->getShellVPN();
                    break;
            }
            $hargamentah = $HPL * $jumlah;
            $ppn = ($hargamentah * $this->ppn) /100;
            $hargatotal = $hargamentah + $ppn;
            // number_format($hargatotal, ',');
            $jumlahduitnya = number_format($hargatotal, 2, ',', '.');
            return $jumlahduitnya;
        }
}

if(isset($_POST['submit'])){
    $jumlah = $_POST['jumlah'];
    $tipe = $_POST['tipe'];
    $beli = new Beli();

    $hargatotal = $beli->setharga($tipe, $jumlah);
    echo "=============================================== <br>";
    echo "Total harga untuk $jumlah liter, $tipe adalah = $hargatotal" . "<br>";
    echo "=============================================== ";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bensin</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Masukan Jumlah liter</label>
        <input type="number" name="jumlah">
        <br>
        <label for="">Pilih Tipe Bahan Bakar</label>
        <select name="tipe" id="tipe">
            <option value="" hidden>--Pilih--</option><br>
            <option value="shellS">ShellS</option>
            <option value="shellVP">ShellVP</option>
            <option value="shellVPD">ShellVPD</option>
            <option value="shellVPN">ShellVPN</option>
        </select>
        <input type="submit" name="submit">
    </form>
</body>
</html>