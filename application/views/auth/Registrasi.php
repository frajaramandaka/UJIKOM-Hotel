<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Hotel Hebat/Registrasi</title>
		<script src="https://unpkg.com/feather-icons"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="<?= base_url('assets/reg-form-17/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')?> ">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="<?= base_url('assets/reg-form-17/css/style.css')?>">
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	</head>

	<body>
		<!-- Header -->
		<?php $this->load->view('tamu/_partials/Header.php')?>

		<div class="wrapper" style="background-image: url('https://dynl.mktgcdn.com/p/oJVuGUM0SWVS4vSVkaRMCjehfU4gMYgU2OI2GCCa0Uo/1024x768.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="<?= base_url('assets/image/resepsionis.jpg')?>" alt="">
				</div>
				<form action="<?=base_url('Auth/RegisterData') ?>" method="post">
					<h3>Registration Form</h3>
					<div class="form-wrapper">
						<input type="text" placeholder="Nama" class="form-control" name="nama">
						<i class="zmdi zmdi-account-add"></i>
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Username" class="form-control" name="username">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="date" placeholder="Tanggal Lahir" class="form-control" name="tgl_lahir">
						<i class="zmdi zmdi-calendar"></i>
					</div>
					<div class="form-wrapper">
						<select name="jenis_kelamin" class="form-control">
							<option value="" disabled selected>Gender</option>
							<option value="laki-laki">Male</option>
							<option value="perempuan">Female</option>
						</select>
						<i class="zmdi zmdi-accounts"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" placeholder="Password" class="form-control" name="password">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<div class="form-wrapper">
						<input type="number" placeholder="Nomor Whatsapp" class="form-control" name="nowa">
						<i class="zmdi zmdi-whatsapp"></i>
					</div>

					<div class="form-wrapper">
						<input type="text"  class="form-control" name="level" value="tamu" hidden>
						<i class="zmdi zmdi-whatsapp"></i>
					</div>
					<button>Register
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
	
		<script>
      feather.replace()
    </script>
	</body>
</html>