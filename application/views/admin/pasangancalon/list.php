  <?php if (is_it()) { ?>
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
                  <a href="<?= base_url('admin/pasangan_calon/tambah_data') ?>" class="btn btn-primary btn-sm"><i
                      class="fas fa-plus"></i> Tambah
                    Data</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php
               echo $this->session->flashdata('pesan');
                ?>
                <table id="myTable" class="table table-striped table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Tahun</th>
                      <th>Kategori</th>
                      <th>Foto</th>
                      <th>Nama</th>
                      <th>Visi</th>
                      <th>Misi</th>
                      <th>Pendukung Partai</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
          $no=1;
          foreach ($pasangancalon as $key => $value) { ?>
                    <tr>
                      <td><?= $no++?></td>
                      <td><?= $value->tahun?></td>
                      <td><?= $value->kategori?></td>
                      <td><img src="<?= base_url('assets/upload/pasangancalon/'.$value->foto_capres)?>" width="100px">
                      </td>
                      <td><?= $value->nama?></td>
                      <td><?= $value->visi?></td>
                      <td><?= $value->misi ?></td>
                      <td>
                        <h5 style="text-align: center;"><i class="fa fa-image"> </i> <?= $value->jml_foto ?> Partai
                        </h5>
                      </td>
                      <td>
                        <a style="color:white"
                          href="<?= base_url('admin/pasangan_calon/detail_data/'.$value->id_pasangancalon) ?>"
                          class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a><br><br>
                        <a style="color:white"
                          href="<?= base_url('admin/pasangan_calon/edit_data/'.$value->id_pasangancalon) ?>"
                          class="btn btn-sm bg-gradient-primary"><i class="fa fa-edit"></i></a><br><br>
                        <a style="color:white"
                          href="<?= base_url('admin/pasangan_calon/hapus/'.$value->id_pasangancalon) ?>"
                          onclick="return confirm('Anda yakin akan menghapusnya?')"
                          class="btn btn-sm bg-gradient-danger"><i class="fa fa-trash"></i></a><br><br>
                        <a href="
						 <?= base_url('admin/pasangan_calon/pdf/' . $value->id_pasangancalon) ?>" class="btn btn-danger btn-sm"
                          target="_blank"><i class="fas fa-file-pdf"></i></a>
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
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> <b>Tambah Data</b></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="info-box bg-light">
                <div class="info-box-content">
                  <span class="info-box-text text-center text-muted"><i class="fa fa-user-plus"></i> Pasangan Calon
                    1</span>
                  <span class="info-box-number text-center text-muted mb-0"> <a
                      href="<?= base_url('admin/pasangan_calon/tambah_data_paslon1') ?>"
                      class="btn btn-primary btn-sm">Buka</a></span>
                </div>
              </div>
            </div>

            <div class="col-12 col-sm-6">
              <div class="info-box bg-light">
                <div class="info-box-content">
                  <span class="info-box-text text-center text-muted">Estimated budget</span>
                  <span class="info-box-number text-center text-muted mb-0">2300</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php } else{?>
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
                  <a href="<?= base_url('admin/pasangan_calon/tambah_data') ?>" class="btn btn-primary btn-sm"><i
                      class="fas fa-plus"></i> Tambah
                    Data</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php
               echo $this->session->flashdata('pesan');
                ?>
                <table id="myTable" class="table table-striped table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Tahun</th>
                      <th>Kategori</th>
                      <th>Foto</th>
                      <th>Nama</th>
                      <th>Visi</th>
                      <th>Misi</th>
                      <th>Pendukung Partai</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
          $no=1;
          foreach ($pasangancalon_user as $key => $value) { ?>
                    <tr>
                      <td><?= $no++?></td>
                      <td><?= $value->tahun?></td>
                      <td><?= $value->kategori?></td>
                      <td><img src="<?= base_url('assets/upload/pasangancalon/'.$value->foto_capres)?>" width="100px">
                      </td>
                      <td><?= $value->nama?></td>
                      <td><?= $value->visi?></td>
                      <td><?= $value->misi ?></td>
                      <td>
                        <h5 style="text-align: center;"><i class="fa fa-image"> </i> <?= $value->jml_foto ?> Partai
                        </h5>
                      </td>
                      <td>
                        <a style="color:white"
                          href="<?= base_url('admin/pasangan_calon/detail_data/'.$value->id_pasangancalon) ?>"
                          class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a><br><br>
                        <a style="color:white"
                          href="<?= base_url('admin/pasangan_calon/edit_data/'.$value->id_pasangancalon) ?>"
                          class="btn btn-sm bg-gradient-primary"><i class="fa fa-edit"></i></a><br><br>
                        <a style="color:white"
                          href="<?= base_url('admin/pasangan_calon/hapus/'.$value->id_pasangancalon) ?>"
                          onclick="return confirm('Anda yakin akan menghapusnya?')"
                          class="btn btn-sm bg-gradient-danger"><i class="fa fa-trash"></i></a><br><br>
                        <a href="
						 <?= base_url('admin/pasangan_calon/pdf/' . $value->id_pasangancalon) ?>" class="btn btn-danger btn-sm"
                          target="_blank"><i class="fas fa-file-pdf"></i></a>
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
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> <b>Tambah Data</b></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="info-box bg-light">
                <div class="info-box-content">
                  <span class="info-box-text text-center text-muted"><i class="fa fa-user-plus"></i> Pasangan Calon
                    1</span>
                  <span class="info-box-number text-center text-muted mb-0"> <a
                      href="<?= base_url('admin/pasangan_calon/tambah_data_paslon1') ?>"
                      class="btn btn-primary btn-sm">Buka</a></span>
                </div>
              </div>
            </div>

            <div class="col-12 col-sm-6">
              <div class="info-box bg-light">
                <div class="info-box-content">
                  <span class="info-box-text text-center text-muted"><i class="fa fa-user-plus"></i> Pasangan Calon
                    2</span>
                  <span class="info-box-number text-center text-muted mb-0"> <a
                      href="<?= base_url('admin/pasangan_calon/tambah_data_paslon2') ?>"
                      class="btn btn-primary btn-sm">Buka</a></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>