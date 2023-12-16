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
         <div class="col-12">
           <div class="card">
             <div class="card-header" style="background-color:#311b1b;color:white">
               <h3 class="card-title"><b><?= $title2?></b></h3>
             </div>
             <div class="card-body">
               <?= $this->session->flashdata('message'); ?>
               <?= validation_errors() ?>
               <form action="<?= base_url('admin/rekap_partisipasi_pemungutan_suara/update_datapemilihdptb') ?>"
                 method="POST">
                 <div class="row">
                   <div class="col-sm-12">
                     <div class="form-group">
                       <label>Tahun:</label>
                       <input type="text" name="tahun" id="tahun" class="form-control"
                         value="<?= $this->session->userdata('tahun')?>" readonly>
                     </div>
                   </div>
                 </div>
                 <span class="btn btn-secondary btn-sm"><b>DATA PEMILIH LAKI -LAKI</b></span> &nbsp;=
                 <div class="row">
                   <div class="col-sm-2 ml-3">
                     <div class="form-group">
                       <input type="text" name="dptb_laki_jumlahakhir" id="dptb_laki_jumlahakhir" class="form-control"
                         value="<?=$datapemilih_dptb->dptb_laki_jumlahakhir?>"
                         style="margin-top:-35px;margin-left:200px;" readonly>
                     </div>
                   </div>
                 </div>
                 <div class="row">
                   <div class="col-sm-2">
                     <div class="form-group">
                       <label>Kecamatan Bogor Barat:</label>
                       <input type="text" name="dptb_bogorbarat_laki" id="dptb_bogorbarat_laki" class="form-control"
                         value="<?=$datapemilih_dptb->dptb_bogorbarat_laki?>">
                     </div>
                   </div>
                   <div class="col-sm-2">
                     <div class="form-group">
                       <label>Kecamatan Bogor Selatan:</label>
                       <input type="text" name="dptb_bogorselatan_laki" id="dptb_bogorselatan_laki" class="form-control"
                         value="<?=$datapemilih_dptb->dptb_bogorselatan_laki?>">
                     </div>
                   </div>
                   <div class="col-sm-2">
                     <div class="form-group">
                       <label>Kecamatan Bogor Tengah:</label>
                       <input type="text" name="dptb_bogortengah_laki" id="dptb_bogortengah_laki" class="form-control"
                         value="<?=$datapemilih_dptb->dptb_bogortengah_laki?>">
                     </div>
                   </div>
                   <div class="col-sm-2">
                     <div class="form-group">
                       <label>Kecamatan Bogor Timur:</label>
                       <input type="text" name="dptb_bogortimur_laki" id="dptb_bogortimur_laki" class="form-control"
                         value="<?=$datapemilih_dptb->dptb_bogortimur_laki?>">
                     </div>
                   </div>
                   <div class="col-sm-2">
                     <div class="form-group">
                       <label>Kecamatan Bogor Utara:</label>
                       <input type="text" name="dptb_bogorutara_laki" id="dptb_bogorutara_laki" class="form-control"
                         value="<?=$datapemilih_dptb->dptb_bogorutara_laki?>">
                     </div>
                   </div>
                   <div class="col-sm-2">
                     <div class="form-group">
                       <label>Kecamatan Tanah Sareal:</label>
                       <input type="text" name="dptb_tanahsareal_laki" id="dptb_tanahsareal_laki" class="form-control"
                         value="<?=$datapemilih_dptb->dptb_tanahsareal_laki?>">
                     </div>
                   </div>
                 </div>
                 <hr>
                 <span class="btn btn-secondary btn-sm"><b>DATA PEMILIH PEREMPUAN</b></span>&nbsp;=
                 <div class="row">
                   <div class="col-sm-2 ml-4">
                     <div class="form-group">
                       <input type="text" name="dptb_perempuan_jumlahakhir" id="dptb_perempuan_jumlahakhir"
                         class="form-control" value="<?=$datapemilih_dptb->dptb_perempuan_jumlahakhir?>"
                         style="margin-top:-35px;margin-left:200px;" readonly>
                     </div>
                   </div>
                 </div>
                 <div class="row">
                   <div class="col-sm-2">
                     <div class="form-group">
                       <label>Kecamatan Bogor Barat:</label>
                       <input type="text" name="dptb_bogorbarat_perempuan" id="dptb_bogorbarat_perempuan"
                         class="form-control" value="<?=$datapemilih_dptb->dptb_bogorbarat_perempuan?>">
                     </div>
                   </div>
                   <div class="col-sm-2">
                     <div class="form-group">
                       <label>Kecamatan Bogor Selatan:</label>
                       <input type="text" name="dptb_bogorselatan_perempuan" id="dptb_bogorselatan_perempuan"
                         class="form-control" value="<?=$datapemilih_dptb->dptb_bogorselatan_perempuan?>">
                     </div>
                   </div>
                   <div class="col-sm-2">
                     <div class="form-group">
                       <label>Kecamatan Bogor Tengah:</label>
                       <input type="text" name="dptb_bogortengah_perempuan" id="dptb_bogortengah_perempuan"
                         class="form-control" value="<?=$datapemilih_dptb->dptb_bogortengah_perempuan?>">
                     </div>
                   </div>
                   <div class="col-sm-2">
                     <div class="form-group">
                       <label>Kecamatan Bogor Timur:</label>
                       <input type="text" name="dptb_bogortimur_perempuan" id="dptb_bogortimur_perempuan"
                         class="form-control" value="<?=$datapemilih_dptb->dptb_bogortimur_perempuan?>">
                     </div>
                   </div>
                   <div class="col-sm-2">
                     <div class="form-group">
                       <label>Kecamatan Bogor Utara:</label>
                       <input type="text" name="dptb_bogorutara_perempuan" id="dptb_bogorutara_perempuan"
                         class="form-control" value="<?=$datapemilih_dptb->dptb_bogorutara_perempuan?>">
                     </div>
                   </div>
                   <div class="col-sm-2">
                     <div class="form-group">
                       <label>Kecamatan Tanah Sareal:</label>
                       <input type="text" name="dptb_tanahsareal_perempuan" id="dptb_tanahsareal_perempuan"
                         class="form-control" value="<?=$datapemilih_dptb->dptb_tanahsareal_perempuan?>">
                     </div>
                   </div>
                 </div>
                 <hr>
                 <span class="btn btn-secondary btn-sm"><b>TOTAL DATA PEMILIH LAKI - LAKI &
                     PEREMPUAN</b></span>&nbsp;&nbsp;=
                 <div class="row">
                   <div class="col-sm-2 ml-5">
                     <div class="form-group">
                       <input type="text" name="dptb_jumlah_akhir" id="dptb_jumlah_akhir" class="form-control"
                         value="<?=$datapemilih_dptb->dptb_jumlah_akhir?>" style="margin-top:-35px;margin-left:330px;"
                         readonly>
                     </div>
                   </div>
                 </div>
                 <div class="row">
                   <div class="col-sm-2">
                     <div class="form-group">
                       <label>Kecamatan Bogor Barat:</label>
                       <input type="text" name="dptb_bogorbarat_jumlah" id="dptb_bogorbarat_jumlah" class="form-control"
                         value="<?=$datapemilih_dptb->dptb_bogorbarat_jumlah?>" readonly>
                     </div>
                   </div>
                   <div class="col-sm-2">
                     <div class="form-group">
                       <label>Kecamatan Bogor Selatan:</label>
                       <input type="text" name="dptb_bogorselatan_jumlah" id="dptb_bogorselatan_jumlah"
                         class="form-control" value="<?=$datapemilih_dptb->dptb_bogorselatan_jumlah?>" readonly>
                     </div>
                   </div>
                   <div class="col-sm-2">
                     <div class="form-group">
                       <label>Kecamatan Bogor Tengah:</label>
                       <input type="text" name="dptb_bogortengah_jumlah" id="dptb_bogortengah_jumlah"
                         class="form-control" value="<?=$datapemilih_dptb->dptb_bogortengah_jumlah?>" readonly>
                     </div>
                   </div>
                   <div class="col-sm-2">
                     <div class="form-group">
                       <label>Kecamatan Bogor Timur:</label>
                       <input type="text" name="dptb_bogortimur_jumlah" id="dptb_bogortimur_jumlah" class="form-control"
                         value="<?=$datapemilih_dptb->dptb_bogortimur_jumlah?>" readonly>
                     </div>
                   </div>
                   <div class="col-sm-2">
                     <div class="form-group">
                       <label>Kecamatan Bogor Utara:</label>
                       <input type="text" name="dptb_bogorutara_jumlah" id="dptb_bogorutara_jumlah" class="form-control"
                         value="<?=$datapemilih_dptb->dptb_bogorutara_jumlah?>" readonly>
                     </div>
                   </div>
                   <div class="col-sm-2">
                     <div class="form-group">
                       <label>Kecamatan Tanah Sareal:</label>
                       <input type="text" name="dptb_tanahsareal_jumlah" id="dptb_tanahsareal_jumlah"
                         class="form-control" value="<?=$datapemilih_dptb->dptb_tanahsareal_jumlah?>" readonly>
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
     </div>
   </section>
 </div>