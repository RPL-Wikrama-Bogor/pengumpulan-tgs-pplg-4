<?php

class BarangModel {
    private $table = 'tb_peminjaman';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBarang()
    {
        $this->db->query("SELECT * FROM " .$this->table);
        return $this->db->resultSet();
    }

    public function getBarangById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
        
    }

    public function tambahBarang($data)
    {
        $data['tgl_kembali'] = date('Y-m-d H:i:s', strtotime($data['tgl_pinjam'] . '+2 days'));
        $data['status'] = "Belum Kembali";
        $query = "INSERT INTO tb_peminjaman (nama_peminjaman, jenis_barang, no_barang, tgl_pinjam, tgl_kembali, status) VALUES(:nama_peminjam, :jenis_barang, :no_barang, :tgl_pinjam, :tgl_kembali, :status)";
        $this->db->query($query);   
        $this->db->bind('nama_peminjam', $data['nama_peminjaman']);
        $this->db->bind('jenis_barang', $data['jenis_barang']);
        $this->db->bind('no_barang', $data['no_barang']);
        $this->db->bind('tgl_pinjam', $data['tgl_pinjam']);
        $this->db->bind('tgl_kembali', $data['tgl_kembali']);
        $this->db->bind('status', $data['status']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateDataBarang($data)
    {
        if ($data['tgl_kembali'] != '0000-00-00 00:00:00' && $data['tgl_kembali'] > $data['tgl_pinjam']) {
            $data['status'] = 'Sudah Kembali';
        } elseif ($data['tgl_kembali'] <= $data['tgl_pinjam']) {
            return 'Tanggal kembali tidak valid. Harus lebih besar dari tanggal pinjam.';
        } else {
            $data['status'] = 'Belum Kembali';
        }
        return $data['tgl_kembali'];
        $query = "UPDATE tb_peminjaman SET nama_peminjaman=:nama_peminjaman, jenis_barang=:jenis_barang, no_barang=:no_barang, tgl_pinjam=:tgl_pinjam, tgl_kembali=:tgl_kembali, status=:status WHERE id=:id";
            $this->db->query($query);
            $this->db->bind('id', $data['id']);
            $this->db->bind('nama_peminjaman', $data['nama_peminjaman']);
            $this->db->bind('jenis_barang', $data['jenis_barang']);
            $this->db->bind('no_barang', $data['no_barang']);
            $this->db->bind('tgl_pinjam', $data['tgl_pinjam']);
            $this->db->bind('tgl_kembali', $data['tgl_kembali']);
            $this->db->bind('status', $data['status']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteBarang($id)
    {
        $this->db->query('DELETE FROM ' .$this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariBarang(){

        $keyword = $_POST['keyword'];
        $this->db->query("SELECT * FROM tb_peminjaman WHERE nama_peminjaman LIKE :keyword OR jenis_barang LIKE :keyword");
        $this->db->bind('keyword', '%' . $keyword . '%');
        return $this->db->resultSet();
    }

}