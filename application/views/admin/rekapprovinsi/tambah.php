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
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <?php
                if (isset($error_upload)) {
                  echo '<div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
                }
                echo validation_errors('<div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>');

              echo form_open_multipart('admin/rekaphasilsuarasah_provinsi/tambah_data');
      ?>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="">Tahun:</label>
                    <input type="text" name="tahun" id="tahun" class="form-control"
                      value="<?= $this->session->userdata('tahun')?>" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <!-- textarea -->
                  <div class="form-group">
                    <label>Foto Pasangan Calon 1</label>
                    <?php foreach ($rekapkecamatan_user as $key => $value) {?>
                    <input type="text" name="capres_satu" class="form-control" value="<?= $value->capres_satu?>"
                      readonly>
                    <?php }?>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nama Paslon 1</label>
                    <?php foreach ($rekapkecamatan_user as $key => $value) {?>
                    <input type="text" name="nama_capres_satu" class="form-control"
                      value="<?= $value->nama_capres_satu?>" readonly>
                    <?php }?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <!-- textarea -->
                  <div class="form-group">
                    <label>Foto Pasangan Calon 2</label>
                    <?php foreach ($rekapkecamatan_user as $key => $value) {?>
                    <input type="text" name="capres_dua" class="form-control" value="<?= $value->capres_dua?>" readonly>
                    <?php }?>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nama Paslon 2</label>
                    <?php foreach ($rekapkecamatan_user as $key => $value) {?>
                    <input type="text" name="nama_capres_dua" class="form-control" value="<?= $value->nama_capres_dua?>"
                      readonly>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <hr>
              <span class="btn btn-secondary btn-sm"><b>RINCIAN KOTA BOGOR</b></span>
              <div class="row">
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Rincian Kota Bogor Paslon 1 </label>
                    <input type="text" name="rincian_kotabogor_satu" id="rincian_kotabogor_satu" class="form-control"
                      value="0" required>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Rincian Kota Bogor Paslon 2</label>
                    <input type="text" name="rincian_kotabogor_dua" id="rincian_kotabogor_dua" class="form-control"
                      value="0" required>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Hasil Suara Sah Kota Bogor:</label>
                    <input type="text" name="suarasah_kotabogor" id="suarasah_kotabogor" class="form-control" value="0"
                      readonly>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Rincian Kota Bogor Paslon 1 (%) </label>
                    <input type="text" name="rincian_persen_kotabogor_satu" id="rincian_persen_kotabogor_satu"
                      class="form-control" value="0" readonly>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Rincian Kota Bogor Paslon 2 (%) </label>
                    <input type="text" name="rincian_persen_kotabogor_dua" id="rincian_persen_kotabogor_dua"
                      class="form-control" value="0" readonly>
                  </div>
                </div>
              </div>
              <hr>
              <span class="btn btn-secondary btn-sm"><b>RINCIAN PROVINSI</b></span>
              <div class="row">
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Rincian Provinsi Paslon 1 </label>
                    <input type="text" name="rincian_provinsi_satu" id="rincian_provinsi_satu" class="form-control"
                      value="0" required>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Rincian Provinsi Paslon 2</label>
                    <input type="text" name="rincian_provinsi_dua" id="rincian_provinsi_dua" class="form-control"
                      value="0" required>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Hasil Suara Sah Provinsi:</label>
                    <input type="text" name="suarasah_provinsi" id="suarasah_provinsi" class="form-control" value="0"
                      readonly>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Rincian Provinsi Paslon 1 (%) </label>
                    <input type="text" name="rincian_persen_provinsi_satu" id="rincian_persen_provinsi_satu"
                      class="form-control" value="0" readonly>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Rincian Provinsi Paslon 2 (%) </label>
                    <input type="text" name="rincian_persen_provinsi_dua" id="rincian_persen_provinsi_dua"
                      class="form-control" value="0" readonly>
                  </div>
                </div>
              </div>
              <hr>
              <span class="btn btn-secondary btn-sm"><b>RINCIAN NASIONAL</b></span>
              <div class="row">
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Rincian Nasional Paslon 1 </label>
                    <input type="text" name="rincian_nasional_satu" id="rincian_nasional_satu" class="form-control"
                      value="0" required>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Rincian Nasional Paslon 2</label>
                    <input type="text" name="rincian_nasional_dua" id="rincian_nasional_dua" class="form-control"
                      value="0" required>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Hasil Suara Sah Nasional:</label>
                    <input type="text" name="suarasah_nasional" id="suarasah_nasional" class="form-control" value="0"
                      readonly>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Rincian Nasional Paslon 1 (%) </label>
                    <input type="text" name="rincian_persen_nasional_satu" id="rincian_persen_nasional_satu"
                      class="form-control" value="0" readonly>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Rincian Nasional Paslon 2 (%) </label>
                    <input type="text" name="rincian_persen_nasional_dua" id="rincian_persen_nasional_dua"
                      class="form-control" value="0" readonly>
                  </div>
                </div>
              </div>
              <hr>
              <span class="btn btn-secondary btn-sm"><b>JUMLAH SUARA TIDAK SAH</b></span>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Kota Bogor:</label>
                    <input type="text" name="suaratdksah_kotabogor" id="suaratdksah_kotabogor" class="form-control"
                      value="0" required>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Povinsi:</label>
                    <input type="text" name="suaratdksah_provinsi" id="suaratdksah_provinsi" class="form-control"
                      value="0" required>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nasional:</label>
                    <input type="text" name="suaratdksah_nasional" id="suaratdksah_nasional" class="form-control"
                      value="0" required>
                  </div>
                </div>
              </div>
              <hr>
              <span class="btn btn-secondary btn-sm"><b>JUMLAH SUARA SAH DAN TIDAK SAH SELURUH PASANGAN
                  CALON</b></span>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label> Kota Bogor:</label>
                    <input type="text" name="suarasah_tdksah_kotabogor" id="suarasah_tdksah_kotabogor"
                      class="form-control" value="0" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Povinsi:</label>
                    <input type="text" name="suarasah_tdksah_provinsi" id="suarasah_tdksah_provinsi"
                      class="form-control" value="0" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nasional:</label>
                    <input type="text" name="suarasah_tdksah_nasional" id="suarasah_tdksah_nasional"
                      class="form-control" value="0" readonly>
                  </div>
                </div>
              </div>
              <hr>
              <span class="btn btn-secondary btn-sm"><b>JUMLAH PEMILIH TERDAFTAR PADA HARI PEMUNGUTAN
                  SUARA</b></span>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label> Kota Bogor:</label>
                    <input type="text" name="hakpemilih_kotabogor" id="hakpemilih_kotabogor" class="form-control"
                      value="0" required>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label> Provinsi:</label>
                    <input type="text" name="hakpemilih_provinsi" id="hakpemilih_provinsi" class="form-control"
                      value="0" required>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nasional:</label>
                    <input type="text" name="hakpemilih_nasional" id="hakpemilih_nasional" class="form-control"
                      value="0" required>
                  </div>
                </div>
              </div>
              <hr>
              <span class="btn btn-secondary btn-sm"><b>PEMILIH YANG TIDAK MENGGUNAKAN HAK PILIH</b></span>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label> Kota Bogor:</label>
                    <input type="text" name="tdkhakpemilih_kotabogor" id="tdkhakpemilih_kotabogor" class="form-control"
                      value="0" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Povinsi:</label>
                    <input type="text" name="tdkhakpemilih_provinsi" id="tdkhakpemilih_provinsi" class="form-control"
                      value="0" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nasional:</label>
                    <input type="text" name="tdkhakpemilih_nasional" id="tdkhakpemilih_nasional" class="form-control"
                      value="0" readonly>
                  </div>
                </div>
              </div>
              <hr>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-primary"> Simpan</button>
                <button type="reset" class="btn btn-danger">
                  Reset</button>
                <a href="<?= base_url('admin/rekaphasilsuarasah_provinsi')?>" class="btn btn-warning">
                  Kembali</a>
              </div>

            </div>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </section>
</div>