<?php if (is_it()){?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
  </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header" style="background-color:#311b1b;color:white">
              <h3 class="card-title"><b><?= $title2?></b></h3>
              <div class="tombol float-right">
                <a href="<?= base_url('admin/surat_suara/tambah_data') ?>" class="btn btn-primary btn-sm"><i
                    class="fas fa-plus"></i>
                  Tambah
                  Data</a>
                &nbsp;
                <a href="#" style="color:white" class="btn btn-info btn-sm" data-toggle="modal"
                  data-target="#exampleModal"><i class="fas fa-chart-bar"></i> Data Grafik</a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <?php
                echo $this->session->flashdata('pesan');
                ?>
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th rowspan="2" style="text-align:center;">NO.</th>
                    <th rowspan="2" style="text-align:center;">TAHUN</th>
                    <th colspan="6" style="text-align:center;">JUMLAH AKHIR </th>
                    <th rowspan="2" style="text-align:center;">AKSI</th>
                  </tr>
                  <tr>
                    <th style="text-align:center;">SUARA SAH (KOTA BOGOR)</th>
                    <th style="text-align:center;">SUARA SAH (PROVINSI JAWA BARAT)</th>
                    <th style="text-align:center;">SUARA SAH (NASIONAL)</th>
                    <th style="text-align:center;">SUARA TIDAK SAH (KOTA BOGOR)</th>
                    <th style="text-align:center;">SUARA TIDAK SAH (PROVINSI JAWA BARAT)</th>
                    <th style="text-align:center;">SUARA TIDAK SAH (NASIONAL)</th>
                  </tr>
                  <tr href="#tabel">
                    <th style="text-align:center;">1</th>
                    <th style="text-align:center;">2</th>
                    <th style="text-align:center;">3</th>
                    <th style="text-align:center;">4</th>
                    <th style="text-align:center;">5</th>
                    <th style="text-align:center;">6</th>
                    <th style="text-align:center;">7</th>
                    <th style="text-align:center;">8</th>
                    <th style="text-align:center;">9</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
								$no=1;
								foreach($barchart_suratsuara as $row){
								?>
                  <tr id="tabel">
                    <td><?=$no++?></td>
                    <td><?= $row->tahun?></td>
                    <td><?= number_format((float)$row->suarasah_kotabogor)?></td>
                    <td><?= number_format((float)$row->suarasah_provinsi)?></td>
                    <td><?= number_format((float)$row->suarasah_nasional)?></td>
                    <td><?= number_format((float)$row->suaratdksah_kotabogor)?></td>
                    <td><?= number_format((float)$row->suaratdksah_provinsi)?></td>
                    <td><?= number_format((float)$row->suaratdksah_nasional)?></td>
                    <td>
                      <a href="<?= base_url('admin/surat_suara/edit/' . $row->id) ?>" class="btn btn-warning btn-sm"><i
                          class="fa fa-edit"></i></a> &nbsp;
                      <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                        href="<?= base_url('admin/surat_suara/hapus/' . $row->id) ?>" class="btn btn-danger btn-sm"><i
                          class="fa fa-trash"></i></a>&nbsp;
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> <b>Data Grafik</b></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <figure class="highcharts-figure">
            <div id="container2"></div>
            <p class="highcharts-description">
              Dari penyajian data pada diagram batang di atas, maka dapat diperoleh kesimpulan sebagai berikut:
              <?php foreach($barchart_suratsuara as $row) {?>
            <ol>
              <li>Hasil jumlah perolehan suara sah Kota Bogor di surat suara sah dan tidak sah dalam pemilu presiden dan
                wakil presiden tahun <?=$row->tahun?>
                sebanyak <?= number_format((float)$row->suarasah_kotabogor)?> atau sekitar
                <?php
                 $a= $row->suarasah_kotabogor;
                 $b= $row->suaratdksah_kotabogor;
                 $hasil = $a / ($a + $b)*100;
                  ?>
                <?= number_format((float)$hasil, 1)?>%
              </li>
              <br>
              <li>Hasil jumlah perolehan suara sah Provinsi Jawa Barat di surat suara sah dan tidak sah dalam pemilu
                presiden dan wakil presiden tahun <?=$row->tahun?>
                sebanyak <?= number_format((float)$row->suarasah_provinsi)?> atau sekitar
                <?php
                 $a= $row->suarasah_provinsi;
                 $b= $row->suaratdksah_provinsi;
                 $hasil = $a / ($a + $b)*100;
                  ?>
                <?= number_format((float)$hasil, 1)?>%
              </li>
              <br>
              <li>Hasil jumlah perolehan suara sah tingkat nasionall di surat suara sah dan tidak sah dalam pemilu
                presiden dan wakil presiden tahun <?=$row->tahun?>
                sebanyak <?= number_format((float)$row->suarasah_nasional)?> atau sekitar
                <?php
                 $a= $row->suarasah_nasional;
                 $b= $row->suaratdksah_nasional;
                 $hasil = $a / ($a + $b)*100;
                  ?>
                <?= number_format((float)$hasil, 1)?>%
              </li>
              <br>
              <li>Hasil jumlah perolehan suara tidak sah Kota Bogor di surat suara sah dan tidak sah dalam pemilu
                presiden dan wakil presiden tahun <?=$row->tahun?>
                sebanyak <?= number_format((float)$row->suaratdksah_kotabogor)?> atau sekitar
                <?php
                 $a= $row->suaratdksah_kotabogor;
                 $b= $row->suarasah_kotabogor;
                 $hasil = $a / ($a + $b)*100;
                  ?>
                <?= number_format((float)$hasil, 1)?>%
              </li>
              <br>
              <li>Hasil jumlah perolehan suara tidak sah Provinsi Jawa Barat di surat suara sah dan tidak sah dalam
                pemilu presiden dan wakil presiden tahun <?=$row->tahun?>
                sebanyak <?= number_format((float)$row->suaratdksah_provinsi)?> atau sekitar
                <?php
                 $a= $row->suaratdksah_provinsi;
                 $b= $row->suarasah_provinsi;
                 $hasil = $a / ($a + $b)*100;
                  ?>
                <?= number_format((float)$hasil, 1)?>%
              </li>
              <br>
              <li>Hasil jumlah perolehan suara tidak sah tingkat nasional di surat suara sah dan tidak sah dalam pemilu
                presiden dan wakil presiden tahun <?=$row->tahun?>
                sebanyak <?= number_format((float)$row->suaratdksah_nasional)?> atau sekitar
                <?php
                 $a= $row->suaratdksah_nasional;
                 $b= $row->suarasah_nasional;
                 $hasil = $a / ($a + $b)*100;
                  ?>
                <?= number_format((float)$hasil, 1)?>%
              </li>
            </ol>
            <?php }?>
            </p>
          </figure>
          <div id="container2"></div>
          <script>
          // // Data retrieved from: https://www.uefa.com/uefachampionsleague/history/
          Highcharts.chart('container2', {
            chart: {
              type: 'column'
            },
            title: {
              text: 'SURAT SUARA SAH DAN TIDAK SAH DALAM PEMILU PRESIDEN DAN WAKIL PRESIDEN TAHUN <?=$row->tahun?>'
            },
            xAxis: {
              categories: ['KOTA BOGOR', 'PROVINSI JAWA BARAT', 'NASIONAL']
            },
            yAxis: {
              labels: {
                format: '{value}%'
              },
              title: {
                text: 'persen'
              }
            },
            tooltip: {
              pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.1f}%)<br/>',
              shared: true
            },
            plotOptions: {
              column: {
                stacking: 'percent'
              }
            },
            series: [{
              name: 'Suara Tidak Sah',
              color: 'rgb(108, 117, 125)',
              data: [<?php
          if(is_array($barchart_suratsuara_user)){
            foreach ($barchart_suratsuara_user as $key => $value) {
                $suaratdksah_kotabogor = $value->suaratdksah_kotabogor;
                $suaratdksah_provinsi = $value->suaratdksah_provinsi;
                $suaratdksah_nasional = $value->suaratdksah_nasional;
                echo "{$suaratdksah_kotabogor},{$suaratdksah_provinsi},{$suaratdksah_nasional}";
            }
          }
           ?>]
            }, {
              name: 'Suara Sah',
              color: 'rgb(255, 0, 0)',
              data: [<?php
          if(is_array($barchart_suratsuara_user)){
            foreach ($barchart_suratsuara_user as $key => $value) {
                $suarasah_kotabogor = $value->suarasah_kotabogor;
                $suarasah_provinsi = $value->suarasah_provinsi;
                $suarasah_nasional = $value->suarasah_nasional;
                echo "{$suarasah_kotabogor},{$suarasah_provinsi},{$suarasah_nasional}";
            }
          }
           ?>]
            }]
          });
          </script>
        </div>
      </div>
    </div>

  </div>
