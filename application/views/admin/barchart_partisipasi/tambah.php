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

              echo form_open_multipart('admin/tingkat_partisipasi_pemilih/tambah_data');
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
                <div class="col-sm-4">
                  <div class="form-group">
                    <label> Memilih Kota Bogor</label>
                    <?php foreach ($rekapprovinsi_user as $key => $value) {?>
                    <input type="text" name="tdkhakpemilih_kotabogor" id="tdkhakpemilih_kotabogor" class="form-control"
                      value="<?= $value->tdkhakpemilih_kotabogor?>" readonly>
                    <?php }?>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Memilih Provinsi</label>
                    <?php foreach ($rekapprovinsi_user as $key => $value) {?>
                    <input type="text" name="tdkhakpemilih_provinsi" id="tdkhakpemilih_provinsi" class="form-control"
                      value="<?= $value->tdkhakpemilih_provinsi?>" readonly>
                    <?php }?>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label> Memilih Nasional</label>
                    <?php foreach ($rekapprovinsi_user as $key => $value) {?>
                    <input type="text" name="tdkhakpemilih_nasional" id="tdkhakpemilih_nasional" class="form-control"
                      value="<?= $value->tdkhakpemilih_nasional?>" readonly>
                    <?php }?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label> Tidak Memilih Kota Bogor</label>
                    <?php foreach ($rekapprovinsi_user as $key => $value) {?>
                    <input type="text" name="suarasah_tdksah_kotabogor" id="suarasah_tdksah_kotabogor"
                      class="form-control" value="<?= $value->suarasah_tdksah_kotabogor?>" readonly>
                    <?php }?>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Tidak Memilih Provinsi</label>
                    <?php foreach ($rekapprovinsi_user as $key => $value) {?>
                    <input type="text" name="suarasah_tdksah_provinsi" id="suarasah_tdksah_provinsi"
                      class="form-control" value="<?= $value->suarasah_tdksah_provinsi?>" readonly>
                    <?php }?>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="">Tidak Memilih Nasional</label>
                    <?php foreach ($rekapprovinsi_user as $key => $value) {?>
                    <input type="text" name="suarasah_tdksah_nasional" id="suarasah_tdksah_nasional"
                      class="form-control" value="<?= $value->suarasah_tdksah_nasional?>" readonly>
                    <?php }?>
                  </div>
                </div>
              </div>
              <hr>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-primary"> Simpan</button>
                <button type="reset" class="btn btn-danger">
                  Reset</button>
                <a href="<?= base_url('admin/tingkat_partisipasi_pemilih')?>" class="btn btn-warning">
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