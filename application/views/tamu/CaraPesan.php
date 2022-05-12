<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSS -->
      <link rel="stylesheet" href="<?= base_url('assets/css/style.css');?>">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <title>Hotel Hebat/Cara Pesan</title>
   </head>
   <body style="background-color: GhostWhite">
      <!-- Header -->
      <?php $this->load->view('tamu/_partials/Header.php')?>
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
      <!-- Footer-->
      <?php $this->load->view('tamu/_partials/Footer.php')?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   </body>
</html>