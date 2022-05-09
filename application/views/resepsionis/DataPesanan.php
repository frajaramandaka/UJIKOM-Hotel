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
      </div>
    </div>
    <div class="card-body">
    
    <?php if (empty($datapesanan)) :?>
    <h3 class="mt-3 " id="DataPesanan" style="">Maaf belum ada pesanan masuk</h3>
    <?php else :?>
      <table class="table table-bordered table-striped">
        <thread>
          <tr>
            <th style=""></th>
            <th style="width">Nama Pemesan</th>
            <th style="width">Tipe Kamar</th>
            <th style="width">Tanggal Check-in</th>
            <th style="width">Jumlah kamar</th>
            <th style="width">Nama Tamu</th>
            <th style="width">Email</th>
            <th style="width">Nomor Whatsapp</th>
            <th style="width">Status Pemesanan</th>
            <th style=""></th>
          </tr>
          <tbody>
            <?php foreach($datapesanan as $data):?>
              <tr>
              <td width="50"><img class="card-img-top" src="<?= base_url('assets/image/').$data->gambar_tipekamar?>" alt="Card image cap" ></td>
              <td><?= $data->nama_pemesan?></td>
              <td><?= $data->nama_kamar?></td>
              <td><?= $data->tgl_cekin?></td>
              <td><?= $data->jmlh_kamar?></td>
              <td><?= $data->nama_tamu?></td>
              <td><?= $data->email?></td>
              <td><?= $data->no_hp?></td>
              <td><?= $data->status?></td>
              <td><button type="submit" class="btn btn-primary">Ubah Status</button></td>
            </tr>
            <?php endforeach;?>
          </tbody>
        </thread>
      </table>
    <?php endif ;?>  

  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>