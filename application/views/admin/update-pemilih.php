<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Update Pemilih
      </h1>
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="<?php echo base_url('hasil-vote'); ?>">Daftar Pemilih</a></i></li>
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
              <h3 class="box-title">Update Pemilih</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php if(isset($pemilih)) { ?>
            <?php foreach($pemilih as $data){ ?>
            <?php echo form_open('pemilih-update/'.$data['idpemilih']); ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">NIM :</label>
                  <input type="text" class="form-control" name="nim" disabled value="<?php echo $data['idpemilih']; ?>" id="exampleInputEmail1" placeholder="Masukan NIM">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Pemilih :</label>
                  <input type="text" class="form-control" name="nama" value="<?php echo $data['nama_pemilih']; ?>" id="exampleInputPassword1" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                  <label>Angaktan :</label>
                    <select class="form-control" name="angkatan">
                    <option value="">-Pilih Angkatan-</option>
                    
                      <option value="2012" <?php if($data['angkatan']==2012){echo "selected";} ?>>2012</option>  
                      <option value="2013" <?php if($data['angkatan']==2013){echo "selected";} ?>>2013</option>
                      <option value="2014" <?php if($data['angkatan']==2014){echo "selected";} ?>>2014</option>
                      <option value="2015" <?php if($data['angkatan']==2015){echo "selected";} ?>>2015</option>
                      <option value="2016" <?php if($data['angkatan']==2016){echo "selected";} ?>>2016</option>
                      <option value="2017" <?php if($data['angkatan']==2017){echo "selected";} ?>>2017</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="text" class="form-control" name="password"  value="<?php echo $data['password_pemilih']; ?>" id="exampleInputPassword1" placeholder="Masukan Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Re-Type Password</label>
                  <input type="text" class="form-control" name="password2" id="exampleInputPassword1" placeholder="Konfirmasi Password">
                </div>
              </div>  
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              <?php } ?>
            <?php echo form_close(); ?>
            <?php } ?>
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

            <h3 class="box-title">Petunjuk Update Pemilih</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <ul>
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