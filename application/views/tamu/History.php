
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">
    <script src="https://unpkg.com/feather-icons"></script>
     <title>Hotel Hebat/History</title>
</head>
<body>
  <!-- Header -->
  <?php $this->load->view('tamu/_partials/Header.php')?>
  <div class="jumbotron jumbotron-fluid mb-5"></div>

  <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link active" href="#">Data Pesanan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Riwayat Pesanan</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
  <?php if (empty($_SESSION['user']->level)) :?>
  <h3 class="mt-3 " style="">Maaf anda belum melakukan pemesanan :( </h3>
  <p><i data-feather="arrow-down-circle"></i></p>
  <a href="<?= base_url('Auth/Login'); ?>" type="submit" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin: 0px 35% 0px 35%">Lakukan pemesanan</a>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pesan Kamar Gagal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                maaf anda harus login terlebih dahulu
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <a href="<?= base_url('Auth/Login');?>" type="submit" class="btn btn-primary">Login</a>
    
  <?php else :?>
    <h3 class="mt-3 " style="">Maaf anda belum melakukan pemesanan :( </h3>
  <p><i data-feather="arrow-down-circle"></i></p>
  <a href="<?= base_url('Tamu/PesanKamar'); ?>" type="submit" class="btn btn-primary mt-3" style="margin: 0px 35% 0px 35%">Lakukan pemesanan</a>
    <?php endif ;?>  
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
      feather.replace()
    </script>
</body>
</html>