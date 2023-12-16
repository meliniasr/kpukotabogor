<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title><?= $title?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Free HTML Templates" name="keywords">
  <meta content="Free HTML Templates" name="description">

  <!-- Favicon -->
  <link href="<?= base_url('assets/frontend')?>/img/logokpu.png" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap"
    rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="<?= base_url('assets/frontend')?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/frontend')?>/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
    rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="<?= base_url('assets/frontend')?>/css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="<?= base_url('assets/frontend')?>/css/style.css" rel="stylesheet">
  <script src="<?= base_url()?>/assets/frontend/js/chart.js"></script>
  <script src="<?= base_url('assets/frontend')?>/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
  <script src="<?= base_url('assets/frontend')?>/js/highcharts.js"></script>
  <script src="<?= base_url('assets/frontend')?>/js/exporting.js"></script>
  <script src="<?= base_url('assets/frontend')?>/js/export-data.js"></script>
  <script src="<?= base_url('assets/frontend')?>/js/accessibility.js"></script>
  <!-- KPU KOTA BOGOR-->
  <script type="text/javascript" src="<?php echo base_url() ?>assets/upload/peta/map.js"></script>
  <!-- jQuery -->
  <script src="<?= base_url()?>assets/frontend/js/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?= base_url()?>assets/frontend/js/jquery-ui/jquery-ui.min.js"></script>
  <!-- JQVMap -->
  <script src="<?= base_url()?>assets/frontend/js/jqvmap/jquery.vmap.min.js"></script>
  <script src="<?= base_url()?>assets/frontend/js/jqvmap/maps/jquery.vmap.usa.js"></script>
  <link rel="stylesheet" href="<?= base_url() ?>leaflet/dist/leaflet.css" />
  <script src="<?= base_url() ?>leaflet/dist/leaflet.js"></script>
  <script src="<?= base_url() ?>leaflet/dist/leaflet-src.esm.js"></script>
  <script src="<?= base_url() ?>leaflet/dist/leaflet-src.esm.js.map"></script>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
  <style>
  html,
  body {
    height: 100%;
    margin: 0;
  }

  .leaflet-container {
    height: 400px;
    width: 600px;
    max-width: 100%;
    max-height: 100%;
  }

  #map {
    width: 800px;
    height: 500px;
  }

  .info {
    padding: 6px 8px;
    font: 14px/16px Arial, Helvetica, sans-serif;
    background: white;
    background: rgba(255, 255, 255, 0.8);
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    border-radius: 5px;
  }

  .info h4 {
    margin: 0 0 5px;
    color: #777;
  }

  .legend {
    text-align: left;
    line-height: 18px;
    color: #555;
  }

  .legend i {
    width: 18px;
    height: 18px;
    float: left;
    margin-right: 8px;
    opacity: 0.7;
  }

  .navbar-nav .nav-link.active::before {
    background-color: #fc8434 !important;
  }

  .navbar-light .navbar-nav .nav-link::before {
    background-color: #fc8434 !important;
  }

  .carousel-control-prev,
  .carousel-control-next {
    cursor: pointer;
    position: absolute;
    top: 20%;
    width: auto;
    height: 50px;
    padding: 20px;
    color: rgb(255, 254, 224);
    font-weight: bold;
    font-size: 3px;
    top: 400px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
    background-color: rgba(0, 0, 0, 0.8);
  }

  .carousel-control-next {
    right: 0;
    border-radius: 3px 0 0 3px;
  }

  .pre:hover,
  .carousel-control-next:hover {
    background-color: rgba(255, 255, 255, 0.8);
    color: rgb(0, 0, 0);
  }
  </style>
</head>