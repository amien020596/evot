<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pemiltas FKM | Administrator Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
  <!-- External css -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/adminlogin.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/formhack.css">

</head>
<body>
<div class="background-image"></div>
<br>
	<div class="container">
		<form class="registration" id="registration" method="POST" action="<?php echo base_url('daftar-pemilih'); ?>">
			<div class="text-title text-center">
				<h1>Selamat Datang</h1>
				<p>Administrator Login</p>	
			</div>
			

			<label for="username">
				<!-- <span>Username</span> -->

				<input type="text" id="username" minlength="3" required placeholder="Nama Pengguna" name="uname" autocomplete="off">

				<ul class="input-requirements">
					<li>Panjang minimum 3 karakter</li>
					<li>Hanya huruf atau angka (bukan karakter spesial)</li>
				</ul>
			</label>

			<label for="password">
				<!-- <span>Password</span> -->
        
				<input type="password" id="password" maxlength="100" minlength="8" required placeholder="Kata Sandi" name="pass" autocomplete="off">

				<ul class="input-requirements">
					<li>Panjang minimum 8 karakter (maksimum 99)</li>
					<li>Mengandung minimum 1 angka</li>
					<li>Mengandung minimum 1 huruf kecil</li>
					<li>Mengandung minimum 1 huruf kapital</li>
					<li>Mengandung spesial karakter (misal @ !)</li>
				</ul>
			</label>
			<?php echo $this->session->flashdata('err_admin'); ?>
			<input type="submit" value="Masuk" name="adminlogin">

		</form>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4 text-center">
			<div class="form-footer">
				<h4>&copy; Pemiltas FKM 2017 | All Right Reserved</button></h4>
			</div>
		</div>
	</div>

    <script src="<?php echo base_url();?>assets/js/adminlogin.js"></script>
</body>
</html>