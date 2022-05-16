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
    <link rel="stylesheet" href="<?=base_url('assets/css/styles.css')?>">
      <title>Resepsionis</title>
   </head>
<body>
    <!-- Header -->
    <?php $this->load->view('Resepsionis/_partials/Header.php')?>
    <div class="card">
      <div class="card-header d-flex justify-content-between">
        <form class="form-inline my-2 my-lg-0 d-flex justify-content-end mr-5">
        
        <div class="form-group col-md-4">
          <label for="inputAddress">Mencari nama :</label>
          <div class="d-flex justify-content-start" style="margin-right:20px;">
          <input class="form-control mr-sm-2" style="margin: 0px px 0px 0px" type="search" placeholder="Search" aria-label="Search"  onkeyup="myTableName()" id="Myname">
          <button class="btn btn-outline-primary" style="margin: 0px 0px 0px 5px" type="button">Search</button>
          </div>
        </div>
        
        <div class="form-group col-md-4">
          <label for="inputAddress">Mencari KodeReff :</label>
          <div class="d-flex justify-content-start" style="margin-right:20px;">
          <input class="form-control mr-sm-2" style="margin: 0px px 0px 0px" type="search" placeholder="Search" aria-label="Search"  onkeyup="myKodReff()" id="Myreff">
          <button class="btn btn-outline-primary" style="margin: 0px 0px 0px 5px" type="button">Search</button>
          </div>
        </div>
        
        <div class="form-group col-md-4">
          <label for="inputAddress">Sortir data :</label>
          <select class="form-control" name="id_kamar">
            <option selected>Sortir menurut</option>
            <option value="1" onkeyup="myCheckin()" id="Mycheckin">Tanggal Check-in</option>
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
      <table class="table table-bordered table-striped" id="Mytable">
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
            <th style="width">Kode Reff</th>
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
              <td><?= $data->KodReff?></td>
              <td><button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $data->id_pemesanan?>">Cetak PDF</button></td>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal<?= $data->id_pemesanan?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title" id="exampleModalLabel">Detail Transaksi</h3>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
              <div class="modal-body">
              <div class="card">
                <div class="card-header" style="background-color: Gold">Hotel Hebat</div>
                  <div class="card-body">
                    <p class="card-text">Anda telah berhasil melakukan pemesanan</p>
                    <hr>
                    <img class="card-img-top" src="<?= base_url('assets/image/').$data->gambar_tipekamar?>" alt="Card image cap">
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
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="<?= base_url('Tamu/Cetak').'?id='.$data->id_pemesanan?>" type="button" class="btn btn-primary" target="_blank">Cetak</a>
              </div>
            </div>
          </div>
        </div>
            </tr>
            <?php endforeach;?>
          </tbody>
        </thread>
      </table>
    <?php endif ;?>  

  </div>
</div>

  <?php $this->load->view('resepsionis/_partials/js.php')?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script>
      function cetak() {
        window.print();
      }
    </script>
</body>
</html>