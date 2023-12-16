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

              echo form_open_multipart('admin/peta_politik/edit/'.$viewmap->id_viewmap);
      ?>
              <div class="row">
                <div class="col-sm-12">
                  <!-- text input -->
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
                    <label>Kecamatan</label>
                    <input type="text" class="form-control" value="<?= $viewmap->kecamatan?>" readonly>
                    <select name="kecamatan" id="id_kecamatan" class="form-select">
                      <?php foreach ($datakec as $row):?>
                      <option value="<?= $row->id_kecamatan?>"><?= $row->id_kecamatan?>. <?= $row->kecamatan?></option>
                      <?php endforeach;?>
                    </select>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Kelurahan</label>
                    <input type="text" class="form-control" value="<?= $viewmap->kelurahan?>" readonly>
                    <select name="kelurahan" id="id_kelurahan" class="form-select">
                    </select>
                  </div>
                </div>
                <div class="col-sm-4">
                  <!-- textarea -->
                  <div class="form-group">
                    <label>GeoJson</label>
                    <input type="text" class="form-control" value="<?= $viewmap->geojson?>" readonly>
                    <select name="geojson" id="id_geojson" class="form-control" readonly>
                    </select>
                  </div>
                </div>
              </div>
              <span class="btn btn-secondary btn-sm"><b>DATA PASANGAN CALON 1</b></span>
              <div class="row">
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label for="">Jumlah Pasangan Calon 1:</label>
                    <input type="text" name="jml_paslon_satu" id="jml_paslon_satu"
                      value="<?= $viewmap->jml_paslon_satu?>" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label for="">Pasangan Calon 1 (%):</label>
                    <input type="text" name="persen_paslon_satu" id="persen_paslon_satu"
                      value="<?= $viewmap->persen_paslon_satu?>" class="form-control">
                  </div>
                </div>
              </div>
              <span class="btn btn-secondary btn-sm"><b>DATA PASANGAN CALON 2</b></span>
              <div class="row">
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label for="">Jumlah Pasangan Calon 2:</label>
                    <input type="text" name="jml_paslon_dua" id="jml_paslon_dua" value="<?= $viewmap->jml_paslon_dua?>"
                      class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label for="">Pasangan Calon 2 (%):</label>
                    <input type="text" name="persen_paslon_dua" id="persen_paslon_dua"
                      value="<?= $viewmap->persen_paslon_dua?>" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <!-- textarea -->
                  <div class="form-group">
                    <span class="btn btn-secondary btn-sm" style="margin-left:400px"><b>SUARA TERTINGGI PASANGAN
                        CALON</b></span>
                    <br>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>Kategori</label>
                    <input type="text" class="form-control" value="<?= $viewmap->kategori?>" readonly>
                    <input type="text" name="kategori" id="kategori" class="form-control">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" value="<?= $viewmap->nama?>" readonly>
                    <input type="text" name="nama" id="nama" class="form-control" readonly>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>Foto</label>
                    <input type="text" class="form-control" value="<?= $viewmap->foto_capres?>" readonly>
                    <input type="text" name="foto_capres" id="foto_capres" class="form-control" readonly>
                  </div>
                </div>
                <br>
                <div class="col-sm-3">
                  <label for="">Warna Peta:</label><br>
                  <span style="color: <?=$viewmap->warna?>;width:100px"><i
                      class="fas fa-square fa-xl "></i></span><?=$viewmap->kategori?><br><br>
                  <input type="radio" id="html" name="warna" value="#ff8000">
                  <label class="form-check-label"><span style="color: #ff8000"><i
                        class="fas fa-square fa-lg"></i></span>&nbsp;
                    Pasangan Calon 1</label><br><br>
                  <input type="radio" id="html" name="warna" value="#ff0000">
                  <label class="form-check-label"><span style="color: #ff0000"><i
                        class="fas fa-square fa-lg"></i></span>&nbsp;
                    Pasangan Calon 2</label><br>
                </div>
              </div>
            </div>
            <hr>
            <div class="form-group text-center">
              <button type="submit" class="btn btn-primary"> Simpan</button>
              <button type="reset" class="btn btn-danger">
                Reset</button>
              <a href="<?= base_url('admin/peta_politik')?>" class="btn btn-warning">
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