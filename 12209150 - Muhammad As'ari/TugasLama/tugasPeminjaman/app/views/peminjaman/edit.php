<div class="container">
    <h3 class="mb-3">Tambah Peminjaman</h3>
    <form action="<?= BASE_URL ?>/peminjaman/updateData" method="post">
        <div class="class-body">
        <input type="hidden" name="id" value="<?= $data['peminjaman']['id']; ?>">
            <div class="form-group mb-3">
                <label for="nama_peminjam">Nama Peminjam</label>
                <input type="text" class="form-control" name="nama_peminjam" id="nama_peminjaman" value="<?= $data['peminjaman']['nama_peminjam'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="Jenis Barang">Jenis Barang</label>
                <Select name="jenis_barang" id="jenis_barang" class="form-control">
                    <option value="laptop">laptop</option>
                    <option value="komputer">HP</option>
                    <option value="Adaptor Lan">Adaptor Lan</option>
                </Select>
            </div>
            <div class="form-group mb-3">
                <label for="Nomor Barang">Nomor barang</label>
                <input type="number" class="form-control" name="no_barang" id="no_barang" value="<?= $data['peminjaman']['no_barang'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="Tanggal Pinjam">Tanggal Pinjam</label>
                <input type="datetime-local" class="form-control" name="tgl_pinjam" id="tgl_pinjam" value="<?= $data['peminjaman']['tgl_pinjam'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="Tanggal Kembali">Tanggal Kembali</label>
                <input type="datetime-local" class="form-control" name="tgl_kembali" id="tgl_kembali" value="<?= $data['peminjaman']['tgl_kembali'] ?>">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        
    </form>
</div>