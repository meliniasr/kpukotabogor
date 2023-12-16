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
                 <a href="<?= base_url('admin/rekaphasilsuarasah_kecamatan/tambah_data') ?>" class="btn btn-primary"><i
                     class="fas fa-plus"></i> Tambah Data</a>&nbsp;
                 <a href="
             <?php foreach($rekapkecamatan_user as $row) {?>
             <?= base_url('admin/rekaphasilsuarasah_kecamatan/pdf/'.$row->tahun) ?>
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
                     <th style="text-align: center;">NO.</th>
                     <th colspan="2" style="text-align: center;">NAMA PASANGAN CALON PRESIDEN DAN WAKIL
                       PRESIDEN</th>
                     <th colspan="7" style="text-align: center;">RINCIAN</th>
                     <th rowspan="2" style="text-align: center;">Aksi</th>
                   </tr>
                   <tr>
                     <th style="text-align: center;">IV.</th>
                     <th colspan="2" style="text-align: center;">RINCIAN JUMLAH PEROLEHAN SUARA
                       PASANGAN
                       CALON PRESIDEN DAN WAKIL
                       PRESIDEN</th>
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
                   <thead></thead>
                   <?php
									 $no=1;
									 foreach($rekapkecamatan as $row) { ?>
                   <tr>
                     <td>1</td>
                     <td><img width="100"
                         src="<?php echo base_url() . 'assets/upload/pasangancalon/' . $row->capres_satu ?>"></td>
                     <td><?= $row->nama_capres_satu?></td>
                     <td><?= number_format((float)$row->rincian_bogorbarat_satu)?></td>
                     <td><?= number_format((float)$row->rincian_bogorselatan_satu)?></td>
                     <td><?= number_format((float)$row->rincian_bogortengah_satu)?></td>
                     <td><?= number_format((float)$row->rincian_bogortimur_satu)?></td>
                     <td><?= number_format((float)$row->rincian_bogorutara_satu)?></td>
                     <td><?= number_format((float)$row->rincian_tanahsareal_satu)?></td>
                     <td><?= number_format((float)$row->jumlahakhir_rincian_satu)?></td>
                     <td rowspan="5">
                       <a style="color:white" href="<?= base_url($row->id_rekapkecamatan) ?>"
                         class="btn bg-gradient-info btn-sm" data-toggle="modal" data-target="#exampleModal"><i
                           class="fa fa-eye"></i></a><br><br>
                       <a style="color:white"
                         href="<?= base_url('admin/rekaphasilsuarasah_kecamatan/edit/' . $row->id_rekapkecamatan) ?>"
                         class="btn bg-gradient-primary btn-sm"><i class="fa fa-edit"></i></a><br><br>
                       <a style="color:white" onclick="return confirm('Anda yakin ingin menghapusnya?');"
                         href="<?= base_url('admin/rekaphasilsuarasah_kecamatan/hapus/' . $row->id_rekapkecamatan) ?>"
                         class="btn bg-gradient-danger btn-sm"><i class="fa fa-trash"></i></a>
                     </td>
                   </tr>
                   <tr>
                     <td>2</td>
                     <td><img width="100"
                         src="<?php echo base_url() . 'assets/upload/pasangancalon/' . $row->capres_dua ?>"></td>
                     <td><?= $row->nama_capres_dua?></td>
                     <td><?= number_format((float)$row->rincian_bogorbarat_dua)?></td>
                     <td><?= number_format((float)$row->rincian_bogorselatan_dua)?></td>
                     <td><?= number_format((float)$row->rincian_bogortengah_dua)?></td>
                     <td><?= number_format((float)$row->rincian_bogortimur_dua)?></td>
                     <td><?= number_format((float)$row->rincian_bogorutara_dua)?></td>
                     <td><?= number_format((float)$row->rincian_tanahsareal_dua)?></td>
                     <td><?= number_format((float)$row->jumlahakhir_rincian_dua)?></td>
                   </tr>

                   <tr>
                     <td colspan="3" style="font-weight:bold;">Jumlah Suara Sah Calon Presiden dan Wakil Presiden
                     </td>
                     <td><?=number_format((float)$row->suarasah_bogorbarat)?></td>
                     <td><?=number_format((float)$row->suarasah_bogorselatan)?></td>
                     <td><?=number_format((float)$row->suarasah_bogortengah)?></td>
                     <td><?=number_format((float)$row->suarasah_bogortimur)?></td>
                     <td><?=number_format((float)$row->suarasah_bogorutara)?></td>
                     <td><?=number_format((float)$row->suarasah_tanahsareal)?></td>
                     <td><?=number_format((float)$row->jumlahakhir_suarasah)?></td>
                   </tr>
                   <tr>
                     <td colspan="3" style="font-weight:bold;">Jumlah Suara Tidak Sah </td>
                     <td><?=number_format((float)$row->suaratdksah_bogorbarat)?></td>
                     <td><?=number_format((float)$row->suaratdksah_bogorselatan)?></td>
                     <td><?=number_format((float)$row->suaratdksah_bogortengah)?></td>
                     <td><?=number_format((float)$row->suaratdksah_bogortimur)?></td>
                     <td><?=number_format((float)$row->suaratdksah_bogorutara)?></td>
                     <td><?=number_format((float)$row->suaratdksah_tanahsareal)?></td>
                     <td><?=number_format((float)$row->jumlahakhir_suaratdksah)?></td>
                   </tr>
                   <tr>
                     <td colspan="3" style="font-weight:bold;">Jumlah Suara Sah dan Tidak Sah </td>
                     <td><?= number_format((float)$row->suarasah_tdksah_bogorbarat)?></td>
                     <td><?= number_format((float)$row->suarasah_tdksah_bogorselatan)?></td>
                     <td><?= number_format((float)$row->suarasah_tdksah_bogortengah)?></td>
                     <td><?= number_format((float)$row->suarasah_tdksah_bogortimur)?></td>
                     <td><?= number_format((float)$row->suarasah_tdksah_bogorutara)?></td>
                     <td><?= number_format((float)$row->suarasah_tdksah_tanahsareal)?></td>
                     <td><?= number_format((float)$row->jumlahakhir_suarasah_tdksah)?></td>
                   </tr>
                   <?php } ?>
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
         <h5 class="modal-title" id="exampleModalLabel"> <b>Detail Data</b></h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         <table class="table table hover table-bordered table-striped">
           <?php foreach($rekapkecamatan as $detail ){?>
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
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Barat</b></td>
               <td><?php echo number_format((float)$detail->rincian_bogorbarat_satu) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Selatan</b></td>
               <td><?php echo number_format((float)$detail->rincian_bogorselatan_satu) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Tengah</b></td>
               <td><?php echo number_format((float)$detail->rincian_bogortengah_satu) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Timur</b></td>
               <td><?php echo number_format((float)$detail->rincian_bogortimur_satu) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Utara</b></td>
               <td><?php echo number_format((float)$detail->rincian_bogorutara_satu) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Tanah Sareal</b></td>
               <td><?php echo number_format((float)$detail->rincian_tanahsareal_satu) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Jumlah Akhir</b></td>
               <td><?php echo number_format((float)$detail->jumlahakhir_rincian_satu) ?></td>
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
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Barat</b></td>
               <td><?php echo number_format((float)$detail->rincian_bogorbarat_dua) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Selatan</b></td>
               <td><?php echo number_format((float)$detail->rincian_bogorselatan_dua) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Tengah</b></td>
               <td><?php echo number_format((float)$detail->rincian_bogortengah_dua) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Timur</b></td>
               <td><?php echo number_format((float)$detail->rincian_bogortimur_dua) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Utara</b></td>
               <td><?php echo number_format((float)$detail->rincian_bogorutara_dua) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Tanah Sareal</b></td>
               <td><?php echo number_format((float)$detail->rincian_tanahsareal_dua) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Jumlah Akhir</b></td>
               <td><?php echo number_format((float)$detail->jumlahakhir_rincian_dua) ?></td>
             </tr>
         </table>
         <br>
         <table class="table table hover table-bordered table-striped">
           <span class="btn btn-secondary btn-sm"><b>Jumlah Suara Sah Calon Presiden dan Wakil Presiden</b>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Barat</b></td>
               <td><?php echo number_format((float)$detail->suarasah_bogorbarat) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Selatan</b></td>
               <td><?php echo number_format((float)$detail->suarasah_bogorselatan) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Tengah</b></td>
               <td><?php echo number_format((float)$detail->suarasah_bogortengah) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Timur</b></td>
               <td><?php echo number_format((float)$detail->suarasah_bogortimur) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Utara</b></td>
               <td><?php echo number_format((float)$detail->suarasah_bogorutara) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Tanah Sareal</b></td>
               <td><?php echo number_format((float)$detail->suarasah_tanahsareal) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Jumlah Akhir</b></td>
               <td><?php echo number_format((float)$detail->jumlahakhir_suarasah)?></td>
             </tr>
         </table>
         <br>
         <table class="table table hover table-bordered table-striped">
           <span class="btn btn-secondary btn-sm"><b>Jumlah Suara Tidak Sah</b>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Barat</b></td>
               <td><?php echo number_format((float)$detail->suaratdksah_bogorbarat) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Selatan</b></td>
               <td><?php echo number_format((float)$detail->suaratdksah_bogorselatan)?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Tengah</b></td>
               <td><?php echo number_format((float)$detail->suaratdksah_bogortengah) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Timur</b></td>
               <td><?php echo number_format((float)$detail->suaratdksah_bogortimur) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Utara</b></td>
               <td><?php echo number_format((float)$detail->suaratdksah_bogorutara) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Tanah Sareal</b></td>
               <td><?php echo number_format((float)$detail->suaratdksah_tanahsareal)?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Jumlah Akhir</b></td>
               <td><?php echo number_format((float)$detail->jumlahakhir_suaratdksah)?></td>
             </tr>
         </table>
         <br>
         <table class="table table hover table-bordered table-striped">
           <span class="btn btn-secondary btn-sm"><b>Jumlah Suara Sah dan Tidak Sah</b>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Barat</b></td>
               <td><?php echo number_format((float)$detail->suarasah_tdksah_bogorbarat) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Selatan</b></td>
               <td><?php echo number_format((float)$detail->suarasah_tdksah_bogorselatan) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Tengah</b></td>
               <td><?php echo number_format((float)$detail->suarasah_tdksah_bogortengah) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Timur</b></td>
               <td><?php echo number_format((float)$detail->suarasah_tdksah_bogortimur)?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Utara</b></td>
               <td><?php echo number_format((float)$detail->suarasah_tdksah_bogorutara)?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Tanah Sareal</b></td>
               <td><?php echo number_format((float)$detail->suarasah_tdksah_tanahsareal) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Jumlah Akhir</b></td>
               <td><?php echo number_format((float)$detail->jumlahakhir_suarasah_tdksah)?></td>
             </tr>
             <?php } ?>
         </table>
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
               <h3 class="card-title"><b><?= $title2?></b></h3>
               <div class="tombol float-right">
                 <a href="<?= base_url('admin/rekaphasilsuarasah_kecamatan/tambah_data') ?>"
                   class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Data</a>&nbsp;
                 <a href="
             <?php foreach($rekapkecamatan_user as $row) {?>
             <?= base_url('admin/rekaphasilsuarasah_kecamatan/pdf/'.$row->tahun) ?>
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
                     <th style="text-align: center;">NO.</th>
                     <th colspan="2" style="text-align: center;">NAMA PASANGAN CALON PRESIDEN DAN WAKIL
                       PRESIDEN</th>
                     <th colspan="7" style="text-align: center;">RINCIAN</th>
                     <th rowspan="2" style="text-align: center;">Aksi</th>
                   </tr>
                   <tr>
                     <th style="text-align: center;">IV.</th>
                     <th colspan="2" style="text-align: center;">RINCIAN JUMLAH PEROLEHAN SUARA
                       PASANGAN
                       CALON PRESIDEN DAN WAKIL
                       PRESIDEN</th>
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
                   <thead></thead>
                   <?php
									 $no=1;
									 foreach($rekapkecamatan_user as $row) { ?>
                   <tr>
                     <td>1</td>
                     <td><img width="100"
                         src="<?php echo base_url() . 'assets/upload/pasangancalon/' . $row->capres_satu ?>"></td>
                     <td><?= $row->nama_capres_satu?></td>
                     <td><?= number_format((float)$row->rincian_bogorbarat_satu)?></td>
                     <td><?= number_format((float)$row->rincian_bogorselatan_satu)?></td>
                     <td><?= number_format((float)$row->rincian_bogortengah_satu)?></td>
                     <td><?= number_format((float)$row->rincian_bogortimur_satu)?></td>
                     <td><?= number_format((float)$row->rincian_bogorutara_satu)?></td>
                     <td><?= number_format((float)$row->rincian_tanahsareal_satu)?></td>
                     <td><?= number_format((float)$row->jumlahakhir_rincian_satu)?></td>
                     <td rowspan="5">
                       <a style="color:white" href="<?= base_url($row->id_rekapkecamatan) ?>"
                         class="btn bg-gradient-info btn-sm" data-toggle="modal" data-target="#exampleModal"><i
                           class="fa fa-eye"></i></a><br><br>
                       <a style="color:white"
                         href="<?= base_url('admin/rekaphasilsuarasah_kecamatan/edit/' . $row->id_rekapkecamatan) ?>"
                         class="btn bg-gradient-primary btn-sm"><i class="fa fa-edit"></i></a><br><br>
                       <a style="color:white" onclick="return confirm('Anda yakin ingin menghapusnya?');"
                         href="<?= base_url('admin/rekaphasilsuarasah_kecamatan/hapus/' . $row->id_rekapkecamatan) ?>"
                         class="btn bg-gradient-danger btn-sm"><i class="fa fa-trash"></i></a>
                     </td>
                   </tr>
                   <tr>
                     <td>2</td>
                     <td><img width="100"
                         src="<?php echo base_url() . 'assets/upload/pasangancalon/' . $row->capres_dua ?>"></td>
                     <td><?= $row->nama_capres_dua?></td>
                     <td><?= number_format((float)$row->rincian_bogorbarat_dua)?></td>
                     <td><?= number_format((float)$row->rincian_bogorselatan_dua)?></td>
                     <td><?= number_format((float)$row->rincian_bogortengah_dua)?></td>
                     <td><?= number_format((float)$row->rincian_bogortimur_dua)?></td>
                     <td><?= number_format((float)$row->rincian_bogorutara_dua)?></td>
                     <td><?= number_format((float)$row->rincian_tanahsareal_dua)?></td>
                     <td><?= number_format((float)$row->jumlahakhir_rincian_dua)?></td>
                   </tr>

                   <tr>
                     <td colspan="3" style="font-weight:bold;">Jumlah Suara Sah Calon Presiden dan Wakil Presiden </td>
                     <td><?=number_format((float)$row->suarasah_bogorbarat)?></td>
                     <td><?=number_format((float)$row->suarasah_bogorselatan)?></td>
                     <td><?=number_format((float)$row->suarasah_bogortengah)?></td>
                     <td><?=number_format((float)$row->suarasah_bogortimur)?></td>
                     <td><?=number_format((float)$row->suarasah_bogorutara)?></td>
                     <td><?=number_format((float)$row->suarasah_tanahsareal)?></td>
                     <td><?=number_format((float)$row->jumlahakhir_suarasah)?></td>
                   </tr>
                   <tr>
                     <td colspan="3" style="font-weight:bold;">Jumlah Suara Tidak Sah </td>
                     <td><?=number_format((float)$row->suaratdksah_bogorbarat)?></td>
                     <td><?=number_format((float)$row->suaratdksah_bogorselatan)?></td>
                     <td><?=number_format((float)$row->suaratdksah_bogortengah)?></td>
                     <td><?=number_format((float)$row->suaratdksah_bogortimur)?></td>
                     <td><?=number_format((float)$row->suaratdksah_bogorutara)?></td>
                     <td><?=number_format((float)$row->suaratdksah_tanahsareal)?></td>
                     <td><?=number_format((float)$row->jumlahakhir_suaratdksah)?></td>
                   </tr>
                   <tr>
                     <td colspan="3" style="font-weight:bold;">Jumlah Suara Sah dan Tidak Sah </td>
                     <td><?= number_format((float)$row->suarasah_tdksah_bogorbarat)?></td>
                     <td><?= number_format((float)$row->suarasah_tdksah_bogorselatan)?></td>
                     <td><?= number_format((float)$row->suarasah_tdksah_bogortengah)?></td>
                     <td><?= number_format((float)$row->suarasah_tdksah_bogortimur)?></td>
                     <td><?= number_format((float)$row->suarasah_tdksah_bogorutara)?></td>
                     <td><?= number_format((float)$row->suarasah_tdksah_tanahsareal)?></td>
                     <td><?= number_format((float)$row->jumlahakhir_suarasah_tdksah)?></td>
                   </tr>
                   <?php } ?>
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
         <h5 class="modal-title" id="exampleModalLabel"> <b>Detail Data</b></h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         <table class="table table hover table-bordered table-striped">
           <?php foreach($rekapkecamatan_user as $detail ){?>
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
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Barat</b></td>
               <td><?php echo number_format((float)$detail->rincian_bogorbarat_satu) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Selatan</b></td>
               <td><?php echo number_format((float)$detail->rincian_bogorselatan_satu) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Tengah</b></td>
               <td><?php echo number_format((float)$detail->rincian_bogortengah_satu) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Timur</b></td>
               <td><?php echo number_format((float)$detail->rincian_bogortimur_satu) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Utara</b></td>
               <td><?php echo number_format((float)$detail->rincian_bogorutara_satu) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Tanah Sareal</b></td>
               <td><?php echo number_format((float)$detail->rincian_tanahsareal_satu) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Jumlah Akhir</b></td>
               <td><?php echo number_format((float)$detail->jumlahakhir_rincian_satu) ?></td>
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
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Barat</b></td>
               <td><?php echo number_format((float)$detail->rincian_bogorbarat_dua) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Selatan</b></td>
               <td><?php echo number_format((float)$detail->rincian_bogorselatan_dua) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Tengah</b></td>
               <td><?php echo number_format((float)$detail->rincian_bogortengah_dua) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Timur</b></td>
               <td><?php echo number_format((float)$detail->rincian_bogortimur_dua) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Utara</b></td>
               <td><?php echo number_format((float)$detail->rincian_bogorutara_dua) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Tanah Sareal</b></td>
               <td><?php echo number_format((float)$detail->rincian_tanahsareal_dua) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Jumlah Akhir</b></td>
               <td><?php echo number_format((float)$detail->jumlahakhir_rincian_dua) ?></td>
             </tr>
         </table>
         <br>
         <table class="table table hover table-bordered table-striped">
           <span class="btn btn-secondary btn-sm"><b>Jumlah Suara Sah Calon Presiden dan Wakil Presiden</b>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Barat</b></td>
               <td><?php echo number_format((float)$detail->suarasah_bogorbarat) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Selatan</b></td>
               <td><?php echo number_format((float)$detail->suarasah_bogorselatan) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Tengah</b></td>
               <td><?php echo number_format((float)$detail->suarasah_bogortengah) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Timur</b></td>
               <td><?php echo number_format((float)$detail->suarasah_bogortimur) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Utara</b></td>
               <td><?php echo number_format((float)$detail->suarasah_bogorutara) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Tanah Sareal</b></td>
               <td><?php echo number_format((float)$detail->suarasah_tanahsareal) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Jumlah Akhir</b></td>
               <td><?php echo number_format((float)$detail->jumlahakhir_suarasah)?></td>
             </tr>
         </table>
         <br>
         <table class="table table hover table-bordered table-striped">
           <span class="btn btn-secondary btn-sm"><b>Jumlah Suara Tidak Sah</b>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Barat</b></td>
               <td><?php echo number_format((float)$detail->suaratdksah_bogorbarat) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Selatan</b></td>
               <td><?php echo number_format((float)$detail->suaratdksah_bogorselatan)?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Tengah</b></td>
               <td><?php echo number_format((float)$detail->suaratdksah_bogortengah) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Timur</b></td>
               <td><?php echo number_format((float)$detail->suaratdksah_bogortimur) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Utara</b></td>
               <td><?php echo number_format((float)$detail->suaratdksah_bogorutara) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Tanah Sareal</b></td>
               <td><?php echo number_format((float)$detail->suaratdksah_tanahsareal)?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Jumlah Akhir</b></td>
               <td><?php echo number_format((float)$detail->jumlahakhir_suaratdksah)?></td>
             </tr>
         </table>
         <br>
         <table class="table table hover table-bordered table-striped">
           <span class="btn btn-secondary btn-sm"><b>Jumlah Suara Sah dan Tidak Sah</b>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Barat</b></td>
               <td><?php echo number_format((float)$detail->suarasah_tdksah_bogorbarat) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Selatan</b></td>
               <td><?php echo number_format((float)$detail->suarasah_tdksah_bogorselatan) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Tengah</b></td>
               <td><?php echo number_format((float)$detail->suarasah_tdksah_bogortengah) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Timur</b></td>
               <td><?php echo number_format((float)$detail->suarasah_tdksah_bogortimur)?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Utara</b></td>
               <td><?php echo number_format((float)$detail->suarasah_tdksah_bogorutara)?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Kecamatan Tanah Sareal</b></td>
               <td><?php echo number_format((float)$detail->suarasah_tdksah_tanahsareal) ?></td>
             </tr>
             <tr>
               <td>Rincian Perolehan Surat Suara <b>Jumlah Akhir</b></td>
               <td><?php echo number_format((float)$detail->jumlahakhir_suarasah_tdksah)?></td>
             </tr>
             <?php } ?>
         </table>
       </div>
     </div>
   </div>
 </div>
 </div>
 <?php }?>