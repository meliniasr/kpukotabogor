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
    <p style="font-family: 'Times New Roman', Times, serif;">REKAPITULASI HASIL PENGHITUNGAN PEROLEHAN SUARA SAH
      PASANGAN CALON DALAM PEMILIHAN UMUM PRESIDEN DAN WAKIL PRESIDEN
      TAHUN <?= $this->session->userdata('tahun')?> DI KOTA BOGOR, PROVINSI JAWA BARAT DAN NASIONAL</p>
  </div>
  <br>
  <table id="table">
    <thead>
      <tr>
        <th rowspan="2" style="text-align: center;">NO.</th>
        <th rowspan="2" colspan="2" style="text-align: center;">NAMA PASANGAN CALON PRESIDEN DAN WAKIL
          PRESIDEN</th>
        <th colspan="6" style="text-align: center;">RINCIAN JUMLAH PEROLEHAN SUARA PASANGAN CALON PRESIDEN
          DAN WAKIL PRESIDEN </th>
      </tr>
      <tr>
        <th style="text-align: center;">KOTA BOGOR</th>
        <th style="text-align: center;">%</th>
        <th style="text-align: center;">PROVINSI</th>
        <th style="text-align: center;">%</th>
        <th style="text-align: center;">NASIONAL</th>
        <th style="text-align: center;">%</th>
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
        <th style="text-align: center;">9</th>
      </tr>
    </thead>
    <tbody>
      <?php
                      $no = 1;
                      foreach ($rekapprovinsi_user as $row) { ?>
      <tr>
        <td>1</td>
        <td><img width="100" src="<?php echo base_url() . 'assets/upload/pasangancalon/' . $row->capres_satu ?>"></td>
        <td><?= $row->nama_capres_satu?></td>
        <td><?= number_format((float)$row->rincian_kotabogor_satu)?></td>
        <td><?= number_format((float)$row->rincian_persen_kotabogor_satu, 1 )?>%</td>
        <td><?= number_format((float)$row->rincian_provinsi_satu)?></td>
        <td><?= number_format((float)$row->rincian_persen_provinsi_satu, 1)?>%</td>
        <td><?= number_format((float)$row->rincian_nasional_satu)?></td>
        <td><?= number_format((float)$row->rincian_persen_nasional_satu, 1)?>%</td>
      </tr>
      <tr>
        <td>2</td>
        <td><img width="100" src="<?php echo base_url() . 'assets/upload/pasangancalon/' . $row->capres_dua ?>"></td>
        <td><?=  $row->nama_capres_dua?></td>
        <td><?= number_format((float)$row->rincian_kotabogor_dua)?></td>
        <td><?= number_format((float)$row->rincian_persen_kotabogor_dua, 1)?>%</td>
        <td><?= number_format((float)$row->rincian_provinsi_dua)?></td>
        <td><?= number_format((float)$row->rincian_persen_provinsi_dua, 1)?>%</td>
        <td><?= number_format((float)$row->rincian_nasional_dua)?></td>
        <td><?= number_format((float)$row->rincian_persen_nasional_dua, 1)?>%</td>
      </tr>

      <tr>
        <td colspan="3" style="font-weight:bold;">Jumlah Suara Sah Calon Presiden dan Wakil Presiden </td>
        <td><?= number_format((float)$row->suarasah_kotabogor)?></td>
        <td></td>
        <td><?= number_format((float)$row->suarasah_provinsi)?></td>
        <td></td>
        <td><?= number_format((float)$row->suarasah_nasional)?></td>
        <td></td>
      </tr>
      <tr>
        <td colspan="3" style="font-weight:bold;">Jumlah Suara Tidak Sah </td>
        <td><?= number_format((float)$row->suaratdksah_kotabogor)?></td>
        <td></td>
        <td><?= number_format((float)$row->suaratdksah_provinsi)?></td>
        <td></td>
        <td><?= number_format((float)$row->suaratdksah_nasional)?></td>
        <td></td>
      </tr>
      <tr>
        <td colspan="3" style="font-weight:bold;">Jumlah Suara Sah dan Tidak Sah Seluruh Pasangan Calon</td>
        <td><?= number_format((float)$row->suarasah_tdksah_kotabogor)?></td>
        <td></td>
        <td><?= number_format((float)$row->suarasah_tdksah_provinsi)?></td>
        <td></td>
        <td><?= number_format((float)$row->suarasah_tdksah_nasional)?></td>
        <td></td>
      </tr>
      <tr>
        <td colspan="3" style="font-weight:bold;">Jumlah Pemilih Terdafar Pada Hari Pemungutan Suara</td>
        <td><?= number_format((float)$row->hakpemilih_kotabogor)?></td>
        <td></td>
        <td><?= number_format((float)$row->hakpemilih_provinsi)?></td>
        <td></td>
        <td><?= number_format((float)$row->hakpemilih_nasional)?></td>
        <td></td>
      </tr>
      <tr>
        <td colspan="3" style="font-weight:bold;">Pemilih Yang Tidak Menggunakan Hak Pilih</td>
        <td><?= number_format((float)$row->tdkhakpemilih_kotabogor)?></td>
        <td></td>
        <td><?= number_format((float)$row->tdkhakpemilih_provinsi)?></td>
        <td></td>
        <td><?= number_format((float)$row->tdkhakpemilih_nasional)?></td>
        <td></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</body>


</html>