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
