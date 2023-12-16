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

              echo form_open_multipart('admin/jadwal_pilpres/tambah_data');
      ?>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Tahun:</label>
                    <input type="text" name="tahun" id="tahun1" value="<?= $this->session->userdata('tahun')?>"
                      class="form-control" placeholder="Tahun" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <!-- text input -->
                  <div class="form-group">
                    <label for="">Jadwal Pemilu:</label>
                    <input type="text" name="jadwal" id="jadwal" class="form-control" placeholder="Jadwal Pemilu"
                      required>
                  </div>
                </div>
                <!-- textarea -->
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="foto" class="form-control" id="foto" required>
                  </div>
                </div>
              </div>
              <hr>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-primary"> Simpan</button>
                <button type="reset" class="btn btn-danger">
                  Reset</button>
                <a href="<?= base_url('admin/jadwal_pilpres')?>" class="btn btn-warning">
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