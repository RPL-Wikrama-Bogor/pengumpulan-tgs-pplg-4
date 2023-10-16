<style>
    .badge {
        /* background-color: #617A55 !important; */
        text-decoration: none;
    }
</style>
<div class="container mt-3">

    <div class="row">
        <div class="col-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>


    <div class="row">
        <div class="col-6">
            <h3 class="mb-4"> Daftar Peminjaman </h3>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Peminjaman
            </button>
            <br>
            <br>
            <form action="<?= BASEURL; ?>/peminjaman/search" method="post" class="sc">

                <style>
                    .navbar-brand {
                        color: #617A55 !important;
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
                        width: 200% !important;
                    }
                </style>

                <div class="input-group" style="width:200%;">
                    <input type="text" class="form-control" placeholder="" name="keyword">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                    <a href="<?= BASEURL; ?>/peminjaman" class="btn btn-outline-danger">Reset</a>
                </div>
            </form>
            <div class="row">
                <div class="col-6">
                    <?php Flasher::flash(); ?>
                </div>
            </div>

            <br>

            <table class="table table-striped ">
                <thead style="text-align: center;">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Peminjam</th>
                        <th scope="col">Jenis Barang</th>
                        <th scope="col">Nomer Barang</th>
                        <th scope="col">Tanggal Pinjam</th>
                        <th scope="col">Tanggal Kembali</th>
                        <th scope="col">Status</th> <!-- Add the "Status" column header -->
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <?php $i = 1; ?>
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <tbody style="text-align: center;">
                        <tr>
                            <td scope="col"><?= $i; ?></td>
                            <td scope="col"><?= $mhs['nama_peminjam']; ?></td>
                            <td scope="col"><?= $mhs['jenis_barang']; ?></td>
                            <td scope="col"><?= $mhs['no_barang']; ?></td>
                            <td scope="col"><?= $mhs['tgl_pinjam']; ?></td>
                            <td scope="col"><?= $mhs['tgl_kembali']; ?></td>
                            <td scope="col">
                                <?php if ($mhs['status'] === 'Sudah Kembali') : ?>
                                    <a class="badge text-bg-success float-end ms-1"><?= $mhs['status']; ?></a>
                                <?php else : ?>
                                    <a class="badge text-bg-danger float-end ms-1"><?= $mhs['status']; ?></a>
                                <?php endif; ?>
                            </td>

                            <td scope="col">
                                <?php if ($mhs['status'] === 'Belum Kembali') : ?> <!-- Periksa status -->
                                    <a href="<?= BASEURL; ?>/peminjaman/edit/<?= $mhs['id']; ?>" class="badge text-bg-primary float-end ms-1">Edit</a>
                                <?php endif; ?>
                                <a href="<?= BASEURL; ?>/peminjaman/hapus/<?= $mhs['id']; ?>" class="badge text-bg-danger float-end ms-1" onclick="return confirm('data salah satu siswa akan di hapus, yakin?');">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </table>


        </div>
    </div>
</div>



<!-- modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="formModalLabel">Tambah Peminjaman</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="<?= BASEURL; ?>/peminjaman/tambah" method="post">
                    <!-- <input type="hidden" name="id" id="id"> -->
                    <div class="mb-3">
                        <label for="nama_peminjam" class="form-label">Nama Peminjam</label>
                        <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam">
                    </div>


                    <div class="mb-3">
                        <label for="penulis" class="form-label">Jenis Barang</label>
                        <select class="form-select" aria-label="Default select example" name="jenis_barang">
                            <option value="Laptop">Laptop</option>
                            <option value="HP">HP</option>
                            <option value="AdaptorLAn">Adaptor LAN</option>
                        </select>
                    </div>



                    <div class="mb-3">
                        <label for="no_barang" class="form-label">Nomor Barang</label>
                        <input type="number" class="form-control" id="no_barang" name="no_barang">
                    </div>

                    <div class="mb-3">
                        <label for="tgl_pinjam" class="form-label">Tanggal Pinjam</label>
                        <input type="datetime-local" class="form-control" id="tgl_pinjam" name="tgl_pinjam">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>