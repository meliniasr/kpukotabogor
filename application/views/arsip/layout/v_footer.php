 <!-- Footer Start -->
 <div class="container-fluid bg-dark text-light mt-1 py-5" style="background-color: #311b1b !important;">
   <div class="container py-5">
     <div class="row g-5">
       <div class="col-lg-5 col-md-6">
         <h4 class="m-0 text-uppercase" style="color:white;font-family:sans-serif"><img
             src="<?= base_url('assets/frontend')?>/img/logokpu.png" alt="" width="10%">
           KPU KOTA
           BOGOR</h4><br>
         <p class="mb-4">Dibuat tujuan website ini adalah untuk
           menyimpan dan <br> melihat data arsip
           hasil pilpres setiap tahunnya.</p>
       </div>
       <div class="col-lg-4 col-md-3">
         <h4 class="m-0 text-uppercase" style="color:white;font-family:sans-serif">
           ALAMAT</h4>
         <br>
         <div class="d-flex flex-column justify-content-start">
           <p class="mb-4"><i class="fa fa-map-marker-alt text-primary me-3" style="color: #fc8434 !important;"></i>
             Jl.Senam No.12, RT.02/RW.05, <br>
             Tanah Sareal, Kec. Tanah Sereal, <br>
             Kota Bogor, Jawa Barat 16161</p>
           <p class="mb-0"><i class="fa fa-phone-alt text-primary me-3" style="color: #fc8434 !important;"></i>(0251)
             8362669</p>
         </div>
       </div>
       <div class="col-lg-3 col-md-6">
         <h4 class="m-0 text-uppercase" style="color:white;font-family:sans-serif">
           PENGUNJUNG</h4>
         <br>
         <form action="">
           <div class="input-group">
             <?php
        $file = 'counter.txt';
        if(file_exists($file)){
            $file_open = fopen($file, "r");
            $cek = trim(fgets($file_open, 255));
            $cek++;
        }  else {
            $cek = 1;
        }
        $file_open = fopen($file, "w");
        fwrite($file_open, $cek);
        fclose($file_open);

        echo " <button class='btn btn-primary p-2 border-0' style='background-color: #fc8434 !important;'> Total pengunjung : <span class='badge text-bg-secondary'>$cek</span>
</button>";

        ?>
           </div>
         </form>
         <br>
         <h6 class="m-0 text-uppercase" style="color:white;font-family:sans-serif">
           FOLLOW AKUN KAMI:</h6>
         <br>
         <div class="d-flex">
           <a class="btn btn-lg btn-lg-square rounded-circle me-2" style="background-color: #fc8434 !important;"
             href="https://twitter.com/KPUKotaBogor"><i class="fab fa-twitter" style="color: #fff !important;"></i></a>
           <a class="btn btn-lg btn-lg-square rounded-circle me-2" style="background-color: #fc8434 !important;"
             href="https://web.facebook.com/kpukotabogor?_rdc=1&_rdr"><i class="fab fa-facebook-f"
               style="color: #fff !important;"></i></a>
           <a class="btn btn-lg btn-lg-square rounded-circle me-2" style="background-color: #fc8434 !important;"
             href="https://www.youtube.com/channel/UC7j8FZ3w0M0ZVN2zWeFQ2iQ"><i class="fab fa-youtube"
               style="color: #fff !important;"></i></a>
           <a class="btn btn-lg btn-lg-square rounded-circle" style="background-color: #fc8434 !important;"
             href="https://www.instagram.com/kpu_kota_bogor/"><i class="fab fa-instagram"
               style="color: #fff !important;"></i></a>
         </div>
       </div>
     </div>
   </div>
 </div>
 <div class="container-fluid bg-dark text-white border-top border-default py-4"
   style="background-color: #311b1b !important;">
   <div class="container">
     <div class="row g-5">
       <div class="col-md-12 text-md-start">
         <p style="text-align:center;">
           <?php echo "Copyright  &copy; " . (int)date('Y') . " KPU Kota Bogor All Right Reserved."; ?>
         </p>
       </div>
     </div>
   </div>
 </div>
 <!-- Footer End -->


 <!-- Back to Top -->
 <a href="#" class="btn btn-lg btn-lg-square back-to-top" style="background-color: #fc8434 !important;"><i
     class="bi bi-arrow-up" style="color: #fff !important;"></i></a>


 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
 <script src="<?= base_url('assets/frontend')?>/lib/easing/easing.min.js"></script>
 <script src="<?= base_url('assets/frontend')?>/lib/waypoints/waypoints.min.js"></script>
 <script src="<?= base_url('assets/frontend')?>/lib/owlcarousel/owl.carousel.min.js"></script>
 <script src="<?= base_url('assets/frontend')?>/lib/tempusdominus/js/moment.min.js"></script>
 <scri pt src="<?= base_url('assets/frontend')?>/lib/tempusdominus/js/moment-timezone.min.js">
   </script>
   <script src="<?= base_url('assets/frontend')?>/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
   <script src="<?= base_url('assets/backend')?>/js/chart.js"></script>
   <script src="<?= base_url('assets/backend')?>/js/highcharts.js"></script>
   <script src="<?= base_url('assets/backend')?>/js/exporting.js"></script>
   <script src="<?= base_url('assets/backend')?>/js/export-data.js"></script>
   <script src="<?= base_url('assets/backend')?>/js/accessibility.js"></script>
   <!-- KPU KOTA BOGOR-->
   <script type="text/javascript" src="<?php echo base_url() ?>assets/upload/peta/map.js"></script>
   <!-- jQuery -->
   <script src="<?= base_url()?>assets/frontend/js/jquery/jquery.min.js"></script>
   <!-- jQuery UI 1.11.4 -->
   <script src="<?= base_url()?>assets/frontend/js/jquery-ui/jquery-ui.min.js"></script>
   <!-- JQVMap -->
   <script src="<?= base_url()?>assets/frontend/js/jqvmap/jquery.vmap.min.js"></script>
   <script src="<?= base_url()?>assets/frontend/js/jqvmap/maps/jquery.vmap.usa.js"></script>
   <script src="<?= base_url('assets/frontend')?>/js/main.js"></script>
   <script src="<?php echo base_url() ?>leaflet/dist/leaflet.js"></script>
   <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
   <!-- DATATABLES 1 -->
   <script>
   $(document).ready(function() {
     $('#example1').DataTable({
       autoWidth: false,
       columnDefs: [{
         targets: ['_all'],
       }, ],
     });
   });
   </script>
   </body>







   </html>