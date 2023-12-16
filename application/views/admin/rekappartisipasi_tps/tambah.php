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

              echo form_open_multipart('admin/rekap_partisipasi_tps/tambah_data');
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
              <span class="btn btn-secondary btn-sm"><b>BOGOR BARAT</b></span>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Jumlah Kelurahan:</label>
                    <input type="text" name="jml_kelurahan_bgrbarat" id="jml_kelurahan_bgrbarat" class="form-control"
                      value="0">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Jumlah TPS:</label>
                    <input type="text" name="jml_tps_bgrbarat" id="jml_tps_bgrbarat" class="form-control" value="0">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Jumlah Pemilih Laki:</label>
                    <input type="text" name="jml_pemilih_laki_bgrbarat" id="jml_pemilih_laki_bgrbarat"
                      class="form-control" value="0">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Jumlah Pemilih Perempuan:</label>
                    <input type="text" name="jml_pemilih_perempuan_bgrbarat" id="jml_pemilih_perempuan_bgrbarat"
                      class="form-control" value="0">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Jumlah L + P :</label>
                    <input type="text" name="jml_pemilih_lakiperempuan_bgrbarat" id="jml_pemilih_lakiperempuan_bgrbarat"
                      class="form-control" value="0" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Keterangan:</label>
                    <input type="text" name="ket_bogorbarat" id="ket_bogorbarat" class="form-control">
                  </div>
                </div>
              </div>
              <hr>
              <!--Bogor Selatan -->
              <span class="btn btn-secondary btn-sm"><b>BOGOR SELATAN</b></span>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Jumlah Kelurahan:</label>
                    <input type="text" name="jml_kelurahan_bgrselatan" id="jml_kelurahan_bgrselatan"
                      class="form-control" value="0">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Jumlah TPS:</label>
                    <input type="text" name="jml_tps_bgrselatan" id="jml_tps_bgrselatan" class="form-control" value="0">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Jumlah Pemilih Laki:</label>
                    <input type="text" name="jml_pemilih_laki_bgrselatan" id="jml_pemilih_laki_bgrselatan"
                      class="form-control" value="0">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Jumlah Pemilih Perempuan:</label>
                    <input type="text" name="jml_pemilih_perempuan_bgrselatan" id="jml_pemilih_perempuan_bgrselatan"
                      class="form-control" value="0">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Jumlah L + P :</label>
                    <input type="text" name="jml_pemilih_lakiperempuan_bgrselatan"
                      id="jml_pemilih_lakiperempuan_bgrselatan" class="form-control" value="0" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Keterangan:</label>
                    <input type="text" name="ket_bogorselatan" id="ket_bogorselatan" class="form-control">
                  </div>
                </div>
              </div>
              <hr>
              <!--Bogor Tengah -->
              <span class="btn btn-secondary btn-sm"><b>BOGOR TENGAH</b></span>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Jumlah Kelurahan:</label>
                    <input type="text" name="jml_kelurahan_bgrtengah" id="jml_kelurahan_bgrtengah" class="form-control"
                      value="0">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Jumlah TPS:</label>
                    <input type="text" name="jml_tps_bgrtengah" id="jml_tps_bgrtengah" class="form-control" value="0">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Jumlah Pemilih Laki:</label>
                    <input type="text" name="jml_pemilih_laki_bgrtengah" id="jml_pemilih_laki_bgrtengah"
                      class="form-control" value="0">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Jumlah Pemilih Perempuan:</label>
                    <input type="text" name="jml_pemilih_perempuan_bgrtengah" id="jml_pemilih_perempuan_bgrtengah"
                      class="form-control" value="0">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Jumlah L + P :</label>
                    <input type="text" name="jml_pemilih_lakiperempuan_bgrtengah"
                      id="jml_pemilih_lakiperempuan_bgrtengah" class="form-control" value="0" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Keterangan:</label>
                    <input type="text" name="ket_bogortengah" id="ket_bogortengah" class="form-control">
                  </div>
                </div>
              </div>
              <hr>
              <!--Bogor Timur -->

              <span class="btn btn-secondary btn-sm"><b>BOGOR TIMUR</b></span>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Jumlah Kelurahan:</label>
                    <input type="text" name="jml_kelurahan_bgrtimur" id="jml_kelurahan_bgrtimur" class="form-control"
                      value="0">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Jumlah TPS:</label>
                    <input type="text" name="jml_tps_bgrtimur" id="jml_tps_bgrtimur" class="form-control" value="0">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Jumlah Pemilih Laki:</label>
                    <input type="text" name="jml_pemilih_laki_bgrtimur" id="jml_pemilih_laki_bgrtimur"
                      class="form-control" value="0">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Jumlah Pemilih Perempuan:</label>
                    <input type="text" name="jml_pemilih_perempuan_bgrtimur" id="jml_pemilih_perempuan_bgrtimur"
                      class="form-control" value="0">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Jumlah L + P :</label>
                    <input type="text" name="jml_pemilih_lakiperempuan_bgrtimur" id="jml_pemilih_lakiperempuan_bgrtimur"
                      class="form-control" value="0" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Keterangan:</label>
                    <input type="text" name="ket_bogortimur" id="ket_bogortimur" class="form-control">
                  </div>
                </div>
              </div>
              <hr>
              <!--Bogor Utara -->

              <span class="btn btn-secondary btn-sm"><b>BOGOR UTARA</b></span>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Jumlah Kelurahan:</label>
                    <input type="text" name="jml_kelurahan_bgrutara" id="jml_kelurahan_bgrutara" class="form-control"
                      value="0">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Jumlah TPS:</label>
                    <input type="text" name="jml_tps_bgrutara" id="jml_tps_bgrutara" class="form-control" value="0">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Jumlah Pemilih Laki:</label>
                    <input type="text" name="jml_pemilih_laki_bgrutara" id="jml_pemilih_laki_bgrutara"
                      class="form-control" value="0">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Jumlah Pemilih Perempuan:</label>
                    <input type="text" name="jml_pemilih_perempuan_bgrutara" id="jml_pemilih_perempuan_bgrutara"
                      class="form-control" value="0">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Jumlah L + P :</label>
                    <input type="text" name="jml_pemilih_lakiperempuan_bgrutara" id="jml_pemilih_lakiperempuan_bgrutara"
                      class="form-control" value="0" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Keterangan:</label>
                    <input type="text" name="ket_bogorutara" id="ket_bogorutara" class="form-control">
                  </div>
                </div>
              </div>
              <hr>

              <!--Tanah Sareal -->

              <span class="btn btn-secondary btn-sm"><b>TANAH SAREAL</b></span>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Jumlah Kelurahan:</label>
                    <input type="text" name="jml_kelurahan_tnhsareal" id="jml_kelurahan_tnhsareal" class="form-control"
                      value="0">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Jumlah TPS:</label>
                    <input type="text" name="jml_tps_tnhsareal" id="jml_tps_tnhsareal" class="form-control" value="0">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Jumlah Pemilih Laki:</label>
                    <input type="text" name="jml_pemilih_laki_tnhsareal" id="jml_pemilih_laki_tnhsareal"
                      class="form-control" value="0">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Jumlah Pemilih Perempuan:</label>
                    <input type="text" name="jml_pemilih_perempuan_tnhsareal" id="jml_pemilih_perempuan_tnhsareal"
                      class="form-control" value="0">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Jumlah L + P :</label>
                    <input type="text" name="jml_pemilih_lakiperempuan_tnhsareal"
                      id="jml_pemilih_lakiperempuan_tnhsareal" class="form-control" value="0" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Keterangan:</label>
                    <input type="text" name="ket_tanahsareal" id="ket_tanahsareal" class="form-control">
                  </div>
                </div>
              </div>
              <hr>
              <!--TOTAL -->
              <span class="btn btn-secondary btn-sm"><b>TOTAL</b></span>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Total Jumlah Kelurahan:</label>
                    <input type="text" name="total_jmlkelurahan" id="total_jmlkelurahan" class="form-control" value="0"
                      readonly>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Total Jumlah TPS:</label>
                    <input type="text" name="total_jmltps" id="total_jmltps" class="form-control" value="0" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Total Jumlah Pemilih Laki:</label>
                    <input type="text" name="total_jmlpemilihlaki" id="total_jmlpemilihlaki" class="form-control"
                      value="0" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Total Jumlah Pemilih Perempuan:</label>
                    <input type="text" name="total_jmlpemilihperempuan" id="total_jmlpemilihperempuan"
                      class="form-control" value="0" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Total Jumlah L + P :</label>
                    <input type="text" name="total_jmlpemilihlakiperempuan" id="total_jmlpemilihlakiperempuan"
                      class="form-control" value="0" readonly>
                  </div>
                </div>
              </div>
              <hr>
              <div class="text-center">
                <button type="submit" class="btn btn-primary btn-sm"> Simpan</button>
                <button type="reset" class="btn btn-danger btn-sm"> Reset</button>
                <a href="<?= base_url('admin/rekap_partisipasi_tps')?>" class="btn btn-warning btn-sm">
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