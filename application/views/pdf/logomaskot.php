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
    <p style="font-family: 'Times New Roman', Times, serif;">PEMILIHAN UMUM PRESIDEN DAN WAKIL PRESIDEN TAHUN
      <?= $this->session->userdata('tahun')?>
    </p>
  </div>
  <br>
  <table id="table">
    <tr>
      <th style="text-align:center;">No.</th>
      <th style="text-align:center;">Tahun</th>
      <th style="text-align:center;">Jadwal</th>
      <th style="text-align:center;">Desain Surat Suara</th>
      <th style="text-align:center;">Foto Paslon 1</th>
      <th style="text-align:center;">Foto Paslon 2</th>
      <th style="text-align:center;">Logo</th>
      <th style="text-align:center;">Maskot</th>
    </tr>
    </thead>
    <tbody>
      <?php
                      $no = 1;
                      foreach ($logomaskot_user as $value) { ?>
      <tr>
        <td><?= $no++?></td>
        <td><?= $value->tahun?></td>
        <td><?= $value->jadwal ?></td>
        <td><img src="<?php echo base_url('assets/upload/logomaskot/'.$value->desain_suratsuara)?>" width="100px">
        </td>
        <td><img src="<?php echo base_url('assets/upload/logomaskot/'.$value->foto_paslon_satu)?>" width="150px">
        </td>
        <td><img src="<?php echo base_url('assets/upload/logomaskot/'.$value->foto_paslon_dua)?>" width="150px">
        </td>
        <td><img src="<?= base_url('assets/upload/logomaskot/'.$value->gambar_logo)?>" width="100px"></td>
        <td><img src="<?= base_url('assets/upload/logomaskot/'.$value->gambar_maskot)?>" width="100px">
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</body>



</html>