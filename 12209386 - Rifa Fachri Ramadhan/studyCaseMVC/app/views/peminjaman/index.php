<div class="container">
  <h1>Daftar Peminjaman</h1>
  <br>
  <br>
  <div class="float-end d-flex">

    <div class="position-absolute top-25 start-0 ms-5">
      <a href="<?= BASE_URL; ?>/pinjam/tambah" class="btn btn-primary">Tambah</a>
    </div>
    <div class="d-flex mb-3">
      <form action="<?= BASE_URL; ?>/pinjam/cari" method="post" class="d-flex">
        <input type="text" class="form-control" name="search">
        <button type="submit" class="btn btn-primary"><i class="las la-search">Cari</button>
      </form>
      <a href="<?= BASE_URL ?>/pinjam/index/" class="btn btn-danger">Reset</a>
    </div>
</div>

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Peminjam</th>
        <th scope="col">Jenis Barang</th>
        <th scope="col">Nomor Barang</th>
        <th scope="col">Tanggal Pinjam</th>
        <th scope="col">Tanggal Kembali</th>
        <th scope="col">status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data['pinjam'] as $row) : ?>
        <tr>
          <th scope="row"><?= $row['id'] ?></th>
          <td><?= $row['nama_peminjam'] ?></td>
          <td><?= $row['jenis_barang'] ?></td>
          <td><?= $row['no_barang'] ?></td>
          <td><?= $row['tgl_pinjam'] ?></td>
          <td><?= $row['tgl_kembali'] ?></td>
          <td><?php
              $indonesiaTimeZone = new DateTimeZone('Asia/Jakarta');
              $now = new DateTime('now', $indonesiaTimeZone);
              $sekarang = $now->format('Y-m-d H:i:s');
              if ($row['tgl_kembali'] <= $sekarang) { ?>
              <div class="p-1 bg-success text-white">Sudah Kembali</div>
            <?php } else { ?>
              <div class="p-1 bg-danger text-white">Belum Kembali</div>
            <?php } ?>
          </td>
          <td>
            <?php if ($row['tgl_kembali'] >= $sekarang) { ?>
              <a href="<?= BASE_URL; ?>/pinjam/edit/<?= $row['id'] ?>" class="btn btn-primary">Edit</a>
            <?php } ?>
            <a href="<?= BASE_URL; ?>/pinjam/hapus/<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Hapus Data');">Hapus</a>
          </td>
        </tr>
      <?php endforeach; ?>
  </table>
</div>