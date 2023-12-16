 <?php if (is_it()) {?>
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
                 <a href="<?= base_url('admin/rekap_partisipasi_tps/tambah_data') ?>" class="btn btn-primary btn-sm"><i
                     class="fas fa-plus"></i>
                   Tambah
                   Data</a>
                 &nbsp;
                 <a style="color:white" href="#" class="btn btn-info btn-sm" data-toggle="modal"
                   data-target="#exampleModal"><i class="fas fa-eye"></i>
                   Detail</a>&nbsp;
                 <a href="
						 <?php foreach($rekappartisipasi_tps_user as $row) {?>
						 <?= base_url('admin/rekap_partisipasi_tps/pdf/' . $row->id_rekap) ?>
						 <?php } ?>" class="btn btn-danger btn-sm" target="_blank"><i class="fas fa-file-pdf"></i> PDF</a>
               </div>
             </div>
             <div class="card-body">
               <table id="example2" class="table table-bordered table-striped">
                 <thead>
                   <tr>
                     <th rowspan="2" style="text-align: center;">NO.</th>
                     <th rowspan="2" style="text-align: center;">NAMA KECAMATAN</th>
                     <th rowspan="2" style="text-align: center;">JUMLAH KELURAHAN</th>
                     <th rowspan="2" style="text-align: center;">JUMLAH TPS</th>
                     <th colspan="3" style="text-align: center;">JUMLAH PEMILIH</th>
                     <th rowspan="2" style="text-align: center;">KET</th>
                     <th rowspan="2" style="text-align: center;">AKSI</th>
                   </tr>
                   <tr>
                     <th style="text-align: center;">L</th>
                     <th style="text-align: center;">P</th>
                     <th style="text-align: center;">L+P</th>
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
                 <thead></thead>
                 <?php

							 $no= 1;
							 foreach ($rekappartisipasi_tps as $row) { ?>
                 <tr>
                   <td>1</td>
                   <td>Bogor Barat</td>
                   <td><?= $row->jml_kelurahan_bgrbarat?></td>
                   <td><?= $row->jml_tps_bgrbarat?></td>
                   <td><?= number_format((float)$row->jml_pemilih_laki_bgrbarat)?></td>
                   <td><?= number_format((float)$row->jml_pemilih_perempuan_bgrbarat )?></td>
                   <td><?= number_format((float)$row->jml_pemilih_lakiperempuan_bgrbarat)?></td>
                   <td><?= $row->ket_bogorbarat?></td>
                   <td rowspan="7">
                     <a href="<?= base_url('admin/rekaphasilsuarasah_provinsi/edit/' . $row->id_rekap) ?>"
                       class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                     <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                       href="<?= base_url('admin/rekaphasilsuarasah_provinsi/hapus/' . $row->id_rekap) ?>"
                       class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                   </td>
                 </tr>
                 <tr>
                   <td>2</td>
                   <td>Bogor Selatan</td>
                   <td><?= $row->jml_kelurahan_bgrselatan?></td>
                   <td><?= $row->jml_tps_bgrselatan?></td>
                   <td><?= number_format((float)$row->jml_pemilih_laki_bgrselatan)?></td>
                   <td><?= number_format((float)$row->jml_pemilih_perempuan_bgrselatan )?></td>
                   <td><?= number_format((float)$row->jml_pemilih_lakiperempuan_bgrselatan)?></td>
                   <td><?= $row->ket_bogorselatan?></td>
                 </tr>
                 <tr>
                   <td>3</td>
                   <td>Bogor Tengah</td>
                   <td><?= $row->jml_kelurahan_bgrtengah?></td>
                   <td><?= $row->jml_tps_bgrtengah?></td>
                   <td><?= number_format((float)$row->jml_pemilih_laki_bgrtengah)?></td>
                   <td><?= number_format((float)$row->jml_pemilih_perempuan_bgrtengah )?></td>
                   <td><?= number_format((float)$row->jml_pemilih_lakiperempuan_bgrtengah)?></td>
                   <td><?= $row->ket_bogortengah?></td>
                 </tr>
                 <tr>
                   <td>4</td>
                   <td>Bogor Timur</td>
                   <td><?= $row->jml_kelurahan_bgrtimur?></td>
                   <td><?= $row->jml_tps_bgrtimur?></td>
                   <td><?= number_format((float)$row->jml_pemilih_laki_bgrtimur)?></td>
                   <td><?= number_format((float)$row->jml_pemilih_perempuan_bgrtimur )?></td>
                   <td><?= number_format((float)$row->jml_pemilih_lakiperempuan_bgrtimur)?></td>
                   <td><?= $row->ket_bogortimur?></td>
                 </tr>
                 <tr>
                   <td>5</td>
                   <td>Bogor Utara</td>
                   <td><?= $row->jml_kelurahan_bgrutara?></td>
                   <td><?= $row->jml_tps_bgrutara?></td>
                   <td><?= number_format((float)$row->jml_pemilih_laki_bgrutara)?></td>
                   <td><?= number_format((float)$row->jml_pemilih_perempuan_bgrutara )?></td>
                   <td><?= number_format((float)$row->jml_pemilih_lakiperempuan_bgrutara)?></td>
                   <td><?= $row->ket_bogorutara?></td>
                 </tr>
                 <tr>
                   <td>6</td>
                   <td>Tanah Sareal</td>
                   <td><?= $row->jml_kelurahan_tnhsareal?></td>
                   <td><?= $row->jml_tps_tnhsareal?></td>
                   <td><?= number_format((float)$row->jml_pemilih_laki_tnhsareal)?></td>
                   <td><?= number_format((float)$row->jml_pemilih_perempuan_tnhsareal )?></td>
                   <td><?= number_format((float)$row->jml_pemilih_lakiperempuan_tnhsareal)?></td>
                   <td><?= $row->ket_tanahsareal?></td>
                 </tr>
                 <tr>
                   <td colspan="2" style="font-weight:bold;">TOTAL</td>
                   <td style="font-weight:bold;"><?= number_format((float)$row->total_jmlkelurahan)?></td>
                   <td style="font-weight:bold;"><?= number_format((float)$row->total_jmltps)?></td>
                   <td style="font-weight:bold;"><?= number_format((float)$row->total_jmlpemilihlaki)?></td>
                   <td style="font-weight:bold;"><?= number_format((float)$row->total_jmlpemilihperempuan)?></td>
                   <td style="font-weight:bold;"><?= number_format((float)$row->total_jmlpemilihlakiperempuan)?></td>
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
                 <a href="<?= base_url('admin/rekap_partisipasi_tps/tambah_data') ?>" class="btn btn-primary btn-sm"><i
                     class="fas fa-plus"></i>
                   Tambah
                   Data</a>
                 &nbsp;
                 <a style="color:white" href="#" class="btn btn-info btn-sm" data-toggle="modal"
                   data-target="#exampleModal"><i class="fas fa-eye"></i>
                   Detail</a>&nbsp;
                 <a href="
						 <?php foreach($rekappartisipasi_tps_user as $row) {?>
						 <?= base_url('admin/rekap_partisipasi_tps/pdf/' . $row->id_rekap) ?>
						 <?php } ?>" class="btn btn-danger btn-sm" target="_blank"><i class="fas fa-file-pdf"></i> PDF</a>
               </div>
             </div>
             <div class="card-body">
               <table id="example2" class="table table-bordered table-striped">
                 <thead>
                   <tr>
                     <th rowspan="2" style="text-align: center;">NO.</th>
                     <th rowspan="2" style="text-align: center;">NAMA KECAMATAN</th>
                     <th rowspan="2" style="text-align: center;">JUMLAH KELURAHAN</th>
                     <th rowspan="2" style="text-align: center;">JUMLAH TPS</th>
                     <th colspan="3" style="text-align: center;">JUMLAH PEMILIH</th>
                     <th rowspan="2" style="text-align: center;">KET</th>
                     <th rowspan="2" style="text-align: center;">AKSI</th>
                   </tr>
                   <tr>
                     <th style="text-align: center;">L</th>
                     <th style="text-align: center;">P</th>
                     <th style="text-align: center;">L+P</th>
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
                 <thead></thead>
                 <?php

							 $no= 1;
							 foreach ($rekappartisipasi_tps_user as $row) { ?>
                 <tr>
                   <td>1</td>
                   <td>Bogor Barat</td>
                   <td><?= $row->jml_kelurahan_bgrbarat?></td>
                   <td><?= $row->jml_tps_bgrbarat?></td>
                   <td><?= number_format((float)$row->jml_pemilih_laki_bgrbarat)?></td>
                   <td><?= number_format((float)$row->jml_pemilih_perempuan_bgrbarat )?></td>
                   <td><?= number_format((float)$row->jml_pemilih_lakiperempuan_bgrbarat)?></td>
                   <td><?= $row->ket_bogorbarat?></td>
                   <td rowspan="7">
                     <a href="<?= base_url('admin/rekaphasilsuarasah_provinsi/edit/' . $row->id_rekap) ?>"
                       class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                     <a onclick="return confirm('Anda yakin ingin menghapusnya?');"
                       href="<?= base_url('admin/rekaphasilsuarasah_provinsi/hapus/' . $row->id_rekap) ?>"
                       class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                   </td>
                 </tr>
                 <tr>
                   <td>2</td>
                   <td>Bogor Selatan</td>
                   <td><?= $row->jml_kelurahan_bgrselatan?></td>
                   <td><?= $row->jml_tps_bgrselatan?></td>
                   <td><?= number_format((float)$row->jml_pemilih_laki_bgrselatan)?></td>
                   <td><?= number_format((float)$row->jml_pemilih_perempuan_bgrselatan )?></td>
                   <td><?= number_format((float)$row->jml_pemilih_lakiperempuan_bgrselatan)?></td>
                   <td><?= $row->ket_bogorselatan?></td>
                 </tr>
                 <tr>
                   <td>3</td>
                   <td>Bogor Tengah</td>
                   <td><?= $row->jml_kelurahan_bgrtengah?></td>
                   <td><?= $row->jml_tps_bgrtengah?></td>
                   <td><?= number_format((float)$row->jml_pemilih_laki_bgrtengah)?></td>
                   <td><?= number_format((float)$row->jml_pemilih_perempuan_bgrtengah )?></td>
                   <td><?= number_format((float)$row->jml_pemilih_lakiperempuan_bgrtengah)?></td>
                   <td><?= $row->ket_bogortengah?></td>
                 </tr>
                 <tr>
                   <td>4</td>
                   <td>Bogor Timur</td>
                   <td><?= $row->jml_kelurahan_bgrtimur?></td>
                   <td><?= $row->jml_tps_bgrtimur?></td>
                   <td><?= number_format((float)$row->jml_pemilih_laki_bgrtimur)?></td>
                   <td><?= number_format((float)$row->jml_pemilih_perempuan_bgrtimur )?></td>
                   <td><?= number_format((float)$row->jml_pemilih_lakiperempuan_bgrtimur)?></td>
                   <td><?= $row->ket_bogortimur?></td>
                 </tr>
                 <tr>
                   <td>5</td>
                   <td>Bogor Utara</td>
                   <td><?= $row->jml_kelurahan_bgrutara?></td>
                   <td><?= $row->jml_tps_bgrutara?></td>
                   <td><?= number_format((float)$row->jml_pemilih_laki_bgrutara)?></td>
                   <td><?= number_format((float)$row->jml_pemilih_perempuan_bgrutara )?></td>
                   <td><?= number_format((float)$row->jml_pemilih_lakiperempuan_bgrutara)?></td>
                   <td><?= $row->ket_bogorutara?></td>
                 </tr>
                 <tr>
                   <td>6</td>
                   <td>Tanah Sareal</td>
                   <td><?= $row->jml_kelurahan_tnhsareal?></td>
                   <td><?= $row->jml_tps_tnhsareal?></td>
                   <td><?= number_format((float)$row->jml_pemilih_laki_tnhsareal)?></td>
                   <td><?= number_format((float)$row->jml_pemilih_perempuan_tnhsareal )?></td>
                   <td><?= number_format((float)$row->jml_pemilih_lakiperempuan_tnhsareal)?></td>
                   <td><?= $row->ket_tanahsareal?></td>
                 </tr>
                 <tr>
                   <td colspan="2" style="font-weight:bold;">TOTAL</td>
                   <td style="font-weight:bold;"><?= number_format((float)$row->total_jmlkelurahan)?></td>
                   <td style="font-weight:bold;"><?= number_format((float)$row->total_jmltps)?></td>
                   <td style="font-weight:bold;"><?= number_format((float)$row->total_jmlpemilihlaki)?></td>
                   <td style="font-weight:bold;"><?= number_format((float)$row->total_jmlpemilihperempuan)?></td>
                   <td style="font-weight:bold;"><?= number_format((float)$row->total_jmlpemilihlakiperempuan)?></td>
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
 <?php } ?>