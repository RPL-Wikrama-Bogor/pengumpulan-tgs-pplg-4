<?php

class BarangModel {
    private $table = 'tb_peminjaman';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllBarang() {
        $query = "SELECT * FROM {$this->table}";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getBarangById($id) {
        $query = "SELECT * FROM {$this->table} WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahBarang($data) {
        $data['tgl_kembali'] = date('Y-m-d H:i:s', strtotime($data['tgl_pinjam'] . '+2 days'));
        $data['status'] = 'Belum Kembali';

        $query = "INSERT INTO {$this->table} (nama_peminjam, jenis_barang, no_barang, tgl_pinjam, tgl_kembali, status) VALUES (:nama_peminjam, :jenis_barang, :no_barang, :tgl_pinjam, :tgl_kembali, :status)";

        $this->db->query($query);
        $this->bindParamsAndExecute($data);

        return $this->db->rowCount();
    }

    public function updateDataBarang($data) {
        $query = "UPDATE {$this->table} SET nama_peminjam = :nama_peminjam, jenis_barang = :jenis_barang, no_barang = :no_barang, tgl_pinjam = :tgl_pinjam, tgl_kembali = :tgl_kembali, status = :status WHERE id = :id";

        $this->db->query($query);

        if ($this->validateTglKembali($data)) {
            $this->bindParamsAndExecute($data);
            return $this->db->rowCount();
        } else {
            return 'Tanggal kembali tidak valid. Harus lebih besar dari tanggal pinjam.';
        }
    }

    public function deleteBarang($id) {
        $query = "DELETE FROM {$this->table} WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cariBarang() {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM {$this->table} WHERE nama_peminjam LIKE :keyword OR jenis_barang LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', '%' . $keyword . '%');
        return $this->db->resultSet();
    }

    private function bindParamsAndExecute($data) {
        foreach ($data as $key => $value) {
            $this->db->bind($key, $value);
        }
        $this->db->execute();
    }

    private function validateTglKembali($data) {
        if ($data['tgl_kembali'] != '0000-00-00 00:00:00' && $data['tgl_kembali'] > $data['tgl_pinjam']) {
            $data['status'] = 'Sudah Kembali';
        } else {
            $data['status'] = 'Belum Kembali';
        }
        return true;
    }
}
