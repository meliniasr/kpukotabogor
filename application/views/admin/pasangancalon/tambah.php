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

              echo form_open_multipart('admin/pasangan_calon/tambah_data');
      ?>
                <form method="post" action="<?=base_url('admin/pasangan_calon/tambah_data')?>"
                  enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-sm-3">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Tahun:</label>
                        <input type="text" name="tahun" id="tahun" class="form-control"
                          value="<?= $this->session->userdata('tahun')?>" readonly>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Foto Calon Presiden:</label>
                        <input type="file" name="foto_capres" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Nama:</label>
                        <input type="text" name="nama" id="nama" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Kategori:</label>
                        <select name="kategori" id="" class="form-select">
                          <option value="0" disabled="">--Pilih Kategori--</option>
                          <option value="Pasangan Calon 1"> Pasangan Calon 1 </option>
                          <option value="Pasangan Calon 2"> Pasangan Calon 2 </option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Visi:</label>
                        <textarea name="visi" id="visi" required></textarea>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Misi:</label>
                        <textarea name="misi" id="misi" required></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- textarea -->
                      <div class="form-group">
                        <label for="category">Pendukung Partai</label>
                      </div>
                      <div class="col-75" style="margin-top: 20px;">
                        <?php foreach ($partai as $key => $value) {?>
                        <input type="checkbox" name="partai_id[]" value="<?= $value->id_partai?>">
                        <img src="<?= base_url('assets/upload/bendera/'.$value->bendera)?>" width="60px">
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="form-group text-center">
                    <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
                    <button type="reset" class="btn btn-danger">
                      Reset</button>
                    <a href="<?= base_url('admin/pasangan_calon')?>" class="btn btn-warning">
                      Kembali</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>