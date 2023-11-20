<div class="container">
    <h3 class="mb-3">Tambah Buku</h3>
    <form action="<?=BASE_URL;?>/pinjam/updateBuku" method="post">
        <div class="class-body">
        <input type="hidden" class="form-control" id="id" name="id" value="<?= $data['pinjam']['id'] ?>">

            <div class="form-group mb-3">
                <label for="nama_peminjam">nama peminjam</label>
                <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam" value="<?= $data['pinjam']['nama_peminjam'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="jenis_barang" >Jenis Barang</label>
                <select name="jenis_barang" id="jenis_barang" class="form-select" aria-label="Default select example">
                    <option value="Laptop">Laptop</option>
                    <option value="HP">HP</option>
                    <option value="Adaptor">Adaptor</option>
                    <option value="LAN">LAN</option>
                </select>
            </div>
            <div class="form-group mb-3">   
                <label for="no_barang">No Barang</label>
                <input type="number" min="0" class="form-control" id="no_barang" name="no_barang" value="<?= $data['pinjam']['no_barang'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="tgl_pinjam">Tanggal Peminjaman</label>
                <input type="datetime-local" class="form-control" id="tgl_pinjam" name="tgl_pinjam" value="<?= $data['pinjam']['tgl_pinjam'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="tgl_kembali">Tanggal Pengembalian</label>
                <input type="datetime-local" class="form-control" id="tgl_kembali" name="tgl_kembali">
            </div>
           
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>