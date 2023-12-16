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

              echo form_open_multipart('admin/partai/edit/'.$partai->id_partai);
      ?>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Nama Partai</label>
                    <input type="text" class="form-control" name="nama_partai" value="<?= $partai->nama_partai?>"
                      required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Bendera</label><br>
                    <input type="file" class="form-control" name="bendera" required>
                    <img src="<?= base_url('assets/upload/bendera/'.$partai->bendera)?>" width="120px">&nbsp;
                  </div>
                </div>
              </div>
              <hr>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-primary"><i class="fas fa-check-circle"></i> Simpan</button>
                <button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>
                  Reset</button>
                <a href="<?= base_url('admin/partai')?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i>
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