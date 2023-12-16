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
                  style="color:white;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Menu List Data
                  Pilpres
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
          <div class="card-body text-center">
            <h4 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
              REKAPITULASI HASIL PENGHITUNGAN PEROLEHAN SUARA SAH PASANGAN CALON DALAM PEMILIHAN UMUM PRESIDEN DAN WAKIL
              PRESIDEN <?= $detail->tahun?> BERDASARKAN KECAMATAN DI KOTA BOGOR</h4>
            <br>
            <table id="example2" class="table table-bordered table-striped" style="margin-left: -8px;color:black">
              <thead>
                <tr">
                  <th style="text-align: center;">NO.</th>
                  <th colspan="2" style="text-align: center;">NAMA PASANGAN CALON PRESIDEN DAN WAKIL
                    PRESIDEN</th>
                  <th colspan="7" style="text-align: center;">RINCIAN</th>
                  </tr>
                  <tr>
                    <th style="text-align: center;">IV.</th>
                    <th colspan="2" style="text-align: center;">RINCIAN JUMLAH PEROLEHAN SUARA
                      PASANGAN
                      CALON PRESIDEN DAN WAKIL
                      PRESIDEN</th>
                    <th style="text-align: center;">KEC. BOGOR BARAT</th>
                    <th style="text-align: center;">KEC. BOGOR SELATAN</th>
                    <th style="text-align: center;">KEC. BOGOR TENGAH</th>
                    <th style="text-align: center;">KEC. BOGOR TIMUR</th>
                    <th style="text-align: center;">KEC. BOGOR UTARA</th>
                    <th style="text-align: center;">KEC. TANAH SAREAL</th>
                    <th style="text-align: center;">JUMLAH AKHIR</th>
                  </tr>
                  <thead></thead>
                  <thead>

                    <tr>
                      <td>1</td>
                      <td><img width="100"
                          src="<?php echo base_url() . 'assets/upload/pasangancalon/' . $detail->capres_satu ?>"></td>
                      <td><?= $detail->nama_capres_satu?></td>
                      <td><?= number_format((float)$detail->rincian_bogorbarat_satu)?></td>
                      <td><?= number_format((float)$detail->rincian_bogorselatan_satu)?></td>
                      <td><?= number_format((float)$detail->rincian_bogortengah_satu)?></td>
                      <td><?= number_format((float)$detail->rincian_bogortimur_satu)?></td>
                      <td><?= number_format((float)$detail->rincian_bogorutara_satu)?></td>
                      <td><?= number_format((float)$detail->rincian_tanahsareal_satu)?></td>
                      <td><?= number_format((float)$detail->jumlahakhir_rincian_satu)?></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td><img width="100"
                          src="<?php echo base_url() . 'assets/upload/pasangancalon/' . $detail->capres_dua ?>"></td>
                      <td><?= $detail->nama_capres_dua?></td>
                      <td><?= number_format((float)$detail->rincian_bogorbarat_dua)?></td>
                      <td><?= number_format((float)$detail->rincian_bogorselatan_dua)?></td>
                      <td><?= number_format((float)$detail->rincian_bogortengah_dua)?></td>
                      <td><?= number_format((float)$detail->rincian_bogortimur_dua)?></td>
                      <td><?= number_format((float)$detail->rincian_bogorutara_dua)?></td>
                      <td><?= number_format((float)$detail->rincian_tanahsareal_dua)?></td>
                      <td><?= number_format((float)$detail->jumlahakhir_rincian_dua)?></td>
                    </tr>

                    <tr>
                      <td colspan="3" style="font-weight:bold;text-align:left">Jumlah Suara Sah Calon Presiden dan Wakil
                        Presiden </td>
                      <td><?=number_format((float)$detail->suarasah_bogorbarat)?></td>
                      <td><?=number_format((float)$detail->suarasah_bogorselatan)?></td>
                      <td><?=number_format((float)$detail->suarasah_bogortengah)?></td>
                      <td><?=number_format((float)$detail->suarasah_bogortimur)?></td>
                      <td><?=number_format((float)$detail->suarasah_bogorutara)?></td>
                      <td><?=number_format((float)$detail->suarasah_tanahsareal)?></td>
                      <td><?=number_format((float)$detail->jumlahakhir_suarasah)?></td>
                    </tr>
                    <tr>
                      <td colspan="3" style="font-weight:bold;text-align:left">Jumlah Suara Tidak Sah </td>
                      <td><?=number_format((float)$detail->suaratdksah_bogorbarat)?></td>
                      <td><?=number_format((float)$detail->suaratdksah_bogorselatan)?></td>
                      <td><?=number_format((float)$detail->suaratdksah_bogortengah)?></td>
                      <td><?=number_format((float)$detail->suaratdksah_bogortimur)?></td>
                      <td><?=number_format((float)$detail->suaratdksah_bogorutara)?></td>
                      <td><?=number_format((float)$detail->suaratdksah_tanahsareal)?></td>
                      <td><?=number_format((float)$detail->jumlahakhir_suaratdksah)?></td>
                    </tr>
                    <tr>
                      <td colspan="3" style="font-weight:bold;text-align:left">Jumlah Suara Sah dan Tidak Sah </td>
                      <td><?= number_format((float)$detail->suarasah_tdksah_bogorbarat)?></td>
                      <td><?= number_format((float)$detail->suarasah_tdksah_bogorselatan)?></td>
                      <td><?= number_format((float)$detail->suarasah_tdksah_bogortengah)?></td>
                      <td><?= number_format((float)$detail->suarasah_tdksah_bogortimur)?></td>
                      <td><?= number_format((float)$detail->suarasah_tdksah_bogorutara)?></td>
                      <td><?= number_format((float)$detail->suarasah_tdksah_tanahsareal)?></td>
                      <td><?= number_format((float)$detail->jumlahakhir_suarasah_tdksah)?></td>
                    </tr>

                  </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
    <br>
  </div>
</div>




















<!-- About End -->