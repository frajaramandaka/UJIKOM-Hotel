<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css');?>">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hotel Hebat/Fasilitas Kamar</title>
  </head>
<body style="background-color: GhostWhite">
    <!-- Header -->
  <?php $this->load->view('tamu/_partials/Header.php')?>
  <div class="jumbotron jumbotron-fluid mb-5"></div>

  <div class="container" style="margin-bottom: 400px;">
  <h2 class="text-center bg-warning rounded" style="height: 50px; margin-bottom: 0px;">Fasilitas Kamar</h2>
  <div class="card p-4">
  <div class="row row-cols-1 row-cols-md-3 g-5">
  <div class="col">
    <div class="card">
      <img src="<?= base_url('assets/image/tv32inch.jpg')?>" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">TV Ukuran 32 inch</h5>
        <hr>
        <p class="card-text">TV berukuran 32 inch agar tamu semakin puas saat menonton tayangan televisi.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?= base_url('assets/image/coffee maker.jpg')?>" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">Coffee Maker</h5>
        <hr>
        <p class="card-text">Coffee Maker untuk tamu jika ingin membuat kopi.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?= base_url('assets/image/ac.jpg')?>" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">AC</h5>
        <hr>
        <p class="card-text">AC agar suasana terasa lebih sejuk.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?= base_url('assets/image/shower.jpg')?>" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">Shower</h5>
        <hr>
        <p class="card-text">Hanya dimiliki pada kamar tipe reguler dan silver.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?= base_url('assets/image/bathup.jpg')?>" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">Bathup</h5>
        <hr>
        <p class="card-text">Hanya dimiliki pada kamar tipe gold, platinum, dan deluxe.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?= base_url('assets/image/perlengkapan tidur.jpg')?>" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">Perlengkapan Tidur</h5>
        <hr>
        <p class="card-text">Perlengkapan tidur berupa bantal dan guling yang  disimpan di lemari untuk pengunjung jika ingin mengganti perlengkapan tidurnya.</p>
      </div>
    </div>
  </div>
</div>

</div>

<div class="card-footer p-3 rounded" style="background-color: Gold;"></div>
</div>


  <!-- Footer-->
  <?php $this->load->view('tamu/_partials/Footer.php')?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>