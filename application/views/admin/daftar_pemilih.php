<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Daftar Pemiliih Tetap
        <small>semua data</small>
      </h1>
      <!-- <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="<?php echo base_url('hitung-vote'); ?>">data pemilih</a></li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <?php if(!empty($error)){
                echo "<div class='alert alert-danger'> ".$error. "</div>";
              } ?>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Pemiliih Tetap</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>NIM</th>
                  <th>Nama Pemilih</th>
                  <th>Angkatan</th>
                  <th>Password</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                ?>
                <?php $no = 1; ?>
                <?php if(isset($pemilih)){ ?>
                <?php foreach($pemilih as $data){ ?>
                    <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['idpemilih']; ?></td>
                    <td><?php echo $data['nama_pemilih']; ?></td>
                    <td><?php echo $data['angkatan']; ?></td>
                    <td><?php echo $data['password_pemilih']; ?></td>
                    <td><?php echo $data['status']; ?></td>
                    <td>
<<<<<<< HEAD
                    <?php if($data['status'] === 'sudah') { ?>
                        <span class="btn-btn-danger disabled"><i class="fa fa-trash bigicon"></i></span>
                        &nbsp;&nbsp;&nbsp;
                        <span class="btn-btn-primary disabled"><i class="fa fa-upload bigicon"></i></span>
                    <?php } else { ?>
                        <a href="<?php echo base_url('hapus-pemilih/').$data['idpemilih'];?>" <?php echo ($data['status'] == 'sudah') ? 'disabled' : ''; ?> class="btn btn-danger"><i class="fa fa-trash bigicon"></i></a>
                        &nbsp;&nbsp;&nbsp;
                        <a href="<?php echo base_url('update-pemilih/').$data['idpemilih'];?>" <?php echo ($data['status'] == 'sudah') ? 'disabled' : ''; ?> class="btn btn-primary"><i class="fa fa-upload bigicon"></i></a>
                    <?php } ?>
                    </td>
=======
                    <!-- <a href="<?php echo base_url('hapus-pemilih/').$data['idpemilih'];?>" <?php echo ($data['status'] == 'sudah') ? 'disabled' : ''; ?> class="btn btn-danger"><i class="fa fa-trash bigicon"></i></a>
                    &nbsp;&nbsp;&nbsp;
                    <a href="<?php echo base_url('update-pemilih/').$data['idpemilih'];?>" <?php echo ($data['status'] == 'sudah') ? 'disabled' : ''; ?> class="btn btn-primary"><i class="fa fa-upload bigicon"></i></a>
                  -->
                  <?php
                    if($data['status'] == 'sudah'){
                      ?>
                      <span class="btn btn-danger"> <i class="fa fa-trash bigicon"></i></span>
                      <?php
                    }
                   ?>
                  </td>
>>>>>>> 97b028f7b3d96e814c55a6468b78231cabcbe655
                    <?php $no++; ?>
                  </tr>
                  <?php } } ?>


                </tbody>
                <tfoot>
                <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama Pemilih</th>
                <th>Angkatan</th>
                <th>Password</th>
                <th>Status</th>
                <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->