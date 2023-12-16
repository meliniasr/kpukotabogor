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
                 <a href="<?= base_url('admin/dasar_hukum/tambah_data') ?>" class="btn btn-primary"><i
                     class="fas fa-plus"></i> Tambah Data</a>&nbsp;
                 <a href="
						 <?php foreach($dasarhukum_user as $row) {?>
						 <?= base_url('admin/dasar_hukum/pdf/' . $row->tahun) ?>
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
                     <th>Deskripsi</th>
                     <th>Aksi</th>
                   </tr>
                 </thead>
                 <tbody>
                   <?php
          $no=1;
          foreach ($dasarhukum as $key => $value) { ?>
                   <tr>
                     <td><?= $no++?></td>
                     <td><?= $value->tahun?></td>
                     <td><?= $value->deskripsi ?></td>
                     <td>
                       <a style="color:white"
                         href="<?= base_url('admin/dasar_hukum/detail_data/'.$value->id_dasarhukum) ?>"
                         class="btn bg-gradient-info btn-sm"><i class="fa fa-eye"></i></a><br><br>
                       <a style="color:white" href="<?= base_url('admin/dasar_hukum/edit/'. $value->id_dasarhukum)?>"
                         class="btn btn-sm bg-gradient-primary"><i class="fa fa-edit"></i></a><br><br>
                       <a style="color:white" href="<?= base_url('admin/dasar_hukum/hapus/'. $value->id_dasarhukum)?>"
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
                 <a href="<?= base_url('admin/dasar_hukum/tambah_data') ?>" class="btn btn-primary btn-sm"><i
                     class="fas fa-plus"></i> Tambah Data</a>&nbsp;
                 <a href="
						 <?php foreach($dasarhukum_user as $row) {?>
						 <?= base_url('admin/dasar_hukum/pdf/' . $row->tahun) ?>
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
                     <th>Deskripsi</th>
                     <th>Aksi</th>
                   </tr>
                 </thead>
                 <tbody>
                   <?php
          $no=1;
          foreach ($dasarhukum_user as $key => $value) { ?>
                   <tr>
                     <td><?= $no++?></td>
                     <td><?= $value->tahun?></td>
                     <td><?= $value->deskripsi?></td>
                     <td>
                       <a style="color:white"
                         href="<?= base_url('admin/dasar_hukum/detail_data/'.$value->id_dasarhukum) ?>"
                         class="btn bg-gradient-info btn-sm"><i class="fa fa-eye"></i></a><br><br>
                       <a style="color:white" href="<?= base_url('admin/dasar_hukum/edit/'. $value->id_dasarhukum)?>"
                         class="btn btn-sm bg-gradient-primary"><i class="fa fa-edit"></i></a><br><br>
                       <a style="color:white" href="<?= base_url('admin/dasar_hukum/hapus/'. $value->id_dasarhukum)?>"
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