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
            <br>
            <div id="carouselExampleCaptions" class="carousel slide">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                  aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                  aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                  aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active" style="left:270px">
                  <div class="judul" style="margin-left:-500px">
                    <h2 style="font-family:'Franklin Gothic Medium', 'Arial Narpasangancalon', Arial, sans-serif;">
                      PASANGAN CALON PRESIDEN DAN WAKIL PRESIDEN <br> DALAM PEMILU TAHUN <?=$detail->tahun?>
                    </h2>
                  </div>
                  <br>
                  <img src="<?php echo base_url().'assets/upload/logomaskot/'. $detail2->desain_suratsuara?>"
                    class="d-block w-50">
                  <br><br> <br><br>
                  <div class="carousel-caption d-none d-md-block" style="left:-380px">
                    <h5>Surat Suara Pemilihan Umum Presiden dan Wakil Presiden <?= $detail->tahun?></h5>
                  </div>
                </div>
                <div class="carousel-item" style="left:450px">
                  <div class="judul" style="margin-left:-800px">
                    <h2 style="font-family:'Franklin Gothic Medium', 'Arial Narpasangancalon', Arial, sans-serif;">
                      VISI MISI PASANGAN CALON <?=$detail->tahun?>
                    </h2>
                  </div>
                  <br>
                  <div class="card-body">
                    <?php foreach($pasangancalon as $detail): ?>
                    <span class="btn btn-secondary btn-sm"
                      style="margin-left:-800px"><b><?=$detail->kategori?></b></span><br>
                    <img src="<?= base_url('assets/upload/pasangancalon/'. $detail->foto_capres)?>"
                      class="d-block w-35">
                    <br>
                    <div class="nama" style="color:black;margin-left:-800px">
                      <h2><?=$detail->nama?></h2>
                    </div>
                    <div class="card" style="width:80%;margin-left:-300px;color:black;">
                      <div class="card-body">
                        <h4
                          style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;color:black;">
                          VISI</h4>
                        <p><?=$detail->visi?></p>
                        <br>
                        <h4
                          style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;color:black;">
                          MISI</h4>
                        <p><?= $detail->misi?></p>
                      </div>
                    </div>
                    <br>
                    <?php endforeach;?>
                    <div class="bendera text-center" style="margin-left:-450px">
                      <div class="card" style="width:70%">
                        <div class="card-body">
                          <h4
                            style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;color:black;">
                            PENDUKUNG PARTAI</h4>
                          <?php foreach ($foto as $key => $detail3) {?>
                          <img src="<?= base_url('assets/upload/bendera/'.$detail3->bendera)?>" width="80px">
                          <?php }?>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>

          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

    </div>
  </div>
</div>
<br>
</div>
</div>





<!-- About End -->