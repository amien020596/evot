<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Tambah Kandidat BEM
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
              <h3 class="box-title">Tambah Kandidat Wakil BEM</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php if(isset($senat)) { ?>
            <?php foreach($senat as $data){ ?>
            <?php echo form_open_multipart('update-kandidat-senat/'.$data['idkandidat_senat']); ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">No urut :</label>
                  <input type="text" class="form-control" name="no_urut" value="<?php echo $data['no_urut']; ?>" id="exampleInputEmail1" placeholder="Masukan No Urut">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Kandidat :</label>
                  <input type="text" class="form-control" name="nama" value="<?php echo $data['nama_kandidat']; ?>" id="exampleInputPassword1" placeholder="Masukan Nama Ketua">
                </div>
                <div class="form-group">
                  <label>Angaktan :</label>
                    <select class="form-control" name="angkatan">
                    <option value="">-Pilih Angkatan-</option> 
                      <option value="2015"  <?php if($data['angkatan']==2015){echo "selected";} ?>>2015</option>
                      <option value="2016"  <?php if($data['angkatan']==2016){echo "selected";} ?>>2016</option>
                      <option value="2017"  <?php if($data['angkatan']==2017){echo "selected";} ?>>2017</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File Foto :</label>
                  <input type="file" name="foto_file" id="exampleInputFile">
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              <?php } ?>
              <?php } ?>
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

            <h3 class="box-title">Petunjuk Pengubahan</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <ul>
              <li>No urut :</li>
                <ul>
                  <li>Isikan dengan nomor urut calon</li>
                  <li>Kolom NIM Tidak boleh Kosong</li>
                </ul>
                <li>Nama Kandidat:</li>
                <ul>
                  <li>Nama berupa Huruf</li>
                  <li>Kolom Nama Tidak boleh Kosong</li>
                </ul>
                <li>Angkatan :</li>
                <ul>
                  <li>Pilih Kolom Angkatan Sesuai data Pemilih</li>
                  <li>Kolom Angkatan Tidak boleh Kosong</li>
                </ul>
                <li>File Foto :</li>
                <ul>
                  <li>Dimensi foto (fit) 200px X 325px potrait</li>
                  <li>Format file foto yang diijinkan hanya PNG</li>
                  <li>File foto Tidak Boleh Kosong</li>
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