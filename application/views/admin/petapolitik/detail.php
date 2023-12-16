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
              <table class="table table-striped table-bordered">
                <tr>
                  <th>Tahun:</th>
                  <td><?php echo $detail->tahun ?></td>
                </tr>
                <tr>
                  <th>Kategori:</th>
                  <td><?php echo $detail->kategori ?></td>
                </tr>
                <tr>
                  <th>Foto:</th>
                  <td><img src="<?= base_url('assets/upload/pasangancalon/'.$detail->foto_capres)?>" width="150px"></td>
                </tr>
                <tr>
                  <th>Nama:</th>
                  <td><?=$detail->nama?></td>
                </tr>
                <tr>
                  <th>Kecamatan:</th>
                  <td><?php echo $detail->kecamatan ?></td>
                </tr>
                <tr>
                  <th>Kelurahan:</th>
                  <td><?php echo $detail->kelurahan ?></td>
                </tr>
                <tr>
                  <th>File GeoJson:</th>
                  <td><?php echo $detail->geojson ?></td>
                </tr>
                <tr>
                  <th>Warna:</th>
                  <td> <span style="color:<?php echo $detail->warna ?>"><i class="fas fa-square fa-lg"></i></span></td>
                </tr>
                </tr>
                <tr>
                  <th>Total Pasangan Calon 1:</th>
                  <td><?php echo number_format((float)$detail->jml_paslon_satu) ?></td>
                </tr>
                <tr>
                  <th>Pasangan Calon 1 (%):</th>
                  <td><?php echo number_format((float)$detail->persen_paslon_satu) ?> %</td>
                </tr>
                <tr>
                  <th>Total Pasangan Calon 2:</th>
                  <td><?php echo number_format((float)$detail->jml_paslon_dua) ?></td>
                </tr>
                <tr>
                  <th>Pasangan Calon 2 (%):</th>
                  <td><?php echo number_format((float)$detail->persen_paslon_dua) ?> %</td>
                </tr>
              </table>
              <hr>
              <div class="form-group text-center">
                <a href="<?= base_url('admin/peta_politik')?>" class="btn btn-warning">
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