<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | General Form Elements</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/dist/css/skins/_all-skins.min.css">

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
        Form Tambah Pemilih
      </h1>
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="<?php echo base_url('tambah-pemilih'); ?>">Tambah Pemilih</a></i></li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
        <!-- ini untuk petunjuk penambahan  -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Pemilih</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo form_open('valid-pemilih'); ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">NIM :</label>
                  <input type="text" class="form-control" name="nim" id="exampleInputEmail1" placeholder="Masukan NIM">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Pemilih :</label>
                  <input type="text" class="form-control" name="nama" id="exampleInputPassword1" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                  <label>Angaktan :</label>
                    <select class="form-control" name="angkatan">
                    <option value="">-Pilih Angkatan-</option> 
                      <option value="2012">2012</option>  
                      <option value="2013">2013</option>
                      <option value="2014">2014</option>
                      <option value="2015">2015</option>
                      <option value="2016">2016</option>
                      <option value="2017">2017</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Masukan Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Re-Type Password</label>
                  <input type="password" class="form-control" name="password2" id="exampleInputPassword1" placeholder="Konfirmasi Password">
                </div>
              </div>  
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              
            <?php echo form_close(); ?>
          </div>
         


          <!-- Input addon -->
          <!-- <div class="box box-info">
           
            <div class="box-body">
                <br>
                <center>
            <h3>Government of the people,</h3>
            <h3>by the people,</h3>
            <h3>for the people,</h3>
            <h3>shall not perish from the Earth.</h3>
            <h4>- Abraham Lincoln 1809 – 1865</h4>
            </center>
            </div>
          </div> -->
      <!-- untuk penunjuk tambah pemilih  -->
        </div>
        <div class="col-md-6">
        <div class="box box-solid">
          <div class="box-header with-border">
            <i class="fa fa-text-width"></i>

            <h3 class="box-title">Petunjuk Penambahan Pemilih</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <ul>
              <li>NIM :</li>
                <ul>
                  <li>NIM harus berupa Angka</li>
                  <li>Panjang Angka maksimal 15 Digit</li>
                  <li>Kolom NIM Tidak boleh Kosong</li>
                </ul>
                <li>Nama :</li>
                <ul>
                  <li>Nama berupa Huruf</li>
                  <li>Kolom Nama Tidak boleh Kosong</li>
                </ul>
                <li>Angkatan :</li>
                <ul>
                  <li>Pilih Kolom Angkatan Sesuai data Pemilih</li>
                  <li>Kolom Angkatan Tidak boleh Kosong</li>
                </ul>
                <li>Password :</li>
                <ul>
                  <li>Password berupa Token yang sudah Dibuat Panitia</li>
                  <li>Password Tidak Boleh Kosong</li>
                </ul>
            </ul>
          </div>
          
          <!-- /.box-body -->
        </div>
        <br>
        <?php if(!empty($error)){
                echo "<div class='alert alert-danger'> ".$error. "</div>";
              } ?>
       </div>
      <!-- end tambah pemilih -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('assets'); ?>/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('assets'); ?>/bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets'); ?>/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets'); ?>/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets'); ?>/dist/js/demo.js"></script>
</body>
</html>
