<?php

class Buku extends Controller
{
    public function index()
    {
        $data['judul'] = "Data Buku";
        $data['page'] = 'Data Buku';
        $data['buku'] = $this->model('BukuModel')->getAllBuku();
        $this->view('templates/header', $data);
        $this->view('buku/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = "Tambah test";
        $data['page'] = 'Tambah test';
        $this->view('templates/header', $data);
        $this->view('buku/create');
        $this->view('templates/footer');
    }

    public function simpanBuku()
    {
        if ($this->model('BukuModel')->tambahBuku($_POST) > 0) {
            header('location: ' . BASE_URL . '/buku/index');
            exit;
        } else {
            header('location: ' . BASE_URL . '/buku/index');
            exit;
        }
    }

    public function edit($id)
    {
        $data['judul'] = "Edit Buku";
        $data['page'] = 'Edit Buku';
        $data['buku'] = $this->model('BukuModel')->getBukuById($id);
        $this->view('templates/header', $data);
        $this->view('buku/edit', $data);
        $this->view('templates/footer');
    }

    public function updateBuku()
    {
        if ($this->model('BukuModel')->updateDataBuku($_POST) > 0) {
            header('location: ' . BASE_URL . '/buku/index');
            exit;
        } else {
            header('location: ' . BASE_URL . '/buku/index');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('BukuModel')->deleteBuku($id) > 0) {
            header('location: '. BASE_URL . '/buku/index');
            exit;
        } else {
            header('location: '. BASE_URL . '/buku/index');
            exit;
        }
    }
}