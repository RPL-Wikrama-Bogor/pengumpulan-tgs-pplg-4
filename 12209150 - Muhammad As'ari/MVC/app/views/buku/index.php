<div class="container">
    <h3 class="mb3">Daftar Buku</h3>
    <br>
    <a href="<?= BASE_URL; ?>/buku/tambah" class="btn btn-primary">Tambah Buku</a>
    <br>
    <br>
    <table class="table table-success table-striped tabe-bordered">
        <thead>
            <tr>
                <th class="col"></th>
                <th class="col"></th>
                <th class="col"></th>
                <th class="col"></th>
                <th class="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data['buku'] as $row): ?>
                <tr>
                    <td>
                        <?= $no; ?>
                    </td>
                    <td>
                        <?= $row['judul']; ?>
                    </td>
                    <td>
                        <?= $row['penulis']; ?>
                    </td>
                    <td>
                        <?= $row['tgl_selesai']; ?>
                    </td>
                    <td>
                        <a href="<?= BASE_URL ?>/buku/edit/<?= $row['id'] ?>" class="btn btn-primary">Edit</a>
                        <a href="<?= BASE_URL ?>/buku/hapus/<?= $row['id'] ?>" class="btn btn-danger"
                            onclick="return confirm('Hapus Data?')" ;>Hapus</a>
                        <a href=""></a>
                    </td>
                </tr>
                <?php $no++; endforeach; ?>
        </tbody>
    </table>
</div>