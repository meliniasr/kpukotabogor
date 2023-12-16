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
                  <th>Jadwal:</th>
                  <td><?php echo $detail->jadwal ?></td>
                </tr>
                <tr>
                  <th>Desain Surat Suara:</th>
                  <td><img src="<?= base_url('assets/upload/logomaskot/'.$detail->desain_suratsuara)?>" width="150px">
                  </td>
                </tr>
                <tr>
                  <th>Foto Paslon 1:</th>
                  <td><img src="<?= base_url('assets/upload/logomaskot/'.$detail->foto_paslon_satu)?>" width="150px">
                  </td>
                </tr>
                <tr>
                  <th>Foto Paslon 2:</th>
                  <td><img src="<?= base_url('assets/upload/logomaskot/'.$detail->foto_paslon_dua)?>" width="150px">
                  </td>
                </tr>
                <tr>
                  <th>Logo:</th>
                  <td><img src="<?= base_url('assets/upload/logomaskot/'.$detail->gambar_logo)?>" width="150px"></td>
                </tr>
                <tr>
                  <th>Maskot:</th>
                  <td><img src="<?= base_url('assets/upload/logomaskot/'.$detail->gambar_maskot)?>" width="150px"></td>
                </tr>
              </table>
              <hr>
              <div class="form-group text-center">
                <a href="<?= base_url('admin/logo_maskot')?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i>
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