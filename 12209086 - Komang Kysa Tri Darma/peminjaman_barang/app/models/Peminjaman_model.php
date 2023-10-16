<?php

class Peminjaman_model{
    private $table = 'users';
    private $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function getAllSiswa(){
           $this->db->query('SELECT * FROM '. $this->table);
           return $this->db->resultSet();
        }
        public function getSiswaById($id){
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id =:id');
            $this->db->bind('id',$id);
            return $this->db->single();
        }

        public function tambahDataSiswa($data){
            $query = "INSERT INTO users VALUES ('',:nama_peminjam, :jenis_barang, :no_barang, :tgl_pinjam, :tgl_kembali)";
            date_default_timezone_set('Asia/Jakarta');
            $tgl_pinjam =  $_POST['tgl_pinjam'];
            $tgl_pinjam =  date('Y-m-d h:i');

            // Tambahkan 2 hari
            $tgl_kembali = date('Y-m-d h:i', strtotime($tgl_pinjam . ' +2 days'));

            $this->db->query($query);
            $this->db->bind('nama_peminjam', $data['nama_peminjam']);
            $this->db->bind('jenis_barang', $data['jenis_barang']);
            $this->db->bind('no_barang', $data['no_barang']);
            $this->db->bind('tgl_pinjam', $data['tgl_pinjam']);
            $this->db->bind('tgl_kembali', $tgl_kembali);

            $this->db->execute();

            return $this->db->rowCount();
        }

        public function hapusDataSiswa($id){
            $query = "DELETE FROM users WHERE id = :id";
            $this->db->query($query);
            $this->db->bind('id',$id);

            $this->db->execute();

            return $this->db->rowCount();
        }

        public function ubahDataSiswa($data){
            $query = "UPDATE users SET
            nama_peminjam = :nama_peminjam,
            jenis_barang = :jenis_barang,
            no_barang = :no_barang,
            tgl_pinjam = :tgl_pinjam,
            tgl_kembali = :tgl_kembali
            WHERE id = :id";
            date_default_timezone_set('Asia/Jakarta');
            $tgl_pinjam =  $_POST['tgl_pinjam'];
            $tgl_pinjam =  date('Y-m-d h:i');

            // Tambahkan 2 hari
            $tgl_kembali = date('Y-m-d h:i', strtotime($tgl_pinjam . ' +2 days'));

            $this->db->query($query);
            $this->db->bind('nama_peminjam', $data['nama_peminjam']);
            $this->db->bind('jenis_barang', $data['jenis_barang']);
            $this->db->bind('no_barang', $data['no_barang']);
            $this->db->bind('tgl_pinjam', $data['tgl_pinjam']);
            $this->db->bind('tgl_kembali', $data['tgl_kembali']);
            $this->db->bind('id', $data['id']);

            $this->db->execute();

            return $this->db->rowCount();
        }

        public function cariDataSiswa(){
            $keyword = $_POST['keyword'];
            $query = "SELECT * FROM users WHERE nama_peminjam LIKE :keyword";
            $this->db->query($query);
            $this->db->bind('keyword', "%$keyword%");
            return $this->db->resultSet();
        }

        public function getStatus($tgl_pinjam, $tgl_kembali) {
            $tgl_pinjam = strtotime($tgl_pinjam);
            $tgl_kembali = strtotime($tgl_kembali);
        
            if ($tgl_pinjam < $tgl_kembali) {
                return 'Belum Kembali';
            } else {
                return 'Sudah Kembali';
            }
        }
    
    // private $siswa = [
    //     [
    //         "nama" => "Iruma",
    //         "nis" => "12209086",
    //         "email" => "komangkysatridarma@gmail.com",
    //         "jurusan" => "PPLG"
    //     ],
    //     [
    //         "nama" => "Asmodeus",
    //         "nis" => "12209087",
    //         "email" => "asmodeusbawahaniruma@gmail.com",
    //         "jurusan" => "PPLG"
    //     ],
    //     [
    //         "nama" => "Clara",
    //         "nis" => "12209088",
    //         "email" => "claratemaniruma@gmail.com",
    //         "jurusan" => "PPLG"
    //     ]
    // ];
}