<?php
class DataMotor {
    private $hargaScoopy;
    private $hargaTMAX;
    private $hargaVario;
    private $listVIP = ['VIP1', 'VIP2', 'VIP3', 'VIP4'];

    public $jenisYangDipilih;
    public $lamaWaktu;
    public $nama_pengguna;

    function __construct()
    {
        $this->diskon = 0.05;
    }

    protected $totalPembayaran;
    protected $diskon;

    public function setHarga($Scoopy, $TMAX, $Vario) {
        $this->hargaScoopy = $Scoopy;
        $this->hargaTMAX = $TMAX;
        $this->hargaVario = $Vario;
    }

    public function getListVIP() {
        return $this->listVIP;
    }

    public function setListName($nama){
        $this->nama_pengguna = $nama;
    }

    public function getListName(){
        return $this->nama_pengguna;
    }

    public function getHarga() {
        $semuaDataMotor["Scoopy"] = $this->hargaScoopy;
        $semuaDataMotor["TMAX"] = $this->hargaTMAX;
        $semuaDataMotor["Vario"] = $this->hargaVario;
        return $semuaDataMotor;
    }
}

    class Pembelian extends DataMotor {
        public function hargaRental()
        {
            $dataHargaMotor = $this->getHarga();
            $hargaRental = $this->lamaWaktu * $dataHargaMotor[$this->jenisYangDipilih];
            return $hargaRental;
        }
    
        public function hargaDiskon()
        {
            $dataHargaMotor = $this->getHarga();
            $hargaRental = $this->lamaWaktu * $dataHargaMotor[$this->jenisYangDipilih];
            $diskon = $hargaRental * $this->diskon;
            $hargaTotalDiskon = $hargaRental - $diskon;
            return $hargaTotalDiskon;
        }

        public function cetakBukti() 
        {
            $dataHargaMotor = $this->getHarga();
    
            echo '<div style="border: 1px solid #ccc; padding: 10px; margin: 20px; text-align: center;">';
        echo '<h2>HARGA PEMINJAMAN</h2>';
        echo '<hr>';

        if (in_array($this->getListName(), $this->getListVIP())){
            echo '<p>Nama Penyewa: <strong>' . ucfirst($this->getListName()) . '</strong></p>';
            echo '<p>Jenis Motor yang Disewa: <strong>' . ucfirst($this->jenisYangDipilih) . '</strong></p>';
            echo '<p>Harga Motor per Hari: <strong>Rp ' . number_format($dataHargaMotor[$this->jenisYangDipilih], 0, ',', '.') . '</strong></p>';
            echo '<p>Lama Peminjaman (Hari): <strong>' . $this->lamaWaktu . '</strong></p>';
            echo '<p>Mendapatkan Diskon Sebesar: <strong>5%</strong></p>';
            echo '<p>Total Bayaran Setelah Diskon: <strong>Rp. ' . number_format($this->hargaDiskon(), 0, ',', '.') . '</strong></p>';
        } else {
            echo '<p>Nama Pengguna: <strong>' . ucfirst($this->getListName()) . '</strong></p>';
            echo '<p>Jenis Motor: <strong>' . ucfirst($this->jenisYangDipilih) . '</strong></p>';
            echo '<p>Harga Motor per Hari: <strong>Rp ' . number_format($dataHargaMotor[$this->jenisYangDipilih], 0, ',', '.') . '</strong></p>';
            echo '<p>Lama Peminjaman (Hari): <strong>' . $this->lamaWaktu . '</strong></p>';
            echo '<p>Anda Tidak Mendapatkan Diskon Membership</p>';
            echo '<p>Total Bayaran: <strong>Rp. ' . number_format($this->hargaRental(), 0, ',', '.') . '</strong></p>';
        }

        echo '</div>';
    }
}