<?php
class RentalMotor
{
    private $namaPelanggan;
    private $lamaRental;
    private $jenisMotor;
    private $isMember;
    private $hargaPerHari = [
        'Ducati' => 150000,
        'Nmax' => 90000,
        'Ninja' => 100000
    ];
    private $memberList = ['budi', 'nindi', 'nadin', 'roni', 'harry'];

    private $pajak = 10000;

    public function __construct($namaPelanggan, $lamaRental, $jenisMotor, $isMember)
    {
        $this->namaPelanggan = strtolower($namaPelanggan);
        $this->lamaRental = $lamaRental;
        $this->jenisMotor = $jenisMotor;
        $this->isMember = $this->cekIsMember();
    }
    private function cekIsMember()
    {
        return in_array($this->namaPelanggan, $this->memberList);
    }

    public function hitungTotalHarga()
    {
        if (!isset($this->hargaPerHari[$this->jenisMotor])) {
            return ['error' => 'Jenis motor tidak valid'];
        }

        $hargaMotor = $this->hargaPerHari[$this->jenisMotor];
        $totalHarga = $hargaMotor * $this->lamaRental;

        // Menambahkan potongan pajak
        $totalHarga += $this->pajak;

        if ($this->isMember && in_array($this->namaPelanggan, $this->memberList)) {
            $totalHarga *= 0.95; // Diskon 5% untuk member
            $statusMember = 'Member';
        } else {
            $statusMember = 'Bukan Member';
        }

        return [
            'statusMember' => $statusMember,
            'namaMotor' => $this->jenisMotor,
            'lamaRental' => $this->lamaRental,
            'totalHarga' => $totalHarga
        ];
    }

    public function tampilkanDetailPeminjaman()
    {
        echo "Nama: " . $this->namaPelanggan . "<br>";
        echo "Waktu Peminjaman Selama (hari): " . $this->lamaRental . "<br>";
        echo "Jenis Motor: " . $this->jenisMotor . "<br>";
        echo "Pajak: " . $this->pajak . "<br>";
        echo "Biaya Peminjaman per hari: Rp " . number_format($this->hargaPerHari[$this->jenisMotor], 0, ',', '.') . "<br>";
        echo "Total Biaya Peminjaman: Rp " . number_format($this->hitungTotalHarga()['totalHarga'], 0, ',', '.') . "<br>";

        if ($this->isMember) {
            echo "Status Member: Berstatus sebagai Member dan Mendapatkan Diskon Sebesar 5% <br>";
        } else {
            echo "Status Member: Bukan member<br>";
        }
    }
}
