<?php if (is_it()) { ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
  </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header" style="background-color:#311b1b;color:white">
              <h3 class="card-title"><b>Data <?= $title2?></b></h3>
              <div class="tombol float-right">
                <a href="<?= base_url('admin/rekaphasilsuarasah_provinsi/tambah_data') ?>"
                  class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Data</a>&nbsp;
                <a href="
             <?php foreach($rekapprovinsi_user as $row) {?>
             <?= base_url('admin/rekaphasilsuarasah_provinsi/pdf/'.$row->id_rekapprovinsi) ?>
             <?php } ?>" class="btn btn-danger btn-sm" target="_blank"><i class="fas fa-file-pdf"></i> PDF</a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th rowspan="2" style="text-align: center;">NO.</th>
                    <th rowspan="2" colspan="2" style="text-align: center;">NAMA PASANGAN CALON PRESIDEN DAN WAKIL
                      PRESIDEN</th>
                    <th colspan="6" style="text-align: center;">RINCIAN JUMLAH PEROLEHAN SUARA PASANGAN CALON PRESIDEN
                      DAN WAKIL PRESIDEN </th>
                    <th rowspan="2" style="text-align: center;">Aksi</th>
                  </tr>
                  <tr>
                    <th style="text-align: center;">KOTA BOGOR</th>
                    <th style="text-align: center;">%</th>
                    <th style="text-align: center;">PROVINSI</th>
                    <th style="text-align: center;">%</th>
                    <th style="text-align: center;">NASIONAL</th>
                    <th style="text-align: center;">%</th>
                  </tr>
                  <tr href="#tabel">
                    <th style="text-align: center;">1</th>
                    <th style="text-align: center;">2</th>
                    <th style="text-align: center;">3</th>
                    <th style="text-align: center;">4</th>
                    <th style="text-align: center;">5</th>
                    <th style="text-align: center;">6</th>
                    <th style="text-align: center;">7</th>
                    <th style="text-align: center;">8</th>
                    <th style="text-align: center;">9</th>
                    <th style="text-align: center;">10</th>
                  </tr>
                </thead>
                <thead></thead>
                <?php

							 $no= 1;
							 foreach ($rekaphasilsuarasah_provinsi as $row) { ?>
                <tr>
                  <td>1</td>
                  <td><img width="100"
                      src="<?php echo base_url() . 'assets/upload/pasangancalon/' . $row->capres_satu ?>">
                  </td>
                  <td><?= $row->nama_capres_satu?></td>
                  <td><?= number_format((float)$row->rincian_kotabogor_satu)?></td>
                  <td><?= number_format((float)$row->rincian_persen_kotabogor_satu, 1 )?>%</td>
                  <td><?= number_format((float)$row->rincian_provinsi_satu)?></td>
                  <td><?= number_format((float)$row->rincian_persen_provinsi_satu, 1)?>%</td>
                  <td><?= number_format((float)$row->rincian_nasional_satu)?></td>
                  <td><?= number_format((float)$row->rincian_persen_nasional_satu, 1)?>%</td>
                  <td rowspan="7">
                    <a style="color:white" href="<?= base_url($row->id_rekapprovinsi) ?>" class="btn btn-info btn-sm"><i
                        class="fa fa-eye" data-toggle="modal" data-target="#exampleModal"></i></a><br><br>
                    <a href="<?= base_url('admin/rekaphasilsuarasah_provinsi/edit/' . $row->id_rekapprovinsi) ?>"
                      class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a><br><br>
                    <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                      href="<?= base_url('admin/rekaphasilsuarasah_provinsi/hapus/' . $row->id_rekapprovinsi) ?>"
                      class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td><img width="100"
                      src="<?php echo base_url() . 'assets/upload/pasangancalon/' . $row->capres_dua ?>">
                  </td>
                  <td><?=  $row->nama_capres_dua?></td>
                  <td><?= number_format((float)$row->rincian_kotabogor_dua)?></td>
                  <td><?= number_format((float)$row->rincian_persen_kotabogor_dua, 1)?>%</td>
                  <td><?= number_format((float)$row->rincian_provinsi_dua)?></td>
                  <td><?= number_format((float)$row->rincian_persen_provinsi_dua, 1)?>%</td>
                  <td><?= number_format((float)$row->rincian_nasional_dua)?></td>
                  <td><?= number_format((float)$row->rincian_persen_nasional_dua, 1)?>%</td>
                </tr>

                <tr>
                  <td colspan="3" style="font-weight:bold;">Jumlah Suara Sah Calon Presiden dan Wakil Presiden </td>
                  <td><?= number_format((float)$row->suarasah_kotabogor)?></td>
                  <td></td>
                  <td><?= number_format((float)$row->suarasah_provinsi)?></td>
                  <td></td>
                  <td><?= number_format((float)$row->suarasah_nasional)?></td>
                  <td></td>
                </tr>
                <tr>
                  <td colspan="3" style="font-weight:bold;">Jumlah Suara Tidak Sah </td>
                  <td><?= number_format((float)$row->suaratdksah_kotabogor)?></td>
                  <td></td>
                  <td><?= number_format((float)$row->suaratdksah_provinsi)?></td>
                  <td></td>
                  <td><?= number_format((float)$row->suaratdksah_nasional)?></td>
                  <td></td>
                </tr>
                <tr>
                  <td colspan="3" style="font-weight:bold;">Jumlah Suara Sah dan Tidak Sah Seluruh Pasangan Calon</td>
                  <td><?= number_format((float)$row->suarasah_tdksah_kotabogor)?></td>
                  <td></td>
                  <td><?= number_format((float)$row->suarasah_tdksah_provinsi)?></td>
                  <td></td>
                  <td><?= number_format((float)$row->suarasah_tdksah_nasional)?></td>
                  <td></td>
                </tr>
                <tr>
                  <td colspan="3" style="font-weight:bold;">Jumlah Pemilih Terdafar Pada Hari Pemungutan Suara</td>
                  <td><?= number_format((float)$row->hakpemilih_kotabogor)?></td>
                  <td></td>
                  <td><?= number_format((float)$row->hakpemilih_provinsi)?></td>
                  <td></td>
                  <td><?= number_format((float)$row->hakpemilih_nasional)?></td>
                  <td></td>
                </tr>
                <tr>
                  <td colspan="3" style="font-weight:bold;">Pemilih Yang Tidak Menggunakan Hak Pilih</td>
                  <td><?= number_format((float)$row->tdkhakpemilih_kotabogor)?></td>
                  <td></td>
                  <td><?= number_format((float)$row->tdkhakpemilih_provinsi)?></td>
                  <td></td>
                  <td><?= number_format((float)$row->tdkhakpemilih_nasional)?></td>
                  <td></td>
                </tr>
                <?php } ?>
              </table>
            </div>
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
        <h5 class="modal-title" id="exampleModalLabel"> <b>Detail Data</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table hover table-bordered table-striped">
          <?php foreach($rekaphasilsuarasah_provinsi as $detail ){?>
          <span class="btn btn-secondary btn-sm"><b>DATA PASANGAN CALON 1</b>
            <tr>
              <td>Foto Pasangan Calon 1</td>
              <td><img width="100"
                  src="<?php echo base_url() . 'assets/upload/pasangancalon/' . $detail->capres_satu ?>">
              </td>
            </tr>
            <tr>
              <td>Nama Pasangan Calon <b>1</b></td>
              <td><?=$detail->nama_capres_satu?></td>
            </tr>
            <tr>
              <td>Rincian Jumlah Perolehan Suara <b>Kota Bogor</b> </td>
              <td><?php echo number_format((float)$detail->rincian_kotabogor_satu) ?></td>
            </tr>
            <tr>
              <td>Rincian Jumlah Perolehan Suara <b>Kota Bogor (%)</b> </td>
              <td><?php echo number_format((float)$detail->rincian_persen_kotabogor_satu, 1) ?>%</td>
            </tr>
            <tr>
              <td>Rincian Jumlah Perolehan Suara <b>Provinsi</b> </td>
              <td><?php echo number_format((float)$detail->rincian_provinsi_satu) ?></td>
            </tr>
            <tr>
              <td>Rincian Jumlah Perolehan Suara <b>Provinsi (%)</b> </td>
              <td><?php echo number_format((float)$detail->rincian_persen_provinsi_satu, 1) ?>%</td>
            </tr>
            <tr>
              <td>Rincian Jumlah Perolehan Suara <b>Nasional</b> </td>
              <td><?php echo number_format((float)$detail->rincian_nasional_satu) ?></td>
            </tr>
            <tr>
              <td>Rincian Jumlah Perolehan Suara <b>Nasional (%)</b> </td>
              <td><?php echo number_format((float)$detail->rincian_persen_nasional_satu, 1) ?>%</td>
            </tr>
        </table>
        <br>
        <table class="table table hover table-bordered table-striped">
          <span class="btn btn-secondary btn-sm"><b>DATA PASANGAN CALON 2</b>
            <tr>
              <td>Foto Pasangan Calon 2</td>
              <td><img width="100"
                  src="<?php echo base_url() . 'assets/upload/pasangancalon/' . $detail->capres_dua ?>">
              </td>
            </tr>
            <tr>
              <td>Nama Pasangan Calon <b>2</b></td>
              <td><?=$detail->nama_capres_dua?></td>
            </tr>
            <tr>
              <td>Rincian Jumlah Perolehan Suara <b>Kota Bogor</b> </td>
              <td><?php echo number_format((float)$detail->rincian_kotabogor_dua) ?></td>
            </tr>
            <tr>
              <td>Rincian Jumlah Perolehan Suara <b>Kota Bogor (%)</b> </td>
              <td><?php echo number_format((float)$detail->rincian_persen_kotabogor_dua, 1) ?>%</td>
            </tr>
            <tr>
              <td>Rincian Jumlah Perolehan Suara <b>Provinsi</b> </td>
              <td><?php echo number_format((float)$detail->rincian_provinsi_dua) ?></td>
            </tr>
            <tr>
              <td>Rincian Jumlah Perolehan Suara <b>Provinsi (%)</b> </td>
              <td><?php echo number_format((float)$detail->rincian_persen_provinsi_dua, 1) ?>%</td>
            </tr>
            <tr>
              <td>Rincian Jumlah Perolehan Suara <b>Nasional</b> </td>
              <td><?php echo number_format((float)$detail->rincian_nasional_satu) ?></td>
            </tr>
            <tr>
              <td>Rincian Jumlah Perolehan Suara <b>Nasional (%)</b> </td>
              <td><?php echo number_format((float)$detail->rincian_persen_nasional_dua, 1) ?>%</td>
            </tr>
        </table>
        <br>
        <table class="table table hover table-bordered table-striped">
          <span class="btn btn-secondary btn-sm"><b>JUMLAH SUARA SAH SELURUH PASANGAN CALON PRESIDEN DAN WAKIL
              PRESIDEN</b>
            <tr>
              <td><b>Kota Bogor</b> </td>
              <td><?php echo number_format((float)$detail->suarasah_kotabogor) ?></td>
            </tr>
            <tr>
              <td><b>Provinsi</b> </td>
              <td><?php echo number_format((float)$detail->suarasah_provinsi) ?></td>
            </tr>
            <tr>
              <td><b>Nasional</b> </td>
              <td><?php echo number_format((float)$detail->suarasah_nasional) ?></td>
            </tr>
        </table>
        <br>
        <table class="table table hover table-bordered table-striped">
          <span class="btn btn-secondary btn-sm"><b>JUMLAH SUARA TIDAK SAH</b>
            <tr>
              <td><b>Kota Bogor</b> </td>
              <td><?php echo number_format((float)$detail->suaratdksah_kotabogor) ?></td>
            </tr>
            <tr>
              <td><b>Provinsi</b> </td>
              <td><?php echo number_format((float)$detail->suaratdksah_provinsi) ?></td>
            </tr>
            <tr>
              <td><b>Nasional</b> </td>
              <td><?php echo number_format((float)$detail->suaratdksah_nasional) ?></td>
            </tr>
        </table>
        <br>
        <table class="table table hover table-bordered table-striped">
          <span class="btn btn-secondary btn-sm"><b>JUMLAH SUARA SAH DAN TIDAK SAH SELURUH PASANGAN CALON</b>
            <tr>
              <td><b>Kota Bogor</b> </td>
              <td><?php echo number_format((float)$detail->suarasah_tdksah_kotabogor) ?></td>
            </tr>
            <tr>
              <td><b>Provinsi</b> </td>
              <td><?php echo number_format((float)$detail->suarasah_tdksah_provinsi) ?></td>
            </tr>
            <tr>
              <td><b>Nasional</b> </td>
              <td><?php echo number_format((float)$detail->suarasah_tdksah_nasional) ?></td>
            </tr>
        </table>
        <br>
        <table class="table table hover table-bordered table-striped">
          <span class="btn btn-secondary btn-sm"><b>JUMLAH PEMILIH TERDAFTAR PADA HARI PEMUNGUTAN SUARA</b>
            <tr>
              <td><b>Kota Bogor</b> </td>
              <td><?php echo number_format((float)$detail->hakpemilih_kotabogor) ?></td>
            </tr>
            <tr>
              <td><b>Provinsi</b> </td>
              <td><?php echo number_format((float)$detail->hakpemilih_provinsi) ?></td>
            </tr>
            <tr>
              <td><b>Nasional</b> </td>
              <td><?php echo number_format((float)$detail->hakpemilih_nasional) ?></td>
            </tr>
        </table>
        <br>
        <table class="table table hover table-bordered table-striped">
          <span class="btn btn-secondary btn-sm"><b>PEMILIH YANG TIDAK MENGGUNAKAN HAK PILIH</b>
            <tr>
              <td><b>Kota Bogor</b> </td>
              <td><?php echo number_format((float)$detail->tdkhakpemilih_kotabogor) ?></td>
            </tr>
            <tr>
              <td><b>Provinsi</b> </td>
              <td><?php echo number_format((float)$detail->tdkhakpemilih_provinsi) ?></td>
            </tr>
            <tr>
              <td><b>Nasional</b> </td>
              <td><?php echo number_format((float)$detail->tdkhakpemilih_nasional) ?></td>
            </tr>
            <?php } ?>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
<?php } else { ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
  </div>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header" style="background-color:#311b1b;color:white">
              <h3 class="card-title"><b>Data <?= $title2?></b></h3>
              <div class="tombol float-right">
                <a href="<?= base_url('admin/rekaphasilsuarasah_provinsi/tambah_data') ?>"
                  class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Data</a>&nbsp;
                <a href="
             <?php foreach($rekapprovinsi_user as $row) {?>
             <?= base_url('admin/rekaphasilsuarasah_provinsi/pdf/'.$row->id_rekapprovinsi) ?>
             <?php } ?>" class="btn btn-danger btn-sm" target="_blank"><i class="fas fa-file-pdf"></i> PDF</a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th rowspan="2" style="text-align: center;">NO.</th>
                    <th rowspan="2" colspan="2" style="text-align: center;">NAMA PASANGAN CALON PRESIDEN DAN WAKIL
                      PRESIDEN</th>
                    <th colspan="6" style="text-align: center;">RINCIAN JUMLAH PEROLEHAN SUARA PASANGAN CALON PRESIDEN
                      DAN WAKIL PRESIDEN </th>
                    <th rowspan="2" style="text-align: center;">Aksi</th>
                  </tr>
                  <tr>
                    <th style="text-align: center;">KOTA BOGOR</th>
                    <th style="text-align: center;">%</th>
                    <th style="text-align: center;">PROVINSI</th>
                    <th style="text-align: center;">%</th>
                    <th style="text-align: center;">NASIONAL</th>
                    <th style="text-align: center;">%</th>
                  </tr>
                  <tr href="#tabel">
                    <th style="text-align: center;">1</th>
                    <th style="text-align: center;">2</th>
                    <th style="text-align: center;">3</th>
                    <th style="text-align: center;">4</th>
                    <th style="text-align: center;">5</th>
                    <th style="text-align: center;">6</th>
                    <th style="text-align: center;">7</th>
                    <th style="text-align: center;">8</th>
                    <th style="text-align: center;">9</th>
                    <th style="text-align: center;">10</th>
                  </tr>
                </thead>
                <thead></thead>
                <?php

							 $no= 1;
							 foreach ($rekapprovinsi_user as $row) { ?>
                <tr>
                  <td>1</td>
                  <td><img width="100"
                      src="<?php echo base_url() . 'assets/upload/pasangancalon/' . $row->capres_satu ?>">
                  </td>
                  <td><?= $row->nama_capres_satu?></td>
                  <td><?= number_format((float)$row->rincian_kotabogor_satu)?></td>
                  <td><?= number_format((float)$row->rincian_persen_kotabogor_satu, 1 )?>%</td>
                  <td><?= number_format((float)$row->rincian_provinsi_satu)?></td>
                  <td><?= number_format((float)$row->rincian_persen_provinsi_satu, 1)?>%</td>
                  <td><?= number_format((float)$row->rincian_nasional_satu)?></td>
                  <td><?= number_format((float)$row->rincian_persen_nasional_satu, 1)?>%</td>
                  <td rowspan="7">
                    <a style="color:white" href="<?= base_url($row->id_rekapprovinsi) ?>" class="btn btn-info btn-sm"
                      data-toggle="modal" data-target="#exampleModal"><i class="fa fa-eye"></i></a><br><br>
                    <a href="<?= base_url('admin/rekaphasilsuarasah_provinsi/edit/' . $row->id_rekapprovinsi) ?>"
                      class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a><br><br>
                    <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                      href="<?= base_url('admin/rekaphasilsuarasah_provinsi/hapus/' . $row->id_rekapprovinsi) ?>"
                      class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td><img width="100"
                      src="<?php echo base_url() . 'assets/upload/pasangancalon/' . $row->capres_dua ?>">
                  </td>
                  <td><?=  $row->nama_capres_dua?></td>
                  <td><?= number_format((float)$row->rincian_kotabogor_dua)?></td>
                  <td><?= number_format((float)$row->rincian_persen_kotabogor_dua, 1)?>%</td>
                  <td><?= number_format((float)$row->rincian_provinsi_dua)?></td>
                  <td><?= number_format((float)$row->rincian_persen_provinsi_dua, 1)?>%</td>
                  <td><?= number_format((float)$row->rincian_nasional_dua)?></td>
                  <td><?= number_format((float)$row->rincian_persen_nasional_dua, 1)?>%</td>
                </tr>

                <tr>
                  <td colspan="3" style="font-weight:bold;">Jumlah Suara Sah Calon Presiden dan Wakil Presiden </td>
                  <td><?= number_format((float)$row->suarasah_kotabogor)?></td>
                  <td></td>
                  <td><?= number_format((float)$row->suarasah_provinsi)?></td>
                  <td></td>
                  <td><?= number_format((float)$row->suarasah_nasional)?></td>
                  <td></td>
                </tr>
                <tr>
                  <td colspan="3" style="font-weight:bold;">Jumlah Suara Tidak Sah </td>
                  <td><?= number_format((float)$row->suaratdksah_kotabogor)?></td>
                  <td></td>
                  <td><?= number_format((float)$row->suaratdksah_provinsi)?></td>
                  <td></td>
                  <td><?= number_format((float)$row->suaratdksah_nasional)?></td>
                  <td></td>
                </tr>
                <tr>
                  <td colspan="3" style="font-weight:bold;">Jumlah Suara Sah dan Tidak Sah Seluruh Pasangan Calon</td>
                  <td><?= number_format((float)$row->suarasah_tdksah_kotabogor)?></td>
                  <td></td>
                  <td><?= number_format((float)$row->suarasah_tdksah_provinsi)?></td>
                  <td></td>
                  <td><?= number_format((float)$row->suarasah_tdksah_nasional)?></td>
                  <td></td>
                </tr>
                <tr>
                  <td colspan="3" style="font-weight:bold;">Jumlah Pemilih Terdafar Pada Hari Pemungutan Suara</td>
                  <td><?= number_format((float)$row->hakpemilih_kotabogor)?></td>
                  <td></td>
                  <td><?= number_format((float)$row->hakpemilih_provinsi)?></td>
                  <td></td>
                  <td><?= number_format((float)$row->hakpemilih_nasional)?></td>
                  <td></td>
                </tr>
                <tr>
                  <td colspan="3" style="font-weight:bold;">Pemilih Yang Tidak Menggunakan Hak Pilih</td>
                  <td><?= number_format((float)$row->tdkhakpemilih_kotabogor)?></td>
                  <td></td>
                  <td><?= number_format((float)$row->tdkhakpemilih_provinsi)?></td>
                  <td></td>
                  <td><?= number_format((float)$row->tdkhakpemilih_nasional)?></td>
                  <td></td>
                </tr>
                <?php } ?>
              </table>
            </div>
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
        <h5 class="modal-title" id="exampleModalLabel"> <b>Detail Data</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table hover table-bordered table-striped">
          <?php foreach($rekapprovinsi_user as $detail ){?>
          <span class="btn btn-secondary btn-sm"><b>DATA PASANGAN CALON 1</b>
            <tr>
              <td>Foto Pasangan Calon 1</td>
              <td><img width="100"
                  src="<?php echo base_url() . 'assets/upload/pasangancalon/' . $detail->capres_satu ?>">
              </td>
            </tr>
            <tr>
              <td>Nama Pasangan Calon <b>1</b></td>
              <td><?=$detail->nama_capres_satu?></td>
            </tr>
            <tr>
              <td>Rincian Jumlah Perolehan Suara <b>Kota Bogor</b> </td>
              <td><?php echo number_format((float)$detail->rincian_kotabogor_satu) ?></td>
            </tr>
            <tr>
              <td>Rincian Jumlah Perolehan Suara <b>Kota Bogor (%)</b> </td>
              <td><?php echo number_format((float)$detail->rincian_persen_kotabogor_satu, 1) ?>%</td>
            </tr>
            <tr>
              <td>Rincian Jumlah Perolehan Suara <b>Provinsi</b> </td>
              <td><?php echo number_format((float)$detail->rincian_provinsi_satu) ?></td>
            </tr>
            <tr>
              <td>Rincian Jumlah Perolehan Suara <b>Provinsi (%)</b> </td>
              <td><?php echo number_format((float)$detail->rincian_persen_provinsi_satu, 1) ?>%</td>
            </tr>
            <tr>
              <td>Rincian Jumlah Perolehan Suara <b>Nasional</b> </td>
              <td><?php echo number_format((float)$detail->rincian_nasional_satu) ?></td>
            </tr>
            <tr>
              <td>Rincian Jumlah Perolehan Suara <b>Nasional (%)</b> </td>
              <td><?php echo number_format((float)$detail->rincian_persen_nasional_satu, 1) ?>%</td>
            </tr>
        </table>
        <br>
        <table class="table table hover table-bordered table-striped">
          <span class="btn btn-secondary btn-sm"><b>DATA PASANGAN CALON 2</b>
            <tr>
              <td>Foto Pasangan Calon 2</td>
              <td><img width="100"
                  src="<?php echo base_url() . 'assets/upload/pasangancalon/' . $detail->capres_dua ?>">
              </td>
            </tr>
            <tr>
              <td>Nama Pasangan Calon <b>2</b></td>
              <td><?=$detail->nama_capres_dua?></td>
            </tr>
            <tr>
              <td>Rincian Jumlah Perolehan Suara <b>Kota Bogor</b> </td>
              <td><?php echo number_format((float)$detail->rincian_kotabogor_dua) ?></td>
            </tr>
            <tr>
              <td>Rincian Jumlah Perolehan Suara <b>Kota Bogor (%)</b> </td>
              <td><?php echo number_format((float)$detail->rincian_persen_kotabogor_dua, 1) ?>%</td>
            </tr>
            <tr>
              <td>Rincian Jumlah Perolehan Suara <b>Provinsi</b> </td>
              <td><?php echo number_format((float)$detail->rincian_provinsi_dua) ?></td>
            </tr>
            <tr>
              <td>Rincian Jumlah Perolehan Suara <b>Provinsi (%)</b> </td>
              <td><?php echo number_format((float)$detail->rincian_persen_provinsi_dua, 1) ?>%</td>
            </tr>
            <tr>
              <td>Rincian Jumlah Perolehan Suara <b>Nasional</b> </td>
              <td><?php echo number_format((float)$detail->rincian_nasional_satu) ?></td>
            </tr>
            <tr>
              <td>Rincian Jumlah Perolehan Suara <b>Nasional (%)</b> </td>
              <td><?php echo number_format((float)$detail->rincian_persen_nasional_dua, 1) ?>%</td>
            </tr>
        </table>
        <br>
        <table class="table table hover table-bordered table-striped">
          <span class="btn btn-secondary btn-sm"><b>JUMLAH SUARA SAH SELURUH PASANGAN CALON PRESIDEN DAN WAKIL
              PRESIDEN</b>
            <tr>
              <td><b>Kota Bogor</b> </td>
              <td><?php echo number_format((float)$detail->suarasah_kotabogor) ?></td>
            </tr>
            <tr>
              <td><b>Provinsi</b> </td>
              <td><?php echo number_format((float)$detail->suarasah_provinsi) ?></td>
            </tr>
            <tr>
              <td><b>Nasional</b> </td>
              <td><?php echo number_format((float)$detail->suarasah_nasional) ?></td>
            </tr>
        </table>
        <br>
        <table class="table table hover table-bordered table-striped">
          <span class="btn btn-secondary btn-sm"><b>JUMLAH SUARA TIDAK SAH</b>
            <tr>
              <td><b>Kota Bogor</b> </td>
              <td><?php echo number_format((float)$detail->suaratdksah_kotabogor) ?></td>
            </tr>
            <tr>
              <td><b>Provinsi</b> </td>
              <td><?php echo number_format((float)$detail->suaratdksah_provinsi) ?></td>
            </tr>
            <tr>
              <td><b>Nasional</b> </td>
              <td><?php echo number_format((float)$detail->suaratdksah_nasional) ?></td>
            </tr>
        </table>
        <br>
        <table class="table table hover table-bordered table-striped">
          <span class="btn btn-secondary btn-sm"><b>JUMLAH SUARA SAH DAN TIDAK SAH SELURUH PASANGAN CALON</b>
            <tr>
              <td><b>Kota Bogor</b> </td>
              <td><?php echo number_format((float)$detail->suarasah_tdksah_kotabogor) ?></td>
            </tr>
            <tr>
              <td><b>Provinsi</b> </td>
              <td><?php echo number_format((float)$detail->suarasah_tdksah_provinsi) ?></td>
            </tr>
            <tr>
              <td><b>Nasional</b> </td>
              <td><?php echo number_format((float)$detail->suarasah_tdksah_nasional) ?></td>
            </tr>
        </table>
        <br>
        <table class="table table hover table-bordered table-striped">
          <span class="btn btn-secondary btn-sm"><b>JUMLAH PEMILIH TERDAFTAR PADA HARI PEMUNGUTAN SUARA</b>
            <tr>
              <td><b>Kota Bogor</b> </td>
              <td><?php echo number_format((float)$detail->hakpemilih_kotabogor) ?></td>
            </tr>
            <tr>
              <td><b>Provinsi</b> </td>
              <td><?php echo number_format((float)$detail->hakpemilih_provinsi) ?></td>
            </tr>
            <tr>
              <td><b>Nasional</b> </td>
              <td><?php echo number_format((float)$detail->hakpemilih_nasional) ?></td>
            </tr>
        </table>
        <br>
        <table class="table table hover table-bordered table-striped">
          <span class="btn btn-secondary btn-sm"><b>PEMILIH YANG TIDAK MENGGUNAKAN HAK PILIH</b>
            <tr>
              <td><b>Kota Bogor</b> </td>
              <td><?php echo number_format((float)$detail->tdkhakpemilih_kotabogor) ?></td>
            </tr>
            <tr>
              <td><b>Provinsi</b> </td>
              <td><?php echo number_format((float)$detail->tdkhakpemilih_provinsi) ?></td>
            </tr>
            <tr>
              <td><b>Nasional</b> </td>
              <td><?php echo number_format((float)$detail->tdkhakpemilih_nasional) ?></td>
            </tr>
            <?php } ?>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>