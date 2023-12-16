<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item d-none d-sm-inline-block ml-3">
          <a href="#" class="nav-link"><i
              class="fa fa-calendar-check"></i>&nbsp;<?php echo format_indo(date('Y-m-d')); ?></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown mr-4">
          <a href="<?= base_url('auth/logout') ?>" class="dropdown-item dropdown-footer">
            <i class="fas fa-sign-out-alt"></i> Keluar
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->