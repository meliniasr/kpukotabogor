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

              echo form_open_multipart('admin/logo_maskot/update/' . $logomaskot->id_logomaskot);
      ?>
              <form action="<?= base_url('admin/logo_maskot/update') ?>" method="POST" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Tahun:</label>
                      <input type="text" name="tahun" id="tahun" class="form-control"
                        value="<?= $this->session->userdata('tahun')?>" readonly>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="">Jadwal :</label>
                      <?php foreach ($jadwal_user as $key => $value) {?>
                      <input type="text" name="jadwal" id="jadwal" class="form-control" value="<?= $value->jadwal?>"
                        readonly>
                      <?php }?>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <!-- text input -->
                    <div class="form-group">
                      <label for="">Desain Surat Suara :</label>
                      <input type="file" name="desain_suratsuara" class="form-control">
                      <img src="<?= base_url('assets/upload/logomaskot/'. $logomaskot->desain_suratsuara)?>"
                        width="120px">&nbsp;
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <!-- text input -->
                    <div class="form-group">
                      <label for="">Foto Paslon 1 :</label>
                      <input type="file" name="foto_paslon_satu" class="form-control">
                      <img src="<?= base_url('assets/upload/logomaskot/'.$logomaskot->foto_paslon_satu)?>"
                        width="120px">&nbsp;
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <!-- text input -->
                    <div class="form-group">
                      <label for="">Foto Paslon 2 :</label>
                      <input type="file" name="foto_paslon_dua" class="form-control">
                      <img src="<?= base_url('assets/upload/logomaskot/'.$logomaskot->foto_paslon_dua)?>"
                        width="120px">&nbsp;
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="">Logo :</label>
                      <input type="file" name="gambar_logo" class="form-control">
                      <img src="<?= base_url('assets/upload/logomaskot/'.$logomaskot->gambar_logo)?>"
                        width="120px">&nbsp;
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label for="">Maskot :</label>
                      <input type="file" name="gambar_maskot" class="form-control">
                      <img src="<?= base_url('assets/upload/logomaskot/'.$logomaskot->gambar_maskot)?>"
                        width="120px">&nbsp;
                    </div>
                  </div>
                </div>
                <hr>
                <div class="form-group text-center">
                  <button type="submit" class="btn btn-primary"> Simpan</button>
                  <button type="reset" class="btn btn-danger">
                    Reset</button>
                  <a href="<?= base_url('admin/logo_maskot')?>" class="btn btn-warning">
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