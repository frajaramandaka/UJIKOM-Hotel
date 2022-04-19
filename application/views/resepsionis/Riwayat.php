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
    <title>Resepsionis</title>
</head>
<body>
    <!-- Header -->
    <?php $this->load->view('Resepsionis/_partials/Header.php')?>
    <div class="jumbotron jumbotron-fluid mb-5">
      <div style="padding:300px; font-weight: normal;">
        <h1 class="text-center text-white font-weight-bold">Selamat Datang</h1>
        <h2 class="text-center text-white font-weight-bold">asdasd</h2>
      </div>
    </div>

    <div class="card">
      <div class="card-header d-flex justify-content-between">
        <form class="form-inline my-2 my-lg-0 d-flex justify-content-end mr-5">
        
        <div class="form-group col-md-8">
          <label for="inputAddress">Mencari nama :</label>
          <div class="d-flex justify-content-start" style="margin-right:20px;">
          <input class="form-control mr-sm-2" style="margin: 0px px 0px 0px" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary" style="margin: 0px 0px 0px 5px" type="submit">Search</button>
          </div>
        </div>
        
        <div class="form-group col-md-4">
          <label for="inputAddress">Sortir data :</label>
          <select class="form-control" name="id_kamar">
            <option selected>Sortir menurut</option>
            <option value="1">Tanggal Check-in</option>
            <option value="2">Tanggal Check-out</option>
            <option value="3">Tipe Kamar</option>
          </select>
        </div>

        </form>
      </div>
    <div class="card-body">
    <?php if (empty($datariwayat)) :?>
    <h3 class="mt-3 " id="DataPesanan" style="">Maaf belum ada riwayat dilakukan</h3>
    <?php else :?>
      <table class="table table-bordered table-striped">
        <thread>
          <tr>
            <th style=""></th>
            <th style="width">Nama Pemesan</th>
            <th style="width">Tipe Kamar</th>
            <th style="width">Tanggal Check-in</th>
            <th style="width">Tanggal Check-out</th>
            <th style="width">Jumlah kamar</th>
            <th style="width">Nama Tamu</th>
            <th style="width">Email</th>
            <th style="width">Nomor Whatsapp</th>
            <th style=""></th>
          </tr>
          <tbody>
            <?php foreach($datariwayat as $data):?>
              <tr>
              <td width="50"><img class="card-img-top" src="<?= base_url('assets/image/').$data->gambar_tipekamar?>" alt="Card image cap" ></td>
              <td><?= $data->nama_pemesan?></td>
              <td><?= $data->nama_kamar?></td>
              <td><?= $data->tgl_cekin?></td>
              <td><?= $data->tgl_cekout?></td>
              <td><?= $data->jmlh_kamar?></td>
              <td><?= $data->nama_tamu?></td>
              <td><?= $data->email?></td>
              <td><?= $data->no_hp?></td>
              <td><button type="submit" class="btn btn-primary">Cetak PDF</button></td>
            </tr>
            <?php endforeach;?>
          </tbody>
        </thread>
      </table>
    <?php endif ;?>  

  </div>
</div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>