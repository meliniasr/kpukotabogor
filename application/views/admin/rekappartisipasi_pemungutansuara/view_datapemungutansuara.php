<?php if(is_it()) {?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
  </div>
  </section>
  <!-- /.content-header -->

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header" style="background-color:#311b1b;color:white">
              <h3 class="card-title"><b><?= $title2?></b></h3>
              <div class="tombol float-right">
                <a href="
						 <?php foreach($datapemilihdpt_user as $row) {?>
						 <?= base_url('admin/rekap_partisipasi_pemungutan_suara/pdf/'.$row->tahun) ?>
						 <?php } ?>" class="btn btn-danger" target="_blank"><i class="fas fa-file-pdf"></i> PDF</a>
              </div>
            </div>
            <div class="card-body">
              <?= $this->session->flashdata('message'); ?>
              <?= validation_errors() ?>
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th style="text-align: center;">NO.</th>
                    <th colspan="2" style="text-align: center;">URAIAN</th>
                    <th colspan="7" style="text-align: center;">RINCIAN PEROLEHAN SUARA</th>
                    <th rowspan="2" style="text-align: center;">Aksi</th>
                  </tr>
                  <tr>
                    <th style="text-align: center;">1</th>
                    <th colspan="2" style="text-align: center;">DATA PEMILIH DAN PENGGUNAAN HAK PILIH</th>
                    <th style="text-align: center;">KEC. BOGOR BARAT</th>
                    <th style="text-align: center;">KEC. BOGOR SELATAN</th>
                    <th style="text-align: center;">KEC. BOGOR TENGAH</th>
                    <th style="text-align: center;">KEC. BOGOR TIMUR</th>
                    <th style="text-align: center;">KEC. BOGOR UTARA</th>
                    <th style="text-align: center;">KEC. TANAH SAREAL</th>
                    <th style="text-align: center;">JUMLAH AKHIR</th>
                  </tr>
                  <tr>
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
                    <th style="text-align: center;">11</th>
                  </tr>
                  <tr>
                    <th style="text-align: center;">A.</th>
                    <th colspan="10" style="text-align: center;">DATA PEMILIH DAN PENGGUNAAN HAK PILIH</th>
                  </tr>
                  <tr>
                    <td colspan="2" rowspan="5" style="font-weight:bold;">1. Pemilih terdaftar dalam Daftar Pemilih
                      Tetap
                      (DPT) <a href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/tambah_datapemilih_dpt') ?>"
                        class="btn btn-primary btn-sm float-left"><i class="fas fa-plus"></i> Tambah
                        Data</a></td>
                  </tr>
                  <?php
								$no = 1;
								foreach($datapemilih_dpt as $row) { ?>
                  <tr>
                    <td style="font-weight:bold;">LK</td>
                    <td><?=number_format((float)$row->dpt_bogorbarat_laki)?></td>
                    <td><?=number_format((float)$row->dpt_bogorselatan_laki)?></td>
                    <td><?=number_format((float)$row->dpt_bogortengah_laki)?></td>
                    <td><?=number_format((float)$row->dpt_bogortimur_laki)?></td>
                    <td><?=number_format((float)$row->dpt_bogorutara_laki)?></td>
                    <td><?=number_format((float)$row->dpt_tanahsareal_laki)?></td>
                    <td><?=number_format((float)$row->dpt_laki_jumlahakhir)?></td>
                    <td rowspan="5">
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/detail_datapemilih_dpt/' . $row->id_datapemilih_dpt) ?>"
                        class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/edit_datapemilih_dpt/' . $row->id_datapemilih_dpt) ?>"
                        class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/hapus_datapemilih_dpt/' . $row->id_datapemilih_dpt) ?>"
                        class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">PR</td>
                    <td><?= number_format((float)$row->dpt_bogorbarat_perempuan)?></td>
                    <td><?= number_format((float)$row->dpt_bogorselatan_perempuan)?></td>
                    <td><?= number_format((float)$row->dpt_bogortengah_perempuan)?></td>
                    <td><?= number_format((float)$row->dpt_bogortimur_perempuan)?></td>
                    <td><?= number_format((float)$row->dpt_bogorutara_perempuan)?></td>
                    <td><?= number_format((float)$row->dpt_tanahsareal_perempuan)?></td>
                    <td><?= number_format((float)$row->dpt_perempuan_jumlahakhir)?></td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">JML</td>
                    <td><?= number_format((float)$row->dpt_bogorbarat_jumlah)?></td>
                    <td><?= number_format((float)$row->dpt_bogorselatan_jumlah)?></td>
                    <td><?= number_format((float)$row->dpt_bogortengah_jumlah)?></td>
                    <td><?= number_format((float)$row->dpt_bogortimur_jumlah)?></td>
                    <td><?= number_format((float)$row->dpt_bogorutara_jumlah)?></td>
                    <td><?= number_format((float)$row->dpt_tanahsareal_jumlah)?></td>
                    <td><?= number_format((float)$row->dpt_jumlah_akhir)?></td>
                  </tr>
                  <?php } ?>
                </thead>
                <thead>
                  <tr>
                    <td colspan="2" rowspan="4" style="font-weight:bold;">2. Pemilih terdaftar dalam Daftar Pemilih
                      Tambahan
                      (DPTb) <br> <a
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/tambah_datapemilih_dptb') ?>"
                        class="btn btn-primary btn-sm float-left"><i class="fas fa-plus"></i> Tambah
                        Data</a></td>
                  </tr>
                  <?php
								$no = 1;
								foreach($datapemilih_dptb as $value) { ?>
                  <tr>
                    <td style="font-weight:bold;">LK</td>
                    <td><?= number_format((float)$value->dptb_bogorbarat_laki)?></td>
                    <td><?= number_format((float)$value->dptb_bogorselatan_laki)?></td>
                    <td><?= number_format((float)$value->dptb_bogortengah_laki)?></td>
                    <td><?= number_format((float)$value->dptb_bogortimur_laki)?></td>
                    <td><?= number_format((float)$value->dptb_bogorutara_laki)?></td>
                    <td><?= number_format((float)$value->dptb_tanahsareal_laki)?></td>
                    <td><?= number_format((float)$value->dptb_laki_jumlahakhir)?></td>
                    <td rowspan="5">
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/detail_datapemilihdptb/' . $value->id_datapemilih_dptb) ?>"
                        class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/edit_datapemilihdptb/' . $value->id_datapemilih_dptb) ?>"
                        class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/hapus_datapemilihdptb/' . $value->id_datapemilih_dptb) ?>"
                        class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">PR</td>
                    <td><?= number_format((float)$value->dptb_bogorbarat_perempuan)?></td>
                    <td><?= number_format((float)$value->dptb_bogorselatan_perempuan)?></td>
                    <td><?= number_format((float)$value->dptb_bogortengah_perempuan)?></td>
                    <td><?= number_format((float)$value->dptb_bogortimur_perempuan)?></td>
                    <td><?= number_format((float)$value->dptb_bogorutara_perempuan)?></td>
                    <td><?= number_format((float)$value->dptb_tanahsareal_perempuan)?></td>
                    <td><?= number_format((float)$value->dptb_perempuan_jumlahakhir)?></td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">JML</td>
                    <td><?= number_format((float)$value->dptb_bogorbarat_jumlah)?></td>
                    <td><?= number_format((float)$value->dptb_bogorselatan_jumlah)?></td>
                    <td><?= number_format((float)$value->dptb_bogortengah_jumlah)?></td>
                    <td><?= number_format((float)$value->dptb_bogortimur_jumlah)?></td>
                    <td><?= number_format((float)$value->dptb_bogorutara_jumlah)?></td>
                    <td><?= number_format((float)$value->dptb_tanahsareal_jumlah)?></td>
                    <td><?= number_format((float)$value->dptb_jumlah_akhir)?></td>
                  </tr>
                  <?php } ?>
                </thead>
                <thead>
                  <tr>
                    <td colspan="2" rowspan="5" style="font-weight:bold;">3. Pemilih terdaftar dalam Daftar Pemilih
                      Khusus
                      (DPK) <a href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/tambah_datapemilih_dpk') ?>"
                        class="btn btn-primary btn-sm float-left"><i class="fas fa-plus"></i> Tambah
                        Data</a></td>
                  </tr>
                  <?php
								$no = 1;
								foreach($datapemilih_dpk as $value) { ?>
                  <tr>
                    <td style="font-weight:bold;">LK</td>
                    <td><?= number_format((float)$value->dpk_bogorbarat_laki)?></td>
                    <td><?= number_format((float)$value->dpk_bogorselatan_laki)?></td>
                    <td><?= number_format((float)$value->dpk_bogortengah_laki)?></td>
                    <td><?= number_format((float)$value->dpk_bogortimur_laki)?></td>
                    <td><?= number_format((float)$value->dpk_bogorutara_laki)?></td>
                    <td><?= number_format((float)$value->dpk_tanahsareal_laki)?></td>
                    <td><?= number_format((float)$value->dpk_laki_jumlahakhir)?></td>
                    <td rowspan="5">
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/detail_datapemilihdpk/' . $value->id_datapemilih_dpk) ?>"
                        class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/edit_datapemilihdpk/' . $value->id_datapemilih_dpk) ?>"
                        class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/hapus_datapemilih_dpk/' . $value->id_datapemilih_dpk) ?>"
                        class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">PR</td>
                    <td><?= number_format((float)$value->dpk_bogorbarat_perempuan)?></td>
                    <td><?= number_format((float)$value->dpk_bogorselatan_perempuan)?></td>
                    <td><?= number_format((float)$value->dpk_bogortengah_perempuan)?></td>
                    <td><?= number_format((float)$value->dpk_bogortimur_perempuan)?></td>
                    <td><?= number_format((float)$value->dpk_bogorutara_perempuan)?></td>
                    <td><?= number_format((float)$value->dpk_tanahsareal_perempuan)?></td>
                    <td><?= number_format((float)$value->dpk_perempuan_jumlahakhir)?></td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">JML</td>
                    <td><?= number_format((float)$value->dpk_bogorbarat_jumlah)?></td>
                    <td><?= number_format((float)$value->dpk_bogorselatan_jumlah)?></td>
                    <td><?= number_format((float)$value->dpk_bogortengah_jumlah)?></td>
                    <td><?= number_format((float)$value->dpk_bogortimur_jumlah)?></td>
                    <td><?= number_format((float)$value->dpk_bogorutara_jumlah)?></td>
                    <td><?= number_format((float)$value->dpk_tanahsareal_jumlah)?></td>
                    <td><?= number_format((float)$value->dpk_jumlah_akhir)?></td>
                  </tr>
                  <?php } ?>
                </thead>
                <thead>
                  <tr>
                    <td colspan="2" rowspan="5" style="font-weight:bold;">4. Pemilih Khusus Tambahan (DPKTb) /pengguna
                      KTP
                      atau identitas lain atau paspor <a
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/tambah_datapemilih_dpktb') ?>"
                        class="btn btn-primary btn-sm float-left"><i class="fas fa-plus"></i> Tambah
                        Data</a></td>
                  </tr>
                  <?php
								$no = 1;
								foreach($datapemilih_dpktb as $row) { ?>
                  <tr>
                    <td style="font-weight:bold;">LK</td>
                    <td><?= number_format((float)$row->dpktb_bogorbarat_laki)?></td>
                    <td><?= number_format((float)$row->dpktb_bogorselatan_laki)?></td>
                    <td><?= number_format((float)$row->dpktb_bogortengah_laki)?></td>
                    <td><?= number_format((float)$row->dpktb_bogortimur_laki)?></td>
                    <td><?= number_format((float)$row->dpktb_bogorutara_laki)?></td>
                    <td><?= number_format((float)$row->dpktb_tanahsareal_laki)?></td>
                    <td><?= number_format((float)$row->dpktb_laki_jumlahakhir)?></td>
                    <td rowspan="5">
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/detail_datapemilihdpktb/' . $row->id_datapemilih_dpktb) ?>"
                        class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/edit_datapemilihdpktb/' . $row->id_datapemilih_dpktb) ?>"
                        class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/hapus_datapemilih_dpktb/' . $row->id_datapemilih_dpktb) ?>"
                        class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">PR</td>
                    <td><?= number_format((float)$row->dpktb_bogorbarat_perempuan)?></td>
                    <td><?= number_format((float)$row->dpktb_bogorselatan_perempuan)?></td>
                    <td><?= number_format((float)$row->dpktb_bogortengah_perempuan)?></td>
                    <td><?= number_format((float)$row->dpktb_bogortimur_perempuan)?></td>
                    <td><?= number_format((float)$row->dpktb_bogorutara_perempuan)?></td>
                    <td><?= number_format((float)$row->dpktb_tanahsareal_perempuan)?></td>
                    <td><?= number_format((float)$row->dpktb_perempuan_jumlahakhir)?></td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">JML</td>
                    <td><?= number_format((float)$row->dpktb_bogorbarat_jumlah)?></td>
                    <td><?= number_format((float)$row->dpktb_bogorselatan_jumlah)?></td>
                    <td><?= number_format((float)$row->dpktb_bogortengah_jumlah)?></td>
                    <td><?= number_format((float)$row->dpktb_bogortimur_jumlah)?></td>
                    <td><?= number_format((float)$row->dpktb_bogorutara_jumlah)?></td>
                    <td><?= number_format((float)$row->dpktb_tanahsareal_jumlah)?></td>
                    <td><?= number_format((float)$row->dpktb_jumlah_akhir)?></td>
                  </tr>
                  <?php } ?>
                </thead>
                <thead>
                  <tr>
                    <td colspan="2" rowspan="5" style="font-weight:bold;">5. Jumlah Pemilih (1+2+3+4) <a
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/tambah_jumlahkeseluruhan_datapemilih') ?>"
                        class="btn btn-primary btn-sm float-left"><i class="fas fa-plus"></i> Tambah
                        Data</a></td>
                  </tr>
                  <?php
								$no = 1;
								foreach($jumlahkeseluruhan_datapemilih as $row) { ?>
                  <tr>
                    <td style="font-weight:bold;">LK</td>
                    <td><?= number_format((float)$row->jk_bogorbarat_laki)?></td>
                    <td><?= number_format((float)$row->jk_bogorselatan_laki)?></td>
                    <td><?= number_format((float)$row->jk_bogortengah_laki)?></td>
                    <td><?= number_format((float)$row->jk_bogortimur_laki)?></td>
                    <td><?= number_format((float)$row->jk_bogorutara_laki)?></td>
                    <td><?= number_format((float)$row->jk_tanahsareal_laki)?></td>
                    <td><?= number_format((float)$row->jk_laki_jumlahakhir)?></td>
                    <td rowspan="5">
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/detail_jumlahkeseluruhan_datapemilih/' . $row->id_jk_datapemilih) ?>"
                        class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/edit_jumlahkeseluruhan_datapemilih/' . $row->id_jk_datapemilih) ?>"
                        class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/hapus_jumlahkeseluruhan_datapemilih/' . $row->id_jk_datapemilih) ?>"
                        class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">PR</td>
                    <td><?= number_format((float)$row->jk_bogorbarat_perempuan)?></td>
                    <td><?= number_format((float)$row->jk_bogorselatan_perempuan)?></td>
                    <td><?= number_format((float)$row->jk_bogortengah_perempuan)?></td>
                    <td><?= number_format((float)$row->jk_bogortimur_perempuan)?></td>
                    <td><?= number_format((float)$row->jk_bogorutara_perempuan)?></td>
                    <td><?= number_format((float)$row->jk_tanahsareal_perempuan)?></td>
                    <td><?= number_format((float)$row->jk_perempuan_jumlahakhir)?></td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">JML</td>
                    <td><?= number_format((float)$row->jk_bogorbarat_jumlah)?></td>
                    <td><?= number_format((float)$row->jk_bogorselatan_jumlah)?></td>
                    <td><?= number_format((float)$row->jk_bogortengah_jumlah)?></td>
                    <td><?= number_format((float)$row->jk_bogortimur_jumlah)?></td>
                    <td><?= number_format((float)$row->jk_bogorutara_jumlah)?></td>
                    <td><?= number_format((float)$row->jk_tanahsareal_jumlah)?></td>
                    <td><?= number_format((float)$row->jk_jumlah_akhir)?></td>
                  </tr>
                  <?php } ?>
                </thead>
                <thead>
                  <tr>
                    <th style="text-align: center;">B.</th>
                    <th colspan="10" style="text-align: center;">PENGGUNA HAK PILIH</th>
                  </tr>
                  </tr>
                  <tr>
                    <td colspan="2" rowspan="5" style="font-weight:bold;">1. Pengguna hak pilih dalam Daftar Pemilih
                      Tetap
                      (DPT) <a href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/tambah_hakpilih_dpt') ?>"
                        class="btn btn-primary btn-sm float-left"><i class="fas fa-plus"></i> Tambah
                        Data</a></td>
                  </tr>
                  <?php
								$no = 1;
								foreach($hakpilih_dpt as $row) { ?>
                  <tr>
                    <td style="font-weight:bold;">LK</td>
                    <td><?= number_format((float)$row->hakpilih_dpt_bogorbarat_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpt_bogorselatan_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpt_bogortengah_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpt_bogortimur_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpt_bogorutara_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpt_tanahsareal_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpt_laki_jumlahakhir)?></td>
                    <td rowspan="5">
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/detail_hakpilih_dpt/' . $row->id_hakpilih_dpt) ?>"
                        class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/edit_hakpilih_dpt/' . $row->id_hakpilih_dpt) ?>"
                        class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/hapus_hakpilih_dpt/' . $row->id_hakpilih_dpt) ?>"
                        class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">PR</td>
                    <td><?=number_format((float)$row->hakpilih_dpt_bogorbarat_perempuan)?></td>
                    <td><?=number_format((float)$row->hakpilih_dpt_bogorselatan_perempuan)?></td>
                    <td><?=number_format((float)$row->hakpilih_dpt_bogortengah_perempuan)?></td>
                    <td><?=number_format((float)$row->hakpilih_dpt_bogortimur_perempuan)?></td>
                    <td><?=number_format((float)$row->hakpilih_dpt_bogorutara_perempuan)?></td>
                    <td><?=number_format((float)$row->hakpilih_dpt_tanahsareal_perempuan)?></td>
                    <td><?=number_format((float)$row->hakpilih_dpt_perempuan_jumlahakhir)?></td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">JML</td>
                    <td><?= number_format((float)$row->hakpilih_dpt_bogorbarat_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpt_bogorselatan_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpt_bogortengah_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpt_bogortimur_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpt_bogorutara_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpt_tanahsareal_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpt_jumlah_akhir)?></td>
                  </tr>
                  <?php } ?>
                </thead>
                <thead>
                  <tr>
                    <td colspan="2" rowspan="5" style="font-weight:bold;">2. Pengguna hak pilih dalam Daftar Pemilih
                      Tambahan (DPTb)/ Pemilih dari TPS lain <a
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/tambah_hakpilih_dptb') ?>"
                        class="btn btn-primary btn-sm float-left"><i class="fas fa-plus"></i> Tambah
                        Data</a></td>
                  </tr>
                  <?php
								$no = 1;
								foreach($hakpilih_dptb as $row) { ?>
                  <tr>
                    <td style="font-weight:bold;">LK</td>
                    <td><?= number_format((float)$row->hakpilih_dptb_bogorbarat_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dptb_bogorselatan_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dptb_bogortengah_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dptb_bogortimur_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dptb_bogorutara_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dptb_tanahsareal_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dptb_laki_jumlahakhir)?></td>
                    <td rowspan="5">
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/detail_hakpilih_dptb/' . $row->id_hakpilih_dptb) ?>"
                        class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/edit_hakpilih_dptb/' . $row->id_hakpilih_dptb) ?>"
                        class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/hapus_hakpilih_dptb/' . $row->id_hakpilih_dptb) ?>"
                        class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">PR</td>
                    <td><?= number_format((float)$row->hakpilih_dptb_bogorbarat_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dptb_bogorselatan_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dptb_bogortengah_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dptb_bogortimur_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dptb_bogorutara_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dptb_tanahsareal_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dptb_perempuan_jumlahakhir)?></td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">JML</td>
                    <td><?= number_format((float)$row->hakpilih_dptb_bogorbarat_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dptb_bogorselatan_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dptb_bogortengah_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dptb_bogortimur_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dptb_bogorutara_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dptb_tanahsareal_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dptb_jumlah_akhir)?></td>
                  </tr>
                  <?php } ?>
                </thead>
                <thead>
                  <tr>
                    <td colspan="2" rowspan="5" style="font-weight:bold;">3. Pengguna hak pilih dalam Daftar Pemilih
                      Khusus (DPK) <a
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/tambah_hakpilih_dpk') ?>"
                        class="btn btn-primary btn-sm float-left"><i class="fas fa-plus"></i> Tambah
                        Data</a></td>
                  </tr>
                  <?php
								$no = 1;
								foreach($hakpilih_dpk as $row) { ?>
                  <tr>
                    <td style="font-weight:bold;">LK</td>
                    <td><?= number_format((float)$row->hakpilih_dpk_bogorbarat_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpk_bogorselatan_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpk_bogortengah_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpk_bogortimur_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpk_bogorutara_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpk_tanahsareal_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpk_laki_jumlahakhir)?></td>
                    <td rowspan="5">
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/detail_hakpilih_dpk/' . $row->id_hakpilih_dpk) ?>"
                        class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/edit_hakpilih_dpk/' . $row->id_hakpilih_dpk) ?>"
                        class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/hapus_hakpilih_dpk/' . $row->id_hakpilih_dpk) ?>"
                        class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">PR</td>
                    <td><?= number_format((float)$row->hakpilih_dpk_bogorbarat_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpk_bogorselatan_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpk_bogortengah_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpk_bogortimur_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpk_bogorutara_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpk_tanahsareal_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpk_perempuan_jumlahakhir)?></td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">JML</td>
                    <td><?= number_format((float)$row->hakpilih_dpk_bogorbarat_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpk_bogorselatan_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpk_bogortengah_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpk_bogortimur_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpk_bogorutara_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpk_tanahsareal_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpk_jumlah_akhir)?></td>
                  </tr>
                  <?php } ?>
                </thead>
                <thead>
                  <tr>
                    <td colspan="2" rowspan="5" style="font-weight:bold;">4. Pengguna hak pilih dalam Daftar Pemilih
                      Khusus Tambahan (DPKTb) /pengguna KTP atau identitas lain atau paspor <br><a
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/tambah_hakpilih_dpktb') ?>"
                        class="btn btn-primary btn-sm float-left"><i class="fas fa-plus"></i> Tambah
                        Data</a></td>
                  </tr>
                  <?php
								$no = 1;
								foreach($hakpilih_dpktb as $row) { ?>
                  <tr>
                    <td style="font-weight:bold;">LK</td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_bogorbarat_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_bogorselatan_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_bogortengah_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_bogortimur_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_bogorutara_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_tanahsareal_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_laki_jumlahakhir)?></td>
                    <td rowspan="5">
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/detail_hakpilih_dpktb/' . $row->id_hakpilih_dpktb) ?>"
                        class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/edit_hakpilih_dpktb/' . $row->id_hakpilih_dpktb) ?>"
                        class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/hapus_hakpilih_dpktb/' . $row->id_hakpilih_dpktb) ?>"
                        class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">PR</td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_bogorbarat_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_bogorselatan_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_bogortengah_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_bogortimur_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_bogorutara_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_tanahsareal_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_perempuan_jumlahakhir)?></td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">JML</td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_bogorbarat_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_bogorselatan_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_bogortengah_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_bogortimur_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_bogorutara_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_tanahsareal_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_jumlah_akhir)?></td>
                  </tr>
                  <?php } ?>
                </thead>
                <thead>
                  <tr>
                    <td colspan="2" rowspan="5" style="font-weight:bold;">5. Jumlah seluruh pengguna Hak Pilih
                      (1+2+3+4+5)
                      <a href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/tambah_jumlahkeseluruhan_hakpilih') ?>"
                        class="btn btn-primary btn-sm float-left"><i class="fas fa-plus"></i> Tambah
                        Data</a>
                    </td>
                  </tr>
                  <?php
								$no = 1;
								foreach($jumlahkeseluruhan_hakpilih as $row) { ?>
                  <tr>
                    <td style="font-weight:bold;">LK</td>
                    <td><?= number_format((float)$row->hakpilih_jk_bogorbarat_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_jk_bogorselatan_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_jk_bogortengah_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_jk_bogortimur_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_jk_bogorutara_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_jk_tanahsareal_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_jk_laki_jumlahakhir)?></td>
                    <td rowspan="5">
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/detail_jumlahkeseluruhan_hakpilih/' . $row->id_jk_hakpilih) ?>"
                        class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/edit_jumlahkeseluruhan_hakpilih/' . $row->id_jk_hakpilih) ?>"
                        class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/hapus_jumlahkeseluruhan_hakpilih/' . $row->id_jk_hakpilih) ?>"
                        class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">PR</td>
                    <td><?= number_format((float)$row->hakpilih_jk_bogorbarat_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_jk_bogorselatan_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_jk_bogortengah_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_jk_bogortimur_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_jk_bogorutara_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_jk_tanahsareal_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_jk_perempuan_jumlahakhir)?></td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">JML</td>
                    <td><?= number_format((float)$row->hakpilih_jk_bogorbarat_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_jk_bogorselatan_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_jk_bogortengah_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_jk_bogortimur_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_jk_bogorutara_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_jk_tanahsareal_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_jk_jumlah_akhir)?></td>
                  </tr>
                  <?php } ?>
                </thead>
              </table>
            </div>
          </div>
        </div>
      </div>
  </section>
