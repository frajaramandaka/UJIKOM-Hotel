<!DOCTYPE html>
<html lang="en">
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSS -->
      <link rel="stylesheet" href="<?= base_url('/assets/css/styles.css')?>">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">
      <title>Admin</title>
   </head>
<body>
    <!-- Header -->
    <?php $this->load->view('Admin/_partials/Header.php')?>
    <div class="container-fluid mt-3">
    <div class="card">
        <p class="bg-warning text-center" style="font-size: 20px;">Ubah Data Fasilitas Kamar</p>
    <div class="card-body">
        <form action="<?= base_url('Admin/storeDatafaskamar') ?>" method="POST">
        <input type="hidden" name="id_kamar" value="<?= $datafaskamar[0]->id_faskamar ?>">
        <div class="mb-3">
            <label class="form-label" style="margin-right: 51px;">Gambar :</label>
            <input type="text" name="gambar_faskamar" value="<?= $datafaskamar[0]->gambar_faskamar ?>">
        </div>
        <div class="mb-3">
            <label class="form-label" style="margin-right: 16px;">Nama Fasilitas :</label>
           <input type="text" name="nama_faskamar" value="<?= $datafaskamar[0]->nama_faskamar ?>">
        </div>
        <div class="mb-3">
            <label class="form-label" style="margin-right: 68px;">Detail :</label>
           <input class="" type="text" name="kategori" value="<?= $datafaskamar[0]->kategori ?>">
        </div>
        <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Ubah</button>
        </form>
    </div>
    </div>
    <p class="bg-warning" style="margin-top: ;">&nbsp</p>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>