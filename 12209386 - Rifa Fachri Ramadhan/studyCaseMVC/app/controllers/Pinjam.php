<?php

class Pinjam extends Controller {


    public function index()
    {
        $data['judul'] = 'Peminjaman';
        $data['pinjam'] = $this->model('PinjamModel')->getAllItem();
        $this->view('templates/header', $data);
        $this->view('peminjaman/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Peminjam';
        $data['pinjam'] = $this->model('PinjamModel')->getAllItem();
        $this->view('templates/header', $data);
        $this->view('peminjaman/tambah', $data);
        $this->view('templates/footer');
    }

    public function simpanItem()
    {

        if($this->model('PinjamModel')->tambahItem($_POST) > 0 ){
            header('location: ' . BASE_URL . '/pinjam/index');
            exit;
        }else{
            header('location: ' . BASE_URL . '/pinjam/index');
            exit;
        }
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Peminjaman';
        $data['pinjam'] = $this->model('PinjamModel')->getItemById($id);
        $this->view('templates/header', $data);
        $this->view('peminjaman/edit', $data);
        $this->view('templates/footer');
    }
    public function updateBuku()
    {
       if($data['pinjam'] = $this->model('PinjamModel')->updateDataItem($_POST) > 0){
            header('location: ' . BASE_URL . '/pinjam/index');
            exit;
       }else{
            header('location: ' . BASE_URL . '/pinjam/index');
            exit;
       }
    }

    public function hapus($id){
        if($this->model('PinjamModel')->deleteItem($id) > 0){
            header('location: '. BASE_URL . '/pinjam/index');
            exit;
        }else{
            header('location: '. BASE_URL . '/pinjam/index');
            exit;
        }
    }

    public function cari()
    {
      $data['judul'] = 'Data Pinjaman';
      $data['pinjam'] = $this->model('PinjamModel')->cariBarang($_POST['search']);
      $this->view('templates/header', $data);
      $this->view('peminjaman/index', $data);
      $this->view('templates/footer');
    }
  
  
}