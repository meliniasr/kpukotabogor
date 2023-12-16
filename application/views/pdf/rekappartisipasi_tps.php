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
    <p style="font-family: 'Times New Roman', Times, serif;">REKAPITULASI JUMLAH PEMILIH TERDAFTAR DAN
      JUMLAH TPS DALAM PEMILU PRESIDEN DAN WAKIL PRESIDEN TAHUN <?= $this->session->userdata('tahun')?></p>
  </div>
  <br>
  <table id="table">
    <thead>
      <tr>
        <th rowspan="2" style="text-align: center;">NO.</th>
        <th rowspan="2" style="text-align: center;">NAMA KECAMATAN</th>
        <th rowspan="2" style="text-align: center;">JUMLAH KELURAHAN</th>
        <th rowspan="2" style="text-align: center;">JUMLAH TPS</th>
        <th colspan="3" style="text-align: center;">JUMLAH PEMILIH</th>
        <th rowspan="2" style="text-align: center;">KET</th>
      </tr>
      <tr>
        <th style="text-align: center;">L</th>
        <th style="text-align: center;">P</th>
        <th style="text-align: center;">L+P</th>
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
    <thead></thead>
    <?php

							 $no= 1;
							 foreach ($rekappartisipasi_tps_user as $row) { ?>
    <tr>
      <td>1</td>
      <td>Bogor Barat</td>
      <td><?= $row->jml_kelurahan_bgrbarat?></td>
      <td><?= $row->jml_tps_bgrbarat?></td>
      <td><?= number_format((float)$row->jml_pemilih_laki_bgrbarat)?></td>
      <td><?= number_format((float)$row->jml_pemilih_perempuan_bgrbarat )?></td>
      <td><?= number_format((float)$row->jml_pemilih_lakiperempuan_bgrbarat)?></td>
      <td><?= $row->ket_bogorbarat?></td>
    </tr>
    <tr>
      <td>2</td>
      <td>Bogor Selatan</td>
      <td><?= $row->jml_kelurahan_bgrselatan?></td>
      <td><?= $row->jml_tps_bgrselatan?></td>
      <td><?= number_format((float)$row->jml_pemilih_laki_bgrselatan)?></td>
      <td><?= number_format((float)$row->jml_pemilih_perempuan_bgrselatan )?></td>
      <td><?= number_format((float)$row->jml_pemilih_lakiperempuan_bgrselatan)?></td>
      <td><?= $row->ket_bogorselatan?></td>
    </tr>
    <tr>
      <td>3</td>
      <td>Bogor Tengah</td>
      <td><?= $row->jml_kelurahan_bgrtengah?></td>
      <td><?= $row->jml_tps_bgrtengah?></td>
      <td><?= number_format((float)$row->jml_pemilih_laki_bgrtengah)?></td>
      <td><?= number_format((float)$row->jml_pemilih_perempuan_bgrtengah )?></td>
      <td><?= number_format((float)$row->jml_pemilih_lakiperempuan_bgrtengah)?></td>
      <td><?= $row->ket_bogortengah?></td>
    </tr>
    <tr>
      <td>4</td>
      <td>Bogor Timur</td>
      <td><?= $row->jml_kelurahan_bgrtimur?></td>
      <td><?= $row->jml_tps_bgrtimur?></td>
      <td><?= number_format((float)$row->jml_pemilih_laki_bgrtimur)?></td>
      <td><?= number_format((float)$row->jml_pemilih_perempuan_bgrtimur )?></td>
      <td><?= number_format((float)$row->jml_pemilih_lakiperempuan_bgrtimur)?></td>
      <td><?= $row->ket_bogortimur?></td>
    </tr>
    <tr>
      <td>5</td>
      <td>Bogor Utara</td>
      <td><?= $row->jml_kelurahan_bgrutara?></td>
      <td><?= $row->jml_tps_bgrutara?></td>
      <td><?= number_format((float)$row->jml_pemilih_laki_bgrutara)?></td>
      <td><?= number_format((float)$row->jml_pemilih_perempuan_bgrutara )?></td>
      <td><?= number_format((float)$row->jml_pemilih_lakiperempuan_bgrutara)?></td>
      <td><?= $row->ket_bogorutara?></td>
    </tr>
    <tr>
      <td>6</td>
      <td>Tanah Sareal</td>
      <td><?= $row->jml_kelurahan_tnhsareal?></td>
      <td><?= $row->jml_tps_tnhsareal?></td>
      <td><?= number_format((float)$row->jml_pemilih_laki_tnhsareal)?></td>
      <td><?= number_format((float)$row->jml_pemilih_perempuan_tnhsareal )?></td>
      <td><?= number_format((float)$row->jml_pemilih_lakiperempuan_tnhsareal)?></td>
      <td><?= $row->ket_tanahsareal?></td>
    </tr>
    <tr>
      <td colspan="2" style="font-weight:bold;">TOTAL</td>
      <td style="font-weight:bold;"><?= number_format((float)$row->total_jmlkelurahan)?></td>
      <td style="font-weight:bold;"><?= number_format((float)$row->total_jmltps)?></td>
      <td style="font-weight:bold;"><?= number_format((float)$row->total_jmlpemilihlaki)?></td>
      <td style="font-weight:bold;"><?= number_format((float)$row->total_jmlpemilihperempuan)?></td>
      <td style="font-weight:bold;"><?= number_format((float)$row->total_jmlpemilihlakiperempuan)?></td>
      <td></td>
    </tr>
    <?php } ?>
  </table>
</body>

</html>