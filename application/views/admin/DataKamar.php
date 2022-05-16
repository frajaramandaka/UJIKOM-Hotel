<!DOCTYPE html>
<html lang="en">
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSS -->
      <link rel="stylesheet" href="<?= base_url('/assets/css/styles.css')?>">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">
      <title>Admin</title>
   </head>
<body>
    <!-- Header -->
    <?php $this->load->view('Admin/_partials/Header.php')?>
    <div class="card">
    <div class="card-body">
      <table class="table table-bordered table-striped" id="Mytable">
        <thread>
          <tr>
            <th style="">Gambar</th>
            <th style="width">Nama Kamar</th>
            <th style="width">Jumlah Dimiliki</th>
            <th style="width">Harga</th>
            <th style=""></th>
          </tr>
          <tbody>
            <?php foreach($datakamar as $data):?>
              <tr>
              <td width="10%"><img class="card-img-top" src="<?= base_url('assets/image/').$data->gambar_tipekamar?>" alt="Card image cap" ></td>
              <td><?= $data->nama_kamar?></td>
              <td><?= $data->jml_kamar?></td>
              <td><?= $data->harga?></td>
              <td><a href="<?= base_url('Admin/ubahData').'?id='.$data->id_kamar ?>" class="btn btn-primary">Ubah Data</a></td>
            <?php endforeach;?>
          </tbody>
        </thread>
      </table>
  </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>