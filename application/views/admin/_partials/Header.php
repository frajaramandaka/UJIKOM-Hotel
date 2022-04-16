<header>
   <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: MediumBlue;">
   <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url('Admin/Beranda'); ?>">Hotel Hebat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="d-flex justify-content-center collapse navbar-collapse">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url('Admin/DataPesanan'); ?>">Data Pesanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?= base_url('Admin/Kamar'); ?>">Riwayat Pesanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?= base_url('Admin/PesanKamar'); ?>" data-bs-toggle="modal" data-bs-target="#exampleModal">Data   Fasilitas</a>
        </li>
      </ul>
    </div>
      <ul class="navbar-nav">
        <a class="nav-link active" href="<?= base_url('Auth/Logout');?>">Logout</a>
      </ul>
  </div>
  </nav>
</header>