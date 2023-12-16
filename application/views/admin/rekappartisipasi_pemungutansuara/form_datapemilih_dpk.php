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

              echo form_open_multipart('admin/rekap_partisipasi_pemungutan_suara/tambah_datapemilih_dpk');
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
                     <input type="text" name="dpk_laki_jumlahakhir" id="dpk_laki_jumlahakhir" class="form-control"
                       value="0" style="margin-top:-35px;margin-left:200px;" readonly>
                   </div>
                 </div>
               </div>
               <div class="row">
                 <div class="col-sm-2">
                   <div class="form-group">
                     <label>Kecamatan Bogor Barat:</label>
                     <input type="text" name="dpk_bogorbarat_laki" id="dpk_bogorbarat_laki" class="form-control"
                       value="0">
                   </div>
                 </div>
                 <div class="col-sm-2">
                   <div class="form-group">
                     <label>Kecamatan Bogor Selatan:</label>
                     <input type="text" name="dpk_bogorselatan_laki" id="dpk_bogorselatan_laki" class="form-control"
                       value="0">
                   </div>
                 </div>
                 <div class="col-sm-2">
                   <div class="form-group">
                     <label>Kecamatan Bogor Tengah:</label>
                     <input type="text" name="dpk_bogortengah_laki" id="dpk_bogortengah_laki" class="form-control"
                       value="0">
                   </div>
                 </div>
                 <div class="col-sm-2">
                   <div class="form-group">
                     <label>Kecamatan Bogor Timur:</label>
                     <input type="text" name="dpk_bogortimur_laki" id="dpk_bogortimur_laki" class="form-control"
                       value="0">
                   </div>
                 </div>
                 <div class="col-sm-2">
                   <div class="form-group">
                     <label>Kecamatan Bogor Utara:</label>
                     <input type="text" name="dpk_bogorutara_laki" id="dpk_bogorutara_laki" class="form-control"
                       value="0">
                   </div>
                 </div>
                 <div class="col-sm-2">
                   <div class="form-group">
                     <label>Kecamatan Tanah Sareal:</label>
                     <input type="text" name="dpk_tanahsareal_laki" id="dpk_tanahsareal_laki" class="form-control"
                       value="0">
                   </div>
                 </div>
               </div>
               <hr>
               <span class="btn btn-secondary btn-sm"><b>DATA PEMILIH PEREMPUAN</b></span>&nbsp;=
               <div class="row">
                 <div class="col-sm-2 ml-4">
                   <div class="form-group">
                     <input type="text" name="dpk_perempuan_jumlahakhir" id="dpk_perempuan_jumlahakhir"
                       class="form-control" value="0" style="margin-top:-35px;margin-left:200px;" readonly>
                   </div>
                 </div>
               </div>
               <div class="row">
                 <div class="col-sm-2">
                   <div class="form-group">
                     <label>Kecamatan Bogor Barat:</label>
                     <input type="text" name="dpk_bogorbarat_perempuan" id="dpk_bogorbarat_perempuan"
                       class="form-control" value="0">
                   </div>
                 </div>
                 <div class="col-sm-2">
                   <div class="form-group">
                     <label>Kecamatan Bogor Selatan:</label>
                     <input type="text" name="dpk_bogorselatan_perempuan" id="dpk_bogorselatan_perempuan"
                       class="form-control" value="0">
                   </div>
                 </div>
                 <div class="col-sm-2">
                   <div class="form-group">
                     <label>Kecamatan Bogor Tengah:</label>
                     <input type="text" name="dpk_bogortengah_perempuan" id="dpk_bogortengah_perempuan"
                       class="form-control" value="0">
                   </div>
                 </div>
                 <div class="col-sm-2">
                   <div class="form-group">
                     <label>Kecamatan Bogor Timur:</label>
                     <input type="text" name="dpk_bogortimur_perempuan" id="dpk_bogortimur_perempuan"
                       class="form-control" value="0">
                   </div>
                 </div>
                 <div class="col-sm-2">
                   <div class="form-group">
                     <label>Kecamatan Bogor Utara:</label>
                     <input type="text" name="dpk_bogorutara_perempuan" id="dpk_bogorutara_perempuan"
                       class="form-control" value="0">
                   </div>
                 </div>
                 <div class="col-sm-2">
                   <div class="form-group">
                     <label>Kecamatan Tanah Sareal:</label>
                     <input type="text" name="dpk_tanahsareal_perempuan" id="dpk_tanahsareal_perempuan"
                       class="form-control" value="0">
                   </div>
                 </div>
               </div>
               <hr>
               <span class="btn btn-secondary btn-sm"><b>TOTAL DATA PEMILIH LAKI - LAKI &
                   PEREMPUAN</b></span>&nbsp;&nbsp;=
               <div class="row">
                 <div class="col-sm-2 ml-5">
                   <div class="form-group">
                     <input type="text" name="dpk_jumlah_akhir" id="dpk_jumlah_akhir" class="form-control" value="0"
                       style="margin-top:-35px;margin-left:330px;" readonly>
                   </div>
                 </div>
               </div>
               <div class="row">
                 <div class="col-sm-2">
                   <div class="form-group">
                     <label>Kecamatan Bogor Barat:</label>
                     <input type="text" name="dpk_bogorbarat_jumlah" id="dpk_bogorbarat_jumlah" class="form-control"
                       value="0" readonly>
                   </div>
                 </div>
                 <div class="col-sm-2">
                   <div class="form-group">
                     <label>Kecamatan Bogor Selatan:</label>
                     <input type="text" name="dpk_bogorselatan_jumlah" id="dpk_bogorselatan_jumlah" class="form-control"
                       value="0" readonly>
                   </div>
                 </div>
                 <div class="col-sm-2">
                   <div class="form-group">
                     <label>Kecamatan Bogor Tengah:</label>
                     <input type="text" name="dpk_bogortengah_jumlah" id="dpk_bogortengah_jumlah" class="form-control"
                       value="0" readonly>
                   </div>
                 </div>
                 <div class="col-sm-2">
                   <div class="form-group">
                     <label>Kecamatan Bogor Timur:</label>
                     <input type="text" name="dpk_bogortimur_jumlah" id="dpk_bogortimur_jumlah" class="form-control"
                       value="0" readonly>
                   </div>
                 </div>
                 <div class="col-sm-2">
                   <div class="form-group">
                     <label>Kecamatan Bogor Utara:</label>
                     <input type="text" name="dpk_bogorutara_jumlah" id="dpk_bogorutara_jumlah" class="form-control"
                       value="0" readonly>
                   </div>
                 </div>
                 <div class="col-sm-2">
                   <div class="form-group">
                     <label>Kecamatan Tanah Sareal:</label>
                     <input type="text" name="dpk_tanahsareal_jumlah" id="dpk_tanahsareal_jumlah" class="form-control"
                       value="0" readonly>
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
               </form>
             </div>
           </div>
         </div>
       </div>
   </section>
 </div>