<?php

class Peminjaman extends Controller{
    public function index(){
        $data['judul'] = 'Daftar Peminjaman';
        $data['peminjaman'] = $this->model('Peminjaman_model')->getAllSiswa();
        $this->view('templates/header',$data);
        $this->view('peminjaman/index',$data);
        $this->view('templates/footer');
    }
   
    public function tambah(){
        if($this->model('Peminjaman_model')->tambahDataSiswa($_POST) > 0){
            Flasher::setFlash('berhasil','ditambahkan','success');
            header('Location:' . BASEURL . '/peminjaman');
            exit;
        }
        else{
            Flasher::setFlash('gagal','ditambahkan','danger');
            header('Location:' . BASEURL . '/peminjaman');
            exit;
        }
    }

    public function hapus($id){
        if($this->model('Peminjaman_model')->hapusDataSiswa($id) > 0){
            Flasher::setFlash('berhasil','dihapus','success');
            header('Location:' . BASEURL . '/peminjaman');
            exit;
        }
        else{
            Flasher::setFlash('gagal','dihapus','danger');
            header('Location:' . BASEURL . '/peminjaman');
            exit;
        }
    }

    // public function getubah(){
    //     if(isset($_POST['id'])) {
    //         echo json_encode($this->model('Peminjaman_model')->getSiswaById($_POST['id']));
    //     } else {
    //         echo "No ID received.";
    //     }
    // }
    public function editt($id){
        $data['judul'] = 'Edit Peminjaman';
        $data['peminjaman'] = $this->model('Peminjaman_model')->getSiswaById($id);
        $this->view('templates/header',$data);
        $this->view('peminjaman/editt',$data);
        $this->view('templates/footer');
    }

    public function ubah(){
        if($this->model('Peminjaman_model')->ubahDataSiswa($_POST)){
            Flasher::setFlash('berhasil','diubah','success');
            header('Location:' . BASEURL . '/peminjaman');
            exit;
        }
        else{
            Flasher::setFlash('gagal','diubah','danger');
            header('Location:' . BASEURL . '/peminjaman');
            exit;
        }
    }

    public function cari(){
        $data['judul'] = 'Daftar Peminjaman';
        $data['peminjaman'] = $this->model('Peminjaman_model')->cariDataSiswa();
        $this->view('templates/header',$data);
        $this->view('peminjaman/index',$data);
        $this->view('templates/footer');
    }
}