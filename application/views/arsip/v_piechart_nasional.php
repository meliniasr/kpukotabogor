<div class="container-fluid py-5">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <h5 class="card-header" style="background-color: #311b1b  !important;color:white">
            <button class="navbar-toggler btn btn-sm" style="background-color: #fc8434 !important;" type="button"
              data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
              style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
              <i class="fas fa-list" style="color:#fff"><span class="navbar-toggler-icon"></span>Menu List Data Pilpres
                <?= $detail->tahun?>
              </i>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
              aria-labelledby="offcanvasDarkNavbarLabel">
              <div class="offcanvas-header" style="background-color:  #fc8434  !important;">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"
                  style="color:white;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Menu List Data Pilpres
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                  aria-label="Close"></button>
              </div>
              <div class="offcanvas-body" style="background-color: #311b1b  !important;color:white">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('beranda/dasar_hukum/').$detail->tahun?>"
                      style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;color:white"><i
                        class="fas fa-book" style="color:#fff"></i>&nbsp;Dasar Hukum</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('beranda/logo_maskot/').$detail->tahun?>"
                      style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;color:white"><i
                        class="fas fa-image" style="color:#fff"></i>&nbsp;Logo
                      dan Maskot</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('beranda/pasangan_calon/').$detail->tahun?>"
                      style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;color:white"><i
                        class="fas fa-users" style="color:#fff"></i>&nbsp;
                      Pasangan Calon
                    </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                      aria-expanded="false"
                      style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;color:white"><i
                        class="fas fa-folder" style="color:#fff"></i>&nbsp;
                      Hasil Pemilu
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item"
                          href="<?= base_url('beranda/rekaphasilsuarasah_kecamatan/').$detail->tahun?>"
                          style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Rekapitulasi
                          Hasil Penghitungan Perolehan<br> Suara Sah Berdasarkan Kecamatan di Kota Bogor</a>
                      </li>
                      <hr>
                      <li><a class="dropdown-item"
                          href="<?= base_url('beranda/rekaphasilsuarasah_provinsi/').$detail->tahun?>"
                          style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Rekapitulasi
                          Hasil Penghitungan Perolehan<br>Suara Sah Berdasarkan Provinsi Jawa Barat <br> dan
                          Nasional</a>
                      </li>
                      <hr>
                      <li><a class="dropdown-item"
                          href="<?= base_url('beranda/perolehan_suarasah_kota/').$detail->tahun?>"
                          style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Rekapitulasi
                          Perolehan Suara Sah Pasangan<br> Calon di Kota Bogor</a>
                      </li>
                      <hr>
                      <li><a class="dropdown-item"
                          href="<?= base_url('beranda/perolehan_suarasah_provinsi/').$detail->tahun?>"
                          style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Rekapitulasi
                          Perolehan Suara Sah Pasangan<br> Calon di Provinsi Jawa Barat</a>
                      </li>
                      <hr>
                      <li><a class="dropdown-item"
                          href="<?= base_url('beranda/perolehan_suarasah_nasional/').$detail->tahun?>"
                          style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Rekapitulasi
                          Perolehan Suara Sah Pasangan<br> Calon di Tingkat Nasional</a>
                      </li>
                      <hr>
                      <li><a class="dropdown-item" href="<?= base_url('beranda/pelantikan/').$detail->tahun?>"
                          style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Rekapitulasi
                          Pelantikan Presiden <br> & Wakil Presiden</a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                      aria-expanded="false"
                      style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;color:white"><i
                        class="fas fa-folder" style="color:#fff"></i>&nbsp;
                      Partisipasi
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item"
                          href="<?= base_url('beranda/rekap_partisipasi_tps/').$detail->tahun?>"
                          style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Rekapitulasi Jumlah
                          Pemilih
                          <br> Terdaftar dan
                          Jumlah TPS
                        </a>
                      </li>
                      <hr>
                      <li><a class="dropdown-item"
                          href="<?= base_url('beranda/rekap_partisipasi_pemungutan_suara/').$detail->tahun?>"
                          style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Rekapitulasi Data
                          Pemilih Pada<br>Pelaksanaan Pemungutan Suara
                        </a>
                      </li>
                      <hr>
                      <li><a class="dropdown-item"
                          href="<?= base_url('beranda/tingkat_partisipasi_pemilih/').$detail->tahun?>"
                          style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Tingkat Partisipasi
                          Pemilih Dalam Pemilu Presiden <br> dan Wakil Presiden
                        </a>
                      </li>
                      <hr>
                      <li>
                        <a class="dropdown-item" href="<?= base_url('beranda/surat_suara/').$detail->tahun?>"
                          style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Surat Suara Sah dan Tidak
                          Sah Dalam Pemilu <br> Presiden dan Wakil Presiden
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('beranda/peta_politik/').$detail->tahun?>"
                      style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;color:white"><i
                        class="fas fa-map" style="color:#fff"></i>&nbsp;Peta
                      Politik</a>
                  </li>
                </ul>
              </div>
            </div>
          </h5>
          <div class="card-body">
            <h4 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; text-align:center;">
              PEROLEHAN SUARA SAH PASANGAN CALON PRESIDEN DAN WAKIL PRESIDEN <br> TAHUN <?= $detail->tahun?> DI TINGKAT
              NASIONAL
            </h4>
            <br>
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
                      foreach ($piechartnasional as $detail) { ?>
                              <tr id="tabel">
                                <td><?= $no++ ?></td>
                                <td colspan="2"><?= $detail->nama_capres_satu?></td>
                                <td><?= number_format((float)$detail->rincian_nasional_satu)?></td>
                                <td><?= number_format((float)$detail->rincian_persen_nasional_satu, 1)?>%</td>
                                <td rowspan="3">
                                  <a href="<?= base_url('admin/perolehan_suarasah_nasional/edit/' . $detail->id) ?>"
                                    class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                  <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                                    href="<?= base_url('admin/perolehan_suarasah_nasional/hapus/' . $detail->id) ?>"
                                    class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td colspan="2"><?=  $detail->nama_capres_dua?></td>
                                <td><?= number_format((float)$detail->rincian_nasional_dua)?></td>
                                <td><?= number_format((float)$detail->rincian_persen_nasional_dua, 1)?>%</td>
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
                text: ''
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
					if(is_array($piechartnasional)){
						foreach ($piechartnasional as $key => $detail) {
							$nama_capres_satu = $detail->nama_capres_satu;
								$nama_capres_dua = $detail->nama_capres_dua;
								$rincian_nasional_satu = $detail->rincian_nasional_satu;
								$rincian_persen_nasional_satu = $detail->rincian_persen_nasional_satu;
								$rincian_nasional_dua = $detail->rincian_nasional_dua;
								$rincian_persen_nasional_dua = $detail->rincian_persen_nasional_dua;
								echo "{ name:'(1)$nama_capres_satu <br>Perolehan Suara: $rincian_nasional_satu', y:$rincian_nasional_satu},";
									echo "{ name:'(2)$nama_capres_dua <br>Perolehan Suara: $rincian_nasional_dua', y:$rincian_nasional_dua},";
						}
					}
					 ?>
                ]
              }]
            });
            </script>
            <br>
            <div class="figure" style="color:black;">
              <figure class="highcharts-figure">
                <div id="container"></div>
                <p class="highcharts-description">
                  Dari penyajian data pada diagram lingkaran di atas, maka dapat diperoleh kesimpulan sebagai berikut:
                  <?php foreach($piechartnasional as $detail) {?>
                <ol>
                  <li>Hasil jumlah perolehan suara sah pasangan calon 1 yaitu <?=$detail->nama_capres_satu?> tahun
                    <?=$detail->tahun?>
                    sebanyak <?= number_format((float)$detail->rincian_nasional_satu)?> atau sekitar
                    <?php
                 $a= $detail->rincian_nasional_satu;
								 $b= $detail->rincian_nasional_dua;
                 $hasil = $a / ($a + $b)*100;
									?>
                    <?= number_format((float)$hasil, 1)?>%
                  </li>
                  <li>Hasil jumlah perolehan suara sah pasangan calon 2 yaitu <?=$detail->nama_capres_dua?> tahun
                    <?=$detail->tahun?>
                    sebanyak <?= number_format((float)$detail->rincian_nasional_dua)?> atau sekitar
                    <?php
                 $a= $detail->rincian_nasional_dua;
								 $b= $detail->rincian_nasional_satu;
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
    <br>
  </div>
</div>




















<!-- About End -->