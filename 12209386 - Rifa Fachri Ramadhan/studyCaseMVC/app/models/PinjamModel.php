<?php

class PinjamModel{

    private $table = 'pinjam';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllItem()
    {
       
        $query = "SELECT * FROM " . $this->table;
        $this->db->query($query);
        return $this->db->resultSet();
        
       
    }

    public function getItemById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id = :id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahItem($data)
    {
        
       
        $query = "INSERT INTO " . $this->table . " (nama_peminjam, jenis_barang, no_barang, tgl_pinjam, tgl_kembali) VALUES(:nama_peminjam, :jenis_barang, :no_barang, :tgl_pinjam, :tgl_kembali)";
        $this->db->query($query);
        $this->db->bind('nama_peminjam', $data['nama_peminjam']);
        $this->db->bind('jenis_barang', $data['jenis_barang']);
        $this->db->bind('no_barang', $data['no_barang']);
        $this->db->bind('tgl_pinjam', $data['tgl_pinjam']);
        $time = strtotime($data['tgl_pinjam']);
        $newTime = date('Y-m-d H:i:s', $time + 172800);
        $this->db->bind('tgl_kembali', $newTime);
        
        $this->db->execute();

        return $this->db->rowCount();
    }



    public function updateDataItem($data)
    {
        $query = "UPDATE " . $this->table . " SET nama_peminjam=:nama_peminjam, jenis_barang=:jenis_barang, no_barang=:no_barang, tgl_pinjam=:tgl_pinjam, tgl_kembali=:tgl_kembali  WHERE id=:id"; 
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('nama_peminjam', $data['nama_peminjam']);
        $this->db->bind('jenis_barang', $data['jenis_barang']);
        $this->db->bind('no_barang', $data['no_barang']);
        $this->db->bind('tgl_pinjam', $data['tgl_pinjam']);
        $this->db->bind('tgl_kembali', $data['tgl_kembali']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteItem($id)
    {
        $this->db->query('DELETE FROM ' . $this->table .' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariBarang($barang)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE nama_peminjam LIKE :barang OR jenis_barang LIKE :barang');
    $this->db->bind('barang', '%' . $barang . '%');
    return $this->db->resultSet();
  }


   
}