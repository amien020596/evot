<?php 
  $warna = array('#e74c3c', '#27ae60', '#e67e22', '#3498db', '#9b59b6', '#34495e', '#bdc3c7', '#f39c12');
  for ($i=1; $i <= $xkandidat_bem; $i++) { 
    $suara = $this->Admin_model->hitung_bem($i);
    $chart_bem[] = array(
      'label' => "Paslon $i",
      'data'  => $suara,
      'color' => $warna[$i-1]
    ); 
  } 
?>

<!-- Main content -->
<section class="content">

      <div class="row">
        <div class="col-md-12">
        <!-- Donut chart -->
        <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-pie-chart" aria-hidden="true"></i>
              <h3 class="box-title">Grafik Perolehan Suara BEM</h3>
            </div>
            <div class="box-body">
                <div id="donut-bem" style="height: 300px;"></div>
            </div>
            <!-- /.box-body-->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
      <div class="col-md-12">
        <div class="box">
            <div class="box-header">
              <h1 class="box-title"><i class="fa fa-database" aria-hidden="true"></i> Tabel Rekapitulasi Suara BEM</h1>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table text-upper">
              <tr>
                  <th>NO</th>
                  <th colspan="2">Pasangan Calon</th>
                  <th>Perolehan Suara</th>
              </tr>
              <?php 
                $this->load->model('Admin_model');
                for ($i= 1; $i <= $xkandidat_bem; $i++) { 
                  $data = $this->Admin_model->get_data_kandidat_bem($i);
                  $e = $this->Admin_model->hitung_bem($i);
              ?>
                <tr>
                  <td class="text-center bigger"><?php echo $data->no_urut; ?></td>
                  <td class="foto">
                      <ul class="foto_paslon">
                        <li><img src="<?php echo base_url('assets');?>/img/bem/kabem<?php echo $data->no_urut;?>.png" style="width:40px"></li>
                        <li><img src="<?php echo base_url('assets');?>/img/bem/wakabem<?php echo $data->no_urut;?>.png" style="width:40px"></li>
                      </ul>
                  </td>
                  <td class="nama"><?php echo "$data->nama_ketua <br> $data->nama_wakil";?></td>
                  <td class="text-center bigger"><?php echo "$e / $bem_sudah"; ?></td>
                </tr>
                <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      
      
      </div>

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

  
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('assets');?>/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('assets');?>/bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets');?>/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets');?>/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets');?>/dist/js/demo.js"></script>
<!-- FLOT CHARTS -->
<script src="<?php echo base_url('assets');?>/plugins/flot/jquery.flot.min.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="<?php echo base_url('assets');?>/plugins/flot/jquery.flot.resize.min.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="<?php echo base_url('assets');?>/plugins/flot/jquery.flot.pie.min.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="<?php echo base_url('assets');?>/plugins/flot/jquery.flot.categories.min.js"></script>
<!-- Page script -->
<script>
  $(function () {

    var donutBEM = <?php echo json_encode($chart_bem); ?>;

    $.plot("#donut-bem", donutBEM, {
      series: {
        pie: {
          show: true,
          radius: 1,
          innerRadius: 0.5,
          label: {
            show: true,
            radius: 2.2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: false
      }
    });

  });

  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
        + label
        + "<br>"
        + Math.round(series.percent) + "%</div>";
  }
</script>
</body>
</html>
