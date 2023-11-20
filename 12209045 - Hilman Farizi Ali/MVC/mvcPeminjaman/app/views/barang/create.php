<div class="container">
    <h3 class="mb-3">Increase Borrowing</h3>
    <form action="<?= BASE_URL; ?>/barang/simpanBarang" method="post">
        <div class="claas-body">
            <div class="form-group mb-3">
                <label for="nama_peminjam">Borrowrs'Name</label>
                <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam" required>
            </div>
            <div class="form-group mb-3">
                <label for="jenis_barang">Types Of Goods</label>
                <select name="jenis_barang" class="form-control" required>
                    <option hidden>--Select Items--</option>
                    <option value="Laptop">Laptop</option>
                    <option value="HP">HP</option>
                    <option value="Adaptor LAN ">Adaptor LAN</option>
                    <option value="Buku">Buku</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="no_barang">Item No</label>
                <input type="number" class="form-control" id="no_barang" name="no_barang" required>
            </div>
            <div class="form-group mb-3">
                <label for="tgl_pinjam">Loan Date</label>
                <input type="datetime-local" class="form-control" id="tgl_pinjam" name="tgl_pinjam" required>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>