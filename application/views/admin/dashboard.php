  <?php if (is_it()) { ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- /.card-body -->
          <!-- /.card -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg" style="background-color:#fc8434;">
              <div class="inner">
                <h3><?= $total_partai?></h3>

                <p>Partai</p>
              </div>

              <a href="<?= base_url('admin/partai')?>" class="small-box-footer" style="background-color:#311b1b;">Lihat
                Data&nbsp;<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg" style="background-color:#fc8434;">
              <div class="inner">
                <h3><?= $total_dasarhukum?></h3>

                <p>Dasar Hukum</p>
              </div>
              <a href="<?= base_url('admin/dasar_hukum')?>" class="small-box-footer"
                style="background-color:#311b1b;">Lihat Data&nbsp;<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg" style="background-color:#fc8434;">
              <div class="inner">
                <h3><?= $total_jadwal?></h3>

                <p>Jadwal Pilpres</p>
              </div>

              <a href="<?= base_url('admin/jadwal')?>" class="small-box-footer" style="background-color:#311b1b;">Lihat
                Data&nbsp;<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg" style="background-color:#fc8434;">
              <div class="inner">
                <h3>
                  <?= $total_logomaskot?>
                </h3>

                <p>Logo dan Maskot</p>
              </div>

              <a href="<?= base_url('admin/logo_maskot')?>" class="small-box-footer"
                style="background-color:#311b1b;">Lihat Data&nbsp;<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg" style="background-color:#fc8434;">
              <div class="inner">
                <h3><?= $total_pasangancalon?></h3>

                <p>Pasangan Calon</p>
              </div>

              <a href="<?= base_url('admin/pasangan_calon')?>" class="small-box-footer"
                style="background-color:#311b1b;">Lihat Data&nbsp;<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg" style="background-color:#fc8434;">
              <div class="inner">
                <h3><?= $total_viewmap?></h3>

                <p>Peta Politik</p>
              </div>

              <a href="<?= base_url('admin/peta_politik')?>" class="small-box-footer"
                style="background-color:#311b1b;">Lihat Data&nbsp;<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-sm-6">
            <div class="card card-primary card-tabs">
              <div class="card-header p-0 pt-1" style="background-color:#311b1b;">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="pt-2 px-3">
                    <h3 class="card-title"><i class="fas fa-chart-bar mr-1"></i> Partisipasi</h3>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill"
                      href="#barchart-tingkatpartisipasi" role="tab" aria-controls="custom-tabs-one-home"
                      aria-selected="true">Tingkat Partisipasi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill"
                      href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile"
                      aria-selected="false">Surat Suara</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                  <div class="tab-pane fade show active" id="barchart-tingkatpartisipasi" role="tabpanel"
                    aria-labelledby="custom-tabs-one-home-tab">
                    <!-- /.content-header
                  <section class="content">
                    <div class="row mt-2">
                      <div class="col-12">
                        <div class="card">
                          <div class="card-header">
                            <div class="card-title">
                              <h3><b>TINGKAT PARTISIPASI PEMILIH DALAM PEMILU PRESIDEN DAN WAKIL PRESIDEN
                                </b></h3>
                            </div>
                          </div>
                          <?= $this->session->flashdata('message'); ?>
                          <?= validation_errors() ?>
                          <div class="card-body">
                            <a href="<?= base_url('admin/tingkat_partisipasi_pemilih/tambah') ?>"
                              class="btn btn-primary"><i class="fas fa-plus"></i>
                              Tambah
                              Data</a>
                            &nbsp;
                            <a href="#" class="btn btn-info" data-toggle="modal" data-target="#exampleModal"><i
                                class="fas fa-chart-bar mr-1"></i>
                              Grafik Data</a>
                            <br><br>
                            <table id="example1" class="table table-bordered table-striped">
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
                                    <a href="<?= base_url('admin/tingkat_partisipasi_pemilih/edit/' . $row->id) ?>"
                                      class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a> &nbsp;
                                    <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                                      href="<?= base_url('admin/tingkat_partisipasi_pemilih/hapus/' . $row->id) ?>"
                                      class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>&nbsp;
                                  </td>
                                </tr>
                                <?php } ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>-->
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
                  <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel"
                    aria-labelledby="custom-tabs-one-profile-tab">
                    <!-- /.content-header
                  <section class="content">
                    <div class="row mt-2">
                      <div class="col-12">
                        <div class="card">
                          <div class="card-header">
                            <div class="card-title">
                              <h3><b>SURAT SUARA SAH DAN TIDAK SAH DALAM PEMILU PRESIDEN DAN WAKIL PRESIDEN</b></h3>
                            </div>
                          </div>
                          <?= $this->session->flashdata('message'); ?>
                          <?= validation_errors() ?>
                          <div class="card-body">
                            <a href="<?= base_url('admin/surat_suara/tambah') ?>"
                              class="btn btn-primary btn-sm float-left"><i class="fas fa-plus"></i>Tambah
                              Data</a>
                            &nbsp;
                            <a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal"><i
                                class="fas fa-chart-bar mr-1"></i>
                              Grafik Data</a>
                            <br><br>
                            <table id="example1" class="table table-bordered table-striped">
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
                                    <a href="<?= base_url('admin/surat_suara/edit/' . $row->id) ?>"
                                      class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a> &nbsp;
                                    <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                                      href="<?= base_url('admin/surat_suara/hapus/' . $row->id) ?>"
                                      class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>&nbsp;
                                  </td>
                                </tr>
                                <?php } ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>-->
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
              <!-- /.card -->
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="card card-primary card-tabs">
              <div class="card-header p-0 pt-1" style="background-color:#311b1b;">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="pt-2 px-3">
                    <h3 class="card-title"><i class="fas fa-chart-pie mr-1"></i>Hasil Pemilu</h3>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#piechart-kota"
                      role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Kota Bogor</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#piechart-provinsi"
                      role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Provinsi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#piechart-nasional"
                      role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Nasional</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                  <div class="tab-pane fade show active" id="piechart-kota" role="tabpanel"
                    aria-labelledby="custom-tabs-one-home-tab">
                    <!-- /.content-header
  <section class="content">
    <div class="row mt-2">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <div class="card-title">
              <h3><b>Perolehan Suara Sah Pasangan Calon di Kota Bogor</b></h3>
            </div>
          </div>
          <?= $this->session->flashdata('message'); ?>
          <?= validation_errors() ?>
          <div class="card-body">
            <a href="<?= base_url('admin/perolehan_suarasah_kota/tambah') ?>" class="btn btn-primary"><i
                class="fas fa-plus"></i>
              Tambah
              Data</a>&nbsp;

            <a href="#" class="btn btn-info" data-toggle="modal" data-target="#exampleModal"><i
                class="fas fa-chart-pie mr-1"></i>
              Grafik Data</a>
            <br><br>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th rowspan="2" style="text-align: center;">NO.</th>
                  <th rowspan="2" colspan="2" style="text-align: center;">NAMA PASANGAN CALON PRESIDEN DAN WAKIL
                    PRESIDEN</th>
                  <th colspan="2" style="text-align: center;">RINCIAN JUMLAH PEROLEHAN SUARA PASANGAN CALON PRESIDEN
                    DAN WAKIL PRESIDEN </th>
                  <th rowspan="2" style="text-align: center;">Aksi</th>
                </tr>
                <tr>
                  <th style="text-align: center;">KOTA BOGOR</th>
                  <th style="text-align: center;">%</th>
                </tr>
                <tr href="#tabel">
                  <th style="text-align: center;">1</th>
                  <th style="text-align: center;" colspan="2">2</th>
                  <th style="text-align: center;">3</th>
                  <th style="text-align: center;">4</th>
                  <th style="text-align: center;">5</th>
                </tr>
              </thead>
              <tbody>
                <?php
                      $no = 1;
                      foreach ($piechartkota_user as $row) { ?>
                <tr id="tabel">
                  <td>1</td>
                  <td colspan="2"><?= $row->nama_capres_satu?></td>
                  <td><?= number_format((float)$row->rincian_kotabogor_satu)?></td>
                  <td><?= number_format((float)$row->rincian_persen_kotabogor_satu, 1 )?>%</td>
                  <td rowspan="3">
                    <a href="<?= base_url('admin/perolehan_suarasah_kota/edit/' . $row->id) ?>"
                      class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                    <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                      href="<?= base_url('admin/perolehan_suarasah_kota/hapus/' . $row->id) ?>"
                      class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td colspan="2"><?=  $row->nama_capres_dua?></td>
                  <td><?= number_format((float)$row->rincian_kotabogor_dua)?></td>
                  <td><?= number_format((float)$row->rincian_persen_kotabogor_dua, 1)?>%</td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>-->
                    <div id="piechart_kota"></div>
                    <script>
                    // Data retrieved from https://netmarketshare.com/
                    // Make monochrome colors
                    var pieColors = (function() {
                      var colors = [
                          'rgb(255, 128, 0)',
                          'rgb(255, 0, 0)'
                        ],
                        base = Highcharts.getOptions().colors[0],
                        i;

                      for (i = 0; i < 10; i += 1) {
                        // Start out with a darkened base color (negative brighten), and end
                        // up with a much brighter color
                        colors.push(Highcharts.color(base).brighten((i - 3) / 7).get());
                      }
                      return colors;
                    }());

                    // Build the chart
                    Highcharts.chart('piechart_kota', {
                      chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                      },
                      title: {
                        text: 'PEROLEHAN SUARA SAH PASANGAN CALON PRESIDEN DAN WAKIL PRESIDEN TAHUN <?=$row->tahun?> DI KOTA BOGOR'
                      },
                      tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                      },
                      accessibility: {
                        point: {
                          valueSuffix: '%'
                        }
                      },
                      plotOptions: {
                        pie: {
                          allowPointSelect: true,
                          cursor: 'pointer',
                          colors: pieColors,
                          dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
                            distance: -50,
                            filter: {
                              property: 'percentage',
                              operator: '>',
                              value: 4
                            }
                          }
                        }
                      },
                      series: [{
                        name: 'Jumlah Persen',
                        data: [
                          <?php
									      $no = 1;
					if(is_array($piechartkota_user)){
						foreach ($piechartkota_user as $key => $value) {
							  $nama_capres_satu = $value->nama_capres_satu;
								$nama_capres_dua = $value->nama_capres_dua;
								$rincian_kotabogor_satu = $value->rincian_kotabogor_satu;
								$rincian_persen_kotabogor_satu = $value->rincian_persen_kotabogor_satu;
								$rincian_kotabogor_dua = $value->rincian_kotabogor_dua;
								$rincian_persen_kotabogor_dua = $value->rincian_persen_kotabogor_dua;
								echo "{ name:'(1)$nama_capres_satu <br>Perolehan Suara: $rincian_kotabogor_satu', y:$rincian_kotabogor_satu},";
									echo "{ name:'(2)$nama_capres_dua <br>Perolehan Suara: $rincian_kotabogor_dua', y:$rincian_kotabogor_dua},";
						}
					}
					 ?>
                        ]
                      }]
                    });
                    </script>
                  </div>
                  <div class="tab-pane fade" id="piechart-provinsi" role="tabpanel"
                    aria-labelledby="custom-tabs-one-profile-tab">
                    <!-- /.content-header
                <section class="content">
                  <div class="row mt-2">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-header">
                          <div class="card-title">
                            <h3>Perolehan Suara Sah Pasangan Calon di Provinsi</h3>
                          </div>
                        </div>
                        <?= $this->session->flashdata('message'); ?>
                        <?= validation_errors() ?>
                        <div class="card-body">
                          <a href="<?= base_url('admin/perolehan_suarasah_provinsi/tambah') ?>"
                            class="btn btn-primary"><i class="fas fa-plus"></i>
                            Tambah
                            Data</a>&nbsp;
                          <a href="#" class="btn btn-info" data-toggle="modal" data-target="#exampleModal"><i
                              class="fas fa-chart-pie mr-1"></i>
                            Grafik Data</a>
                          <br><br>
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                <th rowspan="2" style="text-align: center;">NO.</th>
                                <th rowspan="2" colspan="2" style="text-align: center;">NAMA PASANGAN CALON PRESIDEN DAN
                                  WAKIL
                                  PRESIDEN</th>
                                <th colspan="2" style="text-align: center;">RINCIAN JUMLAH PEROLEHAN SUARA PASANGAN
                                  CALON PRESIDEN
                                  DAN WAKIL PRESIDEN </th>
                                <th rowspan="2" style="text-align: center;">Aksi</th>
                              </tr>
                              <tr>
                                <th style="text-align: center;">PROVINSI</th>
                                <th style="text-align: center;">%</th>
                              </tr>
                              <tr href="#tabel">
                                <th style="text-align: center;">1</th>
                                <th style="text-align: center;" colspan="2">2</th>
                                <th style="text-align: center;">3</th>
                                <th style="text-align: center;">4</th>
                                <th style="text-align: center;">5</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                      $no = 1;
                      foreach ($piechartprovinsi_user as $row) { ?>
                              <tr id="tabel">
                                <td><?= $no++ ?></td>
                                <td colspan="2"><?= $row->nama_capres_satu?></td>
                                <td><?= number_format((float)$row->rincian_provinsi_satu)?></td>
                                <td><?= number_format((float)$row->rincian_persen_provinsi_satu, 1)?>%</td>
                                <td rowspan="3">
                                  <a href="<?= base_url('admin/perolehan_suarasah_provinsi/edit/' . $row->id) ?>"
                                    class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                  <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                                    href="<?= base_url('admin/perolehan_suarasah_provinsi/hapus/' . $row->id) ?>"
                                    class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td colspan="2"><?=  $row->nama_capres_dua?></td>
                                <td><?= number_format((float)$row->rincian_provinsi_dua)?></td>
                                <td><?= number_format((float)$row->rincian_persen_provinsi_dua, 1)?>%</td>
                              </tr>
                              <?php } ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>-->
                    <div id="piechart_provinsi"></div>
                    <script>
                    // Data retrieved from https://netmarketshare.com/
                    // Make monochrome colors
                    var pieColors = (function() {
                      var colors = [
                          'rgb(255, 128, 0)',
                          'rgb(255, 0, 0)'
                        ],
                        base = Highcharts.getOptions().colors[0],
                        i;

                      for (i = 0; i < 10; i += 1) {
                        // Start out with a darkened base color (negative brighten), and end
                        // up with a much brighter color
                        colors.push(Highcharts.color(base).brighten((i - 3) / 7).get());
                      }
                      return colors;
                    }());

                    // Build the chart
                    Highcharts.chart('piechart_provinsi', {
                      chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                      },
                      title: {
                        text: 'PEROLEHAN SUARA SAH PASANGAN CALON PRESIDEN DAN WAKIL PRESIDEN TAHUN <?=$row->tahun?> DI PROVINSI JAWA BARAT'
                      },
                      tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                      },
                      accessibility: {
                        point: {
                          valueSuffix: '%'
                        }
                      },
                      plotOptions: {
                        pie: {
                          allowPointSelect: true,
                          cursor: 'pointer',
                          colors: pieColors,
                          dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
                            distance: -50,
                            filter: {
                              property: 'percentage',
                              operator: '>',
                              value: 4
                            }
                          }
                        }
                      },
                      series: [{
                        name: 'Jumlah Persen',
                        data: [
                          <?php
					if(is_array($piechartprovinsi_user)){
						foreach ($piechartprovinsi_user as $key => $value) {
							  $nama_capres_satu = $value->nama_capres_satu;
								$nama_capres_dua = $value->nama_capres_dua;
								$rincian_provinsi_satu = $value->rincian_provinsi_satu;
								$rincian_persen_provinsi_satu = $value->rincian_persen_provinsi_satu;
								$rincian_provinsi_dua = $value->rincian_provinsi_dua;
								$rincian_persen_provinsi_dua = $value->rincian_persen_provinsi_dua;
								echo "{ name:'(1)$nama_capres_satu <br>Perolehan Suara: $rincian_provinsi_satu', y:$rincian_provinsi_satu},";
									echo "{ name:'(2)$nama_capres_dua <br>Perolehan Suara: $rincian_provinsi_dua', y:$rincian_provinsi_dua},";
						}
					}
					 ?>
                        ]
                      }]
                    });
                    </script>
                  </div>
                  <div class="tab-pane fade" id="piechart-nasional" role="tabpanel"
                    aria-labelledby="custom-tabs-one-messages-tab">
                    <!-- /.content-header
                <section class="content">
                  <div class="row mt-2">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-header">
                          <div class="card-title">
                            <h3> <b>Perolehan Suara Sah Pasangan Calon di Tingkat Nasional</b> </h3>
                          </div>
                        </div>
                        <?= $this->session->flashdata('message'); ?>
                        <?= validation_errors() ?>
                        <div class="card-body">
                          <a href="<?= base_url('admin/perolehan_suarasah_nasional/tambah') ?>"
                            class="btn btn-primary"><i class="fas fa-plus"></i>
                            Tambah
                            Data</a>&nbsp;
                          <a href="#" class="btn btn-info" data-toggle="modal" data-target="#exampleModal"><i
                              class="fas fa-chart-pie mr-1"></i>
                            Grafik Data</a>
                          <br><br>
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                <th rowspan="2" style="text-align: center;">NO.</th>
                                <th rowspan="2" colspan="2" style="text-align: center;">NAMA PASANGAN CALON PRESIDEN DAN
                                  WAKIL
                                  PRESIDEN</th>
                                <th colspan="2" style="text-align: center;">RINCIAN JUMLAH PEROLEHAN SUARA PASANGAN
                                  CALON PRESIDEN
                                  DAN WAKIL PRESIDEN </th>
                                <th rowspan="2" style="text-align: center;">Aksi</th>
                              </tr>
                              <tr>
                                <th style="text-align: center;">NASIONAL</th>
                                <th style="text-align: center;">%</th>
                              </tr>
                              <tr href="#tabel">
                                <th style="text-align: center;">1</th>
                                <th style="text-align: center;" colspan="2">2</th>
                                <th style="text-align: center;">3</th>
                                <th style="text-align: center;">4</th>
                                <th style="text-align: center;">5</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                      $no = 1;
                      foreach ($piechartnasional_user as $row) { ?>
                              <tr id="tabel">
                                <td><?= $no++ ?></td>
                                <td colspan="2"><?= $row->nama_capres_satu?></td>
                                <td><?= number_format((float)$row->rincian_nasional_satu)?></td>
                                <td><?= number_format((float)$row->rincian_persen_nasional_satu, 1)?>%</td>
                                <td rowspan="3">
                                  <a href="<?= base_url('admin/perolehan_suarasah_nasional/edit/' . $row->id) ?>"
                                    class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                  <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                                    href="<?= base_url('admin/perolehan_suarasah_nasional/hapus/' . $row->id) ?>"
                                    class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td colspan="2"><?=  $row->nama_capres_dua?></td>
                                <td><?= number_format((float)$row->rincian_nasional_dua)?></td>
                                <td><?= number_format((float)$row->rincian_persen_nasional_dua, 1)?>%</td>
                              </tr>
                              <?php } ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>-->
                    <div id="piechart_nasional"></div>
                    <script>
                    // Data retrieved from https://netmarketshare.com/
                    // Make monochrome colors
                    var pieColors = (function() {
                      var colors = [
                          'rgb(255, 128, 0)',
                          'rgb(255, 0, 0)'
                        ],
                        base = Highcharts.getOptions().colors[0],
                        i;

                      for (i = 0; i < 10; i += 1) {
                        // Start out with a darkened base color (negative brighten), and end
                        // up with a much brighter color
                        colors.push(Highcharts.color(base).brighten((i - 3) / 7).get());
                      }
                      return colors;
                    }());

                    // Build the chart
                    Highcharts.chart('piechart_nasional', {
                      chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                      },
                      title: {
                        text: 'PEROLEHAN SUARA SAH PASANGAN CALON PRESIDEN DAN WAKIL PRESIDEN TAHUN <?=$row->tahun?> DI TINGKAT NASIONAL'
                      },
                      tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                      },
                      accessibility: {
                        point: {
                          valueSuffix: '%'
                        }
                      },
                      plotOptions: {
                        pie: {
                          allowPointSelect: true,
                          cursor: 'pointer',
                          colors: pieColors,
                          dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
                            distance: -50,
                            filter: {
                              property: 'percentage',
                              operator: '>',
                              value: 4
                            }
                          }
                        }
                      },
                      series: [{
                        name: 'Jumlah Persen',
                        data: [
                          <?php
					if(is_array($piechartnasional_user)){
						foreach ($piechartnasional_user as $key => $value) {
							$nama_capres_satu = $value->nama_capres_satu;
								$nama_capres_dua = $value->nama_capres_dua;
								$rincian_nasional_satu = $value->rincian_nasional_satu;
								$rincian_persen_nasional_satu = $value->rincian_persen_nasional_satu;
								$rincian_nasional_dua = $value->rincian_nasional_dua;
								$rincian_persen_nasional_dua = $value->rincian_persen_nasional_dua;
								echo "{ name:'(1)$nama_capres_satu <br>Perolehan Suara: $rincian_nasional_satu', y:$rincian_nasional_satu},";
									echo "{ name:'(2)$nama_capres_dua <br>Perolehan Suara: $rincian_nasional_dua', y:$rincian_nasional_dua},";
						}
					}
					 ?>
                        ]
                      }]
                    });
                    </script>
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
    </section>
  </div>
  <?php } else{?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg" style="background-color:#fc8434;">
              <div class="inner">
                <h3><?= $total_partai?></h3>

                <p>Partai</p>
              </div>

              <a href="<?= base_url('admin/partai')?>" class="small-box-footer" style="background-color:#311b1b;">Lihat
                Data&nbsp;<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg" style="background-color:#fc8434;">
              <div class="inner">
                <h3><?= $total_dasarhukum?></h3>

                <p>Dasar Hukum</p>
              </div>
              <a href="<?= base_url('admin/dasar_hukum')?>" class="small-box-footer"
                style="background-color:#311b1b;">Lihat Data&nbsp;<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg" style="background-color:#fc8434;">
              <div class="inner">
                <h3><?= $total_jadwal?></h3>

                <p>Jadwal Pilpres</p>
              </div>

              <a href="<?= base_url('admin/jadwal')?>" class="small-box-footer" style="background-color:#311b1b;">Lihat
                Data&nbsp;<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg" style="background-color:#fc8434;">
              <div class="inner">
                <h3>
                  <?= $total_logomaskot?>
                </h3>

                <p>Logo dan Maskot</p>
              </div>
              <a href="<?= base_url('admin/logo_maskot')?>" class="small-box-footer"
                style="background-color:#311b1b;">Lihat Data&nbsp;<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg" style="background-color:#fc8434;">
              <div class="inner">
                <h3><?= $total_pasangancalon?></h3>

                <p>Pasangan Calon</p>
              </div>
              <a href="<?= base_url('admin/pasangan_calon')?>" class="small-box-footer"
                style="background-color:#311b1b;">Lihat Data&nbsp;<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg" style="background-color:#fc8434;">
              <div class="inner">
                <h3><?= $total_viewmap?></h3>

                <p>Peta Politik</p>
              </div>
              <a href="<?= base_url('admin/peta_politik')?>" class="small-box-footer"
                style="background-color:#311b1b;">Lihat Data&nbsp;<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <div class="row">
          <div class="col-12 col-sm-6">
            <div class="card card-primary card-tabs">
              <div class="card-header p-0 pt-1" style="background-color:#311b1b;">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="pt-2 px-3">
                    <h3 class="card-title"><i class="fas fa-chart-bar mr-1"></i> Partisipasi</h3>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill"
                      href="#barchart-tingkatpartisipasi" role="tab" aria-controls="custom-tabs-one-home"
                      aria-selected="true">Tingkat Partisipasi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill"
                      href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile"
                      aria-selected="false">Surat Suara</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                  <div class="tab-pane fade show active" id="barchart-tingkatpartisipasi" role="tabpanel"
                    aria-labelledby="custom-tabs-one-home-tab">
                    <!-- /.content-header
                  <section class="content">
                    <div class="row mt-2">
                      <div class="col-12">
                        <div class="card">
                          <div class="card-header">
                            <div class="card-title">
                              <h3><b>TINGKAT PARTISIPASI PEMILIH DALAM PEMILU PRESIDEN DAN WAKIL PRESIDEN
                                </b></h3>
                            </div>
                          </div>
                          <?= $this->session->flashdata('message'); ?>
                          <?= validation_errors() ?>
                          <div class="card-body">
                            <a href="<?= base_url('admin/tingkat_partisipasi_pemilih/tambah') ?>"
                              class="btn btn-primary"><i class="fas fa-plus"></i>
                              Tambah
                              Data</a>
                            &nbsp;
                            <a href="#" class="btn btn-info" data-toggle="modal" data-target="#exampleModal"><i
                                class="fas fa-chart-bar mr-1"></i>
                              Grafik Data</a>
                            <br><br>
                            <table id="example1" class="table table-bordered table-striped">
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
                                    <a href="<?= base_url('admin/tingkat_partisipasi_pemilih/edit/' . $row->id) ?>"
                                      class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a> &nbsp;
                                    <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                                      href="<?= base_url('admin/tingkat_partisipasi_pemilih/hapus/' . $row->id) ?>"
                                      class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>&nbsp;
                                  </td>
                                </tr>
                                <?php } ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>-->
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
                  <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel"
                    aria-labelledby="custom-tabs-one-profile-tab">
                    <!-- /.content-header
                  <section class="content">
                    <div class="row mt-2">
                      <div class="col-12">
                        <div class="card">
                          <div class="card-header">
                            <div class="card-title">
                              <h3><b>SURAT SUARA SAH DAN TIDAK SAH DALAM PEMILU PRESIDEN DAN WAKIL PRESIDEN</b></h3>
                            </div>
                          </div>
                          <?= $this->session->flashdata('message'); ?>
                          <?= validation_errors() ?>
                          <div class="card-body">
                            <a href="<?= base_url('admin/surat_suara/tambah') ?>"
                              class="btn btn-primary btn-sm float-left"><i class="fas fa-plus"></i>Tambah
                              Data</a>
                            &nbsp;
                            <a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal"><i
                                class="fas fa-chart-bar mr-1"></i>
                              Grafik Data</a>
                            <br><br>
                            <table id="example1" class="table table-bordered table-striped">
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
                                    <a href="<?= base_url('admin/surat_suara/edit/' . $row->id) ?>"
                                      class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a> &nbsp;
                                    <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                                      href="<?= base_url('admin/surat_suara/hapus/' . $row->id) ?>"
                                      class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>&nbsp;
                                  </td>
                                </tr>
                                <?php } ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>-->
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
              <!-- /.card -->
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="card card-primary card-tabs">
              <div class="card-header p-0 pt-1" style="background-color:#311b1b;">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="pt-2 px-3">
                    <h3 class="card-title"><i class="fas fa-chart-pie mr-1"></i>Hasil Pemilu</h3>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#piechart-kota"
                      role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Kota Bogor</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#piechart-provinsi"
                      role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Provinsi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#piechart-nasional"
                      role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Nasional</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                  <div class="tab-pane fade show active" id="piechart-kota" role="tabpanel"
                    aria-labelledby="custom-tabs-one-home-tab">
                    <!-- /.content-header
  <section class="content">
    <div class="row mt-2">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <div class="card-title">
              <h3><b>Perolehan Suara Sah Pasangan Calon di Kota Bogor</b></h3>
            </div>
          </div>
          <?= $this->session->flashdata('message'); ?>
          <?= validation_errors() ?>
          <div class="card-body">
            <a href="<?= base_url('admin/perolehan_suarasah_kota/tambah') ?>" class="btn btn-primary"><i
                class="fas fa-plus"></i>
              Tambah
              Data</a>&nbsp;

            <a href="#" class="btn btn-info" data-toggle="modal" data-target="#exampleModal"><i
                class="fas fa-chart-pie mr-1"></i>
              Grafik Data</a>
            <br><br>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th rowspan="2" style="text-align: center;">NO.</th>
                  <th rowspan="2" colspan="2" style="text-align: center;">NAMA PASANGAN CALON PRESIDEN DAN WAKIL
                    PRESIDEN</th>
                  <th colspan="2" style="text-align: center;">RINCIAN JUMLAH PEROLEHAN SUARA PASANGAN CALON PRESIDEN
                    DAN WAKIL PRESIDEN </th>
                  <th rowspan="2" style="text-align: center;">Aksi</th>
                </tr>
                <tr>
                  <th style="text-align: center;">KOTA BOGOR</th>
                  <th style="text-align: center;">%</th>
                </tr>
                <tr href="#tabel">
                  <th style="text-align: center;">1</th>
                  <th style="text-align: center;" colspan="2">2</th>
                  <th style="text-align: center;">3</th>
                  <th style="text-align: center;">4</th>
                  <th style="text-align: center;">5</th>
                </tr>
              </thead>
              <tbody>
                <?php
                      $no = 1;
                      foreach ($piechartkota_user as $row) { ?>
                <tr id="tabel">
                  <td>1</td>
                  <td colspan="2"><?= $row->nama_capres_satu?></td>
                  <td><?= number_format((float)$row->rincian_kotabogor_satu)?></td>
                  <td><?= number_format((float)$row->rincian_persen_kotabogor_satu, 1 )?>%</td>
                  <td rowspan="3">
                    <a href="<?= base_url('admin/perolehan_suarasah_kota/edit/' . $row->id) ?>"
                      class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                    <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                      href="<?= base_url('admin/perolehan_suarasah_kota/hapus/' . $row->id) ?>"
                      class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td colspan="2"><?=  $row->nama_capres_dua?></td>
                  <td><?= number_format((float)$row->rincian_kotabogor_dua)?></td>
                  <td><?= number_format((float)$row->rincian_persen_kotabogor_dua, 1)?>%</td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>-->
                    <div id="piechart_kota"></div>
                    <script>
                    // Data retrieved from https://netmarketshare.com/
                    // Make monochrome colors
                    var pieColors = (function() {
                      var colors = [
                          'rgb(255, 128, 0)',
                          'rgb(255, 0, 0)'
                        ],
                        base = Highcharts.getOptions().colors[0],
                        i;

                      for (i = 0; i < 10; i += 1) {
                        // Start out with a darkened base color (negative brighten), and end
                        // up with a much brighter color
                        colors.push(Highcharts.color(base).brighten((i - 3) / 7).get());
                      }
                      return colors;
                    }());

                    // Build the chart
                    Highcharts.chart('piechart_kota', {
                      chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                      },
                      title: {
                        text: 'PEROLEHAN SUARA SAH PASANGAN CALON PRESIDEN DAN WAKIL PRESIDEN TAHUN <?=$row->tahun?> DI KOTA BOGOR'
                      },
                      tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                      },
                      accessibility: {
                        point: {
                          valueSuffix: '%'
                        }
                      },
                      plotOptions: {
                        pie: {
                          allowPointSelect: true,
                          cursor: 'pointer',
                          colors: pieColors,
                          dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
                            distance: -50,
                            filter: {
                              property: 'percentage',
                              operator: '>',
                              value: 4
                            }
                          }
                        }
                      },
                      series: [{
                        name: 'Jumlah Persen',
                        data: [
                          <?php
									      $no = 1;
					if(is_array($piechartkota_user)){
						foreach ($piechartkota_user as $key => $value) {
							  $nama_capres_satu = $value->nama_capres_satu;
								$nama_capres_dua = $value->nama_capres_dua;
								$rincian_kotabogor_satu = $value->rincian_kotabogor_satu;
								$rincian_persen_kotabogor_satu = $value->rincian_persen_kotabogor_satu;
								$rincian_kotabogor_dua = $value->rincian_kotabogor_dua;
								$rincian_persen_kotabogor_dua = $value->rincian_persen_kotabogor_dua;
								echo "{ name:'(1)$nama_capres_satu <br>Perolehan Suara: $rincian_kotabogor_satu', y:$rincian_kotabogor_satu},";
									echo "{ name:'(2)$nama_capres_dua <br>Perolehan Suara: $rincian_kotabogor_dua', y:$rincian_kotabogor_dua},";
						}
					}
					 ?>
                        ]
                      }]
                    });
                    </script>
                  </div>
                  <div class="tab-pane fade" id="piechart-provinsi" role="tabpanel"
                    aria-labelledby="custom-tabs-one-profile-tab">
                    <!-- /.content-header
                <section class="content">
                  <div class="row mt-2">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-header">
                          <div class="card-title">
                            <h3>Perolehan Suara Sah Pasangan Calon di Provinsi</h3>
                          </div>
                        </div>
                        <?= $this->session->flashdata('message'); ?>
                        <?= validation_errors() ?>
                        <div class="card-body">
                          <a href="<?= base_url('admin/perolehan_suarasah_provinsi/tambah') ?>"
                            class="btn btn-primary"><i class="fas fa-plus"></i>
                            Tambah
                            Data</a>&nbsp;
                          <a href="#" class="btn btn-info" data-toggle="modal" data-target="#exampleModal"><i
                              class="fas fa-chart-pie mr-1"></i>
                            Grafik Data</a>
                          <br><br>
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                <th rowspan="2" style="text-align: center;">NO.</th>
                                <th rowspan="2" colspan="2" style="text-align: center;">NAMA PASANGAN CALON PRESIDEN DAN
                                  WAKIL
                                  PRESIDEN</th>
                                <th colspan="2" style="text-align: center;">RINCIAN JUMLAH PEROLEHAN SUARA PASANGAN
                                  CALON PRESIDEN
                                  DAN WAKIL PRESIDEN </th>
                                <th rowspan="2" style="text-align: center;">Aksi</th>
                              </tr>
                              <tr>
                                <th style="text-align: center;">PROVINSI</th>
                                <th style="text-align: center;">%</th>
                              </tr>
                              <tr href="#tabel">
                                <th style="text-align: center;">1</th>
                                <th style="text-align: center;" colspan="2">2</th>
                                <th style="text-align: center;">3</th>
                                <th style="text-align: center;">4</th>
                                <th style="text-align: center;">5</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                      $no = 1;
                      foreach ($piechartprovinsi_user as $row) { ?>
                              <tr id="tabel">
                                <td><?= $no++ ?></td>
                                <td colspan="2"><?= $row->nama_capres_satu?></td>
                                <td><?= number_format((float)$row->rincian_provinsi_satu)?></td>
                                <td><?= number_format((float)$row->rincian_persen_provinsi_satu, 1)?>%</td>
                                <td rowspan="3">
                                  <a href="<?= base_url('admin/perolehan_suarasah_provinsi/edit/' . $row->id) ?>"
                                    class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                  <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                                    href="<?= base_url('admin/perolehan_suarasah_provinsi/hapus/' . $row->id) ?>"
                                    class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td colspan="2"><?=  $row->nama_capres_dua?></td>
                                <td><?= number_format((float)$row->rincian_provinsi_dua)?></td>
                                <td><?= number_format((float)$row->rincian_persen_provinsi_dua, 1)?>%</td>
                              </tr>
                              <?php } ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>-->
                    <div id="piechart_provinsi"></div>
                    <script>
                    // Data retrieved from https://netmarketshare.com/
                    // Make monochrome colors
                    var pieColors = (function() {
                      var colors = [
                          'rgb(255, 128, 0)',
                          'rgb(255, 0, 0)'
                        ],
                        base = Highcharts.getOptions().colors[0],
                        i;

                      for (i = 0; i < 10; i += 1) {
                        // Start out with a darkened base color (negative brighten), and end
                        // up with a much brighter color
                        colors.push(Highcharts.color(base).brighten((i - 3) / 7).get());
                      }
                      return colors;
                    }());

                    // Build the chart
                    Highcharts.chart('piechart_provinsi', {
                      chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                      },
                      title: {
                        text: 'PEROLEHAN SUARA SAH PASANGAN CALON PRESIDEN DAN WAKIL PRESIDEN TAHUN <?=$row->tahun?> DI PROVINSI JAWA BARAT'
                      },
                      tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                      },
                      accessibility: {
                        point: {
                          valueSuffix: '%'
                        }
                      },
                      plotOptions: {
                        pie: {
                          allowPointSelect: true,
                          cursor: 'pointer',
                          colors: pieColors,
                          dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
                            distance: -50,
                            filter: {
                              property: 'percentage',
                              operator: '>',
                              value: 4
                            }
                          }
                        }
                      },
                      series: [{
                        name: 'Jumlah Persen',
                        data: [
                          <?php
					if(is_array($piechartprovinsi_user)){
						foreach ($piechartprovinsi_user as $key => $value) {
							  $nama_capres_satu = $value->nama_capres_satu;
								$nama_capres_dua = $value->nama_capres_dua;
								$rincian_provinsi_satu = $value->rincian_provinsi_satu;
								$rincian_persen_provinsi_satu = $value->rincian_persen_provinsi_satu;
								$rincian_provinsi_dua = $value->rincian_provinsi_dua;
								$rincian_persen_provinsi_dua = $value->rincian_persen_provinsi_dua;
								echo "{ name:'(1)$nama_capres_satu <br>Perolehan Suara: $rincian_provinsi_satu', y:$rincian_provinsi_satu},";
									echo "{ name:'(2)$nama_capres_dua <br>Perolehan Suara: $rincian_provinsi_dua', y:$rincian_provinsi_dua},";
						}
					}
					 ?>
                        ]
                      }]
                    });
                    </script>
                  </div>
                  <div class="tab-pane fade" id="piechart-nasional" role="tabpanel"
                    aria-labelledby="custom-tabs-one-messages-tab">
                    <!-- /.content-header
                <section class="content">
                  <div class="row mt-2">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-header">
                          <div class="card-title">
                            <h3> <b>Perolehan Suara Sah Pasangan Calon di Tingkat Nasional</b> </h3>
                          </div>
                        </div>
                        <?= $this->session->flashdata('message'); ?>
                        <?= validation_errors() ?>
                        <div class="card-body">
                          <a href="<?= base_url('admin/perolehan_suarasah_nasional/tambah') ?>"
                            class="btn btn-primary"><i class="fas fa-plus"></i>
                            Tambah
                            Data</a>&nbsp;
                          <a href="#" class="btn btn-info" data-toggle="modal" data-target="#exampleModal"><i
                              class="fas fa-chart-pie mr-1"></i>
                            Grafik Data</a>
                          <br><br>
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                <th rowspan="2" style="text-align: center;">NO.</th>
                                <th rowspan="2" colspan="2" style="text-align: center;">NAMA PASANGAN CALON PRESIDEN DAN
                                  WAKIL
                                  PRESIDEN</th>
                                <th colspan="2" style="text-align: center;">RINCIAN JUMLAH PEROLEHAN SUARA PASANGAN
                                  CALON PRESIDEN
                                  DAN WAKIL PRESIDEN </th>
                                <th rowspan="2" style="text-align: center;">Aksi</th>
                              </tr>
                              <tr>
                                <th style="text-align: center;">NASIONAL</th>
                                <th style="text-align: center;">%</th>
                              </tr>
                              <tr href="#tabel">
                                <th style="text-align: center;">1</th>
                                <th style="text-align: center;" colspan="2">2</th>
                                <th style="text-align: center;">3</th>
                                <th style="text-align: center;">4</th>
                                <th style="text-align: center;">5</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                      $no = 1;
                      foreach ($piechartnasional_user as $row) { ?>
                              <tr id="tabel">
                                <td><?= $no++ ?></td>
                                <td colspan="2"><?= $row->nama_capres_satu?></td>
                                <td><?= number_format((float)$row->rincian_nasional_satu)?></td>
                                <td><?= number_format((float)$row->rincian_persen_nasional_satu, 1)?>%</td>
                                <td rowspan="3">
                                  <a href="<?= base_url('admin/perolehan_suarasah_nasional/edit/' . $row->id) ?>"
                                    class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                  <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                                    href="<?= base_url('admin/perolehan_suarasah_nasional/hapus/' . $row->id) ?>"
                                    class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td colspan="2"><?=  $row->nama_capres_dua?></td>
                                <td><?= number_format((float)$row->rincian_nasional_dua)?></td>
                                <td><?= number_format((float)$row->rincian_persen_nasional_dua, 1)?>%</td>
                              </tr>
                              <?php } ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>-->
                    <div id="piechart_nasional"></div>
                    <script>
                    // Data retrieved from https://netmarketshare.com/
                    // Make monochrome colors
                    var pieColors = (function() {
                      var colors = [
                          'rgb(255, 128, 0)',
                          'rgb(255, 0, 0)'
                        ],
                        base = Highcharts.getOptions().colors[0],
                        i;

                      for (i = 0; i < 10; i += 1) {
                        // Start out with a darkened base color (negative brighten), and end
                        // up with a much brighter color
                        colors.push(Highcharts.color(base).brighten((i - 3) / 7).get());
                      }
                      return colors;
                    }());

                    // Build the chart
                    Highcharts.chart('piechart_nasional', {
                      chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                      },
                      title: {
                        text: 'PEROLEHAN SUARA SAH PASANGAN CALON PRESIDEN DAN WAKIL PRESIDEN TAHUN <?=$row->tahun?> DI TINGKAT NASIONAL'
                      },
                      tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                      },
                      accessibility: {
                        point: {
                          valueSuffix: '%'
                        }
                      },
                      plotOptions: {
                        pie: {
                          allowPointSelect: true,
                          cursor: 'pointer',
                          colors: pieColors,
                          dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
                            distance: -50,
                            filter: {
                              property: 'percentage',
                              operator: '>',
                              value: 4
                            }
                          }
                        }
                      },
                      series: [{
                        name: 'Jumlah Persen',
                        data: [
                          <?php
					if(is_array($piechartnasional_user)){
						foreach ($piechartnasional_user as $key => $value) {
							$nama_capres_satu = $value->nama_capres_satu;
								$nama_capres_dua = $value->nama_capres_dua;
								$rincian_nasional_satu = $value->rincian_nasional_satu;
								$rincian_persen_nasional_satu = $value->rincian_persen_nasional_satu;
								$rincian_nasional_dua = $value->rincian_nasional_dua;
								$rincian_persen_nasional_dua = $value->rincian_persen_nasional_dua;
								echo "{ name:'(1)$nama_capres_satu <br>Perolehan Suara: $rincian_nasional_satu', y:$rincian_nasional_satu},";
									echo "{ name:'(2)$nama_capres_dua <br>Perolehan Suara: $rincian_nasional_dua', y:$rincian_nasional_dua},";
						}
					}
					 ?>
                        ]
                      }]
                    });
                    </script>
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
          <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
  <?php } ?>