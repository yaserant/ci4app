<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    
<div class="container mt-4 bg-light">
  <div class="row">
    <div class="col">
                <h1>Daftar Tamu</h1>
                <a href="/tamu/create" class="btn btn-outline-primary">Tambah Tamu</a>
                <table class="table table-hover my-2">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ; ?>
                        <?php foreach ($tamu as $row ) : ?>
                        <tr>
                        <th scope="row"> <?= $i ; ?></th>
                        <td>
                            <img src="/img/<?= $row['foto'];?>" alt="" class="foto">
                        </td>
                        <td><?= $row['nama'];?></td>
                        <td>
                            <a href="/tamu/<?= $row['slug'] ; ?>" class="btn btn-secondary">Detail</a>
                        </td>
                        </tr>
                        <?php $i++ ; ?>
                        <?php endforeach ; ?>

                    </tbody>
                    </table>
            </div>
        </div>
    </div> 

<?= $this->endsection(); ?>