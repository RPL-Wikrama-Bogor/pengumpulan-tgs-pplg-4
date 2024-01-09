<div class="container">
    <h3 class="mb-3">Edit Buku : <?= $data['buku']['judul']?></h3>
    <form action="<?= BASE_URL ?>/buku/updateBuku" method="post">
        <div class="class-body">
            <input type="hidden" name="id" value="<?= $data['buku']['id']; ?>">
            <div class="form-group mb-3">
                <label for="judul">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control" value="<?= $data['buku']['judul']; ?>">
            </div>
            <div class="form-group mb-3">
                <label for="penulis">Penulis</label>
                <input type="text" name="penulis" id="penulis" class="form-control" value="<?= $data['buku']['penulis']; ?>">
            </div>
            <div class="form-group mb-3">
                <label for="judul">Tanggal Selesai</label>
                <input type="date" name="tgl_selesai" id="tgl_selesai" class="form-control" value="<?= $data['buku']['tgl_selesai']; ?>">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>