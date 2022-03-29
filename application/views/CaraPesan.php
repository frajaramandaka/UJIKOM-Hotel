<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        @import url(https://fonts.googleapis.com/css?family=Alegreya+Sans:300);

body {
    font-family: 'Alegreya Sans', sans-serif;
}

/* Sticky footer position and size
-------------------------------------------------- */
html {
  position: relative;
  min-height: 100%;
}
body {
  /* Margin bottom by footer height */
  margin-bottom: 300px;
}
.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 300px;
}

/* Taller footer on small screens */
@media (max-width: 567em) {
    body {
      margin-bottom: 500px;
    }
    .footer {
      height: 335px;
    }
}

/* Sticky footer style and color
-------------------------------------------------- */
footer {
  padding-top: 30px;
  background-color: #292c2f;
  color: #bbb;

}

footer a {
  color: #999;
  text-decoration:none;
}

footer a:hover, footer a:focus {
  color: #aaa;
  text-decoration:none;
  border-bottom:1px dotted #999;
}

footer .form-control {
    background-color: #1f2022;
    box-shadow: 0 1px 0 0 rgba(255, 255, 255, 0.1);
    border: none;
    resize: none;
    color: #d1d2d2;
    padding: 0.7em 1em;
}
.jumbotron {
    background-image:url('<?= base_url('assets/image/gambar hotel.jpg'); ?>');
    height: 700px;
    background-repeat: repeat-y;
}
.float-left {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

/* #Tentang-Kami {
    margin-bottom: 30px;
} */
    </style>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hotel Hebat/Cara Pesan</title>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <h1 class="text-center p-3" style="background-color:Yellow;">Cara Pemesanan</h1>
    <hr style="height:2px;border-width:0;color:black;background-color:black;margin: -8px 0px 50px 0px;padding:8px;">

    <div class="container">
      <div class="card">
        <div class="card-body">
          <h3 style="margin-left:100px;">1. Registrasi jika anda belum mempunyai akun</h3>
          <h3 style="margin-left:100px;">2. Login jika anda telah memiliki akun atau sudah melakukan registasi akun</h3>
          <h3 style="margin-left:100px;">3. Pilih tipe kamar yang anda inginkan</h3>
          <h3 style="margin-left:100px;">4. Klik tombol pemesanan</h3>
          <h3 style="margin-left:100px;">5. Masukan data diri dan kapan tanggal anda ingin melakukan check-in dan check-out</h3>
          <h3 style="margin-left:100px;">6. Klik tombol pemesanan jika anda sudah mengisi data yang diperlukan</h3>
          <h3 style="margin-left:100px;">7. Anda bisa melihat pada fitur "History" jika anda sudah melakukan pemesanan kamar</h3>
          <h3 style="margin-left:100px;">8. Anda sudah berhasil melakukan pemesanan kamar</h3>
        </div>
      </div>
    </div>

    <hr style="height:2px;border-width:0;color:black;background-color:black;padding:8px; margin-top:50px;">
    <h1 class="text-center p-3" style="background-color:Yellow; margin-top:-16px; margin-bottom:335px;">&nbsp</h1>

    <footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h5><i class="fa fa-road"></i> Hotel Hebat</h5>
                <div class="row">
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><a href="<?= base_url('Tamu/Login'); ?>">Login</a></li>
                            <li><a href="<?= base_url('Tamu/CaraPesan'); ?>">Cara Pesan</a></li>
                            <li><a href="<?= base_url('Tamu/History'); ?>">History Pemesanan</a></li>
                            <li><a href="<?= base_url('Tamu/Kamar'); ?>">Daftar Kamar</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><a href="<?= base_url('Tamu/FasilitasKamar'); ?>">Fasilitas Kamar</a></li>
                            <li><a href="<?= base_url('Tamu/FasilitasHotel'); ?>">Fasilitas Hotel</a></li>
                            <li><a href="<?= base_url('Tamu/PesanKamar'); ?>">Pesan Kamar</a></li>
                        </ul>
                    </div>
                <h5><i class="fa fa-road"></i> Tentang Kami</h5>
                <p id="Tentang-Kami">Hotel Hebat adalah Hotel yang memiliki konsep keindahan dengan kenyamanan yang natural.</p>
                </div>
                <ul class="nav">
                    <li class="nav-item"><a href="" class="nav-link pl-0"><i class="fa fa-facebook fa-lg"></i></a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-twitter fa-lg"></i></a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-github fa-lg"></i></a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-instagram fa-lg"></i></a></li>
                </ul>
                <br>
            </div>
            <div class="col-md-2">
                <h5 class="text-md-right">Hubungi Kami</h5>
                <hr>
            </div>
            <div class="col-md-5">
                <form action="" method="post">
                    <fieldset class="form-group">
                        <textarea class="form-control bg-light" id="exampleMessage" placeholder="Message"></textarea>
                    </fieldset>
                    <fieldset class="form-group text-xs-right">
                        <button type="button" class="btn btn-success btn-sm mt-2">Send</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
