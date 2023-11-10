<div class="container">
    <h3 class="mb-3">Tambah Peminjaman</h3>
    <form action="<?= BASE_URL ?>/peminjaman/simpanData" method="post">
        <div class="class-body">
            <div class="form-group mb-3">
                <label for="nama_peminjam">Nama Peminjam</label>
                <input type="text" class="form-control" name="nama_peminjam" id="nama_peminjaman">
            </div>
            <div class="form-group mb-3">
                <label for="judul">Jenis Barang</label>
                <Select name="jenis_barang" id="jenis_barang" class="form-control">
                    <option value="laptop">laptop</option>
                    <option value="HP">HP</option>
                    <option value="Adaptor Lan">Adaptor Lan</option>
                </Select>
            </div>
            <div class="form-group mb-3">
                <label for="judul">Nomor barang</label>
                <input type="number" class="form-control" name="no_barang" id="no_barang">
            </div>
            <div class="form-group mb-3">
                <label for="judul">Tanggal Pinjam</label>
                <input type="datetime-local" class="form-control" name="tgl_pinjam" id="tgl_pinjam">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        
    </form>
</div>