</div>

<?php } else {?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
  </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header" style="background-color:#311b1b;color:white">
              <h3 class="card-title"><b><?= $title2?></b></h3>
              <div class="tombol float-right">
                <a href="<?= base_url('admin/surat_suara/tambah_data') ?>" class="btn btn-primary btn-sm"><i
                    class="fas fa-plus"></i>
                  Tambah
                  Data</a>
                &nbsp;
                <a href="#" style="color:white" class="btn btn-info btn-sm" data-toggle="modal"
                  data-target="#exampleModal"><i class="fas fa-chart-bar"></i> Data Grafik</a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <?php
                echo $this->session->flashdata('pesan');
                ?>
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th rowspan="2" style="text-align:center;">NO.</th>
                    <th rowspan="2" style="text-align:center;">TAHUN</th>
                    <th colspan="6" style="text-align:center;">JUMLAH AKHIR </th>
                    <th rowspan="2" style="text-align:center;">AKSI</th>
                  </tr>
                  <tr>
                    <th style="text-align:center;">SUARA SAH (KOTA BOGOR)</th>
                    <th style="text-align:center;">SUARA SAH (PROVINSI JAWA BARAT)</th>
                    <th style="text-align:center;">SUARA SAH (NASIONAL)</th>
                    <th style="text-align:center;">SUARA TIDAK SAH (KOTA BOGOR)</th>
                    <th style="text-align:center;">SUARA TIDAK SAH (PROVINSI JAWA BARAT)</th>
                    <th style="text-align:center;">SUARA TIDAK SAH (NASIONAL)</th>
                  </tr>
                  <tr href="#tabel">
                    <th style="text-align:center;">1</th>
                    <th style="text-align:center;">2</th>
                    <th style="text-align:center;">3</th>
                    <th style="text-align:center;">4</th>
                    <th style="text-align:center;">5</th>
                    <th style="text-align:center;">6</th>
                    <th style="text-align:center;">7</th>
                    <th style="text-align:center;">8</th>
                    <th style="text-align:center;">9</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
								$no=1;
								foreach($barchart_suratsuara_user as $row){
								?>
                  <tr id="tabel">
                    <td><?=$no++?></td>
                    <td><?= $row->tahun?></td>
                    <td><?= number_format((float)$row->suarasah_kotabogor)?></td>
                    <td><?= number_format((float)$row->suarasah_provinsi)?></td>
                    <td><?= number_format((float)$row->suarasah_nasional)?></td>
                    <td><?= number_format((float)$row->suaratdksah_kotabogor)?></td>
                    <td><?= number_format((float)$row->suaratdksah_provinsi)?></td>
                    <td><?= number_format((float)$row->suaratdksah_nasional)?></td>
                    <td>
                      <a href="<?= base_url('admin/surat_suara/edit/' . $row->id) ?>" class="btn btn-warning btn-sm"><i
                          class="fa fa-edit"></i></a> &nbsp;
                      <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                        href="<?= base_url('admin/surat_suara/hapus/' . $row->id) ?>" class="btn btn-danger btn-sm"><i
                          class="fa fa-trash"></i></a>&nbsp;
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> <b>Data Grafik</b></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <figure class="highcharts-figure">
            <div id="container2"></div>
            <p class="highcharts-description">
              Dari penyajian data pada diagram batang di atas, maka dapat diperoleh kesimpulan sebagai berikut:
              <?php foreach($barchart_suratsuara_user as $row) {?>
            <ol>
              <li>Hasil jumlah perolehan suara sah Kota Bogor di surat suara sah dan tidak sah dalam pemilu presiden dan
                wakil presiden tahun <?=$row->tahun?>
                sebanyak <?= number_format((float)$row->suarasah_kotabogor)?> atau sekitar
                <?php
                 $a= $row->suarasah_kotabogor;
                 $b= $row->suaratdksah_kotabogor;
                 $hasil = $a / ($a + $b)*100;
                  ?>
                <?= number_format((float)$hasil, 1)?>%
              </li>
              <br>
              <li>Hasil jumlah perolehan suara sah Provinsi Jawa Barat di surat suara sah dan tidak sah dalam pemilu
                presiden dan wakil presiden tahun <?=$row->tahun?>
                sebanyak <?= number_format((float)$row->suarasah_provinsi)?> atau sekitar
                <?php
                 $a= $row->suarasah_provinsi;
                 $b= $row->suaratdksah_provinsi;
                 $hasil = $a / ($a + $b)*100;
                  ?>
                <?= number_format((float)$hasil, 1)?>%
              </li>
              <br>
              <li>Hasil jumlah perolehan suara sah tingkat nasionall di surat suara sah dan tidak sah dalam pemilu
                presiden dan wakil presiden tahun <?=$row->tahun?>
                sebanyak <?= number_format((float)$row->suarasah_nasional)?> atau sekitar
                <?php
                 $a= $row->suarasah_nasional;
                 $b= $row->suaratdksah_nasional;
                 $hasil = $a / ($a + $b)*100;
                  ?>
                <?= number_format((float)$hasil, 1)?>%
              </li>
              <br>
              <li>Hasil jumlah perolehan suara tidak sah Kota Bogor di surat suara sah dan tidak sah dalam pemilu
                presiden dan wakil presiden tahun <?=$row->tahun?>
                sebanyak <?= number_format((float)$row->suaratdksah_kotabogor)?> atau sekitar
                <?php
                 $a= $row->suaratdksah_kotabogor;
                 $b= $row->suarasah_kotabogor;
                 $hasil = $a / ($a + $b)*100;
                  ?>
                <?= number_format((float)$hasil, 1)?>%
              </li>
              <br>
              <li>Hasil jumlah perolehan suara tidak sah Provinsi Jawa Barat di surat suara sah dan tidak sah dalam
                pemilu presiden dan wakil presiden tahun <?=$row->tahun?>
                sebanyak <?= number_format((float)$row->suaratdksah_provinsi)?> atau sekitar
                <?php
                 $a= $row->suaratdksah_provinsi;
                 $b= $row->suarasah_provinsi;
                 $hasil = $a / ($a + $b)*100;
                  ?>
                <?= number_format((float)$hasil, 1)?>%
              </li>
              <br>
              <li>Hasil jumlah perolehan suara tidak sah tingkat nasional di surat suara sah dan tidak sah dalam pemilu
                presiden dan wakil presiden tahun <?=$row->tahun?>
                sebanyak <?= number_format((float)$row->suaratdksah_nasional)?> atau sekitar
                <?php
                 $a= $row->suaratdksah_nasional;
                 $b= $row->suarasah_nasional;
                 $hasil = $a / ($a + $b)*100;
                  ?>
                <?= number_format((float)$hasil, 1)?>%
              </li>
            </ol>
            <?php }?>
            </p>
          </figure>
          <div id="container2"></div>
          <script>
          // // Data retrieved from: https://www.uefa.com/uefachampionsleague/history/
          Highcharts.chart('container2', {
            chart: {
              type: 'column'
            },
            title: {
              text: 'SURAT SUARA SAH DAN TIDAK SAH DALAM PEMILU PRESIDEN DAN WAKIL PRESIDEN TAHUN <?=$row->tahun?>'
            },
            xAxis: {
              categories: ['KOTA BOGOR', 'PROVINSI JAWA BARAT', 'NASIONAL']
            },
            yAxis: {
              labels: {
                format: '{value}%'
              },
              title: {
                text: 'persen'
              }
            },
            tooltip: {
              pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.1f}%)<br/>',
              shared: true
            },
            plotOptions: {
              column: {
                stacking: 'percent'
              }
            },
            series: [{
              name: 'Suara Tidak Sah',
              color: 'rgb(108, 117, 125)',
              data: [<?php
          if(is_array($barchart_suratsuara_user)){
            foreach ($barchart_suratsuara_user as $key => $value) {
                $suaratdksah_kotabogor = $value->suaratdksah_kotabogor;
                $suaratdksah_provinsi = $value->suaratdksah_provinsi;
                $suaratdksah_nasional = $value->suaratdksah_nasional;
                echo "{$suaratdksah_kotabogor},{$suaratdksah_provinsi},{$suaratdksah_nasional}";
            }
          }
           ?>]
            }, {
              name: 'Suara Sah',
              color: 'rgb(255, 0, 0)',
              data: [<?php
          if(is_array($barchart_suratsuara_user)){
            foreach ($barchart_suratsuara_user as $key => $value) {
                $suarasah_kotabogor = $value->suarasah_kotabogor;
                $suarasah_provinsi = $value->suarasah_provinsi;
                $suarasah_nasional = $value->suarasah_nasional;
                echo "{$suarasah_kotabogor},{$suarasah_provinsi},{$suarasah_nasional}";
            }
          }
           ?>]
            }]
          });
          </script>
        </div>
      </div>
    </div>

  </div>
</div>
<?php }?>