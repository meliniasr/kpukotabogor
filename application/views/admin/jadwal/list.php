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
                 <a href="<?= base_url('admin/jadwal_pilpres/tambah_data') ?>" class="btn btn-primary btn-sm"><i
                     class="fas fa-plus"></i> Tambah Data</a>
                 <a href="
						 <?php foreach($jadwal_user as $row) {?>
						 <?= base_url('admin/jadwal_pilpres/pdf/' . $row->tahun) ?>
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
                     <th>Foto</th>
                     <th>Aksi</th>
                   </tr>
                 </thead>
                 <tbody>
                   <?php
          $no=1;
          foreach ($jadwal as $key => $value) { ?>
                   <tr>
                     <td><?= $no++?></td>
                     <td><?= $value->tahun?></td>
                     <td><?= $value->jadwal ?></td>
                     <td><img src="<?= base_url('assets/upload/jadwal/'.$value->foto)?>" width="100px"></td>
                     <td>
                       <a style="color:white"
                         href="<?= base_url('admin/jadwal_pilpres/detail_data/'.$value->id_jadwal) ?>"
                         class="btn bg-gradient-info btn-sm"><i class="fa fa-eye"></i></a>
                       <a style="color:white" href="<?= base_url('admin/jadwal_pilpres/edit/'. $value->id_jadwal)?>"
                         class="btn btn-sm bg-gradient-primary"><i class="fa fa-edit"></i></a>
                       <a style="color:white" href="<?= base_url('admin/jadwal_pilpres/hapus/'. $value->id_jadwal)?>"
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
               <h3 class="card-title"><b>Data <?= $title2?></b></h3>
               <div class="tombol float-right">
                 <a href="<?= base_url('admin/jadwal_pilpres/tambah_data') ?>" class="btn btn-primary btn-sm"><i
                     class="fas fa-plus"></i> Tambah Data</a>
                 <a href="
						 <?php foreach($jadwal_user as $row) {?>
						 <?= base_url('admin/jadwal_pilpres/pdf/' . $row->tahun) ?>
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
                     <th>Foto</th>
                     <th>Aksi</th>
                   </tr>
                 </thead>
                 <tbody>
                   <?php
          $no=1;
          foreach ($jadwal_user as $key => $value) { ?>
                   <tr>
                     <td><?= $no++?></td>
                     <td><?= $value->tahun?></td>
                     <td><?= $value->jadwal ?></td>
                     <td><img src="<?= base_url('assets/upload/jadwal/'.$value->foto)?>" width="100px"></td>
                     <td>
                       <a style="color:white"
                         href="<?= base_url('admin/jadwal_pilpres/detail_data/'.$value->id_jadwal) ?>"
                         class="btn bg-gradient-info btn-sm"><i class="fa fa-eye"></i></a>
                       <a style="color:white" href="<?= base_url('admin/jadwal_pilpres/edit/'. $value->id_jadwal)?>"
                         class="btn btn-sm bg-gradient-primary"><i class="fa fa-edit"></i></a>
                       <a style="color:white" href="<?= base_url('admin/jadwal_pilpres/hapus/'. $value->id_jadwal)?>"
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