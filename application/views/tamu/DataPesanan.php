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
      <script src="https://unpkg.com/feather-icons"></script>
      <title>Hotel Hebat/Data Pesanan</title>
   </head>
   <body style="background-color: GhostWhite">
      <!-- Header -->
      <?php $this->load->view('tamu/_partials/Header.php')?>
      <div class="jumbotron jumbotron-fluid mb-5"></div>
      <div class="card text-center" style="margin-top: -48px;">
      <div class="card-header" style="background-color: DarkTurquoise">
      <ul class="nav nav-pills card-header-pills d-flex justify-content-center">
         <li class="nav-item" style="margin: 0px 25px 0px 0px">
            <a class="nav-link active" href="<?= base_url('Tamu/DataPesanan');?>">Data Pesanan</a>
         </li>
         <li class="nav-item" style="margin: 0px 25px 0px 25px">
            <a class="nav-link bg-warning text-light" href="<?= base_url('Tamu/Riwayat');?>">Riwayat Pesanan</a>
         </li>
         <li class="nav-item" style="margin: 0px 0px 0px 25px">
         <?php if (empty($_SESSION['user']->level)) :?>
            <a class="nav-link bg-warning text-light" data-bs-toggle="modal" data-bs-target="#exampleModal" href="<?= base_url('Tamu/PesanKamar');?>">Pesan Kamar</a>
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
               <?php else :?>
               <a class="nav-link bg-warning text-light" href="<?= base_url('Tamu/PesanKamar');?>">Pesan Kamar</a>
               <?php endif ;?>
         </li>
      </ul>
      </div>
      <div class="card-body" style="margin-bottom: 20%;">
      <?php if (empty($_SESSION['user']->level)) :?>
      <h3 class="mt-3 " id="DataPesanan" style="">Maaf anda belum melakukan pemesanan :( </h3>
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
            </div>
            <?php else :?>
            <?php if (empty($datapesanan)) :?>
            <h3 class="mt-3" id="DataPesanan" style="">Maaf anda belum melakukan pemesanan :( </h3>
            <p><i data-feather="arrow-down-circle"></i></p>
            <a href="<?= base_url('Tamu/PesanKamar'); ?>" class="btn btn-primary mt-3" style="margin: 0px 35% 0px 35%">Lakukan pemesanan</a>
            <?php else :?>
               <div class="row">
            <?php foreach($datapesanan as $data) :?>
            <?php if($data->status == 'checkin'):?>
               <div class="col-md-3 mb-3">
               <div class="card">
               <img class="card-img-top" src="<?= base_url('assets/image/').$data->gambar_tipekamar?>" alt="Card image cap">
               <div class="card-body" style="background-color: PapaYAwHIP;">
                  <h5 class="card-title"><?= $data->nama_kamar?></h5>
                  <hr>
                  <div class="d-flex justify-content-between">
                     <p>Nama Pemesan</p>
                     <p><?= $data->nama_pemesan?></p>
                  </div>
                  <div class="d-flex justify-content-between">
                     <p>Tipe Kamar</p>
                     <p><?= $data->nama_kamar?></p>
                  </div>
                  <div class="d-flex justify-content-between">
                     <p>Tanggal Check-In</p>
                     <p><?= $data->tgl_cekin?></p>
                  </div>
                  <div class="d-flex justify-content-between">
                     <p>Tanggal Check-Out</p>
                     <p><?= $data->tgl_cekout?></p>
                  </div>
                  <div class="d-flex justify-content-between">
                     <p>Nama Tamu</p>
                     <p><?= $data->nama_tamu?></p>
                  </div>
                  <div class="d-flex justify-content-between">
                     <p>Total Harga</p>
                     <p><?= $data->harga?></p>
                  </div>
                  <hr style="margin-top: 0px;">
                  <a href="<?= base_url('Tamu/UbahStatus').'?status=checkout&id='.$data->id_pemesanan;?>" class="btn btn-primary">Check-out</a>
               </div>
            </div>
               </div>
               
               <?php endif;?>
               <?php endforeach;?>
            </div>
            <?php endif ;?>
            <?php endif ;?>  
         </div>
      </div>
      <!-- Footer-->
      <?php $this->load->view('tamu/_partials/Footer.php')?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script>
         feather.replace()
      </script>
   </body>
</html>