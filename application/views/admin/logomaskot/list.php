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
                <h3 class="card-title"><b><?= $title2?></b></h3>
                <div class="tombol float-right">
                  <a href="<?= base_url('admin/logo_maskot/tambah_data') ?>" class="btn btn-primary btn-sm"><i
                      class="fas fa-plus"></i> Tambah Data</a>&nbsp;
                  <a href="
						 <?php foreach($logomaskot_user as $row) {?>
						 <?= base_url('admin/logo_maskot/pdf/' . $row->tahun) ?>
						 <?php } ?>" class="btn btn-danger btn-sm" target="_blank"><i class="fas fa-file-pdf"></i> PDF</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php
                echo $this->session->flashdata('pesan');
                ?>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Tahun</th>
                      <th>Jadwal</th>
                      <th>Desain Surat Suara</th>
                      <th>Foto Paslon 1</th>
                      <th>Foto Paslon 2</th>
                      <th>Logo</th>
                      <th>Maskot</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
          $no=1;
          foreach ($logomaskot as $key => $value) { ?>
                    <tr>
                      <td><?= $no++?></td>
                      <td><?= $value->tahun?></td>
                      <td><?= $value->jadwal ?></td>
                      <td><img src="<?php echo base_url('assets/upload/logomaskot/'.$value->desain_suratsuara)?>"
                          width="200px">
                      </td>
                      <td><img src="<?php echo base_url('assets/upload/logomaskot/'.$value->foto_paslon_satu)?>"
                          width="200px">
                      </td>
                      <td><img src="<?php echo base_url('assets/upload/logomaskot/'.$value->foto_paslon_dua)?>"
                          width="200px">
                      </td>
                      <td><img src="<?= base_url('assets/upload/logomaskot/'.$value->gambar_logo)?>" width="100px"></td>
                      <td><img src="<?= base_url('assets/upload/logomaskot/'.$value->gambar_maskot)?>" width="100px">
                      </td>
                      <td>
                        <a style="color:white"
                          href="<?= base_url('admin/logo_maskot/detail_data/'.$value->id_logomaskot) ?>"
                          class="btn bg-gradient-info btn-sm"><i class="fa fa-eye"></i></a>
                        <a style="color:white" href="<?= base_url('admin/logo_maskot/edit/'. $value->id_logomaskot)?>"
                          class="btn btn-sm bg-gradient-primary"><i class="fa fa-edit"></i></a>
                        <a style="color:white" href="<?= base_url('admin/logo_maskot/hapus/'. $value->id_logomaskot)?>"
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
                <h3 class="card-title"><b><?= $title2?></b></h3>
                <div class="tombol float-right">
                  <a href="<?= base_url('admin/logo_maskot/tambah_data') ?>" class="btn btn-primary btn-sm"><i
                      class="fas fa-plus"></i> Tambah Data</a>&nbsp;
                  <a href="
						 <?php foreach($logomaskot_user as $row) {?>
						 <?= base_url('admin/logo_maskot/pdf/' . $row->tahun) ?>
						 <?php } ?>" class="btn btn-danger btn-sm" target="_blank"><i class="fas fa-file-pdf"></i> PDF</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php
                echo $this->session->flashdata('pesan');
                ?>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Tahun</th>
                      <th>Jadwal</th>
                      <th>Desain Surat Suara</th>
                      <th>Foto Paslon 1</th>
                      <th>Foto Paslon 2</th>
                      <th>Logo</th>
                      <th>Maskot</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
          $no=1;
          foreach ($logomaskot_user as $key => $value) { ?>
                    <tr>
                      <td><?= $no++?></td>
                      <td><?= $value->tahun?></td>
                      <td><?= $value->jadwal ?></td>
                      <td><img src="<?php echo base_url('assets/upload/logomaskot/'.$value->desain_suratsuara)?>"
                          width="100px">
                      </td>
                      <td><img src="<?php echo base_url('assets/upload/logomaskot/'.$value->foto_paslon_satu)?>"
                          width="150px">
                      </td>
                      <td><img src="<?php echo base_url('assets/upload/logomaskot/'.$value->foto_paslon_dua)?>"
                          width="150px">
                      </td>
                      <td><img src="<?= base_url('assets/upload/logomaskot/'.$value->gambar_logo)?>" width="100px"></td>
                      <td><img src="<?= base_url('assets/upload/logomaskot/'.$value->gambar_maskot)?>" width="100px">
                      </td>
                      <td>
                        <a style="color:white"
                          href="<?= base_url('admin/logo_maskot/detail_data/'.$value->id_logomaskot) ?>"
                          class="btn bg-gradient-info btn-sm"><i class="fa fa-eye"></i></a>
                        <a style="color:white" href="<?= base_url('admin/logo_maskot/edit/'. $value->id_logomaskot)?>"
                          class="btn btn-sm bg-gradient-primary"><i class="fa fa-edit"></i></a>
                        <a style="color:white" href="<?= base_url('admin/logo_maskot/hapus/'. $value->id_logomaskot)?>"
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
  <?php }?>