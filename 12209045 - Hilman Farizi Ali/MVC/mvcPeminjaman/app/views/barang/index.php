<div class="container">
    <h3 class="mb-3">Loan list</h3>
    <br>
    <a href="<?= BASE_URL; ?>/barang/tambah" class="btn btn-primary">Increase borrowing</a>
    <div class="d-flex" style="float: right; gap: 0.5rem;">
            <form action="<?= BASE_URL; ?>/barang/cari" method="post" class="d-flex">
                <input type="text" class="form-control" name="keyword" placeholder="look bor borrowers">
                <button type="submit" class="btn btn-outline-success">
Search</button>
            </form>
        <a href="<?= BASE_URL; ?>/buku/index" class="btn btn-outline-danger">Reset</a>
        </div>
    <br><br>
    <table class="table table-succes table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Borrower's Name</th>
                <th scope="col">Types of Goods</th>
                <th scope="col">Item No</th>
                <th scope="col">Loan Date</th>
                <th scope="col">Return Date</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            <?php foreach ($data['barang'] as $row) : ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $row['nama_peminjam']; ?></td>
                <td><?= $row['jenis_barang']; ?></td>
                <td><?= $row['no_barang']; ?></td>
                <td><?= $row['tgl_pinjam']; ?></td>
                <td><?= $row['tgl_kembali']; ?></td>
                <td>
                    <?php 

                        $tgl_pinjam = strtotime($row['tgl_pinjam']);
                        $tgl_kembali = strtotime($row['tgl_kembali']);

                        $timeDifference = $tgl_kembali - $tgl_pinjam;

                        $daysDifference = floor($timeDifference / (60 * 60 * 24));

                        if($row['status'] == 'Already Back' || $daysDifference >= 2){
                            echo "<button class='btn btn-success'>Already Back</button>";
                        } else{
                            echo "<button class='btn btn-danger'>Not Back Yet</button>";
                        }
                    ?>
                </td>
                <td>
                <?php if ($row['status'] == 'Already Back') : ?>
                        <a href="<?= BASE_URL ?>/barang/hapus/<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Sure You Want To Delete The Data?');">Wipe</i></a>
                        <?php else : ?>
                        <a href="<?= BASE_URL ?>/barang/edit/<?= $row['id'] ?>" class="btn btn-primary">Edit</i></a>
                        <a href="<?= BASE_URL ?>/barang/hapus/<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Sure You Want To Delete The Data?');">Wipe</i></a>
                        <?php endif; ?>
                    
                </td>
            </tr>
            

            <?php $no++; endforeach; ?>
        </tbody>
    </table>
</div>