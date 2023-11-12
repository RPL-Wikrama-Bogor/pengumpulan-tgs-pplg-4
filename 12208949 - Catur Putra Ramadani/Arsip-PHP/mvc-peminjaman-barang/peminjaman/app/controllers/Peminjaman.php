<?php

class Peminjaman extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Peminjaman';
        $data['mhs'] = $this->model('Peminjaman_model')->getAllPeminjaman();
        $this->view('templates/header', $data);
        $this->view('peminjaman/index', $data);
        $this->view('templates/footer');
    }



    public function Tambah()
    {
        if ($this->model('Peminjaman_model')->tambahPinjam($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/peminjaman');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/peminjaman');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Peminjaman_model')->hapusPeminjaman($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/peminjaman');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/peminjaman');
            exit;
        }
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Peminjaman';
        $data['mhs'] = $this->model('Peminjaman_model')->getPeminjamanById($id);
        $this->view('templates/header', $data);
        $this->view('peminjaman/edit', $data);
        $this->view('templates/footer');
    }


    public function ubah()
    {
        if ($this->model('Peminjaman_model')->updatePeminjaman($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/peminjaman');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/peminjaman');
            exit;
        }
    }

    public function searchIndex()
    {
        $data['judul'] = 'Daftar Peminjaman';

        // Check if a search keyword is submitted
        if (isset($_POST['keyword'])) {
            $data['mhs'] = $this->model('Peminjaman_model')->searchPeminjaman($_POST['keyword']);
        } else {
            $data['mhs'] = $this->model('Peminjaman_model')->getAllPeminjamans();
        }

        $this->view('templates/header', $data);
        $this->view('peminjaman/index', $data);
        $this->view('templates/footer');
    }


    public function search()
    {
        if (isset($_POST['keyword'])) {
            $keyword = $_POST['keyword'];
            $data['mhs'] = $this->model('Peminjaman_model')->searchPeminjaman($keyword);
        } else {
            $data['mhs'] = $this->model('Peminjaman_model')->getAllPeminjamans();
        }

        $data['judul'] = 'Daftar Peminjaman (Search Results)';
        $data['status'] = 'Search Results'; // Add this line to include the 'status' key

        $this->view('templates/header', $data);
        $this->view('peminjaman/index', $data);
        $this->view('templates/footer');
    }



    public function status()
    {
        $data = $_POST;
        $tgl_kembali_baru = strtotime($data['tgl_kembali']); // Ubah tanggal kembali yang baru menjadi timestamp
        $tgl_pinjam = strtotime($data['tgl_pinjam']); // Ubah tanggal pinjam menjadi timestamp

        // Ubah format waktu menjadi format "H:i:s" (jam:menit:detik)
        $waktu_kembali_baru = date('H:i:s', $tgl_kembali_baru);
        $waktu_pinjam = date('H:i:s', $tgl_pinjam);

        // Jika tanggal kembali yang baru lebih besar atau sama dengan tanggal pinjam
        // atau jika tanggal kembali yang baru sama dengan tanggal pinjam dan waktu kembali yang baru lebih besar atau sama dengan waktu pinjam
        if ($tgl_kembali_baru >= $tgl_pinjam || ($tgl_kembali_baru == $tgl_pinjam && $waktu_kembali_baru >= $waktu_pinjam)) {
            $status = "Sudah Kembali";
        } else {
            $status = "Belum Kembali";
        }

        // Tambahkan status ke dalam data yang akan diupdate
        $data['status'] = $status;

        // Update data dengan status yang sudah ditentukan
        if ($this->model('Peminjaman_model')->updatePeminjaman($data) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/peminjaman');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/peminjaman');
            exit;
        }
    }
}
