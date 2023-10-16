<?php

class Peminjaman extends Controller
{
    public function index()
    {
        $data['page'] = 'Peminjaman';
        $data['pinjam'] = $this->model('pinjamModel')->getAllInfo();
        $this->view('templates/header', $data);
        $this->view('peminjaman/index', $data);
        $this->view('templates/footer');
    }

    public function tambahData()
    {
        $data['page'] = 'Tambah Peminjaman';
        $this->view('templates/header', $data);
        $this->view('peminjaman/create');
        $this->view('templates/footer');
    }

    public function simpanData()
    {
        if ($this->model('pinjamModel')->tambahData($_POST) > 0) {
            header('location: ' . BASE_URL . '/peminjaman/index');
            exit;
        } else {
            header('location: ' . BASE_URL . '/peminjaman/index');
            exit;
        }
    }

    public function edit($id)
    {
        $data['page'] = 'Edit Buku';
        $data['peminjaman'] = $this->model('pinjamModel')->getInfoById($id);
        $this->view('templates/header', $data);
        $this->view('peminjaman/edit', $data);
        $this->view('templates/footer');
    }

    public function updateData()
    {
        if ($this->model('pinjamModel')->updateData($_POST) > 0) {
            header('location: ' . BASE_URL . '/peminjaman/index');
            exit;
        } else {
            header('location: ' . BASE_URL . '/peminjaman/index');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('pinjamModel')->deleteData($id) > 0) {
            header('location: '. BASE_URL . '/peminjaman/index');
            exit;
        } else {
            header('location: '. BASE_URL . '/home/index');
            exit;
        }
    }
}