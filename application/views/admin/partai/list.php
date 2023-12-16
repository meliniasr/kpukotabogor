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
                <h3 class="card-title"><b>Data <?= $title2?></b></h3>
                <div class="tombol float-right">
                  <a href="<?= base_url('admin/partai/tambah_data') ?>" class="btn btn-primary btn-sm"><i
                      class="fas fa-plus"></i> Tambah Data</a>&nbsp;
                  <a href="
             <?php foreach($partai as $row) {?>
             <?= base_url('admin/partai/pdf/'.$row->id_partai) ?>
             <?php } ?>" class="btn btn-danger btn-sm" target="_blank"><i class="fas fa-file-pdf"></i> PDF</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php
                echo $this->session->flashdata('pesan');
                ?>
                <table id="example2" class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama Partai</th>
                      <th>Bendera</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
          $no=1;
          foreach ($partai as $key => $value) { ?>
                    <tr>
                      <td><?= $no++?></td>
                      <td><?= $value->nama_partai?></td>
                      <td><img src="<?= base_url('assets/upload/bendera/'.$value->bendera)?>" width="150px"></td>
                      <td>
                        <a style="color:white" href="<?= base_url('admin/partai/detail_data/'.$value->id_partai) ?>"
                          class="btn btn-sm bg-gradient-info "><i class="fa fa-eye"></i></a>
                        <a style="color:white" href="<?= base_url('admin/partai/edit/'. $value->id_partai)?>"
                          class="btn btn-sm bg-gradient-primary"><i class="fa fa-edit"></i></a>
                        <a style="color:white" href="<?= base_url('admin/partai/hapus/'. $value->id_partai)?>"
                          onclick="return confirm('Anda yakin akan menghapusnya?')"
                          class="btn btn-sm bg-gradient-danger"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
  </div>