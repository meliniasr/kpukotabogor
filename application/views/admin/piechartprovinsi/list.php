<?php if(is_it()){?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
  </div>
  <section>
    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header" style="background-color:#311b1b;color:white">
                <h3 class="card-title"><b><?= $title2?></b></h3>
                <div class="tombol float-right">
                  <a href="<?= base_url('admin/perolehan_suarasah_provinsi/tambah_data') ?>"
                    class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>
                    Tambah Data</a>&nbsp;
                  <a style="color:white" href="#" class="btn btn-info btn-sm" data-toggle="modal"
                    data-target="#exampleModal"><i class="fas fa-chart-pie mr-1"></i>
                    Grafik Data</a>
                </div>
              </div>
              <div class="card-body">
                <?= $this->session->flashdata('message'); ?>
                <?= validation_errors() ?>
                <table id="example2" class="table table-bordered table-striped">
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
                      foreach ($piechartprovinsi as $row) { ?>
                    <tr id="tabel">
                      <td><?= $no++ ?></td>
                      <td colspan="2"><?= $row->nama_capres_satu?></td>
                      <td><?= number_format((float)$row->rincian_provinsi_satu)?></td>
                      <td><?= number_format((float)$row->rincian_persen_provinsi_satu, 1)?>%</td>
                      <td rowspan="3">
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
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> <b>Grafik Data</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
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
            <figure class="highcharts-figure">
              <div id="container"></div>
              <p class="highcharts-description">
                Dari penyajian data pada diagram lingkaran di atas, maka dapat diperoleh kesimpulan sebagai berikut:
                <?php foreach($piechartprovinsi_user as $row) {?>
              <ol>
                <li>Hasil jumlah perolehan suara sah pasangan calon 1 yaitu <?=$row->nama_capres_satu?> tahun
                  <?=$row->tahun?>
                  sebanyak <?= number_format((float)$row->rincian_provinsi_satu)?> atau sekitar
                  <?php
                 $a= $row->rincian_provinsi_satu;
								 $b= $row->rincian_provinsi_dua;
                 $hasil = $a / ($a + $b)*100;
									?>
                  <?= number_format((float)$hasil, 1)?>%
                </li>
                <li>Hasil jumlah perolehan suara sah pasangan calon 2 yaitu <?=$row->nama_capres_dua?> tahun
                  <?=$row->tahun?>
                  sebanyak <?= number_format((float)$row->rincian_provinsi_dua)?> atau sekitar
                  <?php
                 $a= $row->rincian_provinsi_dua;
								 $b= $row->rincian_provinsi_satu;
                 $hasil = $a / ($a + $b)*100;
									?>
                  <?= number_format((float)$hasil, 1)?>%
                </li>
                <br>
              </ol>
              <?php }?>
              </p>
            </figure>
          </div>
        </div>
      </div>
    </div>
</div>
<?php } else { ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
  </div>
  </section>
  <!-- /.content-header -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header" style="background-color:#311b1b;color:white">
              <h3 class="card-title"><b><?= $title2?></b></h3>
              <div class="tombol float-right">
                <a href="<?= base_url('admin/perolehan_suarasah_provinsi/tambah_data') ?>"
                  class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>
                  Tambah Data</a>&nbsp;
                <a style="color:white" href="#" class="btn btn-info btn-sm" data-toggle="modal"
                  data-target="#exampleModal"><i class="fas fa-chart-pie mr-1"></i>
                  Grafik Data</a>
              </div>
            </div>
            <div class="card-body">
              <?= $this->session->flashdata('message'); ?>
              <?= validation_errors() ?>
              <table id="example2" class="table table-bordered table-striped">
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
  </section>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> <b>Grafik Data</b></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
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
          <figure class="highcharts-figure">
            <div id="container"></div>
            <p class="highcharts-description">
              Dari penyajian data pada diagram lingkaran di atas, maka dapat diperoleh kesimpulan sebagai berikut:
              <?php foreach($piechartprovinsi_user as $row) {?>
            <ol>
              <li>Hasil jumlah perolehan suara sah pasangan calon 1 yaitu <?=$row->nama_capres_satu?> tahun
                <?=$row->tahun?>
                sebanyak <?= number_format((float)$row->rincian_provinsi_satu)?> atau sekitar
                <?php
                 $a= $row->rincian_provinsi_satu;
								 $b= $row->rincian_provinsi_dua;
                 $hasil = $a / ($a + $b)*100;
									?>
                <?= number_format((float)$hasil, 1)?>%
              </li>
              <li>Hasil jumlah perolehan suara sah pasangan calon 2 yaitu <?=$row->nama_capres_dua?> tahun
                <?=$row->tahun?>
                sebanyak <?= number_format((float)$row->rincian_provinsi_dua)?> atau sekitar
                <?php
                 $a= $row->rincian_provinsi_dua;
								 $b= $row->rincian_provinsi_satu;
                 $hasil = $a / ($a + $b)*100;
									?>
                <?= number_format((float)$hasil, 1)?>%
              </li>
              <br>
            </ol>
            <?php }?>
            </p>
          </figure>
        </div>
      </div>
    </div>
  </div>
</div>
<?php }?>