<?php 
	if (isset($data)) {
		$waktu = $data['waktu'];
	}

	$data['nama'] 		= $this->session->userdata('nama');
	$data['nim']		= $this->session->userdata('nim');
	$data['angkatan']	= $this->session->userdata('angkatan');

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pemiltas FKM | <?php echo $title; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
  <!-- External css -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/userlayout.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body style="overflow-x: hidden;">

	<?php $this->load->view('user/'.$view, $data); ?>

	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">
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

	<div id="nogolput" class="modal fade" role="dialog">
	  <div class="modal-dialog">
	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <h2 class="modal-title">Peringatan !</h2>
	      </div>
	      <div class="modal-body">
	      	<h3>Anda belum memilih. Silahkan pilih terlebih dahulu untuk melanjutkan !</h3>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-info btn-md" data-dismiss="modal">Mengerti</button>
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
	
	$('[data-toggle="tooltip"]').tooltip({
		title: "Klik untuk vote !", 
		placement: "top",
		trigger : 'hover' 
	});
});

function validate()
{
  var retval = false;
  for (var i=0; i < document.myForm.r.length; i++)
  {
    if (document.myForm.r[i].checked)
    {
      retval = true;
    } 
  }  

  return retval;
}

function is_vote($check) {
	var checked = $check;
	if (checked == false) {
		$('#nogolput').modal('show');
	}
}

</script>
</body>
</html>
