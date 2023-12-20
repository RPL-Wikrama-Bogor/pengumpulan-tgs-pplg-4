<div class="container">
    <h3 class="mb-4">Daftar Buku</h3>
    <form method="post">
        <div class="form-group">
            <label class="mb-1" for="filterType">Filter by:</label>
            <select class="form-control" name="filterType" id="filterType">
                <option value="name">Name</option>
                <option value="jenis_barang">Jenis Barang</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label class="mb-1" for="filterValue">Filter Value:</label>
            <input type="text" class="form-control" name="filterValue" id="filterValue">
        </div>
        <div class="form-group">
            <a href="<?= BASE_URL; ?>/Peminjaman/tambahData" class="btn btn-success">Tambah Data</a>
            <button type="submit" class="btn btn-primary">Filter</button>
            <a href="<?= BASE_URL; ?>/Peminjaman/reset" class="btn btn-warning">Reset</a>
        </div>
    </form>
    <br>
    <table class="table table-success table-striped table-bordered">
        <thead>
            <tr>
                <th class="col">No</th>
                <th class="col">Nama Peminjam</th>
                <th class="col">Jenis Barang</th>
                <th class="col">Nomor Barang</th>
                <th class="col">Tanggal Pinjam</th>
                <th class="col">Tanggal Kembali</th>
                <th class="col">Status</th>
                <th class="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data['pinjam'] as $row): ?>
                <?php
                $filterType = isset($_POST['filterType']) ? $_POST['filterType'] : 'name';
                $filterValue = isset($_POST['filterValue']) ? $_POST['filterValue'] : '';

                if (!empty($filterValue)) {
                    if ($filterType === 'name' && stripos($row['nama_peminjam'], $filterValue) === false) {
                        continue;
                    } elseif ($filterType === 'jenis_barang' && stripos($row['jenis_barang'], $filterValue) === false) {
                        continue;
                    }
                }

                $tglKembali = strtotime($row['tgl_kembali']);
                $today = strtotime(date('Y-m-d'));
                $status = $today > $tglKembali ? 'belum kembali' : 'Sudah Kembali';
                $statusClass = $today > $tglKembali ? 'btn-danger' : ($status === 'belum kembali' ? 'btn-danger' : 'btn-success');


                ?>
                <tr>
                    <td>
                        <?= $no; ?>
                    </td>
                    <td>
                        <?= $row['nama_peminjam']; ?>
                    </td>
                    <td>
                        <?= $row['jenis_barang']; ?>
                    </td>
                    <td>
                        <?= $row['no_barang']; ?>
                    </td>
                    <td>
                        <?= $row['tgl_pinjam']; ?>
                    </td>
                    <td>
                        <?= $row['tgl_kembali']; ?>
                    </td>
                    <td>
                        <a class="btn <?= $statusClass; ?>" style="pointer-events: none;">
                            <?= $statusClass === 'btn-danger' ? 'Belum Kembali' : 'Sudah Kembali'; ?>
                        </a>
                    </td>
                    
                    <td>
                        <?php if ($status !== 'Sudah Kembali'): ?>
                            <a href="<?= BASE_URL ?>/Peminjaman/edit/<?= $row['id'] ?>" class="btn btn-primary">Edit</a>
                        <?php endif; ?>
                        <a href="<?= BASE_URL ?>/Peminjaman/hapus/<?= $row['id'] ?>" class="btn btn-danger"
                            onclick="return confirm('Hapus Data?')">Hapus</a>
                    </td>
                </tr>
                <?php $no++; endforeach; ?>
        </tbody>
    </table>
</div>