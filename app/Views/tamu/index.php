<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    
<div class="container mt-4">
        <div class="row">
            <div class="col">
                <h1>Daftar Portofolio</h1>
                <table class="table table-hover table-dark my-4">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tamu as $row ) : ?>
                        <?php $i = 1 ; ?>
                        <tr>
                        <th scope="row"> <?= $i ; ?></th>
                        <td>
                            <img src="/img/<?= $row['foto'];?>" alt="" class="foto">
                        </td>
                        <td><?= $row['nama'];?></td>
                        <td>
                            <a href="/tamu/<?= $row['slug'] ; ?>">Detail</a>
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