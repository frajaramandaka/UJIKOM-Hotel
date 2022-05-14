<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- CSS -->
      <link rel="stylesheet" href="<?=base_url('assets/css/styles.css')?>">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <title>Cetak PDF</title>
   </head>
   <body>
      <?php foreach($datariwayat as $data):?>
      <div class="container">
         <div class="card" style="width: 34rem;">
            <div class="card-header text-center" style="background-color: Gold">Hotel Hebat</div>
            <div class="card-body">
               <p class="card-text text-center">Anda telah berhasil melakukan pemesanan</p>
               <hr>
               <img class="card-img-top rounded mx-auto d-block" style="width: 500px;" src="<?= base_url('assets/image/').$data->gambar_tipekamar?>" alt="Card image cap">
               <hr>
               <p class="d-flex justify-content-start">Kode Reff</p>
               <p class="d-flex justify-content-start" style="margin-top: -15px; color: Red"><?= $data->KodReff?></p>
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
            </div>
         </div>
      </div>
      <?php endforeach; ?>
      <script>
         window.print();
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   </body>
</html>