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
        $this->isMember = $isMember;
    }

    public function hitungTotalHarga()
    {
        if (!isset($this->hargaPerHari[$this->jenisMotor])) {
            return ['error' => 'Jenis motor tidak valid'];
        }

        $hargaMotor = $this->hargaPerHari[$this->jenisMotor];
        $totalHarga = $hargaMotor * $this->lamaRental;

        if ($this->isMember && in_array($this->namaPelanggan, $this->memberList)) {
            $totalHarga *= 0.95; // Diskon 5% untuk member
            $statusMember = 'Member';
        } else {
            $statusMember = 'Bukan Member';
        }

        // Menambahkan potongan pajak
        $totalHarga += $this->pajak;

        return [
            'statusMember' => $statusMember,
            'namaMotor' => $this->jenisMotor,
            'lamaRental' => $this->lamaRental,
            'totalHarga' => $totalHarga
        ];
    }
}
