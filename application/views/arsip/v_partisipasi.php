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
          <div class="card-body text-center">
            <h4 style="text-align:center; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
              REKAPITULASI JUMLAH PEMILIH TERDAFTAR DAN JUMLAH TPS DALAM PEMILU PRESIDEN DAN WAKIL PRESIDEN TAHUN
              <?= $detail->tahun?> DI KOTA BOGOR </h4><br>
            <table id="example2" class="table table-bordered table-striped" style="margin-left: -8px;color:black">
              <thead>
                <tr>
                  <th rowspan="2" style="text-align: center;">NO.</th>
                  <th rowspan="2" style="text-align: center;">NAMA KECAMATAN</th>
                  <th rowspan="2" style="text-align: center;">JUMLAH KELURAHAN</th>
                  <th rowspan="2" style="text-align: center;">JUMLAH TPS</th>
                  <th colspan="3" style="text-align: center;">JUMLAH PEMILIH</th>
                  <th rowspan="2" style="text-align: center;">KET</th>
                </tr>
                <tr>
                  <th style="text-align: center;">L</th>
                  <th style="text-align: center;">P</th>
                  <th style="text-align: center;">L+P</th>
                </tr>
              </thead>
              <thead></thead>
              <?php

							 $no= 1;
							 foreach ($rekappartisipasi_tps as $detail) { ?>
              <tr style="color: black;">
                <td>1</td>
                <td style="text-align:left">Bogor Barat</td>
                <td><?= $detail->jml_kelurahan_bgrbarat?></td>
                <td><?= $detail->jml_tps_bgrbarat?></td>
                <td><?= number_format((float)$detail->jml_pemilih_laki_bgrbarat)?></td>
                <td><?= number_format((float)$detail->jml_pemilih_perempuan_bgrbarat )?></td>
                <td><?= number_format((float)$detail->jml_pemilih_lakiperempuan_bgrbarat)?></td>
                <td><?= $detail->ket_bogorbarat?></td>
              </tr>
              <tr style="color: black;">
                <td>2</td>
                <td style="text-align:left">Bogor Selatan</td>
                <td><?= $detail->jml_kelurahan_bgrselatan?></td>
                <td><?= $detail->jml_tps_bgrselatan?></td>
                <td><?= number_format((float)$detail->jml_pemilih_laki_bgrselatan)?></td>
                <td><?= number_format((float)$detail->jml_pemilih_perempuan_bgrselatan )?></td>
                <td><?= number_format((float)$detail->jml_pemilih_lakiperempuan_bgrselatan)?></td>
                <td><?= $detail->ket_bogorselatan?></td>
              </tr>
              <tr style="color: black;">
                <td>3</td>
                <td style="text-align:left">Bogor Tengah</td>
                <td><?= $detail->jml_kelurahan_bgrtengah?></td>
                <td><?= $detail->jml_tps_bgrtengah?></td>
                <td><?= number_format((float)$detail->jml_pemilih_laki_bgrtengah)?></td>
                <td><?= number_format((float)$detail->jml_pemilih_perempuan_bgrtengah )?></td>
                <td><?= number_format((float)$detail->jml_pemilih_lakiperempuan_bgrtengah)?></td>
                <td><?= $detail->ket_bogortengah?></td>
              </tr>
              <tr style="color: black;">
                <td>4</td>
                <td style="text-align:left">Bogor Timur</td>
                <td><?= $detail->jml_kelurahan_bgrtimur?></td>
                <td><?= $detail->jml_tps_bgrtimur?></td>
                <td><?= number_format((float)$detail->jml_pemilih_laki_bgrtimur)?></td>
                <td><?= number_format((float)$detail->jml_pemilih_perempuan_bgrtimur )?></td>
                <td><?= number_format((float)$detail->jml_pemilih_lakiperempuan_bgrtimur)?></td>
                <td><?= $detail->ket_bogortimur?></td>
              </tr>
              <tr style="color: black;">
                <td>5</td>
                <td style="text-align:left">Bogor Utara</td>
                <td><?= $detail->jml_kelurahan_bgrutara?></td>
                <td><?= $detail->jml_tps_bgrutara?></td>
                <td><?= number_format((float)$detail->jml_pemilih_laki_bgrutara)?></td>
                <td><?= number_format((float)$detail->jml_pemilih_perempuan_bgrutara )?></td>
                <td><?= number_format((float)$detail->jml_pemilih_lakiperempuan_bgrutara)?></td>
                <td><?= $detail->ket_bogorutara?></td>
              </tr>
              <tr style="color: black;">
                <td>6</td>
                <td style="text-align:left">Tanah Sareal</td>
                <td><?= $detail->jml_kelurahan_tnhsareal?></td>
                <td><?= $detail->jml_tps_tnhsareal?></td>
                <td><?= number_format((float)$detail->jml_pemilih_laki_tnhsareal)?></td>
                <td><?= number_format((float)$detail->jml_pemilih_perempuan_tnhsareal )?></td>
                <td><?= number_format((float)$detail->jml_pemilih_lakiperempuan_tnhsareal)?></td>
                <td><?= $detail->ket_tanahsareal?></td>
              </tr>
              <tr style="color: black;">
                <td colspan="2" style="font-weight:bold;">TOTAL</td>
                <td style="font-weight:bold;"><?= number_format((float)$detail->total_jmlkelurahan)?></td>
                <td style="font-weight:bold;"><?= number_format((float)$detail->total_jmltps)?></td>
                <td style="font-weight:bold;"><?= number_format((float)$detail->total_jmlpemilihlaki)?></td>
                <td style="font-weight:bold;"><?= number_format((float)$detail->total_jmlpemilihperempuan)?></td>
                <td style="font-weight:bold;"><?= number_format((float)$detail->total_jmlpemilihlakiperempuan)?></td>
                <td></td>
              </tr>
              <?php } ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>