</div>
<?php } else { ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
  </div>
  </section>
  <!-- /.content-header -->

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header" style="background-color:#311b1b;color:white">
              <h3 class="card-title"><b><?= $title2?></b></h3>
              <div class="tombol float-right">
                <a href="
						 <?php foreach($datapemilihdpt_user as $row) {?>
						 <?= base_url('admin/rekap_partisipasi_pemungutan_suara/pdf/'.$row->tahun) ?>
						 <?php } ?>" class="btn btn-danger" target="_blank"><i class="fas fa-file-pdf"></i> PDF</a>
              </div>
            </div>
            <div class="card-body">
              <?= $this->session->flashdata('message'); ?>
              <?= validation_errors() ?>
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th style="text-align: center;">NO.</th>
                    <th colspan="2" style="text-align: center;">URAIAN</th>
                    <th colspan="7" style="text-align: center;">RINCIAN PEROLEHAN SUARA</th>
                    <th rowspan="2" style="text-align: center;">Aksi</th>
                  </tr>
                  <tr>
                    <th style="text-align: center;">1</th>
                    <th colspan="2" style="text-align: center;">DATA PEMILIH DAN PENGGUNAAN HAK PILIH</th>
                    <th style="text-align: center;">KEC. BOGOR BARAT</th>
                    <th style="text-align: center;">KEC. BOGOR SELATAN</th>
                    <th style="text-align: center;">KEC. BOGOR TENGAH</th>
                    <th style="text-align: center;">KEC. BOGOR TIMUR</th>
                    <th style="text-align: center;">KEC. BOGOR UTARA</th>
                    <th style="text-align: center;">KEC. TANAH SAREAL</th>
                    <th style="text-align: center;">JUMLAH AKHIR</th>
                  </tr>
                  <tr>
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
                    <th style="text-align: center;">11</th>
                  </tr>
                  <tr>
                    <th style="text-align: center;">A.</th>
                    <th colspan="10" style="text-align: center;">DATA PEMILIH DAN PENGGUNAAN HAK PILIH</th>
                  </tr>
                  <tr>
                    <td colspan="2" rowspan="5" style="font-weight:bold;">1. Pemilih terdaftar dalam Daftar Pemilih
                      Tetap
                      (DPT) <a href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/tambah_datapemilih_dpt') ?>"
                        class="btn btn-primary btn-sm float-left"><i class="fas fa-plus"></i> Tambah
                        Data</a></td>
                  </tr>
                  <?php
								$no = 1;
								foreach($datapemilihdpt_user as $row) { ?>
                  <tr>
                    <td style="font-weight:bold;">LK</td>
                    <td><?=number_format((float)$row->dpt_bogorbarat_laki)?></td>
                    <td><?=number_format((float)$row->dpt_bogorselatan_laki)?></td>
                    <td><?=number_format((float)$row->dpt_bogortengah_laki)?></td>
                    <td><?=number_format((float)$row->dpt_bogortimur_laki)?></td>
                    <td><?=number_format((float)$row->dpt_bogorutara_laki)?></td>
                    <td><?=number_format((float)$row->dpt_tanahsareal_laki)?></td>
                    <td><?=number_format((float)$row->dpt_laki_jumlahakhir)?></td>
                    <td rowspan="5">
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/detail_datapemilihdpt/' . $row->id_datapemilih_dpt) ?>"
                        class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/edit_datapemilihdpt/' . $row->id_datapemilih_dpt) ?>"
                        class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/hapus_datapemilih_dpt/' . $row->id_datapemilih_dpt) ?>"
                        class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">PR</td>
                    <td><?= number_format((float)$row->dpt_bogorbarat_perempuan)?></td>
                    <td><?= number_format((float)$row->dpt_bogorselatan_perempuan)?></td>
                    <td><?= number_format((float)$row->dpt_bogortengah_perempuan)?></td>
                    <td><?= number_format((float)$row->dpt_bogortimur_perempuan)?></td>
                    <td><?= number_format((float)$row->dpt_bogorutara_perempuan)?></td>
                    <td><?= number_format((float)$row->dpt_tanahsareal_perempuan)?></td>
                    <td><?= number_format((float)$row->dpt_perempuan_jumlahakhir)?></td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">JML</td>
                    <td><?= number_format((float)$row->dpt_bogorbarat_jumlah)?></td>
                    <td><?= number_format((float)$row->dpt_bogorselatan_jumlah)?></td>
                    <td><?= number_format((float)$row->dpt_bogortengah_jumlah)?></td>
                    <td><?= number_format((float)$row->dpt_bogortimur_jumlah)?></td>
                    <td><?= number_format((float)$row->dpt_bogorutara_jumlah)?></td>
                    <td><?= number_format((float)$row->dpt_tanahsareal_jumlah)?></td>
                    <td><?= number_format((float)$row->dpt_jumlah_akhir)?></td>
                  </tr>
                  <?php } ?>
                </thead>
                <thead>
                  <tr>
                    <td colspan="2" rowspan="4" style="font-weight:bold;">2. Pemilih terdaftar dalam Daftar Pemilih
                      Tambahan
                      (DPTb) <br> <a
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/tambah_datapemilih_dptb') ?>"
                        class="btn btn-primary btn-sm float-left"><i class="fas fa-plus"></i> Tambah
                        Data</a></td>
                  </tr>
                  <?php
								$no = 1;
								foreach($datapemilihdptb_user as $value) { ?>
                  <tr>
                    <td style="font-weight:bold;">LK</td>
                    <td><?= number_format((float)$value->dptb_bogorbarat_laki)?></td>
                    <td><?= number_format((float)$value->dptb_bogorselatan_laki)?></td>
                    <td><?= number_format((float)$value->dptb_bogortengah_laki)?></td>
                    <td><?= number_format((float)$value->dptb_bogortimur_laki)?></td>
                    <td><?= number_format((float)$value->dptb_bogorutara_laki)?></td>
                    <td><?= number_format((float)$value->dptb_tanahsareal_laki)?></td>
                    <td><?= number_format((float)$value->dptb_laki_jumlahakhir)?></td>
                    <td rowspan="5">
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/detail_datapemilihdptb/' . $value->id_datapemilih_dptb) ?>"
                        class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/edit_datapemilihdptb/' . $value->id_datapemilih_dptb) ?>"
                        class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/hapus_datapemilih_dptb/' . $value->id_datapemilih_dptb) ?>"
                        class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">PR</td>
                    <td><?= number_format((float)$value->dptb_bogorbarat_perempuan)?></td>
                    <td><?= number_format((float)$value->dptb_bogorselatan_perempuan)?></td>
                    <td><?= number_format((float)$value->dptb_bogortengah_perempuan)?></td>
                    <td><?= number_format((float)$value->dptb_bogortimur_perempuan)?></td>
                    <td><?= number_format((float)$value->dptb_bogorutara_perempuan)?></td>
                    <td><?= number_format((float)$value->dptb_tanahsareal_perempuan)?></td>
                    <td><?= number_format((float)$value->dptb_perempuan_jumlahakhir)?></td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">JML</td>
                    <td><?= number_format((float)$value->dptb_bogorbarat_jumlah)?></td>
                    <td><?= number_format((float)$value->dptb_bogorselatan_jumlah)?></td>
                    <td><?= number_format((float)$value->dptb_bogortengah_jumlah)?></td>
                    <td><?= number_format((float)$value->dptb_bogortimur_jumlah)?></td>
                    <td><?= number_format((float)$value->dptb_bogorutara_jumlah)?></td>
                    <td><?= number_format((float)$value->dptb_tanahsareal_jumlah)?></td>
                    <td><?= number_format((float)$value->dptb_jumlah_akhir)?></td>
                  </tr>
                  <?php } ?>
                </thead>
                <thead>
                  <tr>
                    <td colspan="2" rowspan="5" style="font-weight:bold;">3. Pemilih terdaftar dalam Daftar Pemilih
                      Khusus
                      (DPK) <a href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/tambah_datapemilih_dpk') ?>"
                        class="btn btn-primary btn-sm float-left"><i class="fas fa-plus"></i> Tambah
                        Data</a></td>
                  </tr>
                  <?php
								$no = 1;
								foreach($datapemilihdpk_user as $value) { ?>
                  <tr>
                    <td style="font-weight:bold;">LK</td>
                    <td><?= number_format((float)$value->dpk_bogorbarat_laki)?></td>
                    <td><?= number_format((float)$value->dpk_bogorselatan_laki)?></td>
                    <td><?= number_format((float)$value->dpk_bogortengah_laki)?></td>
                    <td><?= number_format((float)$value->dpk_bogortimur_laki)?></td>
                    <td><?= number_format((float)$value->dpk_bogorutara_laki)?></td>
                    <td><?= number_format((float)$value->dpk_tanahsareal_laki)?></td>
                    <td><?= number_format((float)$value->dpk_laki_jumlahakhir)?></td>
                    <td rowspan="5">
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/detail_datapemilihdpk/' . $value->id_datapemilih_dpk) ?>"
                        class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/edit_datapemilihdpk/' . $value->id_datapemilih_dpk) ?>"
                        class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/hapus_datapemilih_dpk/' . $value->id_datapemilih_dpk) ?>"
                        class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">PR</td>
                    <td><?= number_format((float)$value->dpk_bogorbarat_perempuan)?></td>
                    <td><?= number_format((float)$value->dpk_bogorselatan_perempuan)?></td>
                    <td><?= number_format((float)$value->dpk_bogortengah_perempuan)?></td>
                    <td><?= number_format((float)$value->dpk_bogortimur_perempuan)?></td>
                    <td><?= number_format((float)$value->dpk_bogorutara_perempuan)?></td>
                    <td><?= number_format((float)$value->dpk_tanahsareal_perempuan)?></td>
                    <td><?= number_format((float)$value->dpk_perempuan_jumlahakhir)?></td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">JML</td>
                    <td><?= number_format((float)$value->dpk_bogorbarat_jumlah)?></td>
                    <td><?= number_format((float)$value->dpk_bogorselatan_jumlah)?></td>
                    <td><?= number_format((float)$value->dpk_bogortengah_jumlah)?></td>
                    <td><?= number_format((float)$value->dpk_bogortimur_jumlah)?></td>
                    <td><?= number_format((float)$value->dpk_bogorutara_jumlah)?></td>
                    <td><?= number_format((float)$value->dpk_tanahsareal_jumlah)?></td>
                    <td><?= number_format((float)$value->dpk_jumlah_akhir)?></td>
                  </tr>
                  <?php } ?>
                </thead>
                <thead>
                  <tr>
                    <td colspan="2" rowspan="5" style="font-weight:bold;">4. Pemilih Khusus Tambahan (DPKTb) /pengguna
                      KTP
                      atau identitas lain atau paspor <a
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/tambah_datapemilih_dpktb') ?>"
                        class="btn btn-primary btn-sm float-left"><i class="fas fa-plus"></i> Tambah
                        Data</a></td>
                  </tr>
                  <?php
								$no = 1;
								foreach($datapemilihdpktb_user as $row) { ?>
                  <tr>
                    <td style="font-weight:bold;">LK</td>
                    <td><?= number_format((float)$row->dpktb_bogorbarat_laki)?></td>
                    <td><?= number_format((float)$row->dpktb_bogorselatan_laki)?></td>
                    <td><?= number_format((float)$row->dpktb_bogortengah_laki)?></td>
                    <td><?= number_format((float)$row->dpktb_bogortimur_laki)?></td>
                    <td><?= number_format((float)$row->dpktb_bogorutara_laki)?></td>
                    <td><?= number_format((float)$row->dpktb_tanahsareal_laki)?></td>
                    <td><?= number_format((float)$row->dpktb_laki_jumlahakhir)?></td>
                    <td rowspan="5">
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/detail_datapemilihdpktb/' . $row->id_datapemilih_dpktb) ?>"
                        class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/edit_datapemilihdpktb/' . $row->id_datapemilih_dpktb) ?>"
                        class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/hapus_datapemilih_dpktb/' . $row->id_datapemilih_dpktb) ?>"
                        class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">PR</td>
                    <td><?= number_format((float)$row->dpktb_bogorbarat_perempuan)?></td>
                    <td><?= number_format((float)$row->dpktb_bogorselatan_perempuan)?></td>
                    <td><?= number_format((float)$row->dpktb_bogortengah_perempuan)?></td>
                    <td><?= number_format((float)$row->dpktb_bogortimur_perempuan)?></td>
                    <td><?= number_format((float)$row->dpktb_bogorutara_perempuan)?></td>
                    <td><?= number_format((float)$row->dpktb_tanahsareal_perempuan)?></td>
                    <td><?= number_format((float)$row->dpktb_perempuan_jumlahakhir)?></td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">JML</td>
                    <td><?= number_format((float)$row->dpktb_bogorbarat_jumlah)?></td>
                    <td><?= number_format((float)$row->dpktb_bogorselatan_jumlah)?></td>
                    <td><?= number_format((float)$row->dpktb_bogortengah_jumlah)?></td>
                    <td><?= number_format((float)$row->dpktb_bogortimur_jumlah)?></td>
                    <td><?= number_format((float)$row->dpktb_bogorutara_jumlah)?></td>
                    <td><?= number_format((float)$row->dpktb_tanahsareal_jumlah)?></td>
                    <td><?= number_format((float)$row->dpktb_jumlah_akhir)?></td>
                  </tr>
                  <?php } ?>
                </thead>
                <thead>
                  <tr>
                    <td colspan="2" rowspan="5" style="font-weight:bold;">5. Jumlah Pemilih (1+2+3+4) <a
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/tambah_jumlahkeseluruhan_datapemilih') ?>"
                        class="btn btn-primary btn-sm float-left"><i class="fas fa-plus"></i> Tambah
                        Data</a></td>
                  </tr>
                  <?php
								$no = 1;
								foreach($jkdatapemilih_user as $row) { ?>
                  <tr>
                    <td style="font-weight:bold;">LK</td>
                    <td><?= number_format((float)$row->jk_bogorbarat_laki)?></td>
                    <td><?= number_format((float)$row->jk_bogorselatan_laki)?></td>
                    <td><?= number_format((float)$row->jk_bogortengah_laki)?></td>
                    <td><?= number_format((float)$row->jk_bogortimur_laki)?></td>
                    <td><?= number_format((float)$row->jk_bogorutara_laki)?></td>
                    <td><?= number_format((float)$row->jk_tanahsareal_laki)?></td>
                    <td><?= number_format((float)$row->jk_laki_jumlahakhir)?></td>
                    <td rowspan="5">
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/detail_jumlahkeseluruhan_datapemilih/' . $row->id_jk_datapemilih) ?>"
                        class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/edit_jumlahkeseluruhan_datapemilih/' . $row->id_jk_datapemilih) ?>"
                        class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/hapus_jumlahkeseluruhan_datapemilih/' . $row->id_jk_datapemilih) ?>"
                        class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">PR</td>
                    <td><?= number_format((float)$row->jk_bogorbarat_perempuan)?></td>
                    <td><?= number_format((float)$row->jk_bogorselatan_perempuan)?></td>
                    <td><?= number_format((float)$row->jk_bogortengah_perempuan)?></td>
                    <td><?= number_format((float)$row->jk_bogortimur_perempuan)?></td>
                    <td><?= number_format((float)$row->jk_bogorutara_perempuan)?></td>
                    <td><?= number_format((float)$row->jk_tanahsareal_perempuan)?></td>
                    <td><?= number_format((float)$row->jk_perempuan_jumlahakhir)?></td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">JML</td>
                    <td><?= number_format((float)$row->jk_bogorbarat_jumlah)?></td>
                    <td><?= number_format((float)$row->jk_bogorselatan_jumlah)?></td>
                    <td><?= number_format((float)$row->jk_bogortengah_jumlah)?></td>
                    <td><?= number_format((float)$row->jk_bogortimur_jumlah)?></td>
                    <td><?= number_format((float)$row->jk_bogorutara_jumlah)?></td>
                    <td><?= number_format((float)$row->jk_tanahsareal_jumlah)?></td>
                    <td><?= number_format((float)$row->jk_jumlah_akhir)?></td>
                  </tr>
                  <?php } ?>
                </thead>
                <thead>
                  <tr>
                    <th style="text-align: center;">B.</th>
                    <th colspan="10" style="text-align: center;">PENGGUNA HAK PILIH</th>
                  </tr>
                  </tr>
                  <tr>
                    <td colspan="2" rowspan="5" style="font-weight:bold;">1. Pengguna hak pilih dalam Daftar Pemilih
                      Tetap
                      (DPT) <a href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/tambah_hakpilih_dpt') ?>"
                        class="btn btn-primary btn-sm float-left"><i class="fas fa-plus"></i> Tambah
                        Data</a></td>
                  </tr>
                  <?php
								$no = 1;
								foreach($hakpilihdpt_user as $row) { ?>
                  <tr>
                    <td style="font-weight:bold;">LK</td>
                    <td><?= number_format((float)$row->hakpilih_dpt_bogorbarat_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpt_bogorselatan_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpt_bogortengah_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpt_bogortimur_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpt_bogorutara_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpt_tanahsareal_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpt_laki_jumlahakhir)?></td>
                    <td rowspan="5">
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/detail_hakpilih_dpt/' . $row->id_hakpilih_dpt) ?>"
                        class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/edit_hakpilih_dpt/' . $row->id_hakpilih_dpt) ?>"
                        class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/hapus_hakpilih_dpt/' . $row->id_hakpilih_dpt) ?>"
                        class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">PR</td>
                    <td><?= number_format((float)$row->hakpilih_dpt_bogorbarat_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpt_bogorselatan_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpt_bogortengah_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpt_bogortimur_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpt_bogorutara_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpt_tanahsareal_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpt_perempuan_jumlahakhir)?></td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">JML</td>
                    <td><?= number_format((float)$row->hakpilih_dpt_bogorbarat_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpt_bogorselatan_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpt_bogortengah_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpt_bogortimur_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpt_bogorutara_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpt_tanahsareal_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpt_jumlah_akhir)?></td>
                  </tr>
                  <?php } ?>
                </thead>
                <thead>
                  <tr>
                    <td colspan="2" rowspan="5" style="font-weight:bold;">2. Pengguna hak pilih dalam Daftar Pemilih
                      Tambahan (DPTb)/ Pemilih dari TPS lain <a
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/tambah_hakpilih_dptb') ?>"
                        class="btn btn-primary btn-sm float-left"><i class="fas fa-plus"></i> Tambah
                        Data</a></td>
                  </tr>
                  <?php
								$no = 1;
								foreach($hakpilihdptb_user as $row) { ?>
                  <tr>
                    <td style="font-weight:bold;">LK</td>
                    <td><?= number_format((float)$row->hakpilih_dptb_bogorbarat_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dptb_bogorselatan_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dptb_bogortengah_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dptb_bogortimur_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dptb_bogorutara_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dptb_tanahsareal_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dptb_laki_jumlahakhir)?></td>
                    <td rowspan="5">
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/detail_hakpilih_dptb/' . $row->id_hakpilih_dptb) ?>"
                        class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/edit_hakpilih_dptb/' . $row->id_hakpilih_dptb) ?>"
                        class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/hapus_hakpilih_dptb/' . $row->id_hakpilih_dptb) ?>"
                        class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">PR</td>
                    <td><?= number_format((float)$row->hakpilih_dptb_bogorbarat_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dptb_bogorselatan_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dptb_bogortengah_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dptb_bogortimur_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dptb_bogorutara_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dptb_tanahsareal_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dptb_perempuan_jumlahakhir)?></td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">JML</td>
                    <td><?= number_format((float)$row->hakpilih_dptb_bogorbarat_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dptb_bogorselatan_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dptb_bogortengah_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dptb_bogortimur_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dptb_bogorutara_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dptb_tanahsareal_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dptb_jumlah_akhir)?></td>
                  </tr>
                  <?php } ?>
                </thead>
                <thead>
                  <tr>
                    <td colspan="2" rowspan="5" style="font-weight:bold;">3. Pengguna hak pilih dalam Daftar Pemilih
                      Khusus (DPK) <a
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/tambah_hakpilih_dpk') ?>"
                        class="btn btn-primary btn-sm float-left"><i class="fas fa-plus"></i> Tambah
                        Data</a></td>
                  </tr>
                  <?php
								$no = 1;
								foreach($hakpilihdpk_user as $row) { ?>
                  <tr>
                    <td style="font-weight:bold;">LK</td>
                    <td><?= number_format((float)$row->hakpilih_dpk_bogorbarat_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpk_bogorselatan_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpk_bogortengah_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpk_bogortimur_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpk_bogorutara_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpk_tanahsareal_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpk_laki_jumlahakhir)?></td>
                    <td rowspan="5">
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/detail_hakpilih_dpk/' . $row->id_hakpilih_dpk) ?>"
                        class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/edit_hakpilih_dpk/' . $row->id_hakpilih_dpk) ?>"
                        class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/hapus_hakpilih_dpk/' . $row->id_hakpilih_dpk) ?>"
                        class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">PR</td>
                    <td><?= number_format((float)$row->hakpilih_dpk_bogorbarat_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpk_bogorselatan_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpk_bogortengah_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpk_bogortimur_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpk_bogorutara_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpk_tanahsareal_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpk_perempuan_jumlahakhir)?></td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">JML</td>
                    <td><?= number_format((float)$row->hakpilih_dpk_bogorbarat_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpk_bogorselatan_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpk_bogortengah_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpk_bogortimur_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpk_bogorutara_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpk_tanahsareal_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpk_jumlah_akhir)?></td>
                  </tr>
                  <?php } ?>
                </thead>
                <thead>
                  <tr>
                    <td colspan="2" rowspan="5" style="font-weight:bold;">4. Pengguna hak pilih dalam Daftar Pemilih
                      Khusus Tambahan (DPKTb) /pengguna KTP atau identitas lain atau paspor <br><a
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/tambah_hakpilih_dpktb') ?>"
                        class="btn btn-primary btn-sm float-left"><i class="fas fa-plus"></i> Tambah
                        Data</a></td>
                  </tr>
                  <?php
								$no = 1;
								foreach($hakpilihdpktb_user as $row) { ?>
                  <tr>
                    <td style="font-weight:bold;">LK</td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_bogorbarat_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_bogorselatan_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_bogortengah_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_bogortimur_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_bogorutara_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_tanahsareal_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_laki_jumlahakhir)?></td>
                    <td rowspan="5">
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/detail_hakpilih_dpktb/' . $row->id_hakpilih_dpktb) ?>"
                        class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/edit_hakpilih_dpktb/' . $row->id_hakpilih_dpktb) ?>"
                        class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/hapus_hakpilih_dpktb/' . $row->id_hakpilih_dpktb) ?>"
                        class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">PR</td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_bogorbarat_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_bogorselatan_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_bogortengah_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_bogortimur_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_bogorutara_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_tanahsareal_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_perempuan_jumlahakhir)?></td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">JML</td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_bogorbarat_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_bogorselatan_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_bogortengah_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_bogortimur_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_bogorutara_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_tanahsareal_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_dpktb_jumlah_akhir)?></td>
                  </tr>
                  <?php } ?>
                </thead>
                <thead>
                  <tr>
                    <td colspan="2" rowspan="5" style="font-weight:bold;">5. Jumlah seluruh pengguna Hak Pilih
                      (1+2+3+4+5)
                      <a href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/tambah_jumlahkeseluruhan_hakpilih') ?>"
                        class="btn btn-primary btn-sm float-left"><i class="fas fa-plus"></i> Tambah
                        Data</a>
                    </td>
                  </tr>
                  <?php
								$no = 1;
								foreach($jkhakpilih_user as $row) { ?>
                  <tr>
                    <td style="font-weight:bold;">LK</td>
                    <td><?= number_format((float)$row->hakpilih_jk_bogorbarat_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_jk_bogorselatan_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_jk_bogortengah_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_jk_bogortimur_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_jk_bogorutara_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_jk_tanahsareal_laki)?></td>
                    <td><?= number_format((float)$row->hakpilih_jk_laki_jumlahakhir)?></td>
                    <td rowspan="5">
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/detail_jumlahkeseluruhan_hakpilih/' . $row->id_jk_hakpilih) ?>"
                        class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                      <a style="color:white"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/edit_jumlahkeseluruhan_hakpilih/' . $row->id_jk_hakpilih) ?>"
                        class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                        href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/hapus_jumlahkeseluruhan_hakpilih/' . $row->id_jk_hakpilih) ?>"
                        class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">PR</td>
                    <td><?= number_format((float)$row->hakpilih_jk_bogorbarat_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_jk_bogorselatan_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_jk_bogortengah_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_jk_bogortimur_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_jk_bogorutara_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_jk_tanahsareal_perempuan)?></td>
                    <td><?= number_format((float)$row->hakpilih_jk_perempuan_jumlahakhir)?></td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">JML</td>
                    <td><?= number_format((float)$row->hakpilih_jk_bogorbarat_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_jk_bogorselatan_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_jk_bogortengah_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_jk_bogortimur_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_jk_bogorutara_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_jk_tanahsareal_jumlah)?></td>
                    <td><?= number_format((float)$row->hakpilih_jk_jumlah_akhir)?></td>
                  </tr>
                  <?php } ?>
                </thead>
              </table>
            </div>
          </div>
        </div>
      </div>
  </section>
</div>





<?php } ?>