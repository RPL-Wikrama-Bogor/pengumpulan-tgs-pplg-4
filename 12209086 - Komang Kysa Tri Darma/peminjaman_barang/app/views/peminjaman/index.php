<div class="container mt-3">
  <h3 class="mb-5">Daftar Peminjaman</h3>

  <div class="row">
      <div class="col-lg-6">
          <?php Flasher::flash(); ?>
      </div>
  </div>

  <div class="row">
  <div class="col-lg-6 mb-3">
    <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal" style="margin-bottom:1.2rem;">
      Tambah Peminjaman
    </button>
  </div>
  <div class="col-lg-6 mb-3 d-flex justify-content-end">
    <form action="<?= BASEURL; ?>/peminjaman/cari" method="post" class="d-flex me-2">
      <input type="text" class="form-control me-2" placeholder="Search Data" name="keyword" id="keyword" autocomplete="off">
      <button class="btn btn-outline-secondary" type="submit" id="tombolCari">Cari</button>
    </form>
    <button type="button" class="btn btn-danger"><a href="<?= BASEURL; ?>/peminjaman" style="text-decoration:none; color:white">Reset</a></button>
  </div>
</div>

    <div class="row">
        <div class="col-lg-max">
        </button>
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Peminjaman</th>
      <th scope="col">Jenis Barang</th>
      <th scope="col">Nomor Barang</th>
      <th scope="col">Tanggal Pinjam</th>
      <th scope="col">Tanggal Kembali</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
  <?php foreach($data['peminjaman'] as $peminjaman ) : ?>
    <tr>
            <td style="font-weight:700;"><?= $i ?></td>
            <td><?= $peminjaman['nama_peminjam'] ?></td>
            <td><?= $peminjaman['jenis_barang'] ?></td>
            <td><?= $peminjaman['no_barang'] ?></td>
            <td><?= $peminjaman['tgl_pinjam'] ?></td>
            <td><?= $peminjaman['tgl_kembali'] ?></td>
            <td><button type="button" class="btn btn-success"><?= $this->model('Peminjaman_model')->getStatus($peminjaman['tgl_pinjam'], $peminjaman['tgl_kembali']); ?></button></td>
            <td>
            <?php if ($this->model('Peminjaman_model')->getStatus($peminjaman['tgl_pinjam'], $peminjaman['tgl_kembali']) === 'Belum Kembali') : ?>
            <button type="button" class="btn btn-primary"><a href="<?= BASEURL ?>/peminjaman/editt/<?= $peminjaman['id'] ?>" style="text-decoration:none; color:white;">Edit</a></button>
            <?php endif; ?>
            <button type="button" class="btn btn-danger"><a href="<?= BASEURL ?>/peminjaman/hapus/<?= $peminjaman['id'] ?>" style="text-decoration:none; color:white;" onclick="confirm('yakin?');">Hapus</a></button>
            </td>
    </tr>
    <?php $i++ ?>
    <?php endforeach; ?>
  </tbody>
  </table>

        </div>
    </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Siswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL ?>/peminjaman/tambah" method="post">
        <input type="hidden" name="id" id="id">
        <div class="mb-3">
            <label for="nama_peminjam" class="form-label">Nama Peminjaman</label>
            <input type="text" name="nama_peminjam" class="form-control" id="nama_peminjam" aria-describedby="emailHelp" placeholder="Masukkan Nama Peminjaman" required>
            </div>
        <div class="mb-3">
            <label for="jenis_barang" class="form-label">Jenis Barang</label>
            <select class="form-select" aria-label="Default select example" id="jenis_barang" name="jenis_barang" required>
                <option selected disabled>Barang</option>
                <option value="Laptop">Laptop</option>
                <option value="HP">HP</option>
                <option value="AdaptorLAN">Adapter Lan</option>
            </select>
          </div>
        <div class="mb-3">
            <label for="no_barang" class="form-label">Nomor Barang</label>
            <input type="number" name="no_barang" class="form-control" id="no_barang" aria-describedby="emailHelp" placeholder="Masukkan Nomor Barang" required uniqid>
        </div>
        <div class="mb-3">
            <label for="tgl_pinjam" class="form-label">Tanggal Pinjam</label>
            <input type="datetime-local" name="tgl_pinjam" class="form-control" id="tgl_pinjam" aria-describedby="emailHelp" value="<?= date('h:i') ?>" required>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </div>
        </form>
    </div>
  </div>
</div>
