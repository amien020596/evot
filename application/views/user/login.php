<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pemiltas FKM | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
  <!-- External css -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/userlogin.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body id="login" class="hold-transition login-page" style="overflow: hidden;">
<div class="background-image"></div>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="search-box">
				<div class="caption text-center">
					<h1>Selamat Datang!</h1>
					<p>Silahkan login untuk vote</p>
				</div>
				<form action="<?php echo base_url("user/vote-bem"); ?>" class="loginForm" method="POST">
					<div class="input-group">
						<input type="text" id="name" name="nim" class="form-control" placeholder="Pengguna" autocomplete="off" required>
					</div>
					<div class="input-group">
						<input type="password" id="paw" name="token" class="form-control" placeholder="Kata Sandi" autocomplete="off" required>
					</div>
					<?php echo $this->session->flashdata('err_user'); ?>
					<input type="submit" id="submit" name="userlogin" class="form-control" value="Masuk">
				</form>
				<hr>
				<div class="form-footer">
					<h4>&copy; Pemiltas FKM 2017 |<button class="btn-link" data-toggle="modal" data-target="#myModal">Petunjuk</button></h4>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="aro-pswd_info">
				<div id="pswd_info">
					<h4>Masukkan kode unik (token) Anda untuk autentikasi !</h4>
				</div>
				<div id="uname_info">
					<h4>Gunakan NIM Anda untuk identifikasi akun !</h4>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		
	</div>
	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h2 class="modal-title">Petunjuk menggunakan E-vote</h2>
	      </div>
	      <div class="modal-body">
	        <ol>
			  <li>Log in terlebih dahulu dengan memasukkan NIM dan token yang telah diberi oleh panitia. Klik Submit</li>
			  <li>Pilih Ketua dan Wakil Ketua BEM dengan cara klik button Pilih yang telah disediakan</li>
			  <li>Pilih Senator Angkatan dengan cara klik button Pilih yang telah disediakan (Pemilihan Senator Angkatan hanya bisa dilakukan oleh angkatan 2015, 2016, 2017)</li>
			  <li>Setelah itu muncul halaman summary. Klik Selesai jika sudah yakin dengan pilihan, dan Ulangi jika belum yakin</li>
			  <li>Dan suara anda telah berhasil masuk</li>
			</ol>
	      </div>
	    </div>

	  </div>
	</div>
</div>
  

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url();?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
	
	$('input[type=password]').focus(function() {
		$('#pswd_info').show();
		$(this).data('placeholder',$(this).attr('placeholder'))
          .attr('placeholder','');
	}).blur(function() {
		$('#pswd_info').hide();
		$(this).attr('placeholder',$(this).data('placeholder'));
	});

	$('input[type=text]').focus(function() {
		$('#uname_info').show();
		$(this).data('placeholder',$(this).attr('placeholder'))
          .attr('placeholder','');
	}).blur(function() {
		$('#uname_info').hide();
		$(this).attr('placeholder',$(this).data('placeholder'));
	});
	
});
</script>
</body>
</html>
