<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title_pdf;?></title>
  <style>
  #table {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  #table td,
  #table th {
    border: 1px solid #ddd;
    padding: 8px;
  }

  #table tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  #table tr:hover {
    background-color: #ddd;
  }

  #table th {
    padding-top: 10px;
    padding-bottom: 10px;
    text-align: left;
    background-color: #fc8434;
    color: white;
  }
  </style>
</head>

<body>
  <div style="text-align:center">
    <img width="100px" src="<?= base_url('assets/upload/logokpu.png')?>" alt="">
    <h2 style="font-family: 'Times New Roman', Times, serif;">KOMISI PEMILIHAN UMUM <br> KOTA BOGOR</h2>
    <p style="font-family: 'Times New Roman', Times, serif;">PELANTIKAN PRESIDEN DAN WAKIL PRESIDEN REPUBLIK INDONESIA
      PERIODE TAHUN <br>
      <?php foreach ($pelantikan_user as $row) {?>
      <?=$row->mulai_periode ?> - <?=$row->akhir_periode ?>
      <?php } ?>
    </p>
  </div>
  <br>
  <table id="table">
    <thead>
      <tr>
        <th rowspan="2" style="text-align: center;">No.</th>
        <th rowspan="2" style="text-align: center;">Jadwal Pelantikan</th>
        <th rowspan="2" style="text-align: center;">Foto Presiden</th>
        <th rowspan="2" style="text-align: center;">Nama Presiden</th>
        <th rowspan="2" style="text-align: center;">Foto Wakil Presiden</th>
        <th rowspan="2" style="text-align: center;">Nama Wakil Presiden</th>
        <th colspan="2" style="text-align: center;">Masa Jabatan</th>
      </tr>
      <tr>
        <th style="text-align: center;">Mulai</th>
        <th style="text-align: center;">Akhir</th>
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
      </tr>
    </thead>
    <tbody>
      <?php
                      $no = 1;
                      foreach ($pelantikan_user as $row) { ?>
      <tr id="tabel">
        <td><?= $no++ ?></td>
        <td><?= $row->tgl_pelantikan ?></td>
        <td><img width="100" src="<?php echo base_url() . 'assets/upload/pelantikan/' . $row->foto_presiden ?>">
        </td>
        <td><?= $row->nama_presiden ?></td>
        <td><img width="100" src="<?php echo base_url() . 'assets/upload/pelantikan/' . $row->foto_wapres ?>">
        </td>
        <td><?= $row->nama_wapres ?></td>
        <td><?= $row->mulai_periode?></td>
        <td><?= $row->akhir_periode ?></td>
      </tr>
      <?php } ?>
    </tbody>

  </table>
</body>



</html>