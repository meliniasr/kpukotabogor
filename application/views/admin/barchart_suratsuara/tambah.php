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

              echo form_open_multipart('admin/surat_suara/tambah_data');
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
                    <label> Suara Sah Kota Bogor</label>
                    <?php foreach ($rekapprovinsi_user as $key => $value) {?>
                    <input type="text" name="suarasah_kotabogor" id="suarasah_kotabogor" class="form-control"
                      value="<?= $value->suarasah_kotabogor?>" readonly>
                    <?php }?>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label> Suara Sah Provinsi</label>
                    <?php foreach ($rekapprovinsi_user as $key => $value) {?>
                    <input type="text" name="suarasah_provinsi" id="suarasah_provinsi" class="form-control"
                      value="<?= $value->suarasah_provinsi?>" readonly>
                    <?php }?>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label> Suara Sah Nasional</label>
                    <?php foreach ($rekapprovinsi_user as $key => $value) {?>
                    <input type="text" name="suarasah_nasional" id="suarasah_nasional" class="form-control"
                      value="<?= $value->suarasah_nasional?>" readonly>
                    <?php }?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label> Suara Tidak Sah Kota Bogor</label>
                    <?php foreach ($rekapprovinsi_user as $key => $value) {?>
                    <input type="text" name="suaratdksah_kotabogor" id="suaratdksah_kotabogor" class="form-control"
                      value="<?= $value->suaratdksah_kotabogor?>" readonly>
                    <?php }?>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Suara Tidak Sah Provinsi</label>
                    <?php foreach ($rekapprovinsi_user as $key => $value) {?>
                    <input type="text" name="suaratdksah_provinsi" id="suaratdksah_provinsi" class="form-control"
                      value="<?= $value->suaratdksah_provinsi?>" readonly>
                    <?php }?>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="">Suara Tidak Sah Nasional</label>
                    <?php foreach ($rekapprovinsi_user as $key => $value) {?>
                    <input type="text" name="suaratdksah_nasional" id="suaratdksah_nasional" class="form-control"
                      value="<?= $value->suaratdksah_nasional?>" readonly>
                    <?php }?>
                  </div>
                </div>
              </div>
              <hr>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-primary"> Simpan</button>
                <button type="reset" class="btn btn-danger">
                  Reset</button>
                <a href="<?= base_url('admin/surat_suara')?>" class="btn btn-warning">
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