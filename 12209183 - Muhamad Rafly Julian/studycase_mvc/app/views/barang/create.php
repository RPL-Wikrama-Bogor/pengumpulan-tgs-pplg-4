<div class="container">
    <h3 class="mb-3">Tambah Peminjam</h3>
    <form action="<?= BASE_URL; ?>/barang/simpanBarang" method="post">
        <div class="claas-body">
            <div class="form-group mb-3">
                <label for="nama_peminjaman">Nama Peminjam</label>
                <input type="text" class="form-control" id="nama_peminjaman" name="nama_peminjaman" required>
            </div>
            <div class="form-group mb-3">
                <label for="jenis_barang">Jenis Barang</label>
                <select name="jenis_barang" class="form-control" required>
                    <option hidden>--Pilih Barang--</option>
                    <option value="Pulpen">Pulpen</option>
                    <option value="Pensil">Pensil</option>
                    <option value="Buku Paket ">Buku Paket</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="no_barang">No Barang</label>
                <input type="number" class="form-control" id="no_barang" name="no_barang" required>
            </div>
            <div class="form-group mb-3">
                <label for="tgl_pinjam">Tanggal Pinjam</label>
                <input type="datetime-local" class="form-control" id="tgl_pinjam" name="tgl_pinjam" required>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>