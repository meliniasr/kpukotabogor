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
             </div>
             <div class="card-body">
               <?php
                if (isset($error_upload)) {
                  echo '<div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
                }
                echo validation_errors('<div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>');

              echo form_open_multipart('admin/rekap_partisipasi_pemungutan_suara/tambah_datapemilih_dpt');
      ?>
               <div class="row">
                 <div class="col-sm-12">
                   <div class="form-group">
                     <label for="">Tahun:</label>
                     <input type="text" name="tahun" id="tahun" class="form-control"
                       value="<?= $this->session->userdata('tahun')?>" readonly>
                   </div>
                 </div>
               </div>
               <span class="btn btn-secondary btn-sm"><b>DATA PEMILIH LAKI -LAKI</b></span>&nbsp;=
               <div class="row">
                 <div class="col-sm-2 ml-2">
                   <div class="form-group">
                     <?php foreach ($rekappartisipasi_tps_user as $key => $value) {?>
                     <input type="text" name="dpt_laki_jumlahakhir" id="dpt_laki_jumlahakhir" class="form-control"
                       value="<?= $value->total_jmlpemilihlaki?>" style="margin-top:-35px;margin-left:200px;" readonly>
                     <?php }?>
                   </div>
                 </div>
               </div>
               <div class="row">
                 <div class="col-sm-2">
                   <div class="form-group">
                     <label>Kecamatan Bogor Barat:</label>
                     <?php foreach ($rekappartisipasi_tps_user as $key => $value) {?>
                     <input type="text" name="dpt_bogorbarat_laki" id="dpt_bogorbarat_laki" class="form-control"
                       value="<?= $value->jml_pemilih_laki_bgrbarat?>" readonly>
                     <?php }?>
                   </div>
                 </div>
                 <div class="col-sm-2">
                   <div class="form-group">
                     <label>Kecamatan Bogor Selatan:</label>
                     <?php foreach ($rekappartisipasi_tps_user as $key => $value) {?>
                     <input type="text" name="dpt_bogorselatan_laki" id="dpt_bogorselatan_laki" class="form-control"
                       value="<?= $value->jml_pemilih_laki_bgrselatan?>" readonly>
                     <?php }?>
                   </div>
                 </div>
                 <div class="col-sm-2">
                   <div class="form-group">
                     <label>Kecamatan Bogor Tengah:</label>
                     <?php foreach ($rekappartisipasi_tps_user as $key => $value) {?>
                     <input type="text" name="dpt_bogortengah_laki" id="dpt_bogortengah_laki" class="form-control"
                       value="<?= $value->jml_pemilih_laki_bgrtengah?>" readonly>
                     <?php }?>
                   </div>
                 </div>
                 <div class="col-sm-2">
                   <div class="form-group">
                     <label>Kecamatan Bogor Timur:</label>
                     <?php foreach ($rekappartisipasi_tps_user as $key => $value) {?>
                     <input type="text" name="dpt_bogortimur_laki" id="dpt_bogortimur_laki" class="form-control"
                       value="<?= $value->jml_pemilih_laki_bgrtimur?>" readonly>
                     <?php }?>
                   </div>
                 </div>
                 <div class="col-sm-2">
                   <div class="form-group">
                     <label>Kecamatan Bogor Utara:</label>
                     <?php foreach ($rekappartisipasi_tps_user as $key => $value) {?>
                     <input type="text" name="dpt_bogorutara_laki" id="dpt_bogorutara_laki" class="form-control"
                       value="<?= $value->jml_pemilih_laki_bgrutara?>" readonly>
                     <?php }?>
                   </div>
                 </div>
                 <div class="col-sm-2">
                   <div class="form-group">
                     <label>Kecamatan Tanah Sareal:</label>
                     <?php foreach ($rekappartisipasi_tps_user as $key => $value) {?>
                     <input type="text" name="dpt_tanahsareal_laki" id="dpt_tanahsareal_laki" class="form-control"
                       value="<?= $value->jml_pemilih_laki_tnhsareal?>" readonly>
                     <?php }?>
                   </div>
                 </div>
               </div>
               <hr>
               <span class="btn btn-secondary btn-sm"><b>DATA PEMILIH PEREMPUAN</b></span>&nbsp;=
               <div class="row">
                 <div class="col-sm-2 ml-4">
                   <div class="form-group">
                     <?php foreach ($rekappartisipasi_tps_user as $key => $value) {?>
                     <input type="text" name="dpt_perempuan_jumlahakhir" id="dpt_perempuan_jumlahakhir"
                       class="form-control" value="<?=$value->total_jmlpemilihperempuan?>"
                       style="margin-top:-35px;margin-left:200px;" readonly>
                     <?php }?>
                   </div>
                 </div>
               </div>
               <div class="row">
                 <div class="col-sm-2">
                   <div class="form-group">
                     <label>Kecamatan Bogor Barat:</label>
                     <?php foreach ($rekappartisipasi_tps_user as $key => $value) {?>
                     <input type="text" name="dpt_bogorbarat_perempuan" id="dpt_bogorbarat_perempuan"
                       class="form-control" value="<?= $value->jml_pemilih_perempuan_bgrbarat?>" readonly>
                     <?php }?>
                   </div>
                 </div>
                 <div class="col-sm-2">
                   <div class="form-group">
                     <label>Kecamatan Bogor Selatan:</label>
                     <?php foreach ($rekappartisipasi_tps_user as $key => $value) {?>
                     <input type="text" name="dpt_bogorselatan_perempuan" id="dpt_bogorselatan_perempuan"
                       class="form-control" value="<?= $value->jml_pemilih_perempuan_bgrselatan?>" readonly>
                     <?php }?>
                   </div>
                 </div>
                 <div class="col-sm-2">
                   <div class="form-group">
                     <label>Kecamatan Bogor Tengah:</label>
                     <?php foreach ($rekappartisipasi_tps_user as $key => $value) {?>
                     <input type="text" name="dpt_bogortengah_perempuan" id="dpt_bogortengah_perempuan"
                       class="form-control" value="<?= $value->jml_pemilih_perempuan_bgrtengah?>" readonly>
                     <?php }?>
                   </div>
                 </div>
                 <div class="col-sm-2">
                   <div class="form-group">
                     <label>Kecamatan Bogor Timur:</label>
                     <?php foreach ($rekappartisipasi_tps_user as $key => $value) {?>
                     <input type="text" name="dpt_bogortimur_perempuan" id="dpt_bogortimur_perempuan"
                       class="form-control" value="<?= $value->jml_pemilih_perempuan_bgrtimur?>" readonly>
                     <?php }?>
                   </div>
                 </div>
                 <div class="col-sm-2">
                   <div class="form-group">
                     <label>Kecamatan Bogor Utara:</label>
                     <?php foreach ($rekappartisipasi_tps_user as $key => $value) {?>
                     <input type="text" name="dpt_bogorutara_perempuan" id="dpt_bogorutara_perempuan"
                       class="form-control" value="<?= $value->jml_pemilih_perempuan_bgrutara?>" readonly>
                     <?php }?>
                   </div>
                 </div>
                 <div class="col-sm-2">
                   <div class="form-group">
                     <label>Kecamatan Tanah Sareal:</label>
                     <?php foreach ($rekappartisipasi_tps_user as $key => $value) {?>
                     <input type="text" name="dpt_tanahsareal_perempuan" id="dpt_tanahsareal_perempuan"
                       class="form-control" value="<?= $value->jml_pemilih_perempuan_tnhsareal?>" readonly>
                     <?php }?>
                   </div>
                 </div>
               </div>
               <hr>
               <span class="btn btn-secondary btn-sm"><b>TOTAL DATA PEMILIH LAKI - LAKI &
                   PEREMPUAN</b></span>&nbsp;&nbsp;=
               <div class="row">
                 <div class="col-sm-2 ml-5">
                   <div class="form-group">
                     <?php foreach ($rekappartisipasi_tps_user as $key => $value) {?>
                     <input type="text" name="dpt_jumlah_akhir" id="dpt_jumlah_akhir" class="form-control"
                       value="<?= $value->total_jmlpemilihlakiperempuan?>" style=" margin-top:-35px;margin-left:330px;"
                       readonly>
                     <?php }?>
                   </div>
                 </div>
               </div>
               <div class="row">
                 <div class="col-sm-2">
                   <div class="form-group">
                     <label>Kecamatan Bogor Barat:</label>
                     <?php foreach ($rekappartisipasi_tps_user as $key => $value) {?>
                     <input type="text" name="dpt_bogorbarat_jumlah" id="dpt_bogorbarat_jumlah" class="form-control"
                       value="<?= $value->jml_pemilih_lakiperempuan_bgrbarat?>" readonly>
                     <?php }?>
                   </div>
                 </div>
                 <div class="col-sm-2">
                   <div class="form-group">
                     <label>Kecamatan Bogor Selatan:</label>
                     <?php foreach ($rekappartisipasi_tps_user as $key => $value) {?>
                     <input type="text" name="dpt_bogorselatan_jumlah" id="dpt_bogorselatan_jumlah" class="form-control"
                       value="<?= $value->jml_pemilih_lakiperempuan_bgrselatan?>" readonly>
                     <?php }?>
                   </div>
                 </div>
                 <div class="col-sm-2">
                   <div class="form-group">
                     <label>Kecamatan Bogor Tengah:</label>
                     <?php foreach ($rekappartisipasi_tps_user as $key => $value) {?>
                     <input type="text" name="dpt_bogortengah_jumlah" id="dpt_bogortengah_jumlah" class="form-control"
                       value="<?= $value->jml_pemilih_lakiperempuan_bgrtengah?>" readonly>
                     <?php }?>
                   </div>
                 </div>
                 <div class="col-sm-2">
                   <div class="form-group">
                     <label>Kecamatan Bogor Timur:</label>
                     <?php foreach ($rekappartisipasi_tps_user as $key => $value) {?>
                     <input type="text" name="dpt_bogortimur_jumlah" id="dpt_bogortimur_jumlah" class="form-control"
                       value="<?= $value->jml_pemilih_lakiperempuan_bgrtimur?>" readonly>
                     <?php }?>
                   </div>
                 </div>
                 <div class="col-sm-2">
                   <div class="form-group">
                     <label>Kecamatan Bogor Utara:</label>
                     <?php foreach ($rekappartisipasi_tps_user as $key => $value) {?>
                     <input type="text" name="dpt_bogorutara_jumlah" id="dpt_bogorutara_jumlah" class="form-control"
                       value="<?= $value->jml_pemilih_lakiperempuan_bgrutara?>" readonly>
                     <?php }?>
                   </div>
                 </div>
                 <div class="col-sm-2">
                   <div class="form-group">
                     <label>Kecamatan Tanah Sareal:</label>
                     <?php foreach ($rekappartisipasi_tps_user as $key => $value) {?>
                     <input type="text" name="dpt_tanahsareal_jumlah" id="dpt_tanahsareal_jumlah" class="form-control"
                       value="<?= $value->jml_pemilih_lakiperempuan_tnhsareal?>" readonly>
                     <?php }?>
                   </div>
                 </div>
               </div>
               <hr>
               <div class="text-center">
                 <button type="submit" class="btn btn-primary btn-sm"> Simpan</button>
                 <button type="reset" class="btn btn-danger btn-sm"> Reset</button>
                 <a href="<?= base_url('admin/rekap_partisipasi_pemungutan_suara')?>" class="btn btn-warning btn-sm">
                   Kembali</a>
               </div>
             </div>
           </div>
         </div>
       </div>
   </section>
 </div>