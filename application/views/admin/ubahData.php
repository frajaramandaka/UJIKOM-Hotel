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
    <div class="card-body">
        <form action="<?= base_url('Admin/storeData') ?>" method="POST">
        <input type="hidden" name="id_kamar" value="<?= $datakamar[0]->id_kamar ?>">
        <div class="mb-3">
            <label class="form-label">Gambar</label>
            <input type="text" name="gambar_tipekamar" value="<?= $datakamar[0]->gambar_tipekamar ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Nama Kamar</label>
           <input type="text" name="nama_kamar" value="<?= $datakamar[0]->nama_kamar ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Jumlah Kamar</label>
           <input type="text" name="jml_kamar" value="<?= $datakamar[0]->jml_kamar ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Harga</label>
           <input type="text" name="harga" value="<?= $datakamar[0]->harga ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Detail</label>
           <input type="text" name="detail" value="<?= $datakamar[0]->detail ?>">
        </div>
        
        <button type="submit" class="btn btn-primary">Ubah</button>
        </form>
    </div>
    </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>