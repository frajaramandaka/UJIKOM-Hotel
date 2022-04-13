<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hotel Hebat</title>
  </head>
  <body>
    <!-- Header -->
    <?php $this->load->view('tamu/_partials/Header.php')?>
    <?php if (empty($_SESSION['user']->level)):?>
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
    <?php else :?>
        <div class="jumbotron jumbotron-fluid mb-5">
        </div>
        <main>
        <h3 class="text-center p-3 text-light" style="background-color: DarkTurquoise; border-radius: 20px; margin: 0px 15% 30px 15%;">Restaurant Dengan Cita Rasa Italy</h3>
        <img src="<?= base_url('assets/image/gambar restaurant.jpg'); ?>" class="float-left" width="910" height="512">
        <h3 class="text-center p-3 text-light" style="background-color: DarkTurquoise; border-radius: 20px; margin: 20px 15% 30px 15%;">Kolam Renang Dengan Suasana Sejuk Dan Indah</h3>
        <img src="<?= base_url('assets/image/kolam renang.png'); ?>" class="float-left" width="910" height="512">
        <h3 class="text-center p-3 text-light" style="background-color: DarkTurquoise; border-radius: 20px; margin: 20px 15% 30px 15%;">Area Gym Untuk Melatih Kebugaran</h3>
        <img src="<?= base_url('assets/image/gym.jpg'); ?>" class="float-left" width="910" height="512">
        <h3 class="text-center p-3 text-light" style="background-color: DarkTurquoise; border-radius: 20px; margin: 20px 15% 30px 15%;">Tipe Kamara</h3>
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
    <?php endif;?>

    <!-- Footer-->
    <?php $this->load->view('tamu/_partials/Footer.php')?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
