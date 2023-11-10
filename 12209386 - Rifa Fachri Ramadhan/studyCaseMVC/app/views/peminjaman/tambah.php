<div class="container">
    <h3 class="mb-3">Tambah Buku</h3>
    <form action="<?=BASE_URL;?>/pinjam/simpanItem" method="post">
        <div class="class-body">
            <div class="form-group mb-3">
                <label for="namapeminjam">nama peminjam</label>
                <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam">
            </div>
            <div class="form-group mb-3">
                <label for="jenisbarang" >Jenis Barang</label>
                <select name="jenis_barang" id="jenis_barang" class="form-select" aria-label="Default select example">
                    <option value="Laptop">Laptop</option>
                    <option value="HP">HP</option>
                    <option value="Adaptor">Adaptor</option>
                    <option value="LAN">LAN</option>
                </select>
            </div>
            <div class="form-group mb-3">   
                <label for="nobarang">No Barang</label>
                <input type="number" min="0" class="form-control" id="no_barang" name="no_barang">
            </div>
            <div class="form-group mb-3">
                <label for="tglpinjam">Tanggal Peminjaman</label>
                <input type="datetime-local" class="form-control" id="tgl_pinjam" name="tgl_pinjam">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>