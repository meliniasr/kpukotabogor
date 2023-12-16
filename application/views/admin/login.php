<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title2?></title>

  <!-- Favicon Logo KPU -->
  <link rel="icon" href="<?php echo base_url()?>assets/backend/dist/img/logokpu.png" type="image/ico" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url()?>assets/backend/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url()?>assets/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url()?>assets/backend/dist/css/adminlte.min.css">
  <style>
  .card-primary.card-outline {
    border-top: 3px solid #fc8434;
  }
  </style>
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <img src="<?= base_url()?>assets/backend/dist/img/logokpu.png" width="80" height="90" alt=""> <br>
        <h1><b>KPU KOTA BOGOR</b></h1>
      </div>
      <div class="card-body">
        <p class="login-box-msg"><?=$title2?></p>

        <?= $this->session->flashdata('pesan'); ?>
        <form action="<?= base_url('auth/proses_login')?>" method="post">
          <div class="input-group mb-3">
            <select name="tahun" class="form-control" style="height:35px;">
              <option value="">-- Pilih Tahun --</option>
              <?php foreach ($user as $user) :?>
              <option value="<?php echo $user->tahun?>"><?php echo $user->tahun?>
              </option>
              <?php endforeach; ?>
            </select>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-calendar"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <p class="mb-1">
                  <a href="<?= base_url('auth/daftar')?>">Buat akun baru?</a>
                </p>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Login</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="<?= base_url()?>assets/backend/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url()?>assets/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url()?>assets/backend/dist/js/adminlte.min.js"></script>
</body>

</html>