<div class="container mt-3">
  <h3 class="mb-3">Edit Peminjaman</h3>
  <form action="<?= BASEURL ?>/peminjaman/ubah" method="post">
  <input type="hidden" name="id" id="id" value="<?= $data['peminjaman']['id'] ?>">
  <div class="mb-3">
    <label for="nama_peminjam" class="form-label">Nama Peminjaman</label>
    <input type="text" name="nama_peminjam" class="form-control" id="nama_peminjam" aria-describedby="emailHelp" placeholder="Masukkan Nama Peminjaman" value="<?= $data['peminjaman']['nama_peminjam'] ?>" required>
    </div>
    <div class="mb-3">
            <label for="jenis_barang" class="form-label">Jenis Barang</label>
            <select class="form-select" aria-label="Default select example" id="jenis_barang" name="jenis_barang" value="<?= $data['peminjaman']['jenis_barang'] ?>" required>
            <option value="Laptop" <?= ($data['peminjaman']['jenis_barang'] === 'Laptop') ? 'selected' : '' ?>>Laptop</option>
            <option value="HP" <?= ($data['peminjaman']['jenis_barang'] === 'HP') ? 'selected' : '' ?>>HP</option>
            <option value="AdaptorLAN" <?= ($data['peminjaman']['jenis_barang'] === 'AdapterLAN') ? 'selected' : '' ?>>Adapter Lan</option>
            </select>
    </div>
    <div class="mb-3">
            <label for="no_barang" class="form-label">Nomor Barang</label>
            <input type="number" name="no_barang" class="form-control" id="no_barang" aria-describedby="emailHelp" placeholder="Masukkan Nomor Barang" value="<?= $data['peminjaman']['no_barang'] ?>" required>
    </div>
    <div class="mb-3">
            <label for="tgl_pinjam" class="form-label">Tanggal Pinjam</label>
            <input type="datetime-local" name="tgl_pinjam" class="form-control" id="tgl_pinjam" aria-describedby="emailHelp" placeholder="Masukkan Nomor Barang" value="<?= date('Y-m-d\TH:i', strtotime($data['peminjaman']['tgl_pinjam'])) ?>" required>
    </div>
    <div class="mb-3 Kembali">
      <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
      <input type="datetime-local" name="tgl_kembali" class="form-control" id="tgl_kembali" aria-describedby="emailHelp" placeholder="Masukkan Nomor Barang" value="<?= date('h:i') ?>" required>
    </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>