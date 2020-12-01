<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    
<div class="container mt-4 bg-light">
  <div class="row">
    <div class="col">
        <div class="d-flex bd-highlight">
            <div class="p-2 w-100 bd-highlight">
            <h1>Daftar Tamu</h1>
        </div>
            <div class="p-2 flex-shrink-1 bd-highlight">
            <a href="/tamu/create" class="btn btn-primary mt-2 mt-sm-0 float-sm-right">Tambah</a>
        </div>
        </div>

        <?php if ( session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                Data Tamu telah berhasil ditambahkan.
            </div>
        <?php endif ; ?>

        
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