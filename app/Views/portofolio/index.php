<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    
<div class="container">
        <div class="row">
            <div class="col">
                <h1>Daftar Portofolio</h1>
                <table class="table table-hover table-dark my-4">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Portofolio</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Snapshoot</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        </tr>
                    </tbody>
                    </table>
            </div>
        </div>
    </div> 

<?= $this->endsection(); ?>