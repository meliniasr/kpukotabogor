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
    <p style="font-family: 'Times New Roman', Times, serif;">REKAPITULASI DATA PEMILIH PADA PELAKSANAAN PEMUNGUTAN SUARA
      DALAM PEMILU PRESIDEN DAN WAKIL PRESIDEN TAHUN <?= $this->session->userdata('tahun')?></p>
  </div>
  <table id="table">
    <thead>
      <tr>
        <th style="text-align: center;">NO.</th>
        <th colspan="2" style="text-align: center;">URAIAN</th>
        <th colspan="7" style="text-align: center;">RINCIAN PEROLEHAN SUARA</th>
      </tr>
      <tr>
        <th style="text-align: center;">1</th>
        <th colspan="2" style="text-align: center;">DATA PEMILIH DAN PENGGUNAAN HAK PILIH</th>
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
      <tr>
        <th style="text-align: center;">A.</th>
        <th colspan="9" style="text-align: center;">DATA PEMILIH DAN PENGGUNAAN HAK PILIH</th>
      </tr>
      <tr>
        <td colspan="2" rowspan="4" style="font-weight:bold;">1. Pemilih terdaftar dalam Daftar Pemilih
          Tetap
          (DPT)
        </td>
      </tr>
      <?php
								$no = 1;
								foreach($datapemilihdpt_user as $row) { ?>
      <tr>
        <td style="font-weight:bold;">LK</td>
        <td><?=number_format((float)$row->dpt_bogorbarat_laki)?></td>
        <td><?=number_format((float)$row->dpt_bogorselatan_laki)?></td>
        <td><?=number_format((float)$row->dpt_bogortengah_laki)?></td>
        <td><?=number_format((float)$row->dpt_bogortimur_laki)?></td>
        <td><?=number_format((float)$row->dpt_bogorutara_laki)?></td>
        <td><?=number_format((float)$row->dpt_tanahsareal_laki)?></td>
        <td><?=number_format((float)$row->dpt_laki_jumlahakhir)?></td>
      </tr>
      <tr>
        <td style="font-weight:bold;">PR</td>
        <td><?=number_format((float)$row->dpt_bogorbarat_perempuan)?></td>
        <td><?=number_format((float)$row->dpt_bogorselatan_perempuan)?></td>
        <td><?=number_format((float)$row->dpt_bogortengah_perempuan)?></td>
        <td><?=number_format((float)$row->dpt_bogortimur_perempuan)?></td>
        <td><?=number_format((float)$row->dpt_bogorutara_perempuan)?></td>
        <td><?=number_format((float)$row->dpt_tanahsareal_perempuan)?></td>
        <td><?=number_format((float)$row->dpt_perempuan_jumlahakhir)?></td>
      </tr>
      <tr>
        <td style="font-weight:bold;">JML</td>
        <td><?=number_format((float)$row->dpt_bogorbarat_jumlah)?></td>
        <td><?=number_format((float)$row->dpt_bogorselatan_jumlah)?></td>
        <td><?=number_format((float)$row->dpt_bogortengah_jumlah)?></td>
        <td><?=number_format((float)$row->dpt_bogortimur_jumlah)?></td>
        <td><?=number_format((float)$row->dpt_bogorutara_jumlah)?></td>
        <td><?=number_format((float)$row->dpt_tanahsareal_jumlah)?></td>
        <td><?=number_format((float)$row->dpt_jumlah_akhir)?></td>
      </tr>
      <?php } ?>
    </thead>
    <thead>
      <tr>
        <td colspan="2" rowspan="4" style="font-weight:bold;">2. Pemilih terdaftar dalam Daftar Pemilih
          Tambahan
          (DPTb)</td>
      </tr>
      <?php
								$no = 1;
								foreach($datapemilihdptb_user as $value) { ?>
      <tr>
        <td style="font-weight:bold;">LK</td>
        <td><?=number_format((float)$value->dptb_bogorbarat_laki)?></td>
        <td><?=number_format((float)$value->dptb_bogorselatan_laki)?></td>
        <td><?=number_format((float)$value->dptb_bogortengah_laki)?></td>
        <td><?=number_format((float)$value->dptb_bogortimur_laki)?></td>
        <td><?=number_format((float)$value->dptb_bogorutara_laki)?></td>
        <td><?=number_format((float)$value->dptb_tanahsareal_laki)?></td>
        <td><?=number_format((float)$value->dptb_laki_jumlahakhir)?></td>
      <tr>
        <td style="font-weight:bold;">PR</td>
        <td><?=number_format((float)$value->dptb_bogorbarat_perempuan)?></td>
        <td><?=number_format((float)$value->dptb_bogorselatan_perempuan)?></td>
        <td><?=number_format((float)$value->dptb_bogortengah_perempuan)?></td>
        <td><?=number_format((float)$value->dptb_bogortimur_perempuan)?></td>
        <td><?=number_format((float)$value->dptb_bogorutara_perempuan)?></td>
        <td><?=number_format((float)$value->dptb_tanahsareal_perempuan)?></td>
        <td><?=number_format((float)$value->dptb_perempuan_jumlahakhir)?></td>
      </tr>
      <tr>
        <td style="font-weight:bold;">JML</td>
        <td><?=number_format((float)$value->dptb_bogorbarat_jumlah)?></td>
        <td><?=number_format((float)$value->dptb_bogorselatan_jumlah)?></td>
        <td><?=number_format((float)$value->dptb_bogortengah_jumlah)?></td>
        <td><?=number_format((float)$value->dptb_bogortimur_jumlah)?></td>
        <td><?=number_format((float)$value->dptb_bogorutara_jumlah)?></td>
        <td><?=number_format((float)$value->dptb_tanahsareal_jumlah)?></td>
        <td><?=number_format((float)$value->dptb_jumlah_akhir)?></td>
      </tr>
      <?php } ?>
    </thead>
    <thead>
      <tr>
        <td colspan="2" rowspan="4" style="font-weight:bold;">3. Pemilih terdaftar dalam Daftar Pemilih
          Khusus
          (DPK)</td>
      </tr>
      <?php
								$no = 1;
								foreach($datapemilihdpk_user as $value) { ?>
      <tr>
        <td style="font-weight:bold;">LK</td>
        <td><?=number_format((float)$value->dpk_bogorbarat_laki)?></td>
        <td><?=number_format((float)$value->dpk_bogorselatan_laki)?></td>
        <td><?=number_format((float)$value->dpk_bogortengah_laki)?></td>
        <td><?=number_format((float)$value->dpk_bogortimur_laki)?></td>
        <td><?=number_format((float)$value->dpk_bogorutara_laki)?></td>
        <td><?=number_format((float)$value->dpk_tanahsareal_laki)?></td>
        <td><?=number_format((float)$value->dpk_laki_jumlahakhir)?></td>
      </tr>
      <tr>
        <td style="font-weight:bold;">PR</td>
        <td><?=number_format((float)$value->dpk_bogorbarat_perempuan)?></td>
        <td><?=number_format((float)$value->dpk_bogorselatan_perempuan)?></td>
        <td><?=number_format((float)$value->dpk_bogortengah_perempuan)?></td>
        <td><?=number_format((float)$value->dpk_bogortimur_perempuan)?></td>
        <td><?=number_format((float)$value->dpk_bogorutara_perempuan)?></td>
        <td><?=number_format((float)$value->dpk_tanahsareal_perempuan)?></td>
        <td><?=number_format((float)$value->dpk_perempuan_jumlahakhir)?></td>
      </tr>
      <tr>
        <td style="font-weight:bold;">JML</td>
        <td><?=number_format((float)$value->dpk_bogorbarat_jumlah)?></td>
        <td><?=number_format((float)$value->dpk_bogorselatan_jumlah)?></td>
        <td><?=number_format((float)$value->dpk_bogortengah_jumlah)?></td>
        <td><?=number_format((float)$value->dpk_bogortimur_jumlah)?></td>
        <td><?=number_format((float)$value->dpk_bogorutara_jumlah)?></td>
        <td><?=number_format((float)$value->dpk_tanahsareal_jumlah)?></td>
        <td><?=number_format((float)$value->dpk_jumlah_akhir)?></td>
      </tr>
      <?php } ?>
    </thead>
    <thead>
      <tr>
        <td colspan="2" rowspan="4" style="font-weight:bold;">4. Pemilih Khusus Tambahan (DPKTb) /pengguna
          KTP
          atau identitas lain atau paspor </td>
      </tr>
      <?php
								$no = 1;
								foreach($datapemilihdpktb_user as $row) { ?>
      <tr>
        <td style="font-weight:bold;">LK</td>
        <td><?=number_format((float)$row->dpktb_bogorbarat_laki)?></td>
        <td><?=number_format((float)$row->dpktb_bogorselatan_laki)?></td>
        <td><?=number_format((float)$row->dpktb_bogortengah_laki)?></td>
        <td><?=number_format((float)$row->dpktb_bogortimur_laki)?></td>
        <td><?=number_format((float)$row->dpktb_bogorutara_laki)?></td>
        <td><?=number_format((float)$row->dpktb_tanahsareal_laki)?></td>
        <td><?=number_format((float)$row->dpktb_laki_jumlahakhir)?></td>
      </tr>
      <tr>
        <td style="font-weight:bold;">PR</td>
        <td><?=number_format((float)$row->dpktb_bogorbarat_perempuan)?></td>
        <td><?=number_format((float)$row->dpktb_bogorselatan_perempuan)?></td>
        <td><?=number_format((float)$row->dpktb_bogortengah_perempuan)?></td>
        <td><?=number_format((float)$row->dpktb_bogortimur_perempuan)?></td>
        <td><?=number_format((float)$row->dpktb_bogorutara_perempuan)?></td>
        <td><?=number_format((float)$row->dpktb_tanahsareal_perempuan)?></td>
        <td><?=number_format((float)$row->dpktb_perempuan_jumlahakhir)?></td>
      </tr>
      <tr>
        <td style="font-weight:bold;">JML</td>
        <td><?=number_format((float)$row->dpktb_bogorbarat_jumlah)?></td>
        <td><?=number_format((float)$row->dpktb_bogorselatan_jumlah)?></td>
        <td><?=number_format((float)$row->dpktb_bogortengah_jumlah)?></td>
        <td><?=number_format((float)$row->dpktb_bogortimur_jumlah)?></td>
        <td><?=number_format((float)$row->dpktb_bogorutara_jumlah)?></td>
        <td><?=number_format((float)$row->dpktb_tanahsareal_jumlah)?></td>
        <td><?=number_format((float)$row->dpktb_jumlah_akhir)?></td>
      </tr>
      <?php } ?>
    </thead>
    <thead>
      <tr>
        <td colspan="2" rowspan="4" style="font-weight:bold;">5. Jumlah Pemilih (1+2+3+4) </td>
      </tr>
      <?php
								$no = 1;
								foreach($jkdatapemilih_user as $row) { ?>
      <tr>
        <td style="font-weight:bold;">LK</td>
        <td><?=number_format((float)$row->jk_bogorbarat_laki)?></td>
        <td><?=number_format((float)$row->jk_bogorselatan_laki)?></td>
        <td><?=number_format((float)$row->jk_bogortengah_laki)?></td>
        <td><?=number_format((float)$row->jk_bogortimur_laki)?></td>
        <td><?=number_format((float)$row->jk_bogorutara_laki)?></td>
        <td><?=number_format((float)$row->jk_tanahsareal_laki)?></td>
        <td><?=number_format((float)$row->jk_laki_jumlahakhir)?></td>
      </tr>
      <tr>
        <td style="font-weight:bold;">PR</td>
        <td><?=number_format((float)$row->jk_bogorbarat_perempuan)?></td>
        <td><?=number_format((float)$row->jk_bogorselatan_perempuan)?></td>
        <td><?=number_format((float)$row->jk_bogortengah_perempuan)?></td>
        <td><?=number_format((float)$row->jk_bogortimur_perempuan)?></td>
        <td><?=number_format((float)$row->jk_bogorutara_perempuan)?></td>
        <td><?=number_format((float)$row->jk_tanahsareal_perempuan)?></td>
        <td><?=number_format((float)$row->jk_perempuan_jumlahakhir)?></td>
      </tr>
      <tr>
        <td style="font-weight:bold;">JML</td>
        <td><?=number_format((float)$row->jk_bogorbarat_jumlah)?></td>
        <td><?=number_format((float)$row->jk_bogorselatan_jumlah)?></td>
        <td><?=number_format((float)$row->jk_bogortengah_jumlah)?></td>
        <td><?=number_format((float)$row->jk_bogortimur_jumlah)?></td>
        <td><?=number_format((float)$row->jk_bogorutara_jumlah)?></td>
        <td><?=number_format((float)$row->jk_tanahsareal_jumlah)?></td>
        <td><?=number_format((float)$row->jk_jumlah_akhir)?></td>
      </tr>
      <?php } ?>
    </thead>
    <thead>
      <tr>
        <th style="text-align: center;">B.</th>
        <th colspan="10" style="text-align: center;">PENGGUNA HAK PILIH</th>
      </tr>
      </tr>
      <tr>
        <td colspan="2" rowspan="4" style="font-weight:bold;">1. Pengguna hak pilih dalam Daftar Pemilih
          Tetap
          (DPT)</td>
      </tr>
      <?php
								$no = 1;
								foreach($hakpilihdpt_user as $row) { ?>
      <tr>
        <td style="font-weight:bold;">LK</td>
        <td><?=number_format((float)$row->hakpilih_dpt_bogorbarat_laki)?></td>
        <td><?=number_format((float)$row->hakpilih_dpt_bogorselatan_laki)?></td>
        <td><?=number_format((float)$row->hakpilih_dpt_bogortengah_laki)?></td>
        <td><?=number_format((float)$row->hakpilih_dpt_bogortimur_laki)?></td>
        <td><?=number_format((float)$row->hakpilih_dpt_bogorutara_laki)?></td>
        <td><?=number_format((float)$row->hakpilih_dpt_tanahsareal_laki)?></td>
        <td><?=number_format((float)$row->hakpilih_dpt_laki_jumlahakhir)?></td>
      </tr>
      <tr>
        <td style="font-weight:bold;">PR</td>
        <td><?=number_format((float)$row->hakpilih_dpt_bogorbarat_perempuan)?></td>
        <td><?=number_format((float)$row->hakpilih_dpt_bogorselatan_perempuan)?></td>
        <td><?=number_format((float)$row->hakpilih_dpt_bogortengah_perempuan)?></td>
        <td><?=number_format((float)$row->hakpilih_dpt_bogortimur_perempuan)?></td>
        <td><?=number_format((float)$row->hakpilih_dpt_bogorutara_perempuan)?></td>
        <td><?=number_format((float)$row->hakpilih_dpt_tanahsareal_perempuan)?></td>
        <td><?=number_format((float)$row->hakpilih_dpt_perempuan_jumlahakhir)?></td>
      </tr>
      <tr>
        <td style="font-weight:bold;">JML</td>
        <td><?=number_format((float)$row->hakpilih_dpt_bogorbarat_jumlah)?></td>
        <td><?=number_format((float)$row->hakpilih_dpt_bogorselatan_jumlah)?></td>
        <td><?=number_format((float)$row->hakpilih_dpt_bogortengah_jumlah)?></td>
        <td><?=number_format((float)$row->hakpilih_dpt_bogortimur_jumlah)?></td>
        <td><?=number_format((float)$row->hakpilih_dpt_bogorutara_jumlah)?></td>
        <td><?=number_format((float)$row->hakpilih_dpt_tanahsareal_jumlah)?></td>
        <td><?=number_format((float)$row->hakpilih_dpt_jumlah_akhir)?></td>
      </tr>
      <?php } ?>
    </thead>
    <thead>
      <tr>
        <td colspan="2" rowspan="4" style="font-weight:bold;">2. Pengguna hak pilih dalam Daftar Pemilih
          Tambahan (DPTb)/ Pemilih dari TPS lain </td>
      </tr>
      <?php
								$no = 1;
								foreach($hakpilihdptb_user as $row) { ?>
      <tr>
        <td style="font-weight:bold;">LK</td>
        <td><?=number_format((float)$row->hakpilih_dptb_bogorbarat_laki)?></td>
        <td><?=number_format((float)$row->hakpilih_dptb_bogorselatan_laki)?></td>
        <td><?=number_format((float)$row->hakpilih_dptb_bogortengah_laki)?></td>
        <td><?=number_format((float)$row->hakpilih_dptb_bogortimur_laki)?></td>
        <td><?=number_format((float)$row->hakpilih_dptb_bogorutara_laki)?></td>
        <td><?=number_format((float)$row->hakpilih_dptb_tanahsareal_laki)?></td>
        <td><?=number_format((float)$row->hakpilih_dptb_laki_jumlahakhir)?></td>
      </tr>
      <tr>
        <td style="font-weight:bold;">PR</td>
        <td><?=number_format((float)$row->hakpilih_dptb_bogorbarat_perempuan)?></td>
        <td><?=number_format((float)$row->hakpilih_dptb_bogorselatan_perempuan)?></td>
        <td><?=number_format((float)$row->hakpilih_dptb_bogortengah_perempuan)?></td>
        <td><?=number_format((float)$row->hakpilih_dptb_bogortimur_perempuan)?></td>
        <td><?=number_format((float)$row->hakpilih_dptb_bogorutara_perempuan)?></td>
        <td><?=number_format((float)$row->hakpilih_dptb_tanahsareal_perempuan)?></td>
        <td><?=number_format((float)$row->hakpilih_dptb_perempuan_jumlahakhir)?></td>
      </tr>
      <tr>
        <td style="font-weight:bold;">JML</td>
        <td><?=number_format((float)$row->hakpilih_dptb_bogorbarat_jumlah)?></td>
        <td><?=number_format((float)$row->hakpilih_dptb_bogorselatan_jumlah)?></td>
        <td><?=number_format((float)$row->hakpilih_dptb_bogortengah_jumlah)?></td>
        <td><?=number_format((float)$row->hakpilih_dptb_bogortimur_jumlah)?></td>
        <td><?=number_format((float)$row->hakpilih_dptb_bogorutara_jumlah)?></td>
        <td><?=number_format((float)$row->hakpilih_dptb_tanahsareal_jumlah)?></td>
        <td><?=number_format((float)$row->hakpilih_dptb_jumlah_akhir)?></td>
      </tr>
      <?php } ?>
    </thead>
    <thead>
      <tr>
        <td colspan="2" rowspan="4" style="font-weight:bold;">3. Pengguna hak pilih dalam Daftar Pemilih
          Khusus (DPK)</td>
      </tr>
      <?php
								$no = 1;
								foreach($hakpilihdpk_user as $row) { ?>
      <tr>
        <td style="font-weight:bold;">LK</td>
        <td><?=number_format((float)$row->hakpilih_dpk_bogorbarat_laki)?></td>
        <td><?=number_format((float)$row->hakpilih_dpk_bogorselatan_laki)?></td>
        <td><?=number_format((float)$row->hakpilih_dpk_bogortengah_laki)?></td>
        <td><?=number_format((float)$row->hakpilih_dpk_bogortimur_laki)?></td>
        <td><?=number_format((float)$row->hakpilih_dpk_bogorutara_laki)?></td>
        <td><?=number_format((float)$row->hakpilih_dpk_tanahsareal_laki)?></td>
        <td><?=number_format((float)$row->hakpilih_dpk_laki_jumlahakhir)?></td>
      </tr>
      <tr>
        <td style="font-weight:bold;">PR</td>
        <td><?=number_format((float)$row->hakpilih_dpk_bogorbarat_perempuan)?></td>
        <td><?=number_format((float)$row->hakpilih_dpk_bogorselatan_perempuan)?></td>
        <td><?=number_format((float)$row->hakpilih_dpk_bogortengah_perempuan)?></td>
        <td><?=number_format((float)$row->hakpilih_dpk_bogortimur_perempuan)?></td>
        <td><?=number_format((float)$row->hakpilih_dpk_bogorutara_perempuan)?></td>
        <td><?=number_format((float)$row->hakpilih_dpk_tanahsareal_perempuan)?></td>
        <td><?=number_format((float)$row->hakpilih_dpk_perempuan_jumlahakhir)?></td>
      </tr>
      <tr>
        <td style="font-weight:bold;">JML</td>
        <td><?=number_format((float)$row->hakpilih_dpk_bogorbarat_jumlah)?></td>
        <td><?=number_format((float)$row->hakpilih_dpk_bogorselatan_jumlah)?></td>
        <td><?=number_format((float)$row->hakpilih_dpk_bogortengah_jumlah)?></td>
        <td><?=number_format((float)$row->hakpilih_dpk_bogortimur_jumlah)?></td>
        <td><?=number_format((float)$row->hakpilih_dpk_bogorutara_jumlah)?></td>
        <td><?=number_format((float)$row->hakpilih_dpk_tanahsareal_jumlah)?></td>
        <td><?=number_format((float)$row->hakpilih_dpk_jumlah_akhir)?></td>
      </tr>
      <?php } ?>
    </thead>
    <thead>
      <tr>
        <td colspan="2" rowspan="4" style="font-weight:bold;">4. Pengguna hak pilih dalam Daftar Pemilih
          Khusus Tambahan (DPKTb) /pengguna KTP atau identitas lain atau paspor <br></td>
      </tr>
      <?php
								$no = 1;
								foreach($hakpilihdpktb_user as $row) { ?>
      <tr>
        <td style="font-weight:bold;">LK</td>
        <td><?=number_format((float)$row->hakpilih_dpktb_bogorbarat_laki)?></td>
        <td><?=number_format((float)$row->hakpilih_dpktb_bogorselatan_laki)?></td>
        <td><?=number_format((float)$row->hakpilih_dpktb_bogortengah_laki)?></td>
        <td><?=number_format((float)$row->hakpilih_dpktb_bogortimur_laki)?></td>
        <td><?=number_format((float)$row->hakpilih_dpktb_bogorutara_laki)?></td>
        <td><?=number_format((float)$row->hakpilih_dpktb_tanahsareal_laki)?></td>
        <td><?=number_format((float)$row->hakpilih_dpktb_laki_jumlahakhir)?></td>
      </tr>
      <tr>
        <td style="font-weight:bold;">PR</td>
        <td><?=number_format((float)$row->hakpilih_dpktb_bogorbarat_perempuan)?></td>
        <td><?=number_format((float)$row->hakpilih_dpktb_bogorselatan_perempuan)?></td>
        <td><?=number_format((float)$row->hakpilih_dpktb_bogortengah_perempuan)?></td>
        <td><?=number_format((float)$row->hakpilih_dpktb_bogortimur_perempuan)?></td>
        <td><?=number_format((float)$row->hakpilih_dpktb_bogorutara_perempuan)?></td>
        <td><?=number_format((float)$row->hakpilih_dpktb_tanahsareal_perempuan)?></td>
        <td><?=number_format((float)$row->hakpilih_dpktb_perempuan_jumlahakhir)?></td>
      </tr>
      <tr>
        <td style="font-weight:bold;">JML</td>
        <td><?=number_format((float)$row->hakpilih_dpktb_bogorbarat_jumlah)?></td>
        <td><?=number_format((float)$row->hakpilih_dpktb_bogorselatan_jumlah)?></td>
        <td><?=number_format((float)$row->hakpilih_dpktb_bogortengah_jumlah)?></td>
        <td><?=number_format((float)$row->hakpilih_dpktb_bogortimur_jumlah)?></td>
        <td><?=number_format((float)$row->hakpilih_dpktb_bogorutara_jumlah)?></td>
        <td><?=number_format((float)$row->hakpilih_dpktb_tanahsareal_jumlah)?></td>
        <td><?=number_format((float)$row->hakpilih_dpktb_jumlah_akhir)?></td>
      </tr>
      <?php } ?>
    </thead>
    <thead>
      <tr>
        <td colspan="2" rowspan="4" style="font-weight:bold;">5. Jumlah seluruh pengguna Hak Pilih
          (1+2+3+4+5)
        </td>
      </tr>
      <?php
								$no = 1;
								foreach($jkhakpilih_user as $row) { ?>
      <tr>
        <td style="font-weight:bold;">LK</td>
        <td><?=number_format((float)$row->hakpilih_jk_bogorbarat_laki)?></td>
        <td><?=number_format((float)$row->hakpilih_jk_bogorselatan_laki)?></td>
        <td><?=number_format((float)$row->hakpilih_jk_bogortengah_laki)?></td>
        <td><?=number_format((float)$row->hakpilih_jk_bogortimur_laki)?></td>
        <td><?=number_format((float)$row->hakpilih_jk_bogorutara_laki)?></td>
        <td><?=number_format((float)$row->hakpilih_jk_tanahsareal_laki)?></td>
        <td><?=number_format((float)$row->hakpilih_jk_laki_jumlahakhir)?></td>
      </tr>
      <tr>
        <td style="font-weight:bold;">PR</td>
        <td><?=number_format((float)$row->hakpilih_jk_bogorbarat_perempuan)?></td>
        <td><?=number_format((float)$row->hakpilih_jk_bogorselatan_perempuan)?></td>
        <td><?=number_format((float)$row->hakpilih_jk_bogortengah_perempuan)?></td>
        <td><?=number_format((float)$row->hakpilih_jk_bogortimur_perempuan)?></td>
        <td><?=number_format((float)$row->hakpilih_jk_bogorutara_perempuan)?></td>
        <td><?=number_format((float)$row->hakpilih_jk_tanahsareal_perempuan)?></td>
        <td><?=number_format((float)$row->hakpilih_jk_perempuan_jumlahakhir)?></td>
      </tr>
      <tr>
        <td style="font-weight:bold;">JML</td>
        <td><?=number_format((float)$row->hakpilih_jk_bogorbarat_jumlah)?></td>
        <td><?=number_format((float)$row->hakpilih_jk_bogorselatan_jumlah)?></td>
        <td><?=number_format((float)$row->hakpilih_jk_bogortengah_jumlah)?></td>
        <td><?=number_format((float)$row->hakpilih_jk_bogortimur_jumlah)?></td>
        <td><?=number_format((float)$row->hakpilih_jk_bogorutara_jumlah)?></td>
        <td><?=number_format((float)$row->hakpilih_jk_tanahsareal_jumlah)?></td>
        <td><?=number_format((float)$row->hakpilih_jk_jumlah_akhir)?></td>
      </tr>
      <?php } ?>
    </thead>
  </table>
</body>

</html>