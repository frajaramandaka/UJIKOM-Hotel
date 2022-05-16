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
    <title>Hotel Hebat/Fasilitas Hotel</title>
  </head>
<body style="background-color: GhostWhite">
    <!-- Header -->
  <?php $this->load->view('tamu/_partials/Header.php')?>
  <div class="jumbotron jumbotron-fluid mb-5"></div>

  <div class="container" style="margin-bottom: 400px;">
  <h2 class="text-center bg-warning rounded" style="height: 50px; margin-bottom: 0px;">Fasilitas Hotel</h2>
  <div class="card p-4">
  <div class="row row-cols-1 row-cols-md-3 g-5">
  <div class="col">
    <div class="card">
      <img src="<?= base_url('assets/image/gambar restaurant.jpg')?>" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">Restaurant</h5>
        <hr>
        <p class="card-text">Tempat para pengunjung untuk pergi makan.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?= base_url('assets/image/gym.jpg')?>" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">Gym</h5>
        <hr>
        <p class="card-text">Tempat para pengunjung jika ingin melatih kebugaran tubuh.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?= base_url('assets/image/kolam renang.png')?>" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">Kolam Renang</h5>
        <hr>
        <p class="card-text">Tempat para pengunjung jika ingin refreshing dengan berenang.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?= base_url('assets/image/spa.jpg')?>" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">SPA</h5>
        <hr>
        <p class="card-text">Tempat para pengunjung jika ingin merelaksasi tubuh dan pikiran.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?= base_url('assets/image/aula.jpg')?>" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">Parkiran</h5>
        <hr>
        <p class="card-text">Tempat para pengunjung untuk memarkirkan kendaraannya agar menjadi lebih aman.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?= base_url('assets/image/parkiran.jpg')?>" class="card-img-top" alt="">
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