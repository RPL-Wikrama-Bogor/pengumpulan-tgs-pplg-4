<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
        <img src="<?= BASEURL ?>/img/<?= $data['gambar'] ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Profil</h5>
            <p class="card-text">
                Nama: <?= $data['nama'] ?>
                <br>
                Sekolah: <?= $data['sekolah'] ?>
                <br>
                Ingin Menjadi: <?= $data['wanna'] ?>
                </p>
            <a href="<?= BASEURL ?>/home/index" class="btn btn-primary">Kembali</a>
        </div>
        </div>
        </div> 
</div>