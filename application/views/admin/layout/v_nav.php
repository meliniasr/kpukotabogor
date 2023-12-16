<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:#311b1b;">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="<?= base_url()?>assets/backend/logokpu.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
    <span class="brand-text font-weight-light"><b><?= $title?></b></span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <a class="nav-link">
          <i class="fas fa-user"></i>&nbsp;&nbsp;<?= $this->session->userdata('username')?>
        </a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="<?= base_url('admin/dashboard')?>" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= base_url('admin/partai')?>" class="nav-link">
            <i class="nav-icon fas fa-flag"></i>
            <p>
              Partai
            </p>
          </a>
        </li>

        <li class="nav-header">DATA PILPRES TAHUN &nbsp;<span
            class="badge badge-info right"><?= $this->session->userdata('tahun')?></span></li>
        <li class="nav-item">
          <a href="<?= base_url('admin/jadwal_pilpres')?>" class="nav-link">
            <i class="nav-icon far fa-calendar-alt"></i>
            <p>
              Jadwal Pilpres
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= base_url('admin/dasar_hukum')?>" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Dasar Hukum
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= base_url('admin/logo_maskot')?>" class="nav-link">
            <i class="nav-icon fas fa-image"></i>
            <p>
              Logo & Maskot
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= base_url('admin/pasangan_calon')?>" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Pasangan Calon
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-folder"></i>
            <p>
              Hasil Pemilu
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/rekaphasilsuarasah_kecamatan')?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Rekapitulasi Hasil Penghitungan Perolehan Suara Sah Pasangan Calon Berdasarkan Kecamatan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/rekaphasilsuarasah_provinsi')?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Rekapitulasi Hasil Penghitungan Perolehan Suara Sah Pasangan Calon Berdasarkan Provinsi Jawa
                  Barat
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/perolehan_suarasah_kota')?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Perolehan Suara Sah Pasangan Calon di Kota Bogor</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/perolehan_suarasah_provinsi')?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Perolehan Suara Sah Pasangan Calon di Provinsi Jawa Barat</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/perolehan_suarasah_nasional')?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Perolehan Suara Sah Pasangan Calon di Tingkat Nasional</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/pelantikan')?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pelantikan Presiden dan Wakil Presiden</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-folder"></i>
            <p>
              Partisipasi
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/rekap_partisipasi_tps')?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p> Rekapitulasi Jumlah Pemilih Terdaftar dan Jumlah TPS</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara')?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p> Rekapitulasi Data Pemilih Pada Pelaksanaan Pemungutan Suara</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/tingkat_partisipasi_pemilih')?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tingkat Partisipasi Pemilih Dalam Pemilu Presiden dan Wakil Presiden</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url('admin/surat_suara')?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Surat Suara Sah dan Tidak Sah Dalam Pemilu Presiden dan Wakil Presiden</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-map"></i>
            <p>
              Peta Politik
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/peta_politik')?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Peta Politik</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/viewmap')?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Viewmap</p>
              </a>
            </li>
          </ul>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>