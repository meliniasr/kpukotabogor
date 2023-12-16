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
              SURAT SUARA SAH DAN TIDAK SAH DALAM PEMILU PRESIDEN DAN WAKIL PRESIDEN TAHUN <?=$detail->tahun?>
            </h4>
            <br>
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
								foreach($barchart_suratsuara as $detail){
								?>
                                <tr id="tabel">
                                  <td><?=$no++?></td>
                                  <td><?= $detail->tahun?></td>
                                  <td><?= number_format((float)$detail->suarasah_kotabogor)?></td>
                                  <td><?= number_format((float)$detail->suarasah_provinsi)?></td>
                                  <td><?= number_format((float)$detail->suarasah_nasional)?></td>
                                  <td><?= number_format((float)$detail->suaratdksah_kotabogor)?></td>
                                  <td><?= number_format((float)$detail->suaratdksah_provinsi)?></td>
                                  <td><?= number_format((float)$detail->suaratdksah_nasional)?></td>
                                  <td>
                                    <a href="<?= base_url('admin/surat_suara/edit/' . $detail->id) ?>"
                                      class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a> &nbsp;
                                    <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                                      href="<?= base_url('admin/surat_suara/hapus/' . $detail->id) ?>"
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
                text: ''
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
          if(is_array($barchart_suratsuara)){
            foreach ($barchart_suratsuara as $key => $detail) {
                $suaratdksah_kotabogor = $detail->suaratdksah_kotabogor;
                $suaratdksah_provinsi = $detail->suaratdksah_provinsi;
                $suaratdksah_nasional = $detail->suaratdksah_nasional;
                echo "{$suaratdksah_kotabogor},{$suaratdksah_provinsi},{$suaratdksah_nasional}";
            }
          }
           ?>]
              }, {
                name: 'Suara Sah',
                color: 'rgb(255, 0, 0)',
                data: [<?php
          if(is_array($barchart_suratsuara)){
            foreach ($barchart_suratsuara as $key => $detail) {
                $suarasah_kotabogor = $detail->suarasah_kotabogor;
                $suarasah_provinsi = $detail->suarasah_provinsi;
                $suarasah_nasional = $detail->suarasah_nasional;
                echo "{$suarasah_kotabogor},{$suarasah_provinsi},{$suarasah_nasional}";
            }
          }
           ?>]
              }]
            });
            </script>
            <br>
            <div class="figure" style="color:black;">
              <figure class="highcharts-figure">
                <div id="container2"></div>
                <p class="highcharts-description">
                  Dari penyajian data pada diagram batang di atas, maka dapat diperoleh kesimpulan sebagai berikut:
                  <?php foreach($barchart_suratsuara as $detail) {?>
                <ol>
                  <li>Hasil jumlah perolehan suara sah Kota Bogor di surat suara sah dan tidak sah dalam pemilu presiden
                    dan
                    wakil presiden tahun <?=$detail->tahun?>
                    sebanyak <?= number_format((float)$detail->suarasah_kotabogor)?> atau sekitar
                    <?php
                 $a= $detail->suarasah_kotabogor;
                 $b= $detail->suaratdksah_kotabogor;
                 $hasil = $a / ($a + $b)*100;
                  ?>
                    <?= number_format((float)$hasil, 1)?>%
                  </li>
                  <br>
                  <li>Hasil jumlah perolehan suara sah Provinsi Jawa Barat di surat suara sah dan tidak sah dalam pemilu
                    presiden dan wakil presiden tahun <?=$detail->tahun?>
                    sebanyak <?= number_format((float)$detail->suarasah_provinsi)?> atau sekitar
                    <?php
                 $a= $detail->suarasah_provinsi;
                 $b= $detail->suaratdksah_provinsi;
                 $hasil = $a / ($a + $b)*100;
                  ?>
                    <?= number_format((float)$hasil, 1)?>%
                  </li>
                  <br>
                  <li>Hasil jumlah perolehan suara sah tingkat nasionall di surat suara sah dan tidak sah dalam pemilu
                    presiden dan wakil presiden tahun <?=$detail->tahun?>
                    sebanyak <?= number_format((float)$detail->suarasah_nasional)?> atau sekitar
                    <?php
                 $a= $detail->suarasah_nasional;
                 $b= $detail->suaratdksah_nasional;
                 $hasil = $a / ($a + $b)*100;
                  ?>
                    <?= number_format((float)$hasil, 1)?>%
                  </li>
                  <br>
                  <li>Hasil jumlah perolehan suara tidak sah Kota Bogor di surat suara sah dan tidak sah dalam pemilu
                    presiden dan wakil presiden tahun <?=$detail->tahun?>
                    sebanyak <?= number_format((float)$detail->suaratdksah_kotabogor)?> atau sekitar
                    <?php
                 $a= $detail->suaratdksah_kotabogor;
                 $b= $detail->suarasah_kotabogor;
                 $hasil = $a / ($a + $b)*100;
                  ?>
                    <?= number_format((float)$hasil, 1)?>%
                  </li>
                  <br>
                  <li>Hasil jumlah perolehan suara tidak sah Provinsi Jawa Barat di surat suara sah dan tidak sah dalam
                    pemilu presiden dan wakil presiden tahun <?=$detail->tahun?>
                    sebanyak <?= number_format((float)$detail->suaratdksah_provinsi)?> atau sekitar
                    <?php
                 $a= $detail->suaratdksah_provinsi;
                 $b= $detail->suarasah_provinsi;
                 $hasil = $a / ($a + $b)*100;
                  ?>
                    <?= number_format((float)$hasil, 1)?>%
                  </li>
                  <br>
                  <li>Hasil jumlah perolehan suara tidak sah tingkat nasional di surat suara sah dan tidak sah dalam
                    pemilu
                    presiden dan wakil presiden tahun <?=$detail->tahun?>
                    sebanyak <?= number_format((float)$detail->suaratdksah_nasional)?> atau sekitar
                    <?php
                 $a= $detail->suaratdksah_nasional;
                 $b= $detail->suarasah_nasional;
                 $hasil = $a / ($a + $b)*100;
                  ?>
                    <?= number_format((float)$hasil, 1)?>%
                  </li>
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