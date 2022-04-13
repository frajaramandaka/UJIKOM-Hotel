<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hotel Hebat/Pesan Kamar</title>
</head>
<body>
  <!-- Header -->
  <?php $this->load->view('tamu/_partials/Header.php')?>

  <div class="container-lg">
    <div class="card mt-3">
  <h5 class="card-header d-flex justify-content-center p-3">Pesan Kamar</h5>
  <div class="card-body">
  <div class="row">
  <div class="col-sm-12">
  <form>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Nama Pemesan :</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="">
    </div>
    <div class="form-group col-md-12">
      <label for="inputAddress">Tipe Kamar :</label>
      <select class="form-control">
        <option selected>Pilih Tipe :</option>
        <option >Regular Room</option>
        <option >Silver Room</option>
        <option >Gold Room</option>
        <option >Platinum Room</option>
      </select>
    </div>
  </div>
  <div class="form-group col-md-12">
    <label for="inputAddress">Tanggal Check-in :</label>
    <input type="date" class="form-control" id="inputAddress" placeholder="">
  </div>
  <div class="form-group col-md-12">
    <label for="inputAddress2">Tanggal Check-out :</label>
    <input type="date" class="form-control" id="inputAddress2" placeholder="">
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputCity">Jumlah Kamar :</label>
      <input type="number" class="form-control" id="">
    </div>
    <div class="form-group col-md-12">
      <label for="inputEmail4">Nama Tamu :</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="">
    </div>
    <div class="form-group col-md-12">
      <label for="inputEmail4">Email :</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="contoh : hotelhebat@gmail.com">
    </div>
    <div class="form-group col-md-12">
      <label for="inputEmail4">Nomor Whatsapp :</label>
      <input type="number" class="form-control" id="inputEmail4" placeholder="08xxxxxxxxxxx">
    </div>
    </div>
    </div>
    </div>
   <button type="submit" class="btn btn-primary mt-3">Pesan</button>
  </form>

  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>