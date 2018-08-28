<div class="container-fluid">
	<div class="vote-title text-center">
		<h2>Pasangan Calon Ketua dan Wakil Ketua <br>BEM FKM Undip 2018</h2>
		<!-- <hr> -->
		<p><?php echo "$waktu, $nama ($nim)"; ?> |<a href="" class="btn btn-link" data-toggle="modal" data-target="#myModal">Petunjuk</a> <!-- |<a href="" class="btn btn-link" data-toggle="modal" data-target="#exitModal">Keluar</a> --></p>
	</div>
	<div class="row text-center">		
		<div class="col-md-11 line"></div>
	</div>
	<div class="row text-center vote-container">
	<form name="myForm" action="<?php 
				$list_senator = array("2015", "2016", "2017");
				if (!in_array($angkatan, $list_senator)) {
					echo base_url('user/review');
				} else {
					echo base_url('user/vote-senat');
				}?>" method="POST" onsubmit="return validate()">
	<?php for ($i=1; $i<=$xkandidat_bem; $i++) { $d = $this->Admin_model->get_data_kandidat_bem($i);?>
	<div class="col-vote col-md-3">
		<div class="row text-center option" style="background: rgba(166, 75, 154, 1);">
			<input type="radio" id="r" class="option-input radio" name="paslonbem" data-checked="<?php echo $d->no_urut; ?>" value="<?php echo $d->no_urut; ?>" data-toggle="tooltip"/>
		</div>
		<div class="row ava-container">
			<div class="col-md-6">
				<img class="avatar" src="<?php echo base_url();?>assets/img/bem/kabem<?php echo $d->no_urut;?>.png" name="kabem<?php echo $d->no_urut;?>">
			</div>
			<div class="col-md-6">
				<img class="avatar" src="<?php echo base_url();?>assets/img/bem/wakabem<?php echo $d->no_urut;?>.png" name="wakabem<?php echo $d->no_urut;?>">
			</div>
		</div>
		<div class="row desc-container text-center">
			<div class="col-md-6">
				<p><strong>CALON<br>KETUA</strong></p>
				<p><?php echo $d->nama_ketua; ?></p>
			</div>
			<div class="col-md-6">
				<p><strong>CALON<br>WAKIL KETUA</strong></p>
				<p><?php echo $d->nama_wakil; ?></p>	
			</div>
		</div>
	</div>
	<?php } ?>
	

	<div class="row text-center">
		<div class="col-md-3 line"></div>
		<div class="col-md-5 line transparent">
			<input type="submit" id="lanjut" name="fbem" class="btn btn-link btn-lg" value="Lanjut &raquo;" onclick="is_vote(validate())">
		</div>
		<div class="col-md-3 line"></div>
	</div>
	</form>
	</div>
	<div class="row text-center">
		<!-- <div class="col-md-3 line"></div> -->
		<div class="col-md-11 line footer">
			<img class="footer-img" src="<?php echo base_url();?>assets/img/footerlogo.png">
			<label id="copyright" class=""> 
				Copyright &copy; Pemiltas FKM 2017 <br>
				All Right Reserved
			</label>
		</div>
		<!-- <div class="col-md-3 line"></div> -->
	</div>
</div>