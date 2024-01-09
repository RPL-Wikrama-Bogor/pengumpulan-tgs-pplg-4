<?php

class Peminjaman_model
{

    private $table = 'inventaris';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPeminjamans()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getAllPeminjaman()
    {
        $this->db->query('SELECT *, CASE WHEN tgl_kembali < NOW() THEN "Sudah Kembali" ELSE "Belum Kembali" END AS status FROM ' . $this->table);
        return $this->db->resultSet();
    }



    public function getPeminjamanById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahPinjam($data)
    {
        // Calculate the return date (two days after the borrow date)
        $tgl_pinjam = $data['tgl_pinjam'];
        $tgl_kembali = date('Y-m-d H:i:s', strtotime($tgl_pinjam . ' +2 days'));

        // $query = "INSERT INTO inventaris (nama_peminjam, jenis_barang, no_barang, tgl_pinjam, tgl_kembali)
        //       VALUES (:nama_peminjam, :jenis_barang, :no_barang, :tgl_pinjam, :tgl_kembali)";
        $query = "INSERT INTO inventaris (nama_peminjam, jenis_barang, no_barang, tgl_pinjam, tgl_kembali)
              VALUES (:nama_peminjam, :jenis_barang, :no_barang, :tgl_pinjam, :tgl_kembali)";

        $this->db->query($query);
        $this->db->bind('nama_peminjam', $data['nama_peminjam']);
        $this->db->bind('jenis_barang', $data['jenis_barang']);
        $this->db->bind('no_barang', $data['no_barang']);
        $this->db->bind('tgl_pinjam', $data['tgl_pinjam']);
        $this->db->bind('tgl_kembali', $tgl_kembali);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function hapusPeminjaman($id)
    {
        $query = "DELETE FROM inventaris WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updatePeminjaman($data)
    {
        // Ambil status yang ada sebelum mengubah data
        $status_sebelumnya = $this->getPeminjamanById($data['id'])['status'];

        $query = "UPDATE inventaris SET
              nama_peminjam = :nama_peminjam,
              jenis_barang = :jenis_barang,
              no_barang = :no_barang,
              tgl_pinjam = :tgl_pinjam,
              tgl_kembali = :tgl_kembali
              WHERE id = :id ";

        $this->db->query($query);
        $this->db->bind('nama_peminjam', $data['nama_peminjam']);
        $this->db->bind('jenis_barang', $data['jenis_barang']);
        $this->db->bind('no_barang', $data['no_barang']);
        $this->db->bind('tgl_pinjam', $data['tgl_pinjam']);
        $this->db->bind('tgl_kembali', $data['tgl_kembali']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        // Jika tanggal kembali tidak diubah, kembalikan status sebelumnya
        if ($data['tgl_kembali'] == $this->getPeminjamanById($data['id'])['tgl_kembali']) {
            $data['status'] = $status_sebelumnya;
        }

        return $this->db->rowCount();
    }


    public function searchPeminjaman($keyword)
    {
        $keyword = '%' . $keyword . '%';
        $query = "SELECT *, CASE WHEN tgl_kembali < NOW() THEN 'Sudah Kembali' ELSE 'Belum Kembali' END AS status FROM {$this->table} WHERE nama_peminjam LIKE :keyword OR jenis_barang LIKE :keyword OR no_barang LIKE :keyword OR tgl_pinjam LIKE :keyword OR tgl_kembali LIKE :keyword";
        $this->db->query($query);
        $this->db->bind(':keyword', $keyword);
        return $this->db->resultSet();
    }
}
