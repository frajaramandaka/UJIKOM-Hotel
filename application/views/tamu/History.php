<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hotel Hebat/History</title>
</head>
<body>
<header>
   <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: DarkTurquoise;">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url('Tamu/Beranda')?>">Hotel Hebat</a>
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
          <a class="nav-link active" aria-current="page" href="<?= base_url('Tamu/History'); ?>">History</a>
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
          <a class="nav-link" href="<?= base_url('Tamu/PesanKamar'); ?>">Pesan Kamar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('Tamu/Login'); ?>">Login</a>
        </li>
        </li>
      </ul>
    </div>
    
  </div>
</nav>
    </header>

    <div class="container-fluid mt-3">
    <div class="card mt-3">
  <h5 class="card-header d-flex justify-content-center p-3">Riwayat Pemesanan</h5>
  <div class="card-body">
  <div class="row">
  <div class="col-sm-12">
  <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nama Pemesan</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Tipe Kamar</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="">
    </div>
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress">Tanggal Check-in</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="">
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">Tanggal Check-out</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Jumlah Kamar</label>
      <input type="text" class="form-control" id="">
    </div>

  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
  </div>
</div>
    </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>