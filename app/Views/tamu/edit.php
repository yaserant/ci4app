<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<div class="container mt-4">
  <div class="row">
    <div class="col bg-light">

<h1>Form Ubah Data Tamu</h1>

<form action="/tamu/update/<?= $tamu['id']; ?>" method="POST">
<?= csrf_field(); ?>
<input type="hidden" name="slug" value="<?= $tamu['slug']; ?>">
  <div class="form-group row">
    <label for="inputNama" class="col-sm-2 col-form-label">Nama Tamu</label>
    <div class="col-sm-10">
      <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '';?>" id="inputNama" autofocus placeholder="masukan nama tamu" name="nama" value="<?= $tamu['nama']; ?>">
      <div class="invalid-feedback">
        <?= $validation->getError('nama') ; ?>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputAlamat" class="col-sm-2 col-form-label" >Alamat Lengkap</label>
    <div class="col-sm-10">
    <textarea class="form-control" id="inputAlamat" rows="3" placeholder="masukan alamat lengkap tamu" name="alamat"><?= $tamu['alamat']; ?></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputTelepon" class="col-sm-2 col-form-label" >Nomor Telepon</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputTelepon" placeholder="masukan nomor telepon tamu" name="telepon" value="<?= $tamu['telepon']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="uploadFoto" class="ml-3">Upload Foto Tamu</label>
    <input type="file" class="form-control-file mb-4 ml-3" id="uploadFoto" name="foto">
  </div>
  <div class="form-group float-md-right">
  <button type="submit" class="btn btn-primary">Ubah Data</button>
  </div>
</form>




</div>
</div>
</div>




<?= $this->endSection() ; ?>