<?php 
  $list_angkatan = array(
    date('Y'), strval(date('Y')-1), strval(date('Y')-2)
  );
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pemiltas FKM <?=date('Y')?> | <?=$title?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url('assets');?>/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets');?>/plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets');?>/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets');?>/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<header class="main-header">
<!-- Logo -->
<a href="" class="logo">
  <span class="logo-lg"><b>Pemiltas</b> FKM <?=date('Y')?></span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </a>

  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- User Account: style can be found in dropdown.less -->
      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <img src="<?php echo base_url('assets');?>/img/admin.png" class="user-image" alt="User Image">
          <span class="hidden-xs">Administrator</span>
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">
            <img src="<?php echo base_url('assets');?>/img/admin.png" class="img-circle" alt="User Image">
            <p>
              Administrator
              <small>Pemiltas FKM <?=date('Y')?></small>
            </p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="pull-right">
              <a href="<?php echo base_url('dashboard/logout'); ?>" class="btn btn-default btn-flat">Keluar</a>
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
<section class="sidebar">
  <ul class="sidebar-menu">
    <li class="header">Menu Utama</li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-pie-chart" aria-hidden="true"></i> <span>Perolehan Suara</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo base_url('hitung-vote/grafik_bem'); ?>"><i class="fa fa-circle-o"></i> Perolehan Suara BEM</a></li>
        <!-- <li><a href="<?php echo base_url('hitung-vote/grafik_senat_2015'); ?>"><i class="fa fa-circle-o"></i> Perolehan Suara Senat <?=date('Y')-2;?></a></li>
        <li><a href="<?php echo base_url('hitung-vote/grafik_senat_2016'); ?>"><i class="fa fa-circle-o"></i> Perolehan Suara Senat <?=date('Y')-1;?></a></li>
        <li><a href="<?php echo base_url('hitung-vote/grafik_senat_2017'); ?>"><i class="fa fa-circle-o"></i> Perolehan Suara Senat <?=date('Y');?></a></li> -->
        <li><a href="<?php echo base_url('hitung-vote/grafik_senat/'.$list_angkatan[2]); ?>"><i class="fa fa-circle-o"></i> Perolehan Suara Senat <?=date('Y')-2;?></a></li>
        <li><a href="<?php echo base_url('hitung-vote/grafik_senat/'.$list_angkatan[1]); ?>"><i class="fa fa-circle-o"></i> Perolehan Suara Senat <?=date('Y')-1;?></a></li>
        <li><a href="<?php echo base_url('hitung-vote/grafik_senat/'.$list_angkatan[0]); ?>"><i class="fa fa-circle-o"></i> Perolehan Suara Senat <?=date('Y');?></a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-bullhorn" aria-hidden="true"></i> <span>BEM</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo base_url('kandidat-bem'); ?>"><i class="fa fa-circle-o"></i> Daftar Paslon BEM</a></li>
        <li><a href="<?php echo base_url('tambah-ketua-bem'); ?>"><i class="fa fa-circle-o"></i> Tambah Caka BEM</a></li>
        <li><a href="<?php echo base_url('tambah-wakil-bem'); ?>"><i class="fa fa-circle-o"></i> Tambah Cawaka BEM</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-comments" aria-hidden="true"></i> <span>Senator</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo base_url('kandidat-senat'); ?>"><i class="fa fa-circle-o"></i> Daftar Calon Senator</a></li>
        <li><a href="<?php echo base_url('tambah-senat'); ?>"><i class="fa fa-circle-o"></i> Tambah Calon Senator</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-users" aria-hidden="true"></i> <span>Pemilih</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo base_url('daftar-pemilih'); ?>"><i class="fa fa-circle-o"></i> Daftar Pemilih</a></li>
        <li><a href="<?php echo base_url('tambah-pemilih'); ?>"><i class="fa fa-circle-o"></i> Tambah Pemilih</a></li>
      </ul>
    </li>
    <li class="header">Pengaturan Data</li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-gears" aria-hidden="true"></i> <span> Reset </span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo base_url('reset_pemilih'); ?>"><i class="fa fa-circle-o"></i> Reset Data Pemilih </a></li>
        <li><a href="<?php echo base_url('reset_data'); ?>"><i class="fa fa-circle-o"></i> Reset Other</a></li>
      </ul>
    </li>
  </ul>
</section>
</aside>