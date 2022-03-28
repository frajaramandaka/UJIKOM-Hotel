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

    <title>Hello, world!</title>
  </head>
  <body>
    <header>
   <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: DarkTurquoise;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Hotel Hebat</a>
    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Cara Pesan</a>
        </li>
    </ul>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="d-flex justify-content-end collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">History</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Kamar</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Fasilitas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Fasilitas Kamar</a></li>
            <li><a class="dropdown-item" href="#">Fasilitas Hotel</a></li>
          </ul>
        <li class="nav-item">
          <a class="nav-link" href="#">Pesan Kamar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
        </li>
      </ul>
    </div>
    
  </div>
</nav>
    </header>

    <div class="jumbotron jumbotron-fluid mb-5">

    </div>
    <main>
    <h3 class="text-center p-3 text-light" style="background-color: DarkTurquoise; border-radius: 20px; margin: 0px 15% 30px 15%;">Restaurant Dengan Cita Rasa Italy</h3>
    <img src="<?= base_url('assets/image/gambar restaurant.jpg'); ?>" class="float-left" width="910" height="512">
    <h3 class="text-center p-3 text-light" style="background-color: DarkTurquoise; border-radius: 20px; margin: 20px 15% 30px 15%;">Kolam Renang Dengan Suasana Sejuk Dan Indah</h3>
    <img src="<?= base_url('assets/image/kolam renang.png'); ?>" class="float-left" width="910" height="512">
    <h3 class="text-center p-3 text-light" style="background-color: DarkTurquoise; border-radius: 20px; margin: 20px 15% 30px 15%;">Area Gym Untuk Melatih Kebugaran</h3>
    <img src="<?= base_url('assets/image/gym.jpg'); ?>" class="float-left" width="910" height="512">
    <h3 class="text-center p-3 text-light" style="background-color: DarkTurquoise; border-radius: 20px; margin: 20px 15% 30px 15%;">Tipe Kamar</h3>
    <div class="container" style="margin-bottom: 400px;">

        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="card" >
                <img src="<?= base_url('assets/image/reguler room.jpg'); ?>" class="card-img-top" width="412" height="311">
                <div class="card-body">
                    <h3>Reguler Room</h3>
                    <p class="card-text"> 1 Kasur Tidur <br> Rp.350.000,-</p>
                </div>
            </div>
            
            </div>
            <div class="col-md-4">
                <div class="card" >
                <img src="<?= base_url('assets/image/silver room.jpg'); ?>" class="card-img-top" width="412" height="311">
                <div class="card-body">
                    <h3>Silver Room</h3>
                    <p class="card-text"> 2 Kasur Tidur Terpisah <br> Rp.500.000,-</p>
                </div>
            </div>
            
            </div>
            <div class="col-md-4">
                <div class="card" >
                <img src="<?= base_url('assets/image/gold room.jpg'); ?>" class="card-img-top" width="412" height="311">
                <div class="card-body">
                    <h3>Gold Room</h3>
                    <p class="card-text"> 1 Kasur Tidur Besar Dengan Balkon <br> Rp.700.000,-</p>
                </div>
            </div>
            
            </div>
            <div class="col-md-4 mt-4">
                <div class="card" >
                <img src="<?= base_url('assets/image/deluxe room.jpg'); ?>" class="card-img-top" width="412" height="311">
                <div class="card-body">
                    <h3>Deluxe Room</h3>
                    <p class="card-text"> 2 Kasur Tidur Besar Dengan Balkon Dan Ruang Kerja <br> Rp.800.000,-</p>
                </div>
            </div>

            </div>
        </div>
        
    </div>
    </main>

    <footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h5><i class="fa fa-road"></i> Hotel Hebat</h5>
                <div class="row">
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><a href="">Login</a></li>
                            <li><a href="">Cara Pesan</a></li>
                            <li><a href="">History Pemesanan</a></li>
                            <li><a href="">Daftar Kamar</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><a href="">Fasilitas Kamar</a></li>
                            <li><a href="">Fasilitas Hotel</a></li>
                            <li><a href="">Pesan Kamar</a></li>
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
