 <?php if (is_it()) { ?>
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
                 <a href="<?= base_url('admin/peta_politik/tambah_data') ?>" class="btn btn-primary btn-sm"><i
                     class="fas fa-plus"></i> Tambah Data</a>
                 <a href="
						 <?php foreach($viewmap_user as $row) {?>
						 <?= base_url('admin/peta_politik/pdf/' . $row->tahun) ?>
						 <?php } ?>" class="btn btn-danger btn-sm" target="_blank"><i class="fas fa-file-pdf"></i> PDF</a>
               </div>
             </div>
             <!-- /.card-header -->
             <div class="card-body">
               <?php
                echo $this->session->flashdata('pesan');
                ?>
               <table id="myTable" class="table table-bordered table-hover">
                 <thead>
                   <tr>
                     <th>No.</th>
                     <th>Kecamatan</th>
                     <th>Kelurahan</th>
                     <th>Foto</th>
                     <th>Nama</th>
                     <th>Total Paslon 1</th>
                     <th>Paslon 1 (%)</th>
                     <th>Total Paslon 2</th>
                     <th>Paslon 2 (%)</th>
                     <th>Aksi</th>
                   </tr>
                 </thead>
                 <tbody>
                   <?php
          $no=1;
          foreach ($viewmap as $key => $value) { ?>
                   <tr>
                     <td><?= $no++?></td>
                     <td><?= $value->kecamatan?></td>
                     <td><?= $value->kelurahan?></td>
                     <td><?= number_format((float)$value->jml_paslon_satu)?></td>
                     <td><?= number_format((float)$value->persen_paslon_satu)?>%</td>
                     <td><?= number_format((float)$value->jml_paslon_dua)?></td>
                     <td><?= number_format((float)$value->persen_paslon_dua)?>%</td>
                     <td>
                       <a style="color:white"
                         href="<?= base_url('admin/peta_politik/detail_data/'.$value->id_viewmap) ?>"
                         class="btn bg-gradient-info btn-sm"><i class="fa fa-eye"></i></a>
                       <a style="color:white" href="<?= base_url('admin/peta_politik/edit/'. $value->id_viewmap)?>"
                         class="btn btn-sm bg-gradient-primary"><i class="fa fa-edit"></i></a>
                       <a style="color:white" href="<?= base_url('admin/peta_politik/hapus/'. $value->id_viewmap)?>"
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
 <?php } else { ?>
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
                 <a href="<?= base_url('admin/peta_politik/tambah_data') ?>" class="btn btn-primary btn-sm"><i
                     class="fas fa-plus"></i> Tambah Data</a>
                 <a href="
						 <?php foreach($viewmap_user as $row) {?>
						 <?= base_url('admin/peta_politik/pdf/' . $row->tahun) ?>
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
                     <th>Kecamatan</th>
                     <th>Kelurahan</th>
                     <th>Foto</th>
                     <th>Nama</th>
                     <th>Total Paslon 1</th>
                     <th>Paslon 1 (%)</th>
                     <th>Total Paslon 2</th>
                     <th>Paslon 2 (%)</th>
                     <th>Aksi</th>
                   </tr>
                 </thead>
                 <tbody>
                   <?php
          $no=1;
          foreach ($viewmap_user as $key => $value) { ?>
                   <tr>
                     <td><?= $no++?></td>
                     <td><?= $value->tahun?></td>
                     <td><?= $value->kecamatan?></td>
                     <td><?= $value->kelurahan?></td>
                     <td><img width="100"
                         src="<?php echo base_url() . 'assets/upload/pasangancalon/' . $value->foto_capres ?>"></td>
                     <td><?= $value->nama?></td>
                     <td><?= number_format((float)$value->jml_paslon_satu)?></td>
                     <td><?= number_format((float)$value->persen_paslon_satu)?>%</td>
                     <td><?= number_format((float)$value->jml_paslon_dua)?></td>
                     <td><?= number_format((float)$value->persen_paslon_dua)?>%</td>
                     <td>
                       <a style="color:white"
                         href="<?= base_url('admin/peta_politik/detail_data/'.$value->id_viewmap) ?>"
                         class="btn bg-gradient-info btn-sm"><i class="fa fa-eye"></i></a>
                       <a style="color:white" href="<?= base_url('admin/peta_politik/edit/'. $value->id_viewmap)?>"
                         class="btn btn-sm bg-gradient-primary"><i class="fa fa-edit"></i></a>
                       <a style="color:white" href="<?= base_url('admin/peta_politik/hapus/'. $value->id_viewmap)?>"
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
 <?php } ?>