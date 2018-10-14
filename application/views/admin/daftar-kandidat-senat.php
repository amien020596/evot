<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
    Daftar Kandidat Senat
    </h1>
    <!-- <ol class="breadcrumb">
      <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><a href="<?php echo base_url('kandidat-senat'); ?>">Data Senat</a></li>
    </ol> -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Daftar Kandidat Senat</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>No Urut</th>
                <th>Nama Kandidat</th>
                <th>Angkatan</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              <?php
              ?>
              
              <?php if(isset($kandidat)){ ?>
              <?php foreach($kandidat as $data){ ?>
                  <tr>
                  
                  <td><?php echo $data['no_urut']; ?></td>
                  <td><?php echo $data['nama_kandidat']; ?></td>
                  <td><?php echo $data['angkatan']; ?></td>
                  <td>
                  <a href="<?php echo base_url('hapus-senat/').$data['idkandidat_senat'];?>"><button class="btn btn-danger"><i class="fa fa-trash bigicon"></i></button></a>
                  &nbsp;&nbsp;&nbsp;
                  <a href="<?php echo base_url('update-senat/').$data['idkandidat_senat'];?>"><button class="btn btn-primary"><i class="fa fa-upload bigicon"></i></button></a>
                  </td>
                  
                </tr>
                <?php } } ?>
                
              
              </tbody>
              <tfoot>
              <tr>
              <th>No Urut</th>
              <th>Nama Kandidat</th>
              <th>Angkatan</th>
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
