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

              echo form_open_multipart('admin/perolehan_suarasah_nasional/tambah_data');
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
                  <div class="form-group">
                    <label>Nama Paslon 1</label>
                    <?php foreach ($rekapprovinsi_user as $key => $value) {?>
                    <input type="text" name="nama_capres_satu" id="nama_capres_satu" class="form-control"
                      value="<?= $value->nama_capres_satu?>" readonly>
                    <?php }?>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nama Paslon 2</label>
                    <?php foreach ($rekapprovinsi_user as $key => $value) {?>
                    <input type="text" name="nama_capres_dua" id="nama_capres_dua" class="form-control"
                      value="<?= $value->nama_capres_dua?>" readonly>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>Rincian Nasional Paslon 1 </label>
                    <?php foreach ($rekapprovinsi_user as $key => $value) {?>
                    <input type="text" name="rincian_nasional_satu" id="rincian_nasional_satu" class="form-control"
                      value="<?= $value->rincian_nasional_satu?>" readonly>
                    <?php }?>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>Rincian Nasional Paslon 2 </label>
                    <?php foreach ($rekapprovinsi_user as $key => $value) {?>
                    <input type="text" name="rincian_nasional_dua" id="rincian_nasional_dua" class="form-control"
                      value="<?= $value->rincian_nasional_dua?>" readonly>
                    <?php }?>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>Rincian Nasional Paslon 1 (%) </label>
                    <?php foreach ($rekapprovinsi_user as $key => $value) {?>
                    <input type="text" name="rincian_persen_nasional_satu" id="rincian_persen_nasional_satu"
                      class="form-control" value="<?= $value->rincian_persen_nasional_satu?>" readonly>
                    <?php } ?>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>Rincian Nasional Paslon 2 (%) </label>
                    <?php foreach ($rekapprovinsi_user as $key => $value) {?>
                    <input type="text" name="rincian_persen_nasional_dua" id="rincian_persen_nasional_dua"
                      class="form-control" value="<?= $value->rincian_persen_nasional_dua?>" readonly>
                    <?php }?>
                  </div>
                </div>
              </div>
              <hr>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-primary"> Simpan</button>
                <button type="reset" class="btn btn-danger">
                  Reset</button>
                <a href="<?= base_url('admin/perolehan_suarasah_nasional')?>" class="btn btn-warning">
                  Kembali</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>