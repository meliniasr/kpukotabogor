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
         <div class="col-md-12">
           <div class="card ">
             <div class="card-header" style="background-color:#311b1b;color:white">
               <h3 class="card-title"><b><?= $title2?></b></h3>
             </div>
             <div class="card-body">
               <table class="table table hover table-bordered table-striped">
                 <span class="btn btn-secondary btn-sm"><b>DATA PEMILIH LAKI -LAKI</b>
                   <tr>
                     <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Barat</b></td>
                     <td><?php echo number_format((float)$detail->dpk_bogorbarat_laki )?></td>
                   </tr>
                   <tr>
                     <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Selatan</b></td>
                     <td><?php echo number_format((float)$detail->dpk_bogorselatan_laki )?></td>
                   </tr>
                   <tr>
                     <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Tengah</b></td>
                     <td><?php echo number_format((float)$detail->dpk_bogortengah_laki )?></td>
                   </tr>
                   <tr>
                     <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Timur</b></td>
                     <td><?php echo number_format((float)$detail->dpk_bogortimur_laki )?></td>
                   </tr>
                   <tr>
                     <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Utara</b></td>
                     <td><?php echo number_format((float)$detail->dpk_bogorutara_laki )?></td>
                   </tr>
                   <tr>
                     <td>Rincian Perolehan Surat Suara <b>Kecamatan Tanah Sareal</b></td>
                     <td><?php echo number_format((float)$detail->dpk_tanahsareal_laki )?></td>
                   </tr>
                   <tr>
                     <td>Rincian Perolehan Surat Suara <b>Jumlah Akhir</b></td>
                     <td><?php echo number_format((float)$detail->dpk_laki_jumlahakhir) ?></td>
                   </tr>
               </table>
               <br>
               <table class="table table hover table-bordered table-striped">
                 <span class="btn btn-secondary btn-sm"><b>DATA PEMILIH PEREMPUAN</b>
                   <tr>
                     <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Barat</b></td>
                     <td><?php echo number_format((float)$detail->dpk_bogorbarat_perempuan )?></td>
                   </tr>
                   <tr>
                     <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Selatan</b></td>
                     <td><?php echo number_format((float)$detail->dpk_bogorselatan_perempuan )?></td>
                   </tr>
                   <tr>
                     <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Tengah</b></td>
                     <td><?php echo number_format((float)$detail->dpk_bogortengah_perempuan )?></td>
                   </tr>
                   <tr>
                     <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Timur</b></td>
                     <td><?php echo number_format((float)$detail->dpk_bogortimur_perempuan )?></td>
                   </tr>
                   <tr>
                     <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Utara</b></td>
                     <td><?php echo number_format((float)$detail->dpk_bogorutara_perempuan )?></td>
                   </tr>
                   <tr>
                     <td>Rincian Perolehan Surat Suara <b>Kecamatan Tanah Sareal</b></td>
                     <td><?php echo number_format((float)$detail->dpk_tanahsareal_perempuan )?></td>
                   </tr>
                   <tr>
                     <td>Rincian Perolehan Surat Suara <b>Jumlah Akhir</b></td>
                     <td><?php echo number_format((float)$detail->dpk_perempuan_jumlahakhir )?></td>
                   </tr>
               </table>
               <br>
               <table class="table table hover table-bordered table-striped">
                 <span class="btn btn-secondary btn-sm"><b>TOTAL DATA PEMILIH LAKI - LAKI & PEREMPUAN</b>
                   <tr>
                     <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Barat</b></td>
                     <td><?php echo number_format((float)$detail->dpk_bogorbarat_jumlah )?></td>
                   </tr>
                   <tr>
                     <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Selatan</b></td>
                     <td><?php echo number_format((float)$detail->dpk_bogorselatan_jumlah )?></td>
                   </tr>
                   <tr>
                     <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Tengah</b></td>
                     <td><?php echo number_format((float)$detail->dpk_bogortengah_jumlah )?></td>
                   </tr>
                   <tr>
                     <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Timur</b></td>
                     <td><?php echo number_format((float)$detail->dpk_bogortimur_jumlah )?></td>
                   </tr>
                   <tr>
                     <td>Rincian Perolehan Surat Suara <b>Kecamatan Bogor Utara</b></td>
                     <td><?php echo number_format((float)$detail->dpk_bogorutara_jumlah )?></td>
                   </tr>
                   <tr>
                     <td>Rincian Perolehan Surat Suara <b>Kecamatan Tanah Sareal</b></td>
                     <td><?php echo number_format((float)$detail->dpk_tanahsareal_jumlah )?></td>
                   </tr>
                   <tr>
                     <td>Rincian Perolehan Surat Suara <b>Jumlah Akhir</b></td>
                     <td><?php echo number_format((float)$detail->dpk_jumlah_akhir )?></td>
                   </tr>
               </table>
               <hr>
               <div class="text-center">
                 <a href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara')?>" class="btn btn-warning btn-sm">
                   Kembali</a>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
     </se ction>
 </div>