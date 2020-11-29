<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h1>Contact</h1>
        <?php foreach ($alamat as $a) : ?>
          <div class="card mb-2">
            <div class="card-body bg-info text-white">              
              <ul>
                <li>
                  <b><?= $a['tipe'] ; ?></b>
                  <br>
                  <?= $a['komplek'] ; ?>
                  <br>
                  <?= $a['jalan'] ; ?>
                  <br>
                  <?= $a['kelurahan'] ; ?>
                  <br>
                  <?= $a['kota kab'] ; ?>
                  <br>
                  <?= $a['negara'] ; ?>
                </li>
              </ul>
            </div>          
          </div>
        <?php endforeach ; ?>
    </div>
  </div>
</div>
<?= $this->endSection() ; ?>