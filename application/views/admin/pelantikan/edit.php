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

              echo form_open_multipart('admin/pelantikan/edit/' . $pelantikan->id_pelantikan);
      ?>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label> Tahun :</label>
                    <input type="text" name="tahun" id="tahun" class="form-control"
                      value="<?= $this->session->userdata('tahun')?>" readonly>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="">Jadwal Pelantikan :</label>
                    <input type="text" name="tgl_pelantikan" id="jadwal_pelantikan"
                      value="<?= $pelantikan->tgl_pelantikan?>" class="form-control" placeholder="Jadwal Pelantikan"
                      data-toggle="datepicker">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Foto Presiden</label>
                    <input type="file" name="foto_presiden" class="form-control">
                    <img src="<?= base_url('assets/upload/pelantikan/'. $pelantikan->foto_presiden)?>"
                      width="120px">&nbsp;
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Nama Presiden:</label>
                    <input type="text" name="nama_presiden" class="form-control"
                      value="<?= $pelantikan->nama_presiden?>" placeholder="Nama Presiden">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Foto Wakil Presiden</label>
                    <input type="file" name="foto_wapres" class="form-control">
                    <img src="<?= base_url('assets/upload/pelantikan/'. $pelantikan->foto_wapres)?>"
                      width="120px">&nbsp;
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- textarea -->
                  <div class="form-group">
                    <label>Nama Wakil Presiden:</label>
                    <input type="text" name="nama_wapres" class="form-control" value="<?= $pelantikan->nama_wapres?>"
                      placeholder="Nama Wakil Presiden">
                  </div>
                </div>
              </div>
              <span class="btn btn-secondary btn-sm">Periode Masa Jabatan</span>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Mulai Periode:</label>
                    <input type="text" name="mulai_periode" class="form-control"
                      value="<?= $pelantikan->mulai_periode?>" placeholder="Mulai Periode">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Akhir Periode:</label>
                    <input type="text" name="akhir_periode" class="form-control"
                      value="<?= $pelantikan->akhir_periode?>" placeholder="Akhir Periode">
                  </div>
                </div>
              </div>
              <hr>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-danger">
                  Reset</button>
                <a href="<?= base_url('admin/pelantikan')?>" class="btn btn-warning">
                  Kembali</a>
              </div>
              <?php echo form_close();?>
            </div>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </section>
</div>