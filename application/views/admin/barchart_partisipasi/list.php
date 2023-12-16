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
                <a href="<?= base_url('admin/tingkat_partisipasi_pemilih/tambah_data') ?>"
                  class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>
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
                    <th style="text-align:center;">MEMILIH (KOTA BOGOR)</th>
                    <th style="text-align:center;">MEMILIH (PROVINSI JAWA BARAT)</th>
                    <th style="text-align:center;">MEMILIH (NASIONAL)</th>
                    <th style="text-align:center;">TIDAK MEMILIH (KOTA BOGOR)</th>
                    <th style="text-align:center;">TIDAK MEMILIH (PROVINSI JAWA BARAT)</th>
                    <th style="text-align:center;">TIDAK MEMILIH (NASIONAL)</th>
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
								foreach($barchart_tingkatpartisipasi as $row){
								?>
                  <tr id="tabel">
                    <td><?=$no++?></td>
                    <td><?= $row->tahun?></td>
                    <td><?= number_format((float)$row->tdkhakpemilih_kotabogor)?></td>
                    <td><?= number_format((float)$row->tdkhakpemilih_provinsi)?></td>
                    <td><?= number_format((float)$row->tdkhakpemilih_nasional)?></td>
                    <td><?= number_format((float)$row->suarasah_tdksah_kotabogor)?></td>
                    <td><?= number_format((float)$row->suarasah_tdksah_provinsi)?></td>
                    <td><?= number_format((float)$row->suarasah_tdksah_nasional)?></td>
                    <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                      href="<?= base_url('admin/tingkat_partisipasi_pemilih/hapus/' . $row->id) ?>"
                      class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>&nbsp;
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
          <img width="100px" src="<?= base_url('assets/logokpu.png')?>" style="margin-left:335px">
          <br> <br>
          <figure class="highcharts-figure">
            <div id="container"></div>
            <p class="highcharts-description">
              Dari penyajian data pada diagram batang di atas, maka dapat diperoleh kesimpulan sebagai berikut:
              <?php foreach($barchart_tingkatpartisipasi as $row) {?>
            <ol>
              <li>Hasil jumlah perolehan suara memilih Kota Bogor di tingkat partisipasi pemilih dalam pemilu presiden
                dan wakil
                presiden tahun <?=$row->tahun?>
                sebanyak <?= number_format((float)$row->tdkhakpemilih_kotabogor)?> atau sekitar
                <?php
                 $a= $row->tdkhakpemilih_kotabogor;
								 $b= $row->suarasah_tdksah_kotabogor;
                 $hasil = $a / ($a + $b)*100;
									?>
                <?= number_format((float)$hasil, 1)?>%
              </li>
              <br>
              <li>Hasil jumlah perolehan suara memilih Provinsi Jawa Barat di tingkat partisipasi pemilih dalam pemilu
                presiden dan
                wakil
                presiden tahun <?=$row->tahun?>
                sebanyak <?= number_format((float)$row->tdkhakpemilih_provinsi)?> atau sekitar
                <?php
                 $a= $row->tdkhakpemilih_provinsi;
								 $b= $row->suarasah_tdksah_provinsi;
                 $hasil = $a / ($a + $b)*100;
									?>
                <?= number_format((float)$hasil, 1)?>%
              </li>
              <br>
              <li>Hasil jumlah perolehan suara memilih tingkat nasional di tingkat partisipasi pemilih dalam pemilu
                presiden dan wakil
                presiden tahun <?=$row->tahun?>
                sebanyak <?= number_format((float)$row->tdkhakpemilih_nasional)?> atau sekitar
                <?php
                 $a= $row->tdkhakpemilih_nasional;
								 $b= $row->suarasah_tdksah_nasional;
                 $hasil = $a / ($a + $b)*100;
									?>
                <?= number_format((float)$hasil, 1)?>%
              </li>
              <br>
              <li>Hasil jumlah perolehan suara tidak memilih Kota Bogor di tingkat partisipasi pemilih dalam pemilu
                presiden dan wakil
                presiden tahun <?=$row->tahun?>
                sebanyak <?= number_format((float)$row->suarasah_tdksah_kotabogor)?> atau sekitar
                <?php
                 $a= $row->suarasah_tdksah_kotabogor;
								 $b= $row->tdkhakpemilih_kotabogor;
                 $hasil = $a / ($a + $b)*100;
									?>
                <?= number_format((float)$hasil, 1)?>%
              </li>
              <br>
              <li>Hasil jumlah perolehan suara tidak memilih Provinsi Jawa Barat di tingkat partisipasi pemilih dalam
                pemilu
                presiden dan wakil
                presiden tahun <?=$row->tahun?>
                sebanyak <?= number_format((float)$row->suarasah_tdksah_provinsi)?> atau sekitar
                <?php
                 $a= $row->suarasah_tdksah_provinsi;
								 $b= $row->tdkhakpemilih_provinsi;
                 $hasil = $a / ($a + $b)*100;
									?>
                <?= number_format((float)$hasil, 1)?>%
              </li>
              <br>
              <li>Hasil jumlah perolehan suara tidak memilih tingkat nasional di tingkat partisipasi pemilih dalam
                pemilu
                presiden dan wakil
                presiden tahun <?=$row->tahun?>
                sebanyak <?= number_format((float)$row->suarasah_tdksah_nasional)?> atau sekitar
                <?php
                 $a= $row->suarasah_tdksah_nasional;
								 $b= $row->tdkhakpemilih_nasional;
                 $hasil = $a / ($a + $b)*100;
									?>
                <?= number_format((float)$hasil, 1)?>%
              </li>
            </ol>
            <?php } ?>
            </p>
          </figure>
        </div>
        <div id="container"></div>
        <script>
        // // Data retrieved from: https://www.uefa.com/uefachampionsleague/history/
        Highcharts.chart('container', {
          chart: {
            type: 'column'
          },
          title: {
            text: 'TINGKAT PARTISIPASI PEMILIH DALAM PEMILU PRESIDEN DAN WAKIL PRESIDEN <?=$row->tahun?>'
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
            name: 'Memilih',
            color: 'rgb(108, 117, 125)',
            data: [<?php
					if(is_array($barchart_tingkatpartisipasi)){
						foreach ($barchart_tingkatpartisipasi as $key => $value) {
								$tdkhakpemilih_kotabogor = $value->tdkhakpemilih_kotabogor;
								$tdkhakpemilih_provinsi = $value->tdkhakpemilih_provinsi;
								$tdkhakpemilih_nasional = $value->tdkhakpemilih_nasional;
								echo "{$tdkhakpemilih_kotabogor},{$tdkhakpemilih_provinsi},{$tdkhakpemilih_nasional}";
						}
					}
					 ?>]
          }, {
            name: 'Tidak Memilih',
            color: 'rgb(255, 0, 0)',
            data: [<?php
					if(is_array($barchart_tingkatpartisipasi)){
						foreach ($barchart_tingkatpartisipasi as $key => $value) {
								$suarasah_tdksah_kotabogor = $value->suarasah_tdksah_kotabogor;
								$suarasah_tdksah_provinsi = $value->suarasah_tdksah_provinsi;
								$suarasah_tdksah_nasional = $value->suarasah_tdksah_nasional;
								echo "{$suarasah_tdksah_kotabogor},{$suarasah_tdksah_provinsi},{$suarasah_tdksah_nasional}";
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
                <a href="<?= base_url('admin/tingkat_partisipasi_pemilih/tambah_data') ?>"
                  class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>
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
                    <th style="text-align:center;">MEMILIH (KOTA BOGOR)</th>
                    <th style="text-align:center;">MEMILIH (PROVINSI JAWA BARAT)</th>
                    <th style="text-align:center;">MEMILIH (NASIONAL)</th>
                    <th style="text-align:center;">TIDAK MEMILIH (KOTA BOGOR)</th>
                    <th style="text-align:center;">TIDAK MEMILIH (PROVINSI JAWA BARAT)</th>
                    <th style="text-align:center;">TIDAK MEMILIH (NASIONAL)</th>
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
								foreach($barchart_tingkatpartisipasi_user as $row){
								?>
                  <tr id="tabel">
                    <td><?=$no++?></td>
                    <td><?= $row->tahun?></td>
                    <td><?= number_format((float)$row->tdkhakpemilih_kotabogor)?></td>
                    <td><?= number_format((float)$row->tdkhakpemilih_provinsi)?></td>
                    <td><?= number_format((float)$row->tdkhakpemilih_nasional)?></td>
                    <td><?= number_format((float)$row->suarasah_tdksah_kotabogor)?></td>
                    <td><?= number_format((float)$row->suarasah_tdksah_provinsi)?></td>
                    <td><?= number_format((float)$row->suarasah_tdksah_nasional)?></td>
                    <td>
                      <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                        href="<?= base_url('admin/tingkat_partisipasi_pemilih/hapus/' . $row->id) ?>"
                        class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>&nbsp;
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
          <h5 class="modal-title" id="exampleModalLabel"> <b>Data Grafik </b></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <br> <br>
          <figure class="highcharts-figure">
            <div id="container"></div>
            <p class="highcharts-description">
              Dari penyajian data pada diagram batang di atas, maka dapat diperoleh kesimpulan sebagai berikut:
              <?php foreach($barchart_tingkatpartisipasi_user as $row) {?>
            <ol>
              <li>Hasil jumlah perolehan suara memilih Kota Bogor di tingkat partisipasi pemilih dalam pemilu presiden
                dan wakil
                presiden tahun <?=$row->tahun?>
                sebanyak <?= number_format((float)$row->tdkhakpemilih_kotabogor)?> atau sekitar
                <?php
                 $a= $row->tdkhakpemilih_kotabogor;
								 $b= $row->suarasah_tdksah_kotabogor;
                 $hasil = $a / ($a + $b)*100;
									?>
                <?= number_format((float)$hasil, 1)?>%
              </li>
              <br>
              <li>Hasil jumlah perolehan suara memilih Provinsi Jawa Barat di tingkat partisipasi pemilih dalam pemilu
                presiden dan
                wakil
                presiden tahun <?=$row->tahun?>
                sebanyak <?= number_format((float)$row->tdkhakpemilih_provinsi)?> atau sekitar
                <?php
                 $a= $row->tdkhakpemilih_provinsi;
								 $b= $row->suarasah_tdksah_provinsi;
                 $hasil = $a / ($a + $b)*100;
									?>
                <?= number_format((float)$hasil, 1)?>%
              </li>
              <br>
              <li>Hasil jumlah perolehan suara memilih tingkat nasional di tingkat partisipasi pemilih dalam pemilu
                presiden dan wakil
                presiden tahun <?=$row->tahun?>
                sebanyak <?= number_format((float)$row->tdkhakpemilih_nasional)?> atau sekitar
                <?php
                 $a= $row->tdkhakpemilih_nasional;
								 $b= $row->suarasah_tdksah_nasional;
                 $hasil = $a / ($a + $b)*100;
									?>
                <?= number_format((float)$hasil, 1)?>%
              </li>
              <br>
              <li>Hasil jumlah perolehan suara tidak memilih Kota Bogor di tingkat partisipasi pemilih dalam pemilu
                presiden dan wakil
                presiden tahun <?=$row->tahun?>
                sebanyak <?= number_format((float)$row->suarasah_tdksah_kotabogor)?> atau sekitar
                <?php
                 $a= $row->suarasah_tdksah_kotabogor;
								 $b= $row->tdkhakpemilih_kotabogor;
                 $hasil = $a / ($a + $b)*100;
									?>
                <?= number_format((float)$hasil, 1)?>%
              </li>
              <br>
              <li>Hasil jumlah perolehan suara tidak memilih Provinsi Jawa Barat di tingkat partisipasi pemilih dalam
                pemilu
                presiden dan wakil
                presiden tahun <?=$row->tahun?>
                sebanyak <?= number_format((float)$row->suarasah_tdksah_provinsi)?> atau sekitar
                <?php
                 $a= $row->suarasah_tdksah_provinsi;
								 $b= $row->tdkhakpemilih_provinsi;
                 $hasil = $a / ($a + $b)*100;
									?>
                <?= number_format((float)$hasil, 1)?>%
              </li>
              <br>
              <li>Hasil jumlah perolehan suara tidak memilih tingkat nasional di tingkat partisipasi pemilih dalam
                pemilu
                presiden dan wakil
                presiden tahun <?=$row->tahun?>
                sebanyak <?= number_format((float)$row->suarasah_tdksah_nasional)?> atau sekitar
                <?php
                 $a= $row->suarasah_tdksah_nasional;
								 $b= $row->tdkhakpemilih_nasional;
                 $hasil = $a / ($a + $b)*100;
									?>
                <?= number_format((float)$hasil, 1)?>%
              </li>
            </ol>
            <?php } ?>
            </p>
          </figure>
        </div>
        <div id="container"></div>
        <script>
        // // Data retrieved from: https://www.uefa.com/uefachampionsleague/history/
        Highcharts.chart('container', {
          chart: {
            type: 'column'
          },
          title: {
            text: 'TINGKAT PARTISIPASI PEMILIH DALAM PEMILU PRESIDEN DAN WAKIL PRESIDEN <?=$row->tahun?>'
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
            name: 'Memilih',
            color: 'rgb(108, 117, 125)',
            data: [<?php
					if(is_array($barchart_tingkatpartisipasi_user)){
						foreach ($barchart_tingkatpartisipasi_user as $key => $value) {
								$tdkhakpemilih_kotabogor = $value->tdkhakpemilih_kotabogor;
								$tdkhakpemilih_provinsi = $value->tdkhakpemilih_provinsi;
								$tdkhakpemilih_nasional = $value->tdkhakpemilih_nasional;
								echo "{$tdkhakpemilih_kotabogor},{$tdkhakpemilih_provinsi},{$tdkhakpemilih_nasional}";
						}
					}
					 ?>]
          }, {
            name: 'Tidak Memilih',
            color: 'rgb(255, 0, 0)',
            data: [<?php
					if(is_array($barchart_tingkatpartisipasi_user)){
						foreach ($barchart_tingkatpartisipasi_user as $key => $value) {
								$suarasah_tdksah_kotabogor = $value->suarasah_tdksah_kotabogor;
								$suarasah_tdksah_provinsi = $value->suarasah_tdksah_provinsi;
								$suarasah_tdksah_nasional = $value->suarasah_tdksah_nasional;
								echo "{$suarasah_tdksah_kotabogor},{$suarasah_tdksah_provinsi},{$suarasah_tdksah_nasional}";
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
<?php }?>