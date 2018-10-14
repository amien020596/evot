<?php
	$progress_bem 	= round($bem_sudah/$bem_total, 2)*100;
	$progress_senat = round($senat_sudah/$senat_total, 2)*100;
	$progress_2 	= round($sudah2/$total2, 2)*100;
	$progress_1 	= round($sudah1/$total1, 2)*100;
	$progress_0 	= round($sudah0/$total0, 2)*100;

	function progress($val)
	{
		$ret = '';
		switch ($val) {
			case ($val >= 50 && $val < 75):
				$ret = 'warning';
				break;
			case ($val > 75):
				$ret = 'success';
				break;
			default:
				$ret = 'warning';
				break;
		}

		return $ret;
	}

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="refresh" content="1; URL="<?= base_url('/monitoring')  ?>">
  <title>Pemiltas FKM | Monitoring</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
  <!-- External css -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/userlayout.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/monitoring.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body style="overflow-x: hidden;">
<div class="container-fluid">
	<div class="text-center">
		<div class="col-md-10 col-monitoring">
			<!-- <br> -->
			<div class="col-md-12">
			<div class="box">
	            <div class="box-header">
		            <h2 class="text-title text-upper">Total Perolehan Suara <br><sub>Pemiltas FKM <?=date("Y"); ?></sub></h2>
	            </div>
	            <br>
	            <!-- /.box-header -->
	            <div class="box-body no-padding">
		          <table class="table text-left text-upper">
		            <tr>
		              <th class="col-md-4">Suara</th>
		              <th class="col-md-5">Masuk</th>
		              <th class="col-md-3">Progress</th>
		              <!-- <th class="col-md-2">Label</th> -->
		            </tr>
		            <tr>
		              <td>Total</td>
		              <td><?php echo "$bem_sudah / $bem_total"; ?></td>
		              <td>
		                <div class="progress">
						  <div class="progress-bar progress-bar-<?php echo progress($progress_bem); ?> progress-bar-striped active" role="progressbar"
						  aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style='width:<?php echo "$progress_bem%"; ?>'>
						    <?php echo "$progress_bem%"; ?>
						  </div>
						</div>
		              </td>
		            </tr>
		            <tr>
		              <td>Suara BEM</td>
		              <td><?php echo "$bem_sudah / $bem_total"; ?></td>
		              <td>
		                <div class="progress">
						  <div class="progress-bar progress-bar-<?php echo progress($progress_bem); ?> progress-bar-striped active" role="progressbar"
						  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style='width:<?php echo "$progress_bem%"; ?>'>
						    <?php echo "$progress_bem%"; ?>
						  </div>
						</div>
		              </td>
		            </tr>
		            <tr>
		              <td>Suara Senat</td>
		              <td><?php echo "$senat_sudah / $senat_total"; ?></td>
		              <td>
		                <div class="progress">
						  <div class="progress-bar progress-bar-<?php echo progress($progress_senat); ?> progress-bar-striped active" role="progressbar"
						  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style='width:<?php echo "$progress_senat%"; ?>'>
						    <?php echo "$progress_senat%"; ?>
						  </div>
						</div>
		              </td>
		            </tr>
		            <tr>
		              <td>Senat <?=date("Y")-2;?></td>
		              <td><?php echo "$sudah2 / $total2"; ?></td>
		              <td>
		                <div class="progress">
						  <div class="progress-bar progress-bar-<?php echo progress($progress_2); ?> progress-bar-striped active" role="progressbar"
						  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style='width:<?php echo "$progress_2%"; ?>'>
						    <?php echo "$progress_2%"; ?>
						  </div>
						</div>
		              </td>
		            </tr>
		            <tr>
		              <td>Senat <?=date("Y")-1;?></td>
		              <td><?php echo "$sudah1 / $total1"; ?></td>
		              <td>
		                <div class="progress">
						  <div class="progress-bar progress-bar-<?php echo progress($progress_1); ?> progress-bar-striped active" role="progressbar"
						  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style='width:<?php echo "$progress_1%"; ?>'>
						    <?php echo "$progress_1%"; ?>
						  </div>
						</div>
		              </td>
		            </tr>
		            <tr>
		              <td>Senat <?=date("Y");?></td>
		              <td><?php echo "$sudah0 / $total0"; ?></td>
		              <td>
		                <div class="progress">
						  <div class="progress-bar progress-bar-<?php echo progress($progress_0); ?> progress-bar-striped active" role="progressbar"
						  aria-valuenow="93" aria-valuemin="0" aria-valuemax="100" style='width:<?php echo "$progress_0%"; ?>'>
						    <?php echo "$progress_0%"; ?>
						  </div>
						</div>
		              </td>
		            </tr>
		          </table>
	            </div>
      		</div>
      		</div>
			<img class="footer-img t" src="<?php echo base_url();?>assets/img/footerlogo.png">
		</div>
	</div>
</div>

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url();?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
