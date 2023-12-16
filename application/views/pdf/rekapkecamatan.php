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
      PASANGAN CALON DALAM PEMILIHAN UMUM PRESIDEN DAN WAKIL PRESIDEN TAHUN
      <?= $this->session->userdata('tahun')?> BERDASARKAN KECAMATAN DI
      KOTA BOGOR</p>
  </div>
  <br>
  <table id="table">
    <thead>
      <tr>
        <th style="text-align: center;">NO.</th>
        <th colspan="2" style="text-align: center;">NAMA PASANGAN CALON PRESIDEN DAN WAKIL
          PRESIDEN</th>
        <th colspan="7" style="text-align: center;">RINCIAN</th>
      </tr>
      <tr>
        <th style="text-align: center;">IV.</th>
        <th colspan="2" style="text-align: center;">RINCIAN JUMLAH PEROLEHAN SUARA
          PASANGAN
          CALON PRESIDEN DAN WAKIL
          PRESIDEN</th>
        <th style="text-align: center;">KEC. BOGOR BARAT</th>
        <th style="text-align: center;">KEC. BOGOR SELATAN</th>
        <th style="text-align: center;">KEC. BOGOR TENGAH</th>
        <th style="text-align: center;">KEC. BOGOR TIMUR</th>
        <th style="text-align: center;">KEC. BOGOR UTARA</th>
        <th style="text-align: center;">KEC. TANAH SAREAL</th>
        <th style="text-align: center;">JUMLAH AKHIR</th>
      </tr>
      <tr>
        <th style="text-align: center;">1</th>
        <th style="text-align: center;">2</th>
        <th style="text-align: center;">3</th>
        <th style="text-align: center;">4</th>
        <th style="text-align: center;">5</th>
        <th style="text-align: center;">6</th>
        <th style="text-align: center;">7</th>
        <th style="text-align: center;">8</th>
        <th style="text-align: center;">9</th>
        <th style="text-align: center;">10</th>

      </tr>
      <thead></thead>
      <?php
									 $no=1;
									 foreach($rekapkecamatan_user as $row) { ?>
      <tr>
        <td>1</td>
        <td><img width="100" src="<?php echo base_url() . 'assets/upload/pasangancalon/' . $row->capres_satu ?>"></td>
        <td><?= $row->nama_capres_satu?></td>
        <td><?= number_format((float)$row->rincian_bogorbarat_satu)?></td>
        <td><?= number_format((float)$row->rincian_bogorselatan_satu)?></td>
        <td><?= number_format((float)$row->rincian_bogortengah_satu)?></td>
        <td><?= number_format((float)$row->rincian_bogortimur_satu)?></td>
        <td><?= number_format((float)$row->rincian_bogorutara_satu)?></td>
        <td><?= number_format((float)$row->rincian_tanahsareal_satu)?></td>
        <td><?= number_format((float)$row->jumlahakhir_rincian_satu)?></td>
      </tr>
      <tr>
        <td>2</td>
        <td><img width="100" src="<?php echo base_url() . 'assets/upload/pasangancalon/' . $row->capres_dua ?>"></td>
        <td><?= $row->nama_capres_dua?></td>
        <td><?= number_format((float)$row->rincian_bogorbarat_dua)?></td>
        <td><?= number_format((float)$row->rincian_bogorselatan_dua)?></td>
        <td><?= number_format((float)$row->rincian_bogortengah_dua)?></td>
        <td><?= number_format((float)$row->rincian_bogortimur_dua)?></td>
        <td><?= number_format((float)$row->rincian_bogorutara_dua)?></td>
        <td><?= number_format((float)$row->rincian_tanahsareal_dua)?></td>
        <td><?= number_format((float)$row->jumlahakhir_rincian_dua)?></td>
      </tr>

      <tr>
        <td colspan="3" style="font-weight:bold;">Jumlah Suara Sah Calon Presiden dan Wakil Presiden </td>
        <td><?=number_format((float)$row->suarasah_bogorbarat)?></td>
        <td><?=number_format((float)$row->suarasah_bogorselatan)?></td>
        <td><?=number_format((float)$row->suarasah_bogortengah)?></td>
        <td><?=number_format((float)$row->suarasah_bogortimur)?></td>
        <td><?=number_format((float)$row->suarasah_bogorutara)?></td>
        <td><?=number_format((float)$row->suarasah_tanahsareal)?></td>
        <td><?=number_format((float)$row->jumlahakhir_suarasah)?></td>
      </tr>
      <tr>
        <td colspan="3" style="font-weight:bold;">Jumlah Suara Tidak Sah </td>
        <td><?=number_format((float)$row->suaratdksah_bogorbarat)?></td>
        <td><?=number_format((float)$row->suaratdksah_bogorselatan)?></td>
        <td><?=number_format((float)$row->suaratdksah_bogortengah)?></td>
        <td><?=number_format((float)$row->suaratdksah_bogortimur)?></td>
        <td><?=number_format((float)$row->suaratdksah_bogorutara)?></td>
        <td><?=number_format((float)$row->suaratdksah_tanahsareal)?></td>
        <td><?=number_format((float)$row->jumlahakhir_suaratdksah)?></td>
      </tr>
      <tr>
        <td colspan="3" style="font-weight:bold;">Jumlah Suara Sah dan Tidak Sah </td>
        <td><?= number_format((float)$row->suarasah_tdksah_bogorbarat)?></td>
        <td><?= number_format((float)$row->suarasah_tdksah_bogorselatan)?></td>
        <td><?= number_format((float)$row->suarasah_tdksah_bogortengah)?></td>
        <td><?= number_format((float)$row->suarasah_tdksah_bogortimur)?></td>
        <td><?= number_format((float)$row->suarasah_tdksah_bogorutara)?></td>
        <td><?= number_format((float)$row->suarasah_tdksah_tanahsareal)?></td>
        <td><?= number_format((float)$row->jumlahakhir_suarasah_tdksah)?></td>
      </tr>
      <?php } ?>
  </table>
</body>


</html>