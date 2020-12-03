<?= $this->extend('layout/template') ; ?>

<?= $this->section('content') ; ?>

<div class="container mt-4 bg-light">
    <div class="row">
        <div class="col">
            <h1>Detail Tamu</h1>
            <div class="card mb-3" style="max-width: 1300px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/img/<?= $tamu['foto'] ; ?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title">Nama : <?= $tamu['nama'] ; ?></h3>
                            <p class="card-text">Alamat : <?= $tamu['alamat'] ; ?></p>
                            <p class="card-text">Telepon : <?= $tamu['telepon'] ; ?></p>
                            <p class="card-text"><small class="text-muted">terdaftar sejak <?= $tamu['created_at'] ; ?> </p>
                            <a href="/tamu/edit/<?= $tamu['slug']; ?>" class="btn btn-warning">Ubah</a>
                            <form action="/tamu/<?= $tamu['id']; ?>" method="POST" class="d-inline mx-2">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah data tamu akan dihapus ?')">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>



<?= $this->endsection() ; ?>