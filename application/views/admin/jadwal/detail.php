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
                  <th>Foto:</th>
                  <td><img src="<?= base_url('assets/upload/jadwal/'.$detail->foto)?>" width="150px"></td>
                </tr>
              </table>
              <hr>
              <div class="form-group text-center">
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