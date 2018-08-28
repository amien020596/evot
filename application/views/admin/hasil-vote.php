<?php 
  if($bem_sudah!=null && $bem_total!=null && $senat_sudah!=null && $senat_total!=null){
  $bem_sudah_persen = round($bem_sudah/$bem_total, 2)*100;
  $bem_belum_persen = 100 - $bem_sudah_persen;
  $senat_sudah_persen = round($senat_sudah/$senat_total, 2)*100;
  $senat_belum_persen = 100 - $senat_sudah_persen;
  }else{
    $bem_sudah_persen = null;
    $bem_belum_persen = 100 - $bem_sudah_persen;
    $senat_sudah_persen = null;
    $senat_belum_persen= 100 - $senat_sudah_persen;
  }

  // $bem_sudah_persen = round($bem_sudah/$bem_total, 2)*100;
  // $bem_belum_persen = 100 - $bem_sudah_persen;
  // $senat_sudah_persen = round($senat_sudah/$senat_total, 2)*100;
  // $senat_belum_persen = 100 - $senat_sudah_persen;
  
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pemiltas FKM | Perolehan Suara</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url('assets');?>/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets');?>/css/admin.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets');?>/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets');?>/dist/css/skins/_all-skins.min.css">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <span class="logo-lg"><b>Pemiltas</b> FKM</span>
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
                  <small>Pemiltas FKM 2017</small>
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
          <li><a href="<?php echo base_url('hitung-vote/grafik_senat_2015'); ?>"><i class="fa fa-circle-o"></i> Perolehan Suara Senat 2015</a></li>
          <li><a href="<?php echo base_url('hitung-vote/grafik_senat_2016'); ?>"><i class="fa fa-circle-o"></i> Perolehan Suara Senat 2016</a></li>
          <li><a href="<?php echo base_url('hitung-vote/grafik_senat_2017'); ?>"><i class="fa fa-circle-o"></i> Perolehan Suara Senat 2017</a></li>
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Bagan Hasil Pemilihan
      </h1>
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-pie-chart"></i> Perolehan Suara</a></li>
      </ol> -->
    </section>

    <?php $this->load->view('admin/'.$view);?>
