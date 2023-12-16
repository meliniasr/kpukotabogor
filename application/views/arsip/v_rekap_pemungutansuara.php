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
            <h4
              style="text-align:center; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;color:black">
              REKAPITULASI DATA PEMILIH PADA PELAKSANAAN PEMUNGUTAN SUARA DALAM PEMILU <br> PRESIDEN DAN WAKIL
              PRESIDEN
              TAHUN
              <?= $detail->tahun?> DI KOTA BOGOR </h4><br>
            <table id=" example1" class="table table-bordered table-striped" style="color:black;">
              <thead>
                <tr>
                  <th style="text-align: center;">NO.</th>
                  <th colspan="2" style="text-align: center;">URAIAN</th>
                  <th colspan="7" style="text-align: center;">RINCIAN PEROLEHAN SUARA</th>
                </tr>
                <tr>
                  <th style="text-align: center;">1</th>
                  <th colspan="2" style="text-align: center;">DATA PEMILIH DAN PENGGUNAAN HAK PILIH</th>
                  <th style="text-align: center;">KEC. BOGOR BARAT</th>
                  <th style="text-align: center;">KEC. BOGOR SELATAN</th>
                  <th style="text-align: center;">KEC. BOGOR TENGAH</th>
                  <th style="text-align: center;">KEC. BOGOR TIMUR</th>
                  <th style="text-align: center;">KEC. BOGOR UTARA</th>
                  <th style="text-align: center;">KEC. TANAH SAREAL</th>
                  <th style="text-align: center;">JUMLAH AKHIR</th>
                </tr>
                <tr>
                  <th style="text-align: center;">A.</th>
                  <th colspan="10" style="text-align: center;">DATA PEMILIH DAN PENGGUNAAN HAK PILIH</th>
                </tr>
                <tr>
                  <td colspan="2" rowspan="5" style="font-weight:bold;text-align:left;">1. Pemilih terdaftar
                    dalam
                    Daftar Pemilih
                    Tetap
                    (DPT)</a>
                  </td>
                </tr>
                <?php
								$no = 1;
								foreach($datapemilih_dpt as $detail) { ?>
                <tr>
                  <td style="font-weight:bold;">LK</td>
                  <td><?=number_format((float)$detail->dpt_bogorbarat_laki)?></td>
                  <td><?=number_format((float)$detail->dpt_bogorselatan_laki)?></td>
                  <td><?=number_format((float)$detail->dpt_bogortengah_laki)?></td>
                  <td><?=number_format((float)$detail->dpt_bogortimur_laki)?></td>
                  <td><?=number_format((float)$detail->dpt_bogorutara_laki)?></td>
                  <td><?=number_format((float)$detail->dpt_tanahsareal_laki)?></td>
                  <td><?=number_format((float)$detail->dpt_laki_jumlahakhir)?></td>
                </tr>
                <tr>
                  <td style="font-weight:bold;">PR</td>
                  <td><?=number_format((float)$detail->dpt_bogorbarat_perempuan)?></td>
                  <td><?=number_format((float)$detail->dpt_bogorselatan_perempuan)?></td>
                  <td><?=number_format((float)$detail->dpt_bogortengah_perempuan)?></td>
                  <td><?=number_format((float)$detail->dpt_bogortimur_perempuan)?></td>
                  <td><?=number_format((float)$detail->dpt_bogorutara_perempuan)?></td>
                  <td><?=number_format((float)$detail->dpt_tanahsareal_perempuan)?></td>
                  <td><?=number_format((float)$detail->dpt_perempuan_jumlahakhir)?></td>
                </tr>
                <tr>
                  <td style="font-weight:bold;">JML</td>
                  <td><?=number_format((float)$detail->dpt_bogorbarat_jumlah)?></td>
                  <td><?=number_format((float)$detail->dpt_bogorselatan_jumlah)?></td>
                  <td><?=number_format((float)$detail->dpt_bogortengah_jumlah)?></td>
                  <td><?=number_format((float)$detail->dpt_bogortimur_jumlah)?></td>
                  <td><?=number_format((float)$detail->dpt_bogorutara_jumlah)?></td>
                  <td><?=number_format((float)$detail->dpt_tanahsareal_jumlah)?></td>
                  <td><?=number_format((float)$detail->dpt_jumlah_akhir)?></td>
                </tr>
                <?php } ?>
              </thead>
              <thead>
                <tr>
                  <td colspan="2" rowspan="5" style="font-weight:bold;text-align:left;">2. Pemilih terdaftar dalam
                    Daftar Pemilih
                    Tambahan
                    (DPTb)</td>
                </tr>
                <?php
								$no = 1;
								foreach($datapemilih_dptb as $value) { ?>
                <tr>
                  <td style="font-weight:bold;">LK</td>
                  <td><?=number_format((float)$value->dptb_bogorbarat_laki)?></td>
                  <td><?=number_format((float)$value->dptb_bogorselatan_laki)?></td>
                  <td><?=number_format((float)$value->dptb_bogortengah_laki)?></td>
                  <td><?=number_format((float)$value->dptb_bogortimur_laki)?></td>
                  <td><?=number_format((float)$value->dptb_bogorutara_laki)?></td>
                  <td><?=number_format((float)$value->dptb_tanahsareal_laki)?></td>
                  <td><?=number_format((float)$value->dptb_laki_jumlahakhir)?></td>
                <tr>
                  <td style="font-weight:bold;">PR</td>
                  <td><?=number_format((float)$value->dptb_bogorbarat_perempuan)?></td>
                  <td><?=number_format((float)$value->dptb_bogorselatan_perempuan)?></td>
                  <td><?=number_format((float)$value->dptb_bogortengah_perempuan)?></td>
                  <td><?=number_format((float)$value->dptb_bogortimur_perempuan)?></td>
                  <td><?=number_format((float)$value->dptb_bogorutara_perempuan)?></td>
                  <td><?=number_format((float)$value->dptb_tanahsareal_perempuan)?></td>
                  <td><?=number_format((float)$value->dptb_perempuan_jumlahakhir)?></td>
                </tr>
                <tr>
                  <td style="font-weight:bold;">JML</td>
                  <td><?=number_format((float)$value->dptb_bogorbarat_jumlah)?></td>
                  <td><?=number_format((float)$value->dptb_bogorselatan_jumlah)?></td>
                  <td><?=number_format((float)$value->dptb_bogortengah_jumlah)?></td>
                  <td><?=number_format((float)$value->dptb_bogortimur_jumlah)?></td>
                  <td><?=number_format((float)$value->dptb_bogorutara_jumlah)?></td>
                  <td><?=number_format((float)$value->dptb_tanahsareal_jumlah)?></td>
                  <td><?=number_format((float)$value->dptb_jumlah_akhir)?></td>
                </tr>
                <?php } ?>
              </thead>
              <thead>
                <tr>
                  <td colspan="2" rowspan="5" style="font-weight:bold;text-align:left;">3. Pemilih terdaftar dalam
                    Daftar Pemilih
                    Khusus
                    (DPK)</td>
                </tr>
                <?php
								$no = 1;
								foreach($datapemilih_dpk as $value) { ?>
                <tr>
                  <td style="font-weight:bold;">LK</td>
                  <td><?=number_format((float)$value->dpk_bogorbarat_laki)?></td>
                  <td><?=number_format((float)$value->dpk_bogorselatan_laki)?></td>
                  <td><?=number_format((float)$value->dpk_bogortengah_laki)?></td>
                  <td><?=number_format((float)$value->dpk_bogortimur_laki)?></td>
                  <td><?=number_format((float)$value->dpk_bogorutara_laki)?></td>
                  <td><?=number_format((float)$value->dpk_tanahsareal_laki)?></td>
                  <td><?=number_format((float)$value->dpk_laki_jumlahakhir)?></td>
                </tr>
                <tr>
                  <td style="font-weight:bold;">PR</td>
                  <td><?=number_format((float)$value->dpk_bogorbarat_perempuan)?></td>
                  <td><?=number_format((float)$value->dpk_bogorselatan_perempuan)?></td>
                  <td><?=number_format((float)$value->dpk_bogortengah_perempuan)?></td>
                  <td><?=number_format((float)$value->dpk_bogortimur_perempuan)?></td>
                  <td><?=number_format((float)$value->dpk_bogorutara_perempuan)?></td>
                  <td><?=number_format((float)$value->dpk_tanahsareal_perempuan)?></td>
                  <td><?=number_format((float)$value->dpk_perempuan_jumlahakhir)?></td>
                </tr>
                <tr>
                  <td style="font-weight:bold;">JML</td>
                  <td><?=number_format((float)$value->dpk_bogorbarat_jumlah)?></td>
                  <td><?=number_format((float)$value->dpk_bogorselatan_jumlah)?></td>
                  <td><?=number_format((float)$value->dpk_bogortengah_jumlah)?></td>
                  <td><?=number_format((float)$value->dpk_bogortimur_jumlah)?></td>
                  <td><?=number_format((float)$value->dpk_bogorutara_jumlah)?></td>
                  <td><?=number_format((float)$value->dpk_tanahsareal_jumlah)?></td>
                  <td><?=number_format((float)$value->dpk_jumlah_akhir)?></td>
                </tr>
                <?php } ?>
              </thead>
              <thead>
                <tr>
                  <td colspan="2" rowspan="5" style="font-weight:bold;text-align:left;">4. Pemilih Khusus Tambahan
                    (DPKTb) /pengguna
                    KTP
                    atau identitas lain atau paspor </td>
                </tr>
                <?php
								$no = 1;
								foreach($datapemilih_dpktb as $detail) { ?>
                <tr>
                  <td style="font-weight:bold;">LK</td>
                  <td><?=number_format((float)$detail->dpktb_bogorbarat_laki)?></td>
                  <td><?=number_format((float)$detail->dpktb_bogorselatan_laki)?></td>
                  <td><?=number_format((float)$detail->dpktb_bogortengah_laki)?></td>
                  <td><?=number_format((float)$detail->dpktb_bogortimur_laki)?></td>
                  <td><?=number_format((float)$detail->dpktb_bogorutara_laki)?></td>
                  <td><?=number_format((float)$detail->dpktb_tanahsareal_laki)?></td>
                  <td><?=number_format((float)$detail->dpktb_laki_jumlahakhir)?></td>
                </tr>
                <tr>
                  <td style="font-weight:bold;">PR</td>
                  <td><?=number_format((float)$detail->dpktb_bogorbarat_perempuan)?></td>
                  <td><?=number_format((float)$detail->dpktb_bogorselatan_perempuan)?></td>
                  <td><?=number_format((float)$detail->dpktb_bogortengah_perempuan)?></td>
                  <td><?=number_format((float)$detail->dpktb_bogortimur_perempuan)?></td>
                  <td><?=number_format((float)$detail->dpktb_bogorutara_perempuan)?></td>
                  <td><?=number_format((float)$detail->dpktb_tanahsareal_perempuan)?></td>
                  <td><?=number_format((float)$detail->dpktb_perempuan_jumlahakhir)?></td>
                </tr>
                <tr>
                  <td style="font-weight:bold;">JML</td>
                  <td><?=number_format((float)$detail->dpktb_bogorbarat_jumlah)?></td>
                  <td><?=number_format((float)$detail->dpktb_bogorselatan_jumlah)?></td>
                  <td><?=number_format((float)$detail->dpktb_bogortengah_jumlah)?></td>
                  <td><?=number_format((float)$detail->dpktb_bogortimur_jumlah)?></td>
                  <td><?=number_format((float)$detail->dpktb_bogorutara_jumlah)?></td>
                  <td><?=number_format((float)$detail->dpktb_tanahsareal_jumlah)?></td>
                  <td><?=number_format((float)$detail->dpktb_jumlah_akhir)?></td>
                </tr>
                <?php } ?>
              </thead>
              <thead>
                <tr>
                  <td colspan="2" rowspan="5" style="font-weight:bold;text-align:left;">5. Jumlah Pemilih (1+2+3+4)
                  </td>
                </tr>
                <?php
								$no = 1;
								foreach($jumlahkeseluruhan_datapemilih as $detail) { ?>
                <tr>
                  <td style="font-weight:bold;">LK</td>
                  <td><?=number_format((float)$detail->jk_bogorbarat_laki)?></td>
                  <td><?=number_format((float)$detail->jk_bogorselatan_laki)?></td>
                  <td><?=number_format((float)$detail->jk_bogortengah_laki)?></td>
                  <td><?=number_format((float)$detail->jk_bogortimur_laki)?></td>
                  <td><?=number_format((float)$detail->jk_bogorutara_laki)?></td>
                  <td><?=number_format((float)$detail->jk_tanahsareal_laki)?></td>
                  <td><?=number_format((float)$detail->jk_laki_jumlahakhir)?></td>
                </tr>
                <tr>
                  <td style="font-weight:bold;">PR</td>
                  <td><?=number_format((float)$detail->jk_bogorbarat_perempuan)?></td>
                  <td><?=number_format((float)$detail->jk_bogorselatan_perempuan)?></td>
                  <td><?=number_format((float)$detail->jk_bogortengah_perempuan)?></td>
                  <td><?=number_format((float)$detail->jk_bogortimur_perempuan)?></td>
                  <td><?=number_format((float)$detail->jk_bogorutara_perempuan)?></td>
                  <td><?=number_format((float)$detail->jk_tanahsareal_perempuan)?></td>
                  <td><?=number_format((float)$detail->jk_perempuan_jumlahakhir)?></td>
                </tr>
                <tr>
                  <td style="font-weight:bold;">JML</td>
                  <td><?=number_format((float)$detail->jk_bogorbarat_jumlah)?></td>
                  <td><?=number_format((float)$detail->jk_bogorselatan_jumlah)?></td>
                  <td><?=number_format((float)$detail->jk_bogortengah_jumlah)?></td>
                  <td><?=number_format((float)$detail->jk_bogortimur_jumlah)?></td>
                  <td><?=number_format((float)$detail->jk_bogorutara_jumlah)?></td>
                  <td><?=number_format((float)$detail->jk_tanahsareal_jumlah)?></td>
                  <td><?=number_format((float)$detail->jk_jumlah_akhir)?></td>
                </tr>
                <?php } ?>
              </thead>
              <thead>
                <tr>
                  <th style="text-align: center;">B.</th>
                  <th colspan="10" style="text-align: center;">PENGGUNA HAK PILIH</th>
                </tr>
                </tr>
                <tr>
                  <td colspan="2" rowspan="5" style="font-weight:bold;text-align:left;">1. Pengguna hak pilih dalam
                    Daftar Pemilih
                    Tetap
                    (DPT)</td>
                </tr>
                <?php
								$no = 1;
								foreach($hakpilih_dpt as $detail) { ?>
                <tr>
                  <td style="font-weight:bold;">LK</td>
                  <td><?=number_format((float)$detail->hakpilih_dpt_bogorbarat_laki)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpt_bogorselatan_laki)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpt_bogortengah_laki)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpt_bogortimur_laki)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpt_bogorutara_laki)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpt_tanahsareal_laki)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpt_laki_jumlahakhir)?></td>
                </tr>
                <tr>
                  <td style="font-weight:bold;">PR</td>
                  <td><?=number_format((float)$detail->hakpilih_dpt_bogorbarat_perempuan)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpt_bogorselatan_perempuan)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpt_bogortengah_perempuan)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpt_bogortimur_perempuan)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpt_bogorutara_perempuan)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpt_tanahsareal_perempuan)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpt_perempuan_jumlahakhir)?></td>
                </tr>
                <tr>
                  <td style="font-weight:bold;">JML</td>
                  <td><?=number_format((float)$detail->hakpilih_dpt_bogorbarat_jumlah)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpt_bogorselatan_jumlah)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpt_bogortengah_jumlah)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpt_bogortimur_jumlah)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpt_bogorutara_jumlah)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpt_tanahsareal_jumlah)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpt_jumlah_akhir)?></td>
                </tr>
                <?php } ?>
              </thead>
              <thead>
                <tr>
                  <td colspan="2" rowspan="5" style="font-weight:bold;text-align:left;">2. Pengguna hak pilih dalam
                    Daftar Pemilih
                    Tambahan (DPTb)/ Pemilih dari TPS lain </td>
                </tr>
                <?php
								$no = 1;
								foreach($hakpilih_dptb as $detail) { ?>
                <tr>
                  <td style="font-weight:bold;">LK</td>
                  <td><?=number_format((float)$detail->hakpilih_dptb_bogorbarat_laki)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dptb_bogorselatan_laki)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dptb_bogortengah_laki)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dptb_bogortimur_laki)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dptb_bogorutara_laki)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dptb_tanahsareal_laki)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dptb_laki_jumlahakhir)?></td>
                </tr>
                <tr>
                  <td style="font-weight:bold;">PR</td>
                  <td><?=number_format((float)$detail->hakpilih_dptb_bogorbarat_perempuan)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dptb_bogorselatan_perempuan)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dptb_bogortengah_perempuan)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dptb_bogortimur_perempuan)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dptb_bogorutara_perempuan)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dptb_tanahsareal_perempuan)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dptb_perempuan_jumlahakhir)?></td>
                </tr>
                <tr>
                  <td style="font-weight:bold;">JML</td>
                  <td><?=number_format((float)$detail->hakpilih_dptb_bogorbarat_jumlah)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dptb_bogorselatan_jumlah)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dptb_bogortengah_jumlah)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dptb_bogortimur_jumlah)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dptb_bogorutara_jumlah)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dptb_tanahsareal_jumlah)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dptb_jumlah_akhir)?></td>
                </tr>
                <?php } ?>
              </thead>
              <thead>
                <tr>
                  <td colspan="2" rowspan="5" style="font-weight:bold;text-align:left;">3. Pengguna hak pilih dalam
                    Daftar Pemilih
                    Khusus (DPK)</td>
                </tr>
                <?php
								$no = 1;
								foreach($hakpilih_dpk as $detail) { ?>
                <tr>
                  <td style="font-weight:bold;">LK</td>
                  <td><?=number_format((float)$detail->hakpilih_dpk_bogorbarat_laki)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpk_bogorselatan_laki)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpk_bogortengah_laki)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpk_bogortimur_laki)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpk_bogorutara_laki)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpk_tanahsareal_laki)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpk_laki_jumlahakhir)?></td>
                </tr>
                <tr>
                  <td style="font-weight:bold;">PR</td>
                  <td><?=number_format((float)$detail->hakpilih_dpk_bogorbarat_perempuan)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpk_bogorselatan_perempuan)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpk_bogortengah_perempuan)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpk_bogortimur_perempuan)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpk_bogorutara_perempuan)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpk_tanahsareal_perempuan)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpk_perempuan_jumlahakhir)?></td>
                </tr>
                <tr>
                  <td style="font-weight:bold;">JML</td>
                  <td><?=number_format((float)$detail->hakpilih_dpk_bogorbarat_jumlah)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpk_bogorselatan_jumlah)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpk_bogortengah_jumlah)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpk_bogortimur_jumlah)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpk_bogorutara_jumlah)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpk_tanahsareal_jumlah)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpk_jumlah_akhir)?></td>
                </tr>
                <?php } ?>
              </thead>
              <thead>
                <tr>
                  <td colspan="2" rowspan="5" style="font-weight:bold;text-align:left;">4. Pengguna hak pilih dalam
                    Daftar Pemilih
                    Khusus Tambahan (DPKTb) /pengguna KTP atau identitas lain atau paspor <br></td>
                </tr>
                <?php
								$no = 1;
								foreach($hakpilih_dpktb as $detail) { ?>
                <tr>
                  <td style="font-weight:bold;">LK</td>
                  <td><?=number_format((float)$detail->hakpilih_dpktb_bogorbarat_laki)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpktb_bogorselatan_laki)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpktb_bogortengah_laki)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpktb_bogortimur_laki)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpktb_bogorutara_laki)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpktb_tanahsareal_laki)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpktb_laki_jumlahakhir)?></td>
                </tr>
                <tr>
                  <td style="font-weight:bold;">PR</td>
                  <td><?=number_format((float)$detail->hakpilih_dpktb_bogorbarat_perempuan)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpktb_bogorselatan_perempuan)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpktb_bogortengah_perempuan)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpktb_bogortimur_perempuan)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpktb_bogorutara_perempuan)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpktb_tanahsareal_perempuan)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpktb_perempuan_jumlahakhir)?></td>
                </tr>
                <tr>
                  <td style="font-weight:bold;">JML</td>
                  <td><?=number_format((float)$detail->hakpilih_dpktb_bogorbarat_jumlah)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpktb_bogorselatan_jumlah)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpktb_bogortengah_jumlah)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpktb_bogortimur_jumlah)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpktb_bogorutara_jumlah)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpktb_tanahsareal_jumlah)?></td>
                  <td><?=number_format((float)$detail->hakpilih_dpktb_jumlah_akhir)?></td>
                </tr>
                <?php } ?>
              </thead>
              <thead>
                <tr>
                  <td colspan="2" rowspan="5" style="font-weight:bold;text-align:left;">5. Jumlah seluruh pengguna
                    Hak Pilih
                    (1+2+3+4+5)
                  </td>
                </tr>
                <?php
								$no = 1;
								foreach($jumlahkeseluruhan_hakpilih as $detail) { ?>
                <tr>
                  <td style="font-weight:bold;">LK</td>
                  <td><?=number_format((float)$detail->hakpilih_jk_bogorbarat_laki)?></td>
                  <td><?=number_format((float)$detail->hakpilih_jk_bogorselatan_laki)?></td>
                  <td><?=number_format((float)$detail->hakpilih_jk_bogortengah_laki)?></td>
                  <td><?=number_format((float)$detail->hakpilih_jk_bogortimur_laki)?></td>
                  <td><?=number_format((float)$detail->hakpilih_jk_bogorutara_laki)?></td>
                  <td><?=number_format((float)$detail->hakpilih_jk_tanahsareal_laki)?></td>
                  <td><?=number_format((float)$detail->hakpilih_jk_laki_jumlahakhir)?></td>
                </tr>
                <tr>
                  <td style="font-weight:bold;">PR</td>
                  <td><?=number_format((float)$detail->hakpilih_jk_bogorbarat_perempuan)?></td>
                  <td><?=number_format((float)$detail->hakpilih_jk_bogorselatan_perempuan)?></td>
                  <td><?=number_format((float)$detail->hakpilih_jk_bogortengah_perempuan)?></td>
                  <td><?=number_format((float)$detail->hakpilih_jk_bogortimur_perempuan)?></td>
                  <td><?=number_format((float)$detail->hakpilih_jk_bogorutara_perempuan)?></td>
                  <td><?=number_format((float)$detail->hakpilih_jk_tanahsareal_perempuan)?></td>
                  <td><?=number_format((float)$detail->hakpilih_jk_perempuan_jumlahakhir)?></td>
                </tr>
                <tr>
                  <td style="font-weight:bold;">JML</td>
                  <td><?=number_format((float)$detail->hakpilih_jk_bogorbarat_jumlah)?></td>
                  <td><?=number_format((float)$detail->hakpilih_jk_bogorselatan_jumlah)?></td>
                  <td><?=number_format((float)$detail->hakpilih_jk_bogortengah_jumlah)?></td>
                  <td><?=number_format((float)$detail->hakpilih_jk_bogortimur_jumlah)?></td>
                  <td><?=number_format((float)$detail->hakpilih_jk_bogorutara_jumlah)?></td>
                  <td><?=number_format((float)$detail->hakpilih_jk_tanahsareal_jumlah)?></td>
                  <td><?=number_format((float)$detail->hakpilih_jk_jumlah_akhir)?></td>
                </tr>
                <?php } ?>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
    <br>
  </div>
</div>