  <!-- Blog Start -->
  <img src="<?php echo base_url()?>/assets/frontend/img/walpaper-kpu.png" alt="" width="100%" height="300">
  <div class="container-fluid py-5">
    <div class="container">
      <div class="text-center mx-auto mb-5" style="max-width: 500px;">
        <h5 class="display-8" style="font-size: 30px; font-family:'Times New Roman', Times, serif; color:black;">
          PEROLEHAN HASIL PEMILU PRESIDEN & WAKIL PRESIDEN</h5>
      </div>
      <div class="row g-5">
        <?php foreach ($jadwal as $key => $value) { ?>
        <div class="col-xl-4 col-lg-6">
          <div class="bg-light rounded overflow-hidden">
            <img class="img-fluid w-100" src="<?php echo base_url().'assets/upload/jadwal/'.$value->foto ?>" alt="">
            <div class="p-4">
              <a class="h4 d-block mb-3"
                style="text-align:left;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">HASIL
                PEMILU PRESIDEN DAN WAKIL PRESIDEN TAHUN <?=$value->tahun?></a>
              <p class="m-0" style="text-align:justify;">Di dalam ini terdapat kumpulan file arsip pemilu presiden dan
                wakil presiden tahun
                <?=$value->tahun?>. </p>
            </div>
            <div class="d-flex justify-content-between border-top p-4">
              <div class="d-flex align-items-center">
                <img class="rounded-circle me-2" src="<?= base_url('assets/frontend')?>/img/logokpu.png" width="25"
                  height="25" alt="">
                <small>Admin KPU</small>
                <br>
                <a href="<?php echo base_url('beranda/pemilu_presiden/').$value->tahun?>" class="btn btn-primary btn-sm"
                  style="margin-left: 100px;"><i class="fas fa-eye"></i> Lihat</a>
              </div>
            </div>

          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
  </div>


  <!-- Blog End -->