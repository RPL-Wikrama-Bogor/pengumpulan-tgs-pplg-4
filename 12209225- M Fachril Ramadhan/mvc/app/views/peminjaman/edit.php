<style>
    .navbar-brand {
        color: blue !important;
    }

    .jumbotron {
        background-color: #C9DBB2 !important;
    }

    .btn-primary {
        background-color: #617A55 !important;
        border-color: #617A55 !important;
    }

    .table-striped {
        background-color: #C9DBB2 !important;
        width: 100px !important;
    }
</style>
<div class="container mt-3">
    <div class="row">
        <div class="col-6">
            <h1>Edit Peminjaman</h1>
            <form action="<?= BASEURL; ?>/peminjaman/ubah" method="post">
                <input type="hidden" name="id" value="<?= $data['mhs']['id']; ?>">

                <div class="mb-3">
                    <label for="nama_peminjam" class="form-label">Nama Peminjam</label>
                    <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam" value="<?= $data['mhs']['nama_peminjam']; ?>">
                </div>

                <div class="mb-3">
                    <label for="penulis" class="form-label">Jenis Barang</label>
                    <select class="form-select" aria-label="Default select example" name="jenis_barang" value="<?= $data['mhs']['jenis_barang']; ?>">
                        <option value="Laptop">Laptop</option>
                        <option value="HP">HP</option>
                        <option value="AdaptorLAn">Tablet</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="no_barang" class="form-label">Nomor Barang</label>
                    <input type="number" class="form-control" id="no_barang" name="no_barang" value="<?= $data['mhs']['no_barang']; ?>">
                </div>

                <div class="mb-3">
                    <label for="tgl_pinjam" class="form-label">Tanggal Pinjam</label>
                    <input type="datetime-local" class="form-control" id="tgl_pinjam" name="tgl_pinjam" value="<?= $data['mhs']['tgl_pinjam']; ?>">
                </div>

                <div class="mb-3">
                    <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
                    <input type="datetime-local" class="form-control" id="tgl_kembali" name="tgl_kembali" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</div>