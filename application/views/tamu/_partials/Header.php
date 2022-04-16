<?php if (empty($_SESSION['user']->level)) : ?>

<header>
   <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: MediumAquaMarine;">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url('Tamu/Beranda'); ?>">Hotel Hebat</a>
    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url('Tamu/CaraPesan'); ?>">Cara Pesan</a>
        </li>
    </ul>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="d-flex justify-content-end collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url('Tamu/DataPesanan'); ?>">Pesanan Saya</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('Tamu/Kamar'); ?>">Kamar</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Fasilitas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?= base_url('Tamu/FasilitasKamar'); ?>">Fasilitas Kamar</a></li>
            <li><a class="dropdown-item" href="<?= base_url('Tamu/FasilitasHotel'); ?>">Fasilitas Hotel</a></li>
          </ul>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('Tamu/PesanKamar'); ?>" data-bs-toggle="modal" data-bs-target="#exampleModal">Pesan Kamar</a>
        </li>
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
              </div>
            </div>
          </div>
        </div>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('Auth/Login'); ?>">Login</a>
        </li>
        </li>
      </ul>
    </div>
    
  </div>
</nav>
    </header>
    
    <?php  else :?>

      <header>
   <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: DarkTurquoise;">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url('Tamu/Beranda'); ?>">Hotel Hebat</a>
    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url('Tamu/CaraPesan'); ?>">Cara Pesan</a>
        </li>
    </ul>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="d-flex justify-content-end collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url('Tamu/DataPesanan'); ?>">Pesanan Saya</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?= base_url('Tamu/Kamar'); ?>">Kamar</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Fasilitas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?= base_url('Tamu/FasilitasKamar'); ?>">Fasilitas Kamar</a></li>
            <li><a class="dropdown-item" href="<?= base_url('Tamu/FasilitasHotel'); ?>">Fasilitas Hotel</a></li>
          </ul>
        <li class="nav-item">
          <a class="nav-link active" href="<?= base_url('Tamu/PesanKamar'); ?>">Pesan Kamar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?= base_url('auth/Logout'); ?>">Logout</a>
        </li>
        </li>
      </ul>
    </div>
    
  </div>
</nav>
    </header>

    <?php endif ;?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>