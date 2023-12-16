 <?php if (is_it()) { ?>
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
                 <a href="<?= base_url('admin/pelantikan/tambah_data') ?>" class="btn btn-primary btn-sm"><i
                     class="fas fa-plus"></i>
                   Tambah Data</a>&nbsp;
                 <a href="
						 <?php foreach($pelantikan_user as $row) {?>
						 <?= base_url('admin/pelantikan/pdf/' . $row->id_pelantikan) ?>
						 <?php } ?>" class="btn btn-danger btn-sm" target="_blank"><i class="fas fa-file-pdf"></i> PDF</a>
               </div>
             </div>
             <div class="card-body">
               <?= $this->session->flashdata('pesan'); ?>
               <?= validation_errors() ?>
               <table id="example2" class="table table-bordered table-striped">
                 <thead>
                   <tr>
                     <th rowspan="2" style="text-align: center;">No.</th>
                     <th rowspan="2" style="text-align: center;">Jadwal Pelantikan</th>
                     <th rowspan="2" style="text-align: center;">Foto Presiden</th>
                     <th rowspan="2" style="text-align: center;">Nama Presiden</th>
                     <th rowspan="2" style="text-align: center;">Foto Wakil Presiden</th>
                     <th rowspan="2" style="text-align: center;">Nama Wakil Presiden</th>
                     <th colspan="2" style="text-align: center;">Masa Jabatan</th>
                     <th rowspan="2" style="text-align: center;">Aksi</th>
                   </tr>
                   <tr>
                     <th style="text-align: center;">Mulai</th>
                     <th style="text-align: center;">Akhir</th>
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
                   </tr>
                 </thead>
                 <tbody>
                   <?php
                      $no = 1;
                      foreach ($pelantikan as $row) { ?>
                   <tr id="tabel">
                     <td><?= $no++ ?></td>
                     <td><?= $row->tgl_pelantikan ?></td>
                     <td><img width="100"
                         src="<?php echo base_url() . 'assets/upload/pelantikan/' . $row->foto_presiden ?>">
                     </td>
                     <td><?= $row->nama_presiden ?></td>
                     <td><img width="100"
                         src="<?php echo base_url() . 'assets/upload/pelantikan/' . $row->foto_wapres ?>">
                     </td>
                     <td><?= $row->nama_wapres ?></td>
                     <td><?= $row->mulai_periode?></td>
                     <td><?= $row->akhir_periode ?></td>
                     <td>
                       <a style="color:white" href="<?= base_url($row->id_pelantikan) ?>" class="btn btn-info btn-sm"
                         data-toggle="modal" data-target="#exampleModal"><i class="fa fa-eye"></i></a>
                       <a href="<?= base_url('admin/pelantikan/edit/' . $row->id_pelantikan) ?>"
                         class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                       <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                         href="<?= base_url('admin/pelantikan/hapus/' . $row->id_pelantikan) ?>"
                         class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                     </td>
                   </tr>
                   <?php } ?>
                 </tbody>
               </table>
             </div>
           </div>
         </div>
       </div>
   </section>
   <!--Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel"><b>Detail Data</b></h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
           <?php foreach($pelantikan as $detail ){?>
           <table class="table table hover table-bordered table-striped">
             <tr>
               <td>Tahun</td>
               <td><?= $detail->tahun?></td>
             </tr>

             <tr>
               <td>Foto Presiden</td>
               <td><img width="100"
                   src="<?php echo base_url() . 'assets/upload/pelantikan/' . $detail->foto_presiden ?>"></td>
             </tr>

             <tr>
               <td>Nama Presiden</td>
               <td><?= $detail->nama_presiden?></td>
             </tr>

             <tr>
               <td>Foto Wakil Presiden</td>
               <td><img width="100" src="<?php echo base_url() . 'assets/upload/pelantikan/' . $detail->foto_wapres ?>">
               </td>
             </tr>

             <tr>
               <td>Nama Wakil Presiden</td>
               <td><?= $detail->nama_wapres?></td>
             </tr>

             <tr>
               <td>Jadwal Pelantikan</td>
               <td><?= $detail->tgl_pelantikan?></td>
             </tr>

             <tr>
               <td>Masa Periode Jabatan</td>
               <td><?= $detail->mulai_periode?> - <?= $detail->akhir_periode?></td>
             </tr>
           </table>
           <?php } ?>
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
                 <a href="<?= base_url('admin/pelantikan/tambah_data') ?>" class="btn btn-primary btn-sm"><i
                     class="fas fa-plus"></i>
                   Tambah Data</a>&nbsp;
                 <a href="
						 <?php foreach($pelantikan_user as $row) {?>
						 <?= base_url('admin/pelantikan/pdf/' . $row->id_pelantikan) ?>
						 <?php } ?>" class="btn btn-danger btn-sm" target="_blank"><i class="fas fa-file-pdf"></i> PDF</a>
               </div>
             </div>
             <div class="card-body">
               <?= $this->session->flashdata('pesan'); ?>
               <?= validation_errors() ?>
               <table id="example2" class="table table-bordered table-striped">
                 <thead>
                   <tr>
                     <th rowspan="2" style="text-align: center;">No.</th>
                     <th rowspan="2" style="text-align: center;">Jadwal Pelantikan</th>
                     <th rowspan="2" style="text-align: center;">Foto Presiden</th>
                     <th rowspan="2" style="text-align: center;">Nama Presiden</th>
                     <th rowspan="2" style="text-align: center;">Foto Wakil Presiden</th>
                     <th rowspan="2" style="text-align: center;">Nama Wakil Presiden</th>
                     <th colspan="2" style="text-align: center;">Masa Jabatan</th>
                     <th rowspan="2" style="text-align: center;">Aksi</th>
                   </tr>
                   <tr>
                     <th style="text-align: center;">Mulai</th>
                     <th style="text-align: center;">Akhir</th>
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
                   </tr>
                 </thead>
                 <tbody>
                   <?php
                      $no = 1;
                      foreach ($pelantikan_user as $row) { ?>
                   <tr id="tabel">
                     <td><?= $no++ ?></td>
                     <td><?= $row->tgl_pelantikan ?></td>
                     <td><img width="100"
                         src="<?php echo base_url() . 'assets/upload/pelantikan/' . $row->foto_presiden ?>">
                     </td>
                     <td><?= $row->nama_presiden ?></td>
                     <td><img width="100"
                         src="<?php echo base_url() . 'assets/upload/pelantikan/' . $row->foto_wapres ?>">
                     </td>
                     <td><?= $row->nama_wapres ?></td>
                     <td><?= $row->mulai_periode?></td>
                     <td><?= $row->akhir_periode ?></td>
                     <td>
                       <a style="color:white" href="<?= base_url($row->id_pelantikan) ?>" class="btn btn-info btn-sm"
                         data-toggle="modal" data-target="#exampleModal"><i class="fa fa-eye"></i></a>
                       <a href="<?= base_url('admin/pelantikan/edit/' . $row->id_pelantikan) ?>"
                         class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                       <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                         href="<?= base_url('admin/pelantikan/hapus/' . $row->id_pelantikan) ?>"
                         class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                     </td>
                   </tr>
                   <?php } ?>
                 </tbody>
               </table>
             </div>
           </div>
         </div>
       </div>
   </section>
   <!--Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel"><b>Detail Data</b></h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
           <?php foreach($pelantikan_user as $detail ){?>
           <table class="table table hover table-bordered table-striped">
             <tr>
               <td>Tahun</td>
               <td><?= $detail->tahun?></td>
             </tr>

             <tr>
               <td>Foto Presiden</td>
               <td><img width="100"
                   src="<?php echo base_url() . 'assets/upload/pelantikan/' . $detail->foto_presiden ?>"></td>
             </tr>

             <tr>
               <td>Nama Presiden</td>
               <td><?= $detail->nama_presiden?></td>
             </tr>

             <tr>
               <td>Foto Wakil Presiden</td>
               <td><img width="100" src="<?php echo base_url() . 'assets/upload/pelantikan/' . $detail->foto_wapres ?>">
               </td>
             </tr>

             <tr>
               <td>Nama Wakil Presiden</td>
               <td><?= $detail->nama_wapres?></td>
             </tr>

             <tr>
               <td>Jadwal Pelantikan</td>
               <td><?= $detail->tgl_pelantikan?></td>
             </tr>

             <tr>
               <td>Masa Periode Jabatan</td>
               <td><?= $detail->mulai_periode?> - <?= $detail->akhir_periode?></td>
             </tr>
           </table>
           <?php } ?>
         </div>
       </div>
     </div>
   </div>
 </div>
 <?php } ?>