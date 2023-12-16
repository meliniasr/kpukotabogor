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

              echo form_open_multipart('admin/rekaphasilsuarahsah_kecamatan/edit/'.$rekapkecamatan->id_rekapkecamatan);
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
              <span class="btn btn-secondary btn-sm"><b>Pasangan Calon 1</b></span>
              <div class="row">
                <div class="col-sm-6">
                  <!-- textarea -->
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama_capres_satu" id="nama2" value="<?=$rekapkecamatan->nama_capres_satu?>"
                      class="form-control" readonly>
                    <input type="text" name="nama_capres_satu" id="nama" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Foto</label>
                    <input type="text" name="capres_satu" id="foto_capres" value="<?=$rekapkecamatan->capres_satu?>"
                      class="form-control" readonly>
                    <input type="text" name="capres_satu" id="foto_capres" class="form-control" readonly>
                  </div>
                </div>
              </div>
              <span class="btn btn-secondary btn-sm"><b>Pasangan Calon 2</b></span>
              <div class="row">
                <div class="col-sm-6">
                  <!-- textarea -->
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama_capres_dua" id="nama2" value="<?=$rekapkecamatan->nama_capres_dua?>"
                      class="form-control" readonly>
                    <input type="text" name="nama_capres_dua" id="nama2" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Foto</label>
                    <input type="text" name="capres_dua" id="foto_capres" value="<?=$rekapkecamatan->capres_dua?>"
                      class="form-control" readonly>
                    <input type="text" name="capres_dua" id="foto_capres" class="form-control" readonly>
                  </div>
                </div>
              </div>
              <hr>
              <span class="btn btn-secondary btn-sm"><b>RINCIAN JUMLAH DARI PASLON 1</b></span> &nbsp;&nbsp;=
              <div class="row">
                <div class="col-sm-2">
                  <div class="form-group">
                    <input type="text" name="jumlahakhir_rincian_satu" id="jumlahakhir_rincian_satu"
                      class="form-control" value="<?=$rekapkecamatan->jumlahakhir_rincian_satu?>"
                      style="margin-top:-35px;margin-left:250px;" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Kecamatan Bogor Barat:</label>
                    <input type="text" name="rincian_bogorbarat_satu" id="rincian_bogorbarat_satu" class="form-control"
                      value="<?=$rekapkecamatan->rincian_bogorbarat_satu?>">
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Kecamatan Bogor Selatan:</label>
                    <input type="text" name="rincian_bogorselatan_satu" id="rincian_bogorselatan_satu"
                      class="form-control" value="<?=$rekapkecamatan->rincian_bogorselatan_satu?>">
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Kecamatan Bogor Tengah:</label>
                    <input type="text" name="rincian_bogortengah_satu" id="rincian_bogortengah_satu"
                      class="form-control" value="<?=$rekapkecamatan->rincian_bogortengah_satu?>">
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Kecamatan Bogor Timur:</label>
                    <input type="text" name="rincian_bogortimur_satu" id="rincian_bogortimur_satu" class="form-control"
                      value="<?=$rekapkecamatan->rincian_bogortimur_satu?>">
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Kecamatan Bogor Utara:</label>
                    <input type="text" name="rincian_bogorutara_satu" id="rincian_bogorutara_satu" class="form-control"
                      value="<?=$rekapkecamatan->rincian_bogorutara_satu?>">
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Kecamatan Tanah Sareal:</label>
                    <input type="text" name="rincian_tanahsareal_satu" id="rincian_tanahsareal_satu"
                      class="form-control" value="<?=$rekapkecamatan->rincian_tanahsareal_satu?>">
                  </div>
                </div>
              </div>
              <hr>
              <span class="btn btn-secondary btn-sm"><b>RINCIAN JUMLAH DARI PASLON 2</b></span>&nbsp; =
              <div class="row">
                <div class="col-sm-2">
                  <div class="form-group">
                    <input type="text" name="jumlahakhir_rincian_dua" id="jumlahakhir_rincian_dua" class="form-control"
                      value="<?=$rekapkecamatan->jumlahakhir_rincian_dua?>" style="margin-top:-35px;margin-left:250px;"
                      readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Kecamatan Bogor Barat:</label>
                    <input type="text" name="rincian_bogorbarat_dua" id="rincian_bogorbarat_dua" class="form-control"
                      value="<?=$rekapkecamatan->rincian_bogorbarat_dua?>">
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Kecamatan Bogor Selatan:</label>
                    <input type="text" name="rincian_bogorselatan_dua" id="rincian_bogorselatan_dua"
                      class="form-control" value="<?=$rekapkecamatan->rincian_bogorselatan_dua?>">
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Kecamatan Bogor Tengah:</label>
                    <input type="text" name="rincian_bogortengah_dua" id="rincian_bogortengah_dua" class="form-control"
                      value="<?=$rekapkecamatan->rincian_bogortengah_dua?>">
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Kecamatan Bogor Timur:</label>
                    <input type="text" name="rincian_bogortimur_dua" id="rincian_bogortimur_dua" class="form-control"
                      value="<?=$rekapkecamatan->rincian_bogortimur_dua?>">
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Kecamatan Bogor Utara:</label>
                    <input type="text" name="rincian_bogorutara_dua" id="rincian_bogorutara_dua" class="form-control"
                      value="<?=$rekapkecamatan->rincian_bogorutara_dua?>">
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Kecamatan Tanah Sareal:</label>
                    <input type="text" name="rincian_tanahsareal_dua" id="rincian_tanahsareal_dua" class="form-control"
                      value="<?=$rekapkecamatan->rincian_tanahsareal_dua?>">
                  </div>
                </div>
              </div>
              <hr>
              <span class="btn btn-secondary btn-sm"><b>JUMLAH SUARA SAH</b></span>&nbsp;&nbsp;=
              <div class="row">
                <div class="col-sm-2">
                  <div class="form-group">
                    <input type="text" name="jumlahakhir_suarasah" id="jumlahakhir_suarasah" class="form-control"
                      value="<?=$rekapkecamatan->jumlahakhir_suarasah?>" style="margin-top:-35px;margin-left:180px;"
                      readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Kecamatan Bogor Barat:</label>
                    <input type="text" name="suarasah_bogorbarat" id="suarasah_bogorbarat" class="form-control"
                      value="<?=$rekapkecamatan->suarasah_bogorbarat?>" readonly>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Kecamatan Bogor Selatan:</label>
                    <input type="text" name="suarasah_bogorselatan" id="suarasah_bogorselatan" class="form-control"
                      value="<?=$rekapkecamatan->suarasah_bogorselatan?>" readonly>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Kecamatan Bogor Tengah:</label>
                    <input type="text" name="suarasah_bogortengah" id="suarasah_bogortengah" class="form-control"
                      value="<?=$rekapkecamatan->suarasah_bogortengah?>" readonly>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Kecamatan Bogor Timur:</label>
                    <input type="text" name="suarasah_bogortimur" id="suarasah_bogortimur" class="form-control"
                      value="<?=$rekapkecamatan->suarasah_bogortimur?>" readonly>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Kecamatan Bogor Utara:</label>
                    <input type="text" name="suarasah_bogorutara" id="suarasah_bogorutara" class="form-control"
                      value="<?=$rekapkecamatan->suarasah_bogorutara?>" readonly>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Kecamatan Tanah Sareal:</label>
                    <input type="text" name="suarasah_tanahsareal" id="suarasah_tanahsareal" class="form-control"
                      value="<?=$rekapkecamatan->suarasah_tanahsareal?>" readonly>
                  </div>
                </div>
              </div>
              <hr>
              <span class="btn btn-secondary btn-sm"><b>JUMLAH SUARA TIDAK SAH</b></span>&nbsp; =
              <div class="row">
                <div class="col-sm-2">
                  <div class="form-group">
                    <input type="text" name="jumlahakhir_suaratdksah" id="jumlahakhir_suaratdksah" class="form-control"
                      value="<?=$rekapkecamatan->jumlahakhir_suaratdksah?>" style="margin-top:-35px;margin-left:250px;"
                      readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Kecamatan Bogor Barat:</label>
                    <input type="text" name="suaratdksah_bogorbarat" id="suaratdksah_bogorbarat" class="form-control"
                      value="<?=$rekapkecamatan->suaratdksah_bogorbarat?>">
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Kecamatan Bogor Selatan:</label>
                    <input type="text" name="suaratdksah_bogorselatan" id="suaratdksah_bogorselatan"
                      class="form-control" value="<?=$rekapkecamatan->suaratdksah_bogorselatan?>">
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Kecamatan Bogor Tengah:</label>
                    <input type="text" name="suaratdksah_bogortengah" id="suaratdksah_bogortengah" class="form-control"
                      value="<?=$rekapkecamatan->suaratdksah_bogortengah?>">
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Kecamatan Bogor Timur:</label>
                    <input type="text" name="suaratdksah_bogortimur" id="suaratdksah_bogortimur" class="form-control"
                      value="<?=$rekapkecamatan->suaratdksah_bogortimur?>">
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Kecamatan Bogor Utara:</label>
                    <input type="text" name="suaratdksah_bogorutara" id="suaratdksah_bogorutara" class="form-control"
                      value="<?=$rekapkecamatan->suaratdksah_bogorutara?>">
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Kecamatan Tanah Sareal:</label>
                    <input type="text" name="suaratdksah_tanahsareal" id="suaratdksah_tanahsareal" class="form-control"
                      value="<?=$rekapkecamatan->suaratdksah_tanahsareal?>">
                  </div>
                </div>
              </div>
              <hr>
              <span class="btn btn-secondary btn-sm"><b>JUMLAH SUARA SAH DAN TIDAK SAH</b></span>&nbsp;&nbsp;=
              <div class="row">
                <div class="col-sm-2">
                  <div class="form-group">
                    <input type="text" name="jumlahakhir_suarasah_tdksah" id="jumlahakhir_suarasah_tdksah"
                      class="form-control" value="<?=$rekapkecamatan->jumlahakhir_suarasah_tdksah?>"
                      style="margin-top:-35px;margin-left:270px;" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Kecamatan Bogor Barat:</label>
                    <input type="text" name="suarasah_tdksah_bogorbarat" id="suarasah_tdksah_bogorbarat"
                      class="form-control" value="<?=$rekapkecamatan->suarasah_tdksah_bogorbarat?>" readonly>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Kecamatan Bogor Selatan:</label>
                    <input type="text" name="suarasah_tdksah_bogorselatan" id="suarasah_tdksah_bogorselatan"
                      class="form-control" value="<?=$rekapkecamatan->suarasah_tdksah_bogorselatan?>" readonly>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Kecamatan Bogor Tengah:</label>
                    <input type="text" name="suarasah_tdksah_bogortengah" id="suarasah_tdksah_bogortengah"
                      class="form-control" value="<?=$rekapkecamatan->suarasah_tdksah_bogortengah?>" readonly>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Kecamatan Bogor Timur:</label>
                    <input type="text" name="suarasah_tdksah_bogortimur" id="suarasah_tdksah_bogortimur"
                      class="form-control" value="<?=$rekapkecamatan->suarasah_tdksah_bogortimur?>" readonly>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Kecamatan Bogor Utara:</label>
                    <input type="text" name="suarasah_tdksah_bogorutara" id="suarasah_tdksah_bogorutara"
                      class="form-control" value="<?=$rekapkecamatan->suarasah_tdksah_bogorutara?>" readonly>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Kecamatan Tanah Sareal:</label>
                    <input type="text" name="suarasah_tdksah_tanahsareal" id="suarasah_tdksah_tanahsareal"
                      class="form-control" value="<?=$rekapkecamatan->suarasah_tdksah_tanahsareal?>" readonly>
                  </div>
                </div>
              </div>
              <hr>
              <div class="text-center">
                <button type="submit" class="btn btn-primary"> Simpan</button>
                <button type="reset" class="btn btn-danger"> Reset</button>
                <a href="<?= base_url('admin/rekaphasilsuarasah_kecamatan')?>" class="btn btn-warning">